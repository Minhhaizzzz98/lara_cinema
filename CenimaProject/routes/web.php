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


Route::group(['prefix' => 'DienVien'], function() {
    Route::get('/index','DienVienController@index');
    Route::get('/create','DienVienController@create');
    Route::post('/create','DienVienController@store');
    Route::get('/edit/{id}','DienVienController@edit');
    Route::post('/update/{id}','DienVienController@update');
    Route::get('/delete/{id}','DienVienController@destroy');
});
Route::group(['prefix' => 'GioiHanTuoi'], function() {
    Route::get('/index','GioiHanTuoiController@index');
    Route::get('/create','GioiHanTuoiController@create');
    Route::post('/create','GioiHanTuoiController@store');
    Route::get('/edit/{id}','GioiHanTuoiController@edit');
    Route::post('/update/{id}','GioiHanTuoiController@update');
    Route::get('/delete/{id}','GioiHanTuoiController@destroy');
});



//ghe
Route::group(['prefix' => 'ghe'], function() {
    Route::get('/','GheController@index');
    Route::get('/index','GheController@index');
    Route::get('/create','GheController@create');  
    Route::post('/create','GheController@store');
    Route::get('/details/{id}','GheController@show');
    Route::get('/edit/{id}','GheController@edit');
    Route::post('/update/{id}','GheController@update');
    Route::get('/delete/{id}','GheController@destroy');
    Route::get('/inactive/{id}','GheController@inactive');
    Route::get('/active/{id}','GheController@active');
    
});
//phong
Route::group(['prefix' => 'phong'], function() {
    Route::get('/','PhongController@index');
    Route::get('/index','PhongController@index');
    Route::get('/create','PhongController@create');  
    Route::post('/create','PhongController@store');
    Route::get('/details/{id}','PhongController@show');
    Route::get('/edit/{id}','PhongController@edit');
    Route::post('/update/{id}','PhongController@update');
    Route::get('/delete/{id}','PhongController@destroy');
    Route::get('/inactive/{id}','PhongController@inactive');
    Route::get('/active/{id}','PhongController@active');
    
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