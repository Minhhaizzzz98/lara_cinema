<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiTGChieu extends Model
{
    //
    public $timestamp = false;
    protected $table = 'loai_tg_chieus';
    protected $primaryKey = 'id';
    protected $fillable = [
        'TenLoaiTGChieu', 'Gia_TG','TrangThai'
    ];
   
}
