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
Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/apple-series', [FrontendController::class, 'apple'])->name('apple');
Route::get('/samusng-series', [FrontendController::class, 'samsung'])->name('samsung');

Route::get('/product-detail/{id}', [FrontendController::class, 'detail'])->name('product');

Route::middleware('auth')->group(function () {
    Route::get('/change-password', [FrontendController::class, 'password'])->name('updateform');
    Route::post('/change-password', [FrontendController::class, 'changePassword'])->name('update-password');
});


Route::middleware('auth')->group(function () {
    // Route::resource('/category', CategoryController::class);
    Route::resource('/products', ProductController::class);

    Route::resource('/biddings', BiddingController::class);
});

// backend routes
Auth::routes();


//notification
Route::get('/send', [Notification::class, 'sendNotification']);
