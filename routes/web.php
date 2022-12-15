<?php


use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// })

Route::get('/login',[RegistrationController::class,'login'])->middleware('alreadyLoggedIn')->name('login');
Route::get('/',[RegistrationController::class,'registration'])->middleware('alreadyLoggedIn')->name('registeration');
Route::post('/register-user',[RegistrationController::class,'registerUser'])->name('register-user');
Route::post('/login-user',[RegistrationController::class,'loginUser'])->name('login-user');
Route::get('/logout',[RegistrationController::class,'logout']);

Route::get('/dashboard',[RegistrationController::class,'dashboard'])->middleware('isLoggedIn');
Route::get('/products/create',[ProductController::class,'create']);

//add product routes
Route::get('/addproduct',function(){
    return view('addproduct');
});

//welcome page routes
Route::get('/home',function(){
    return view('home');
});

Route::get('/login',[RegistrationController::class,'login'])->middleware('alreadyLoggedIn');
Route::get('/',[RegistrationController::class,'registration'])->middleware('alreadyLoggedIn');
Route::post('/register-user',[RegistrationController::class,'registerUser'])->name('register-user');
Route::post('/login-user',[RegistrationController::class,'loginUser'])->name('login-user');
Route::get('/dashboard',[RegistrationController::class,'dashboard'])->middleware('isLoggedIn');
Route::get('/logout',[RegistrationController::class,'logout']);

