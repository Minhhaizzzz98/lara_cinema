<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LichChieu extends Model
{
    public $timestamp = true;
    protected $table = 'lich_chieus';
    protected $primaryKey = 'id';
    protected $fillable = [
        'gia_id', 'thoigianchieu_id', 'phim_id', 'rap_id', 'TrangThai'
    ];

    public function gia()
    {
        return $this->belongsTo('App\Gia', 'gia_id', 'id');
    }
    public function thoigianchieu()
    {
        return $this->belongsTo('App\ThoiGianChieu', 'thoigianchieu_id', 'id');
    }
    public function phim()
    {
        return $this->belongsTo('App\Phim', 'phim_id', 'id');
    }
    public function rap()
    {
        return $this->belongsTo('App\Rap', 'rap_id', 'id');
    }
    public function ves()
    {
        return $this->hasMany('App\Ve', 'lichchieu_id', 'id');
    }
}
