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

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ReviewController extends Controller
{
    public function review($review)
    {
        $prod = DB::table('products')->where('name', $review)->value('id');
        if (empty($prod)) {
            abort(404, 'Oeps! Dit product heeft geen review');
        }
        $reviews = DB::table('reviews')->where('product_id', $prod)->get();
        return view("productlist")->with([
            'reviews' => $reviews,
        ]);
    }
}
