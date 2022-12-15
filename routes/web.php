<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegistrationController;

//welcome page routes
Route::get('/',function(){
    return view('homepage');
});

// authentication routes
// Route::get('/login',[RegistrationController::class,'login'])->name('login');
// Route::get('/register',[RegistrationController::class,'registration'])->middleware('alreadyLoggedIn')->name('registeration');
// Route::post('/register-user',[RegistrationController::class,'registerUser'])->name('register-user');
// Route::post('/login-user',[RegistrationController::class,'loginUser'])->name('login-user');
// Route::get('/logout',[RegistrationController::class,'logout']);




// Route::get('/products/create',[ProductController::class,'create']);

// //add product routes
// Route::get('/addproduct',function(){
//     return view('product-form');
// });


// Route::get('/category',function(){
//     return view('category');
// });



Auth::routes();

//backend's routes
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function(){
    Route::get('/dashboard',[RegistrationController::class,'dashboard']);

    Route::resource('/category', CategoryController::class);

    Route::resource('products', ProductController::class);

});
