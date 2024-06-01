<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [Controller::class, 'index'])->name("index");
Route::get('/download', [Controller::class, 'download'])->name("download");

// API endpoint for /cart/add view
Route::post('/cart/add', [Controller::class, 'receiver'])->name("receiver")->middleware('auth');
Route::get('/cart/add', [Controller::class, 'addToCart'])->name("addToCart")->middleware('auth');
Route::get('/cart', [Controller::class, 'cart'])->name("cart")->middleware('auth');

Auth::routes();