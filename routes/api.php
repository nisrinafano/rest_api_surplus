<?php

use App\Http\Controllers\api\category_controller;
use App\Http\Controllers\api\category_product_controller;
use App\Http\Controllers\api\image_controller;
use App\Http\Controllers\api\product_controller;
use App\Http\Controllers\api\product_image_controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// category
Route::get('category', [category_controller::class, 'index']);
Route::get('category/{id}', [category_controller::class, 'show']);
Route::post('category/add', [category_controller::class, 'store']);

// product
Route::get('product', [product_controller::class, 'index']);
Route::get('product/{id}', [product_controller::class, 'show']);
Route::post('product/add', [product_controller::class, 'store']);

// category_product
Route::get('category_product', [category_product_controller::class, 'index']);
Route::post('category_product/add', [category_product_controller::class, 'store']);

// image
Route::get('image', [image_controller::class, 'index']);
Route::get('image/{id}', [image_controller::class, 'show']);
Route::post('image/add', [image_controller::class, 'store']);

// product_image
Route::get('product_image', [product_image_controller::class, 'index']);
Route::post('product_image/add', [product_image_controller::class, 'store']);