<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Category;
use App\Models\Prices;
use App\Models\Products;
use App\Models\Reviews;
use App\Models\Orderrow;
use App\Models\Order;
use App\Models\Roles;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{

    public function category()
    {

        $AllCategories = Categories::all();

        return view('categories')->with([
            "allcategories" => $AllCategories,

        ]);
    }

    public function lproducts()
    {

        $AllProducts = Products::all();

        return view('products')->with([
            "allproducts" => $AllProducts,

        ]);
    }

    public function price()
    {

        $AllPrices = Prices::all();

        return view('productlist')->with([
            "allprices" => $AllPrices,

        ]);
    }

    public function review($eproduct)
    {

        // Price
        $pro = DB::table('products')->where('name', $eproduct)->value('id');
        if (empty($pro)) {
            abort(404, 'Oeps! Dit product heeft geen prijs');
        }
        // Prices
        $prices = DB::table('prices')->where('product_id', $pro)->get();
        
        // Review
        $reviews = DB::table('reviews')->where('product_id', $pro)->get();

        // Product information 
        $prod = DB::table('products')->where('id', $pro)->get();
        // $categories = DB::table('products')->where('name', $eproduct)->value('id');
        // if (empty($categories)) {
        //     abort(404, 'Oeps! Deze categorie bestaat niet');
        // }
        // $products = DB::table('products')->where('category_id', $categories)->get();

        return view('productlist')->with([
            "allreviews" => $reviews,
            "allprices" => $prices,
            "allproducts" => $prod,
        ]);
    }



    public function products($category)
    {
        $categories = DB::table('categories')->where('name', $category)->value('id');
        if (empty($categories)) {
            abort(404, 'Oeps! Deze categorie bestaat niet');
        }
        $products = DB::table('products')->where('category_id', $categories)->get();
        return view("products")->with([
            'products' => $products,
        ]);

    }

    public function product($eproduct)
    {
        $pro = DB::table('products')->where('name', $eproduct)->value('id');
        if (empty($pro)) {
            abort(404, 'Oeps! Dit product bestaat niet');
        }
        $product = DB::table('prices')->where('product_id', $pro)->get();
        return view("productlist")->with([
            'product' => $product,
        ]);

    }
   
}
