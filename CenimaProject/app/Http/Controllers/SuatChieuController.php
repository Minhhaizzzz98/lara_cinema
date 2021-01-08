<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SuatChieu;
use App\Phong;

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
        //xử lí phòng trống của rạp

        //Lấy danh sách tất cả các phòng của rạp
        $phongs = Phong::where('rap_id',$request->Rap)->get();   
        $suatchieus = SuatChieu::where('TrangThai',1)->get();      

        $sc = new SuatChieu();
        $sc->phong_id = $phongs[0]->id;
        $sc->giochieu_id = $request->GioChieu;
        $sc->phim_id = $request->Phim;
        $sc->rap_id = $request->Rap;
        $sc->phong_id = $request->Phong;
        $sc->NgayChieu = $request->NgayChieu;
        $sc->GiaSuatChieu = 0;
        $flag = $sc->save();
        $data = SuatChieu::with('phim','phong','giochieu')->where('TrangThai',1)->get();
        if($flag)
        {
            return json_encode($data);
        }     
    }
    public function getPhong(Request $request)
    {
        $phongs = Phong::where('rap_id',$request->Rap)->get(); 

        $suatchieus = SuatChieu::where('TrangThai',1)->where('rap_id',$request->Rap)->get(); 

        $list = array();
        
        $temp = 0;

        if($suatchieus==null)
        {
            return json_encode($phongs);
        }

        foreach($phongs as $phong)
        {
           
                foreach($suatchieus as $item)
                {
                    if( $item->phong_id == $phong->id)
                    {
                        if( $item->giochieu_id == $request->GioChieu && $item->NgayChieu == $request->NgayChieu)
                        {
                            $temp++;
                        }
                        else
                        {
                            array_push($list,$phong);
                        }         
                    }
                    else
                    {                  
                        array_push($list,$phong);
                    }
                   
                }       
           
        }

        if($temp == sizeof($phongs))
        {
            return json_encode(1);
        }
        else if(empty($list))
        {
            return json_encode($phongs);
        }
        else  
            return json_encode($list);
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
    public function getGioChieu (Request $request){
        $rap_id=(int)$request->rap_id;
        $phim_id=(int)$request->phim_id;

        //return json_encode($request->NgayChieu);
        $list = SuatChieu::join('gio_chieus', 'suat_chieus.giochieu_id', '=', 'gio_chieus.id')->select('giochieu_id','gio_chieus.GioBatDau')->where('rap_id',$rap_id)->where('phim_id',$phim_id)->where('NgayChieu',"2021-01-07")->get();
        return json_encode($list);
    }
}
