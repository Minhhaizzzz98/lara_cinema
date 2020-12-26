<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhimDienVienController;
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


Route::group(['prefix' => 'SuatChieu'], function() {
    Route::get('/index','SuatChieuController@index')->name('SuatChieu.index');
    Route::get('/create','SuatChieuController@create');
    Route::post('/create','SuatChieuController@store')->name('SuatChieu.add');
    Route::get('/edit/{id}','SuatChieuController@edit');
    Route::get('/get','SuatChieuController@get');
    Route::post('/update/{id}','SuatChieuController@update');
    Route::get('/delete/{id}','SuatChieuController@destroy');
});

Route::group(['prefix' => 'Phim_DienVien'], function() {
    Route::get('/index','Phim_DienVienController@index')->name('Phim_DienVien.index');
    Route::get('/create','Phim_DienVienController@create');
    Route::post('/create','Phim_DienVienController@store')->name('Phim_DienVien.add');
    Route::get('/edit/{id}','Phim_DienVienController@edit');
    Route::post('/update/{id}','Phim_DienVienController@update');
    Route::get('/delete/{id}','Phim_DienVienController@destroy');
});

Route::group(['prefix' => 'Phim'], function() {
    Route::get('/index','PhimController@index');
    Route::get('/create','PhimController@create');  
    Route::get('/get','PhimController@get');  
    Route::post('/create','PhimController@store')->name('Phim.add');
    Route::get('/details/{id}','PhimController@show');
    Route::post('/create/add_theloai/{id}','PhimController@add_theloai');
    Route::get('/edit/{id}','PhimController@edit');
    Route::post('/update/{id}','PhimController@update');
    Route::get('/delete/{id}','PhimController@destroy');
});

Route::group(['prefix' => 'LoaiPhim'], function() {
    Route::get('/index','LoaiPhimController@index')->name('LoaiPhim.index');
    Route::get('/create','LoaiPhimController@create');
    Route::post('/create','LoaiPhimController@store')->name('LoaiPhim.add');
    Route::get('/edit/{id}','LoaiPhimController@edit');
    Route::post('/update/{id}','LoaiPhimController@update');
    Route::get('/delete/{id}','LoaiPhimController@destroy');
});

Route::group(['prefix' => 'GioChieu'], function() {
    Route::get('/index','GioChieuController@index')->name('GioChieu.index');
    Route::get('/create','GioChieuController@create');
    Route::post('/create','GioChieuController@store')->name('GioChieu.add');
    Route::get('/edit/{id}','GioChieuController@edit');
    Route::get('/get','GioChieuController@get');
    Route::get('/getGioChieuID/{id}','GioChieuController@getGioChieuID');
    Route::get('/getGioChieu','GioChieuController@getGioChieu');
    Route::post('/update/{id}','GioChieuController@update');
    Route::get('/delete/{id}','GioChieuController@destroy');
});



Route::group(['prefix' => 'LoaiTGChieu'], function() {
    Route::get('/index','LoaiTGChieuController@index')->name('LoaiTGChieu.index');
    Route::get('/create','LoaiTGChieuController@create');
    Route::post('/create','LoaiTGChieuController@store')->name('LoaiTGChieu.add');
    Route::get('/edit/{id}','LoaiTGChieuController@edit');
    Route::post('/update/{id}','LoaiTGChieuController@update');
    Route::get('/delete/{id}','LoaiTGChieuController@destroy');
});

Route::group(['prefix' => 'DienVien'], function() {
    Route::get('/index','DienVienController@index');
    Route::get('/create','DienVienController@create');
    Route::post('/create','DienVienController@store');
    Route::get('/edit/{id}','DienVienController@edit');
    Route::post('/update/{id}','DienVienController@update');
    Route::get('/delete/{id}','DienVienController@destroy');
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

