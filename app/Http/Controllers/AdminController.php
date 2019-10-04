<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('LTE.home.index');
    }

    public function menu(){
        return view('LTE.home.menu');
    }
   
}
