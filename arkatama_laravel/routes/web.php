<?php

// use App\Http\Controllers\itemController;
// use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\ProdukController;
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

// Route::get('/datapengguna',[PenggunaController::class,'pengguna']);

// route
Route::get('/landing',[ProdukController::class,'landing']);
Route::get('/dashboard',[ProdukController::class,'dashboard']);

