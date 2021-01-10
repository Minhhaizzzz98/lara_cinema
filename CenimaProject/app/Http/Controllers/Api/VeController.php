<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Ve;

class VeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Ve::join('khach_hangs', 'ves.kh_id', '=', 'khach_hangs.id')
        ->join('suat_chieus', 'ves.suatchieu_id', '=', 'suat_chieus.id')
        ->join('ghes', 'ves.ghe_id', '=', 'ghes.id')
        ->select('ves.id','khach_hangs.HoTen','suat_chieus.NgayChieu','ghes.Day','GiaVe')
        ->get();
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ve = new Ve();
        $ve->suatchieu_id = $request->suatchieu_id;
        $ve->ghe_id = $request->ghe_id;
        $ve->kh_id = $request->kh_id;
        $ve->GiaVe = 20000;
        $flag = $ve->save();
        if($flag)
        {
            return response()->json("1");
        }
        else
        {
            return response()->json("0");
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
        //
    }
}
