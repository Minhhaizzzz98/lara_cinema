<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuanLy extends Model
{
    protected $fillable = [
        'HoNV',
        'TenNV',
        'ChucVu',
        'TenTK',
        'password',
        'Ma_NQL',
        'NgSinh',
        'DiaChi',
        'SDT',
        'Email',
        'isLocked',

    ];

    protected $primaryKey = 'MaNV';

    public function chucvu()
    {
        return $this->belongsTo('App\ChucVu');
    }

    public function bigAdmin()
    {
        return $this->hasOne('App\bigAdmin');
    }

    public function NhanVien()
    {
        return $this->hasMany('App\NhanVien');
    }
}
