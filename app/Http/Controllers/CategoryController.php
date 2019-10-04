<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $category = Category::get();
        return view ('category.index',['category'=>$category]);
    }

    public function addCategory(){
        $category = Category::get();
        return view('models.add', ['category' => $category]);
    }
}
