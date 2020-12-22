<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phim;
use App\LoaiPhim;
use App\GioiHanTuoi;
use App\Phim_LoaiPhim;
use App\QuocGia;

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
        session()->flush();
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
        $quocgia = QuocGia::all();
        $data= GioiHanTuoi::all();
       
        return view('manage.phim.create')->with([
        'gioihantuoi' => $data,
        'quocgia'=>$quocgia,
		
	]);
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
            'TenPhim.required'=>'Tên phim không được bỏ trống',
            'TenPhim.min'=>'Vui lòng nhập ít nhất 5 kí tự',
            'TenPhim.max'=>'Vui lòng nhập ít hơn 255 kí tự',
            'NgayDKChieu.required'=>'Ngày ĐK chiếu không được bỏ trống',
            'NgayKetThuc.required'=>'Ngày kết thúc không được bỏ trống',
            'ThoiLuong.required'=>'Thời lượng không được bỏ trống',
            'HinhAnh.required'=>'Hình ảnh không được bỏ trống',
            'DaoDien.required'=>'Đạo diễn không được bỏ trống',
            'DaoDien.min'=>'Tên đạo diễn ít nhất 5 kí tự',
            'DaoDien.max'=>'Tên đạo diễn phải ít hơn 255 kí tự',
        ];
        $validated = $request->validate([

            'TenPhim' => 'required|min:5|max:255',
            'NgayDKChieu' => 'required',
            'NgayKetThuc' => 'required',
            'ThoiLuong' => 'required',
            'HinhAnh' => 'required',
            'DaoDien'=>'required|min:5|max:255',
        ],$arr_validate);
      
        $gioihantuoi = GioiHanTuoi::where('TenGioiHan',$request->GioiHanTuoi)->first();
        $quocgia = QuocGia::where('TenQuocGia',$request->QuocGia)->first();
  
        $phim = new Phim();
        $phim->TenPhim = $request->TenPhim;
        $phim->NgayDKChieu= $request->NgayDKChieu;
        $phim->NgayKetThuc=$request->NgayKetThuc;
        $phim->ThoiLuong=$request->ThoiLuong;
        $phim->gioihantuoi_id = $gioihantuoi->id;
        $phim->DaoDien= $request->DaoDien;
        $phim->quocgia_id = $quocgia->id;
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
     * @param  \Illuminate\Http\Request 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function add_theloai(Request $request, $id)
    {     
        $loaiphim1 = LoaiPhim::where('TenLoaiPhim', $request->TenTheLoai)->first();
        $data= LoaiPhim::all();
        $dem = 0;
        $list = Phim_LoaiPhim::all();


            $chitietloaiphim =  new Phim_LoaiPhim();
            $chitietloaiphim->loaiphim_id = $loaiphim1->id;
            $chitietloaiphim->phim_id= $id;
            $flag=$chitietloaiphim->save();   
            if($flag){         
                return view('manage.phim.add_theloai_phim')->with('loaiphim',$data);
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
        $phim = Phim::where('id', $id)->with('quocgias','dienviens','gioihantuoi')->get()->first();


        // return $phim;
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
        $arr_validate =[
            'TenPhim.required'=>'Tên phim không được bỏ trống',
            'TenPhim.min'=>'Vui lòng nhập ít nhất 5 kí tự',
            'TenPhim.max'=>'Vui lòng nhập ít hơn 255 kí tự',
            'NgayDKChieu.required'=>'Ngày ĐK chiếu không được bỏ trống',
            'NgayKetThuc.required'=>'Ngày kết thúc không được bỏ trống',
            'ThoiLuong.required'=>'Thời lượng không được bỏ trống',
            'HinhAnh.required'=>'Hình ảnh không được bỏ trống',
            'DaoDien.required'=>'Đạo diễn không được bỏ trống',
            'DaoDien.min'=>'Tên đạo diễn ít nhất 5 kí tự',
            'DaoDien.max'=>'Tên đạo diễn phải ít hơn 255 kí tự',
        ];
        $validated = $request->validate([

            'TenPhim' => 'required|min:5|max:255',
            'NgayDKChieu' => 'required',
            'NgayKetThuc' => 'required',
            'ThoiLuong' => 'required',
            'HinhAnh' => 'required',
            'DaoDien'=>'required|min:5|max:255',
        ],$arr_validate);
    
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
