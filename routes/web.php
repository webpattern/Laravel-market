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

Route::get('/galery', function () {
    return view('galery');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/newpage', function () {
    return view('newpage');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
