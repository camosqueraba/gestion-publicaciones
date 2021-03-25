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
    return view('inicio');
});

Route::get('gestionar', function () {
    return view('gestionar');
});

Route::get('cumpleaños', function () {
    return view('cumpleaños');
});

Route::get('anuncios', function () {
    return view('single-blog');
});
