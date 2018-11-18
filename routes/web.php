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

Route::get('about', function () {
    return view('about');
});

Route::get('users', function () {
    return view('users');
});

Route::get('games', function () {
    return view('games');
});

Route::get('players', function () {
    return view('players');
});

Route::get('battles', function () {
    return view('battles');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
