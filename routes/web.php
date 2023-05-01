<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiddingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Notification;
use App\Http\Controllers\ProductSellController;

//home page route
Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/apple-series', [FrontendController::class, 'apple'])->name('apple');
Route::get('/samusng-series', [FrontendController::class, 'samsung'])->name('samsung');

Route::get('/product-detail/{id}', [FrontendController::class, 'detail'])->name('product');

Auth::routes(["verify" => true]);

Route::middleware(['auth', 'verified'])->group(function () {
    // Route::resource('/category', CategoryController::class);
    Route::resource('/products', ProductController::class);

    Route::get('/product-sell/predict', [ProductSellController::class,'predict'])->name('product-sell.predict');
    Route::post('/product-sell/predict', [ProductSellController::class,'predictStore'])->name('product-sell.predict.store');
    Route::get('/product-sell/information', [ProductSellController::class,'information'])->name('product-sell.information');
    Route::post('/product-sell/information', [ProductSellController::class,'informationStore'])->name('product-sell.information.store');

    Route::resource('/biddings', BiddingController::class);

    Route::get('/change-password', [FrontendController::class, 'password'])->name('updateform');
    Route::post('/change-password', [FrontendController::class, 'changePassword'])->name('update-password');
});

//notification
Route::get('/send', [Notification::class, 'sendNotification']);
