<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChangePassword;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\BiddingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Notification;

//home page route
Route::get('/',[FrontendController::class,'index'])->name('index');
Route::get('/product-detail/{id}',[FrontendController::class,'detail'])->name('product');

Route::middleware('auth')->group(function(){

    Route::get('/change-password',[FrontendController::class,'password'])->name('updateform');
    Route::post('/change-password',[ FrontendController::class,'changePassword'])->name('update-password');
});


// backend routes
Auth::routes();

Route::middleware('auth')->group(function(){

    Route::get('/dashboard',[HomeController::class,'index']);

    Route::resource('/category', CategoryController::class);

    Route::resource('/products', ProductController::class);


    Route::resource('/biddings', BiddingController::class);

});

//notification
Route::get('/send', [Notification::class,'sendNotification']);

