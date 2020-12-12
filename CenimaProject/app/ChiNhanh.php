<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiNhanh extends Model
{
    protected $fillable = [

        'TenChiNhanh',
        'DiaChi',
        'SDT',
        'MaNV',
       'TrangThai'
    ];

    protected $primaryKey = 'id';

    public function nhanvien()
    {
        return $this->belongsTo('App\NhanVien');
    }

    public function rap()
    {
        return $this->hasMany('App\Rap');
    }
}
