<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rap extends Model
{
    public $timestamp = true;
    protected $table = 'raps';
    protected $primaryKey = 'id';
    protected $fillable = [
        'TenPhim', 'TrangThai'
    ];

    public function dienviens() {
        return $this->belongsToMany('App\DienVien', 'phim_dienvien', 'phim_id', 'dienvien_id');
    }
    public function lichchieus()
    {
        return $this->hasMany('App\LichChieu', 'phim_id', 'id');
    }
    public function ghes()
    {
        return $this->hasMany('App\Ghe', 'rap_id', 'id');
    }
}
