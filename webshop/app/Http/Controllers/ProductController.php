<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    public function productList($category)
    {

        $categories = DB::table('categories')->where('name', $category)->value('id');
        $products = DB::table('products')->where('category_id', $categories)->get();
        
        $produc = DB::table ('products')->where('name', $category)->value('id');
        $prices = DB::table ('prices')->where('product_id', $produc)->get();
        return view('products', compact('products'));
    }
} 