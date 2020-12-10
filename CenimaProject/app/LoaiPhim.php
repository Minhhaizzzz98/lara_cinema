<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiPhim extends Model
{
    //
    public $timestamp = true;
    protected $table = 'loai_phims';
    protected $primaryKey = 'id';
    protected $fillable = [
        'TenLoaiPhim','TrangThai'
    ];
    public function phims()
    {
        return $this->belongsToMany('App\Phim', 'phim_theloai', 'phim_id', 'theloai_id');
    }

   
}
