<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phim;
use App\LoaiPhim;
use App\GioiHanTuoi;

use App\Phim_LoaiPhim;

class PhimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $list['phims']= Phim::paginate(5);
        return view ('manage.phim.index',$list);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data= GioiHanTuoi::all();
        return view('manage.phim.create')->with('gioihantuoi',$data);
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
        $validated = $request->validate([
            'TenPhim' => 'required|min:5|max:255',
            'NgayDKChieu' => 'required',
            'NgayKetThuc' => 'required',
            'ThoiLuong' => 'required',
            'HinhAnh' => 'required',
        ]);
 
        $gioihantuoi = GioiHanTuoi::where('TenGioiHan',$request->GioiHanTuoi)->first();
        $phim = new Phim();
        $phim->TenPhim = $request->TenPhim;
        $phim->NgayDKChieu= $request->NgayDKChieu;
        $phim->NgayKetThuc=$request->NgayKetThuc;
        $phim->ThoiLuong=$request->ThoiLuong;
        $phim->gioihantuoi_id = $gioihantuoi->id;
        $phim->daodien_id=1;
        $phim->HinhAnh="http://localhost:8000/data/".$request->HinhAnh;
        
        $flag=$phim->save();
        $id=$phim->id;
        $request->session()->put('id_phim_new', $id);
        $data= LoaiPhim::all();

        if($flag){
            return view('manage.phim.add_theloai_phim')->with('loaiphim',$data);
        }
        else
        {
            return view('manage.phim.create');
        }

    }
     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function add_theloai(Request $request, $id)
    {

        $loaiphim = LoaiPhim::where('TenLoaiPhim', $request->TenLoaiPhim)->first();

        
        $chitietloaiphim =  new Phim_LoaiPhim();
        $chitietloaiphim->loaiphim_id = $loaiphim->id;
        $chitietloaiphim->phim_id= $id;
  
        $flag= $chitietloaiphim->save();

        $request->session()->forget('id_phim_new');

        if($flag){
            return redirect('/phim/index');
        }
        else
        {
            return view('manage.phim.create');
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
        $phim = Phim::find($id);
        return view('manage.phim.details')->with('phim',$phim);
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
        $phim=Phim::find($id);
        return view('manage.phim.edit')->with('phim',$phim);
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
        $validated = $request->validate([
            'TenPhim' => 'required|max:255',
            'NgayDKChieu' => 'required|date_format:Y-m-d H:i:s',
            'NgayKetThuc' => 'required|date_format:Y-m-d H:i:s',
            'ThoiLuong' => 'required',
            'HinhAnh' => 'required',
        ]);
    
        $phim = Phim::find($id);

        $phim->TenPhim = $request->TenPhim;
        $phim->NgayDKChieu= $request->NgayDKChieu;
        $phim->NgayKetThuc=$request->NgayKetThuc;
        $phim->ThoiLuong=$request->ThoiLuong;
        $phim->HinhAnh="http://localhost:8000/data/".$request->HinhAnh;
        
        $flag=$phim->save();

        if($flag){
            return redirect('/phim/index');
        }
        else
        {
            return view('manage.phim.edit');
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
        $phim= Phim::find($id);
        $phim->TrangThai=0;
        $flag=$phim->save();    
        return redirect('/phim/index');
    }
}
