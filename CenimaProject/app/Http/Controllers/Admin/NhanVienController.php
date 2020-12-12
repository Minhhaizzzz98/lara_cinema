<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Hash;
use App\ChucVu;
use Illuminate\Support\Facades\DB;
use App\NhanVien;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\NhanVienRequest;
use App\QuanLy;

class NhanVienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nhanviens = DB::table('nhan_viens as nv')
        ->join('chuc_vus as cv','nv.ChucVu', 'cv.MaCV')->orderBy('cv.MaCV','asc')
        ->get();



            return view('manage.NhanVien.index',compact('nhanviens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $quanlies= QuanLy::where('isLocked','0')->get();
        $chucvus = ChucVu::where('TrangThai','1')->get();
        return view('manage.NhanVien.create',compact('chucvus','quanlies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NhanVienRequest $request)
    {

        $nhanvien = new NhanVien();

        $nhanvien->HoNV = $request->HoNV;
        $nhanvien->TenNV = $request->TenNV;
        $nhanvien->TenTK = $request->TenTK;
        $nhanvien->password = Hash::make($request->password);

        $nhanvien->ChucVu = $request->ChucVu;
        $nhanvien->Ma_NQL = $request->Ma_NQL;
        $nhanvien->NgSinh = $request->NgSinh;
        $nhanvien->DiaChi = $request->DiaChi;
        $nhanvien->SDT = $request->SDT;
        $nhanvien->Email = $request->Email;

        $nhanvien->isLocked = 0;
        $nhanvien->isBigAdmin = 0;


        $tennv = convert_vi_to_en($nhanvien->HoNV." ".$nhanvien->TenNV);

        $extension = $request->Anh->extension();
        $imageName = $tennv.'.'.$extension;


        $request->Anh->move(public_path('images/nhanviens'), $imageName);

        $nhanvien->Anh = $imageName;

        $nhanvien->save();

        return redirect()->route('employees.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nhanvien = NhanVien::find($id);

        $chucvu = ChucVu::find($nhanvien->ChucVu);

            return view('manage.NhanVien.show',compact('nhanvien','chucvu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nhanvien = NhanVien::find($id);
        $nhanviens= NhanVien::where('ChucVu','1')->get();
        $chucvus = ChucVu::where('TrangThai','1')->get();
        return view('manage.NhanVien.edit',compact('nhanvien','chucvus','nhanviens'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nhanvien = NhanVien::find($id);

        $nhanvien->HoNV = $request->HoNV;
        $nhanvien->TenNV = $request->TenNV;

        $nhanvien->ChucVu = $request->ChucVu;
        $nhanvien->Ma_NQL = $request->Ma_NQL;
        $nhanvien->NgSinh = $request->NgSinh;
        $nhanvien->DiaChi = $request->DiaChi;
        $nhanvien->SDT = $request->SDT;
        $nhanvien->Email = $request->Email;


        if($request->Anh !=null)
        {
        $tennv = convert_vi_to_en($nhanvien->HoNV." ".$nhanvien->TenNV);

        $extension = $request->Anh->extension();
        $imageName = $tennv.'.'.$extension;


        $request->Anh->move(public_path('images/nhanviens'), $imageName);

        $nhanvien->Anh = $imageName;
        }
        $nhanvien->save();

        return redirect()->route('employees.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nhanvien = NhanVien::find($id);
        if($nhanvien->isLocked == 0)
        $nhanvien->isLocked = 1;
        else
        if($nhanvien->isLocked == 1)
        $nhanvien->isLocked = 0;


        $nhanvien->save();
        return redirect()->route('employees.index');
    }
}

function convert_vi_to_en($str) {
    $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", "a", $str);
    $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", "e", $str);
    $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", "i", $str);
    $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", "o", $str);
    $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", "u", $str);
    $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", "y", $str);
    $str = preg_replace("/(đ)/", "d", $str);
    $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", "A", $str);
    $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", "E", $str);
    $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", "I", $str);
    $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", "O", $str);
    $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", "U", $str);
    $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", "Y", $str);
    $str = preg_replace("/(Đ)/", "D", $str);
    $str = str_replace(" ", "-",$str);
    return $str;
}
