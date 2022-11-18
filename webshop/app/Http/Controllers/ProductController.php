<?php

namespace App\Http\Controllers;

use App\Models\Prices;
use App\Models\Product;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Reviews;


class ProductController extends Controller
{
    public function productList($category)
    {

        $categories = DB::table('categories')->where('name', $category)->value('id');
        if (empty($categories)) {
            abort(404, 'Oeps! Dit product bestaat niet');
        }
        $products = DB::table('products')->where('category_id', $categories)->get();
       


        $produc = DB::table('products')->where('category_id', $categories)->value('id');
        $reviews = Reviews::inRandomOrder()->take(3)->where('product_id', $produc)->get();


        $prices = DB::table('prices')->where('product_id' , $produc)->get();

        
        return view('products')->with([
            "products" => $products,
            "reviews" => $reviews,
            "prices" => $prices,
           

        ]);
    }
} 