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

Route::get('/', function () {
    return '<h1>Home page</h>';

});

Route::get('/product', function () {
    return '<h1>Liste des produits</h>';

});

Route::get('/product/{id}', function ($id) {
    return '<h1>Fiche du produit </h>'. $id;

});

Route::get('/cart', function () {
    return '<h1>Panier</h>';

});







