<?php

use App\Http\Controllers\ApiProductController;
use App\Http\Controllers\ApiUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// User
Route::get('/user',[ApiUserController::class,'index']);
Route::post('/user/store',[ApiUserController::class,'store']);

// products
Route::get('/product',[ApiProductController::class,'index']);
Route::post('/product/store',[ApiProductController::class,'store']);
Route::put('/product/update',[ApiProductController::class,'update']);
Route::get('/product/delete',[ApiProductController::class,'delete']);
