<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phong;
use App\Rap;
use App\Ghe;

class PhongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $list = Phong::with('ghes')->where('TrangThai', '<>', '-1')->orderBy('id', 'desc')->paginate(3);
        //return $list;
        return view('manage.Phong.index', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Rap::where('TrangThai', '<>', '-1')->get();
        return view('manage.Phong.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $arr_validate = [
            'TenPhong.required' => 'Vui lòng nhập tên phòng',
            'TenPhong.min' => 'Vui lòng nhập tối thiểu 5 kí tự',
            'TenPhong.max' => 'Vui lòng nhập tối đa 255 kí tự',
        ];
        $validate = $request->validate([
            'TenPhong' => 'required|min:5|max:255',
            
        ], $arr_validate);
        
        $data = new Phong();
        $data->TenPhong = $request->TenPhong;
        $data->rap_id = $request->rap_id;
        $data->TrangThai = 1;
        $data->save();
        if($data->count() > 0) {
            return redirect('/phong/');
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rap = Rap::where('TrangThai', '<>', '-1')->get();
        $data = Phong::findOrFail($id);
        return view('manage.Phong.edit', compact('data', 'rap'));
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
        $arr_validate = [
            'TenPhong.required' => 'Vui lòng nhập tên phòng',
            'TenPhong.min' => 'Vui lòng nhập tối thiểu 5 kí tự',
            'TenPhong.max' => 'Vui lòng nhập tối đa 255 kí tự',
        ];
        $validate = $request->validate([
            'TenPhong' => 'required|min:5|max:255',
            
        ], $arr_validate);
        $data = Phong::findOrFail($id);
        $data->TenPhong = $request->TenPhong;
        $data->rap_id = $request->rap_id;
        $data->TrangThai = 1;
        $data->save();
        if($data->count() > 0) {
            return redirect('/phong/');
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
        $data = Phong::findOrFail($id);
        $data->TrangThai = -1;  
        $data->save();
        if($data->count() > 0) {
            return redirect('/phong/');
        }
    }
    public function inactive($id) 
    {
        $data = Phong::findOrFail($id);
        $data->TrangThai = 0;
        $data->save();
        if($data->count() > 0) {
            return redirect('/phong/');
        }
    }
    public function active($id) 
    {
        $data = Phong::findOrFail($id);
        $data->TrangThai = 1;
        $data->save();
        if($data->count() > 0) {
            return redirect('/phong/');
        }
    }
}
