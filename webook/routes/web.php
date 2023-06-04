<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

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
