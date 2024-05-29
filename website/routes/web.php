<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/download', function () {
    return view('download');
});

Route::get('/cart', function () {
    return view('cart');
});

Auth::routes();