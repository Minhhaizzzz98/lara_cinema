<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SuatChieu;

class SuatChieuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = SuatChieu::with('phim','giochieu')->where('TrangThai',1)->get();
        return view('manage.SuatChieu.index')->with('list',$data);
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
        $sc = new SuatChieu();
        $sc->phim_id = $request->Phim;
        $sc->giochieu_id = $request->GioChieu;
        $sc->NgayChieu = $request->NgayChieu;
        $sc->rap_id = $request->Rap;
        $sc->GiaSuatChieu=0;
        $flag = $sc->save();

        $data = SuatChieu::with('phim','rap','giochieu')->where('TrangThai',1)->get();
        if($flag)
        {
            return json_encode($data);
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
        //
        $data = SuatChieu::find($id);
        return response()->json($data);
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
        $sc = SuatChieu::find($id);
        $sc->phim_id = $request->Phim;
        $sc->giochieu_id = $request->GioChieu;
        $sc->rap_id = $request->Rap;
        $sc->NgayChieu = $request->NgayChieu;
        $sc->GiaSuatChieu=0;
        $flag = $sc->save();

        $data = SuatChieu::with('phim','rap','giochieu')->where('TrangThai',1)->get();
        if($flag)
        {
            return json_encode($data);
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
        $sc = SuatChieu::find($id);
        $sc->TrangThai=0;
        $sc->save();
        return response()->json($sc);
    }
}
