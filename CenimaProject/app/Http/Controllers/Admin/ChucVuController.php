<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use App\ChucVu;
use App\NhanVien;
use App\Http\Controllers\Controller;
use App\Http\Requests\ChucVuRequest;
use Illuminate\Http\Request;

class ChucVuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chucvus = ChucVu::all();

       return view('manage.ChucVu.index',compact('chucvus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage.ChucVu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ChucVuRequest $request)
    {
       $chucvu = new ChucVu();
       $chucvu->TenCV = $request->TenCV;
       $chucvu->TrangThai = 1;

       if($chucvu->save())
       return redirect()->route('positions.index');
       else
       return redirect()->route('positions.create');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nhanviens = DB::table('nhan_viens as nv')
        ->join('chuc_vus as cv','nv.ChucVu', 'cv.MaCV')
        ->where('cv.MaCV',$id)->get();

            return view('manage.ChucVu.show',compact('nhanviens'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chucvu = ChucVu::find($id);
        return view('manage.ChucVu.edit',compact('chucvu'));
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
        $chucvu = ChucVu::find($id);
        $chucvu->TenCV = $request->TenCV;
        $chucvu->save();
        return redirect()->route('positions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $chucvu = ChucVu::find($id);
        if($chucvu->TrangThai == 0)
        $chucvu->TrangThai = 1;
        else
        if($chucvu->TrangThai == 1)
        $chucvu->TrangThai = 0;


        $chucvu->save();
        return redirect()->route('positions.index');

    }
}
