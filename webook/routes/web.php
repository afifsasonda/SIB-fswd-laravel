<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UserController;
use App\Models\Slider;
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

// home
Route::get('/',[HomeController::class,'index']);
Route::get('/dashboard',[DashboardController::class,'index']);

// slider
Route::get('/slider',[SliderController::class,'index']);
Route::get('/slider-create',[SliderController::class,'create']);
Route::post('/slider-create-post',[SliderController::class,'store']);
Route::get('/slider-edit/{id}',[SliderController::class,'edit']);
Route::put('/slider-update',[SliderController::class,'update']);
Route::get('/slider-delete/{id}',[SliderController::class,'delete']);
// Route::get('/',[SliderController::class,'show']);
// Route::get('/slider/{slider}', 'SliderController@show')->banner('slider.show');


// route login
Route::get('login',[LoginController::class,'index']);
Route::post('login',[LoginController::class,'authenticate']);
// route register
Route::get('register',[RegisterController::class,'index']);
Route::post('register',[RegisterController::class,'store']);
// logout
Route::post('logout',[LoginController::class,'logout']);



// Route product
Route::get('/product',[ProductController::class,'index']);
Route::get('/productlist',[ProductController::class,'productlist']);
// create products
Route::get('/product-create',[ProductController::class,'create']);
Route::post('/product-create-post',[ProductController::class,'store']);
// edit
Route::get('/product-edit/{id}',[ProductController::class,'edit']);
Route::put('/product-update',[ProductController::class,'update']);
// delete
Route::get('/product-delete/{id}',[ProductController::class,'delete']);
//show
// Route::get('/',[ProductController::class,'show']);
// show
// Route::get('/','ProductController@show')->name('product.show');
// Route::get('/',[ProductController::class,'show']);



// route users
Route::get('/user',[UserController::class,'index']);
// create form
Route::get('/user-create',[UserController::class,'create']);
Route::post('/user-create-post',[UserController::class,'store']);
// edit user
Route::get('/user-edit/{id}',[UserController::class,'edit']);
Route::put('/user-update',[UserController::class,'update']);
// delete user
Route::get('/user-delete/{id}',[UserController::class,'delete']);

// dashboard
Route::get('/dashboard',[DashboardController::class,'index']);
