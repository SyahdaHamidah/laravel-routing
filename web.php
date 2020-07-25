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

Route::get('/home', function () {
    return view('profile/home');
});

Route::get('/experience', function () {
    return view('profile/experience');
});

Route::get('/portofolio', function () {
    return view('profile/portofolio');
});