<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;


//home page route
Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('product-detail/{id}',[HomeController::class,'detail'])->name('product');

// backend routes
Auth::routes();

Route::middleware('auth')->group(function(){

    Route::get('/dashboard',[HomeController::class,'dashboard']);

    Route::resource('/category', CategoryController::class);

    Route::resource('/products', ProductController::class);

});
