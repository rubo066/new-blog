<?php

namespace App\Http\Controllers;
use App\Phone;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PhoneController extends Controller
{
   

    public function addphone(){
        return view('home.addphone');
    }

    public function createPhone(Request $request)
    {
        dd ($request->all());

        $validator = Validator::make($request->all(), [
            'brand' => 'required|alpha',
            'model' => 'required|alpha_num',
            'OS' => 'required',
            'memory' => 'required',
            'RAM' => 'required|numeric',
        ]);
        if ($validator->fails()) {
            return redirect('/phone/add/')
                        ->withErrors($validator)
                        ->withInput();

                    }else{

                        $input = $request->all();
                        if($request->has('Brand')){{
                                $phone = new Phone();
                                $phone->brand = $request['brand'];
                                $phone->model = $request['model'];
                                $phone->OS =$request['OS'];
                                $phone->color =$request['color'];
                                $phone->announcement_year =$request['announcement_year'];
                                $phone->memory =$request['memory'];
                                $phone->RAM =$request['RAM'];
                                $phone->screen_resolution =$request['screen_resolution'];
                                $phone->screen_size =$request['screen_size'];
                                $phone->save();
                            }}
                        }
   }
 }


?>

