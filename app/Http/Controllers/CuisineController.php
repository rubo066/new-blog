<?php

namespace App\Http\Controllers;
use App\Cuisine;
use App\Food;
use Illuminate\Http\Request;

class CuisineController extends Controller
{
    public function index(){
        $cuisine = Cuisine::with('food')->get();
        $food = Food::with('cuisine')->get();
        return view('menu.index' , ['cuisine'=>$cuisine],['food'=>$food]);
    }

    public function addFood(){
        $cuisine = Cuisine::get();
        return view('menu.addFood',['cuisine'=>$cuisine]);
    }


    public function searchFood(Request $request){
        $food = Food::get();
        $cuisine = Cuisine::with('food')->where('id',$request->id)->get();
        return view('menu.index' , ['food'=>$food],['cuisine'=>$cuisine]);


    }

    // public function createFood(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'cuisine' => 'required',
    //         'category' => 'required',
    //         'food' => 'required',
    //         'price' => 'required',
    //     ]);
    //     if ($validator->fails()) {
    //         return redirect('/menu/add/')
    //                     ->withErrors($validator)
    //                     ->withInput();

    //                 }else{

    //                     $input = $request->all();
    //                     if($request->has('cuisine')){{
    //                             $food = new Food();
    //                             $food->cuisine = $request['cuisine'];
    //                             $food->category = $request['category'];
    //                             $food->food =$request['food'];
    //                             $food->price =$request['price'];
    //                             $food->save();
    //                         }}
    //                     }
    //                 }


    
}
