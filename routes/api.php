<?php

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

Route::middleware('api')->group(function () {
    Route::get('/products',[APP\Http\Controllers\Api\ProductController::class,'index']);
    Route::post('products/create',[APP\Http\Controllers\Api\ProductController::class,'store']);
    Route::get('products/edit/{id}',[APP\Http\Controllers\Api\ProductController::class,'show']);
    //Route::resource('products', ProductController::class);
    // Route::resource('products', ProductController::class);
    // Route::resource('products', [App\Http\Controllers\Api\ProductController::class]);

});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
