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

Route::resource('employees', 'Admin\NhanVienController');

Route::resource('positions', 'Admin\ChucVuController');



Route::group(['prefix' => 'phim'], function() {
    Route::get('/index','PhimController@index');
    Route::get('/create','PhimController@create');  
    Route::post('/create','PhimController@store');
    Route::get('/details/{id}','PhimController@show');
    Route::post('/create/add_theloai/{id}','PhimController@add_theloai');
    Route::get('/edit/{id}','PhimController@edit');
    Route::post('/update/{id}','PhimController@update');
    Route::get('/delete/{id}','PhimController@destroy');
});

Route::group(['prefix' => 'LoaiPhim'], function() {
    Route::get('/index','LoaiPhimController@index');
    Route::get('/create','LoaiPhimController@create');
    Route::post('/create','LoaiPhimController@store');
    Route::get('/edit/{id}','LoaiPhimController@edit');
    Route::post('/update/{id}','LoaiPhimController@update');
    Route::get('/delete/{id}','LoaiPhimController@destroy');
});


//rap
Route::group(['prefix' => 'rap'], function() {
    Route::get('/','RapController@index');
    Route::get('/index','RapController@index');
    Route::get('/create','RapController@create');  
    Route::post('/create','RapController@store');
    Route::get('/details/{id}','RapController@show');
    Route::get('/edit/{id}','RapController@edit');
    Route::post('/update/{id}','RapController@update');
    Route::get('/delete/{id}','RapController@destroy');
    Route::get('/inactive/{id}','RapController@inactive');
    Route::get('/active/{id}','RapController@active');
});

//chi nhanh
Route::group(['prefix' => 'chinhanh'], function() {
    Route::get('/','ChiNhanhController@index');
    Route::get('/index','ChiNhanhController@index');
    Route::get('/create','ChiNhanhController@create');  
    Route::post('/create','ChiNhanhController@store');
    Route::get('/details/{id}','ChiNhanhController@show');
    Route::get('/edit/{id}','ChiNhanhController@edit');
    Route::post('/update/{id}','ChiNhanhController@update');
    Route::get('/delete/{id}','ChiNhanhController@destroy');
    Route::get('/inactive/{id}','ChiNhanhController@inactive');
    Route::get('/active/{id}','ChiNhanhController@active');
    
});