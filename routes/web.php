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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('burger', function () {
    return view('burger');
})->name('burger');

Route::get('pizza', function () {
    return view('pizza');
})->name('pizza');

Route::get('minuman', function () {
    return view('minuman');
})->name('minuman');

Route::get('promo', function () {
    return view('promo');
})->name('promo');