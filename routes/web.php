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

Route::get('/hypertaxi', function () {
    return view('ht/welcomeht');
});

Route::get('/hypercar', function () {
    return view('hc/welcomehc');
});

Route::get('/hyperbus', function () {
    return view('hb/welcomehb');
});