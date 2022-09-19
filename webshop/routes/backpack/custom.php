<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('user', 'UserCrudController');
    Route::crud('webshop', 'WebshopCrudController');
    Route::crud('prices', 'PricesCrudController');
    Route::crud('roles', 'RolesCrudController');
    Route::crud('review', 'ReviewCrudController');
    Route::crud('categories', 'CategoriesCrudController');
    Route::crud('products', 'ProductsCrudController');
    Route::crud('order', 'OrderCrudController');
    Route::crud('orderrow', 'OrderrowCrudController');
    Route::crud('reviews', 'ReviewsCrudController');
}); // this should be the absolute last line of this file