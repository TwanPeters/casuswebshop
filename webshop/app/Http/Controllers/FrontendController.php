<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function category(){

        $AllCategories = Categories::all();

        return view('categories') ->with([
            "allcategories"=>$AllCategories,
            
            ]);
            
    }
}
