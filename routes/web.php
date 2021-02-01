<?php

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

/*Route::get('/', function () {
    return view('welcome');

});*/

Route::get('/', [\App\Http\Controllers\HomeController::class, 'show']);

Route::get('/product', [\App\Http\Controllers\ProductController::class, 'show']);

Route::get('/product/{id}', [\App\Http\Controllers\ProductController::class, 'showDetail']);

Route::get('/cart', [\App\Http\Controllers\CartController::class, 'show']);







