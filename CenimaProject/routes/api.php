<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/Phim_GetFive', 'Api\PhimController@getFiveFilm');
Route::apiResource('/Phim', 'Api\PhimController');
Route::apiResource('/LoaiPhim', 'Api\LoaiPhimController');

Route::apiResource('/GioiHanTuoi', 'Api\GioiHanTuoiController');
Route::apiResource('KhachHang','Api\KhachHangController');
Route::post('/KhachHang_Login','Api\KhachHangController@Login');
Route::apiResource('/DienVien', 'Api\DienVienController');

Route::apiResource('/GioChieu', 'Api\GioChieuApi');
Route::apiResource('/SuatChieu', 'Api\SuatChieuController');
Route::post('/SuatChieu/getGioChieu','Api\SuatChieuController@getGioChieu');

//vé
Route::apiResource('/Ve', 'Api\VeController');

//api rạp, phòng, ghế
Route::apiResource('/Ghe', 'Api\GheController');
Route::apiResource('/Phong', 'Api\PhongController');
Route::apiResource('/Rap', 'Api\RapController');

Route::apiResource('NhanVien','Api\NhanVienController');
Route::apiResource('/Tinh','Api\TinhController');

// dang ky khach hàng
Route::post("/KhachHang_Dk",'Api\KhachHangController@KhachHang_Regis');


