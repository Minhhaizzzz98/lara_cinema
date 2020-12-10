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
    return view('manage.home');
});

Route::get('/home', function () {
    return view('manage.home');
});

Route::get('/login', function () {
    return view('manage.login');
});

Route::get('/register', function () {
    return view('manage.register');
});

Route::get('/table', function () {
    return view('manage.table');
});

Route::group(['prefix' => 'phim'], function() {
    Route::get('/index','PhimController@index');
    Route::get('/create','PhimController@create');
    Route::post('/create','PhimController@store');
    Route::get('/edit/{id}','PhimController@edit');
    Route::post('/update/{id}','PhimController@update');
    Route::get('/delete/{id}','PhimController@destroy');
});

