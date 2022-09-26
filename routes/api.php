<?php

use App\Http\Controllers\Api\ProductApiController;
use App\Http\Controllers\Api\UserApiController;
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

Route::controller(UserApiController::class)->group(function () {
    Route::get('/users/all', 'getUser');
    Route::get('/user/detail/{id}', 'detailUser');
    Route::get('/user/search', 'searchUser');
});

Route::controller(ProductApiController::class)->group(function () {
    Route::get('/product/all', 'getProduct');
    Route::get('/product/detail/{id}', 'detailProduct');
    Route::get('/product/search', 'searchProduct');
});

