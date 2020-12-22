<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GioiHanTuoi;

class GioiHanTuoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = GioiHanTuoi::where('TrangThai',1)->get();
        return view('manage.GioiHanTuoi.index')->with('list', $data);
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('manage.GioiHanTuoi.create');
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
            'TenGioiHan.required'=>'Giới hạn tuổi không được bỏ trống',
            'TenGioiHan.min'=>'Vui lòng nhập ít nhất 5 kí tự',
            'TenGioiHan.max'=>'Vui lòng nhập ít hơn 255 kí tự',
            
        ];
        $validated = $request->validate([

            'TenGioiHan' => 'required|min:5|max:255',
        ],$arr_validate);

        $gioihan = new GioiHanTuoi();
        $gioihan->TenGioiHan = $request->TenGioiHan;
        $flag = $gioihan->save();
        if($flag){
            return redirect('/GioiHanTuoi/index');
        }
        else
        {
            return view('manage.GioiHanTuoi.create');
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
        $gioihan = GioiHanTuoi::find($id);


        // return $phim;
        return view('manage.GioiHanTuoi.details')->with('dienvien',$gioihan);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $GioiHanTuoi = GioiHanTuoi::find($id);
        return view('manage.GioiHanTuoi.edit')->with('gioihantuoi',$GioiHanTuoi);
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
            'TenGioiHan.required'=>'Giới hạn tuổi không được bỏ trống',
            'TenGioiHan.min'=>'Vui lòng nhập ít nhất 5 kí tự',
            'TenGioiHan.max'=>'Vui lòng nhập ít hơn 255 kí tự',
            
        ];
        $validated = $request->validate([

            'TenGioiHan' => 'required|min:5|max:255',
        ],$arr_validate);

        $gioihan = GioiHanTuoi::find($id);
        $gioihan->TenGioiHan = $request->TenGioiHan;
        $flag = $gioihan->save();
        if($flag){
            return redirect('/GioiHanTuoi/index');
        }
        else
        {
            return view('manage.GioiHanTuoi.edit');
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
        //
        $GioiHanTuoi = GioiHanTuoi::find($id);
        $GioiHanTuoi->TrangThai=0;
        $GioiHanTuoi->save();
        return redirect('/GioiHanTuoi/index');
    }
}
