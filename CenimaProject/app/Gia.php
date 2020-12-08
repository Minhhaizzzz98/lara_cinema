<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gia extends Model
{
    public $timestamp = true;
    protected $table = 'gias';
    protected $primaryKey = 'id';
    protected $fillable = [
        'DonGia', 'LoaiGia', 'TrangThai'
    ];

    public function lichchieus() {
        return $this->hasMany('App\LichChieu', 'gia_id', 'id');
    }
}
