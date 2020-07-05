<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    
    public function list(){

        $categoryList = Category::all();

        return response()->json($categoryList);

    }

}