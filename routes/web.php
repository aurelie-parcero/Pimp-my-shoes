<?php

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

Route::get('/Product/{id}', function ($id) {
    return view('Product',['id'=>$id]);
});

Route::get('/Products', function () {
    return view('Products');
});

Route::get('/Cart', function () {
    return view('Cart');
});

