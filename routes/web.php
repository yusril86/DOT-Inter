<?php

use App\Http\Controllers\Admin\FetchApiController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\HomeController;
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





Route::middleware(['auth', 'admin'])->group(function () {
    //berisi route yang hanya bisa di akses oleh admin//

    Route::get('/', [HomeController::class, 'index']);
    Route::resource('profile',ProfileController::class);    
    Route::resource('product',ProductController::class);


});





require __DIR__.'/auth.php';
