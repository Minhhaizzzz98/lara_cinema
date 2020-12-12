<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class NhanVien extends Authenticatable
{

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
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

    public function chinhanh()
    {
        return $this->hasOne('App\ChiNhanh');
    }

    public function quanly()
    {
        return $this->hasOne('App\QuanLy');
    }




    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
