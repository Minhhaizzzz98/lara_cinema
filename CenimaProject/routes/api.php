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

Route::apiResource('/Phim', 'Api\PhimController');
Route::apiResource('/LoaiPhim', 'Api\LoaiPhimController');
Route::apiResource('/GioiHanTuoi', 'Api\GioiHanTuoiController');
Route::apiResource('KhachHang','Api\KhachHangController');
Route::apiResource('/DienVien', 'Api\DienVienController');

Route::apiResource('/GioChieu', 'Api\GioChieuApi');
Route::apiResource('/SuatChieu', 'Api\SuatChieuController');

//api rạp, phòng, ghế
Route::apiResource('/Ghe', 'Api\GheController');
Route::apiResource('/Phong', 'Api\PhongController');
Route::apiResource('/Rap', 'Api\RapController');

Route::apiResource('NhanVien','Api\NhanVienController');
Route::post("/KhachHang_Dk",'Api\KhachHangController@KhachHang_Regis');
