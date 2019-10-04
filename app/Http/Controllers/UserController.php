<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function creatUsers($name,$email,$password){
                $user = new User();
                $user->name = $name;
                $user->email = $email;
                $user->password =$password;
                $user->save();
            }
        
        public function getusers(){
            $user = User::get();
            return view('home.getuser',['user'=>$user]);
        }

        public function getRegistration(){
            return view('registration.registration');
        }

        public function postRegistration(Request $r){
           echo $request->email;
        }
}

