<?php

use App\Http\Controllers\BiddingController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;


//home page route
Route::get('/',[FrontendController::class,'index'])->name('index');
Route::get('/product-detail/{id}',[FrontendController::class,'detail'])->name('product');

// backend routes
Auth::routes();

Route::middleware('auth')->group(function(){

    Route::get('/dashboard',[HomeController::class,'index']);

    Route::resource('/category', CategoryController::class);

    Route::resource('/products', ProductController::class);
    Route::resource('/mybid',BiddingController::class);

});
