<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rap extends Model
{
    public $timestamp = true;
    protected $table = 'raps';
    protected $primaryKey = 'id';
    protected $fillable = [
        'TenRap', 'chinhanh_id', 'TrangThai'
    ];

    
    public function lichchieus()
    {
        return $this->hasMany('App\LichChieu', 'phim_id', 'id');
    }
    public function ghes()
    {
        return $this->hasMany('App\Ghe', 'rap_id', 'id');
    }
    public function chinhanh()
    {
        return $this->belongsTo('App\ChiNhanh', 'chinhanh_id', 'id');
    }
}
