<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Rap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class RapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $raps = DB::table('raps as r')
        ->join('chi_nhanhs as cn','r.chinhanh_id', 'cn.id')
        ->select('r.*','cn.TenChiNhanh','cn.DiaChi')->get();

        return view('manage.Rap.index',compact('raps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rap = Rap::find($id);
        if($rap->TrangThai == 0)
        $rap->TrangThai = 1;
        else
        if($rap->TrangThai == 1)
        $rap->TrangThai = 0;

        $rap->save();

        return redirect()->route('raps.index');
    }
}
