<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DienVien;

class DienVienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       $data = DienVien::where('TrangThai',1)->get();
       return view('manage.DienVien.index')->with('list', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       return view('manage.DienVien.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $arr_validate =[
            'TenDienVien.required'=>'Tên diễn viên không được bỏ trống',
            'TenDienVien.min'=>'Vui lòng nhập ít nhất 5 kí tự',
            'TenDienVien.max'=>'Vui lòng nhập ít hơn 255 kí tự',
            
        ];
        $validated = $request->validate([

            'TenDienVien' => 'required|min:5|max:255',
        ],$arr_validate);

        $dienvien = new DienVien();
        $dienvien->TenDienVien = $request->TenDienVien;
        $flag = $dienvien->save();
        if($flag){
            return redirect('/DienVien/index');
        }
        else
        {
            return view('manage.DienVien.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $DienVien = DienVien::find($id);


        // return $phim;
        return view('manage.DienVien.details')->with('dienvien',$DienVien);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $DienVien = DienVien::find($id);
        return view('manage.DienVien.edit')->with('dienvien',$DienVien);
        
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
        //
        $arr_validate =[
            'TenDienVien.required'=>'Tên diễn viên không được bỏ trống',
            'TenDienVien.min'=>'Vui lòng nhập ít nhất 5 kí tự',
            'TenDienVien.max'=>'Vui lòng nhập ít hơn 255 kí tự',
            
        ];
        $validated = $request->validate([

            'TenDienVien' => 'required|min:5|max:255',
        ],$arr_validate);

        $dienvien = DienVien::find($id);
        $dienvien->TenDienVien = $request->TenDienVien;
        $flag = $dienvien->save();
        if($flag){
            return redirect('/DienVien/index');
        }
        else
        {
            return view('manage.DienVien.edit');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dienvien = DienVien::find($id);
        $dienvien->TrangThai=0;
        $dienvien->save();
        return redirect('/DienVien/index');
    }
}
