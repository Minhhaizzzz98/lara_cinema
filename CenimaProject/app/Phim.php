<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DaoDien;

class Phim extends Model
{
    public $timestamp = true;
    protected $table = 'phims';
    protected $primaryKey = 'id';
    protected $fillable = [
        'TenPhim','NgayDKChieu','daodien_id','NgayKetThuc','ThoiLuong','HinhAnh', 'TrangThai'
    ];

    public function dienviens() {
        return $this->belongsToMany('App\DienVien', 'phim_dienvien', 'phim_id', 'dienvien_id');
    }

    public function theloais() {
        return $this->belongsToMany('App\LoaiPhim', 'phim_theloai', 'phim_id', 'loaiphim_id');
    }

    public function daodiens() {
        return $this->belongsTo('App\DaoDien', 'daodien_id', 'id');
    }
    

    public function lichchieus()
    {
        return $this->hasMany('App\LichChieu', 'phim_id', 'id');
    }
}
