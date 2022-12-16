<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;


//home page route
Route::get('/',function(){
    return view('index');
});


// backend routes
Auth::routes();

Route::middleware('auth')->group(function(){

    Route::get('/dashboard',[HomeController::class,'index']);

    Route::resource('/category', CategoryController::class);

    Route::resource('/products', ProductController::class);



});
