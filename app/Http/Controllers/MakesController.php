<?php

namespace App\Http\Controllers;
use App\Makes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class MakesController extends Controller
{
    public function index(){
        $makes = Makes::get();
        return view('makes.index',['makes'=>$makes]);
    }

    public function addMake(){
        return view('makes.Makes');
    }
    public function addMakesPost(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:makes,name',
            'logo' => 'mimes:jpeg,jpg,png',
           
        ]);
        if ($validator->fails()) {
            return redirect('/makes/add')
                        ->withErrors($validator)
                        ->withInput();
        }
        if ($request->hasFile('logo')){
            $file_name = $request->name . '_' . time() . '.jpg';
                $request->store('public/images',$file_name);
                $makes->logo = $file_name;
        }

    }
}