<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rap;
use App\ChiNhanh;
use Session;

class RapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Rap::with('chinhanh')->where('TrangThai', '<>', '-1')->paginate(3);
        
        return view('manage.rap.index')->with('list', $list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $list = ChiNhanh::where('TrangThai','<>','-1')->get();
        return view('manage.rap.create')->with('list', $list);
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
            'TenRap.required' => 'Vui lòng nhập tên rạp',
            'TenRap.min' => 'Vui lòng nhập tối thiểu 5 kí tự',
            'TenRap.max' => 'Vui lòng nhập tối đa 255 kí tự'
        ];
        $validate = $request->validate([
            'TenRap' => 'required|min:5|max:255',
        ], $arr_validate);
        
        $data = new Rap();
        $data->TenRap = $request->TenRap;
        $data->chinhanh_id = $request->chinhanh_id;
        
        $data->TrangThai = 1;
        $data->save();
        if($data->count() > 0) {
            return redirect('/rap/');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $list = ChiNhanh::where('TrangThai','<>','-1')->get();
        $data = Rap::find($id);
        return view('manage.rap.edit')->with('data', $data)->with('list', $list);
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
            'TenRap.required' => 'Vui lòng nhập tên rạp cần sửa',
            'TenRap.min' => 'Vui lòng nhập tối thiểu 5 kí tự',
            'TenRap.max' => 'Vui lòng nhập tối đa 255 kí tự'
        ];
        $validate = $request->validate([
            'TenRap' => 'required|min:5|max:255',
        ], $arr_validate);
        $data = Rap::find($id);
        $data->TenRap = $request->TenRap;
        $data->chinhanh_id = $request->chinhanh_id;
        
        $data->TrangThai = 1;
        $data->save();
        if($data->count() > 0) {
            return redirect('/rap/');
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
        $data = Rap::findOrFail($id);
        $data->TrangThai = -1;
        $data->save();
        if($data->count() > 0) {
            return redirect('/rap/');
        }
    }
    public function inactive($id) 
    {
        $data = Rap::findOrFail($id);
        $data->TrangThai = 0;
        $data->save();
        if($data->count() > 0) {
            return redirect('/rap/');
        }
    }
    public function active($id) 
    {
        $data = Rap::findOrFail($id);
        $data->TrangThai = 1;
        $data->save();
        if($data->count() > 0) {
            return redirect('/rap/');
        }
    }

}
