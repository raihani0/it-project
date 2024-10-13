<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});

//route resource for products
Route::resource('/products', \App\Http\Controllers\ProductController::class);

Route::get('/Login', function () {
    return view('Login');
});
