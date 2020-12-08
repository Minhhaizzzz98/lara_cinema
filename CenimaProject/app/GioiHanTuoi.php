<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GioiHanTuoi extends Model
{
    //
    public $timestamp = true;
    protected $table = 'gioi_han_tuoi';
    protected $primaryKey = 'id';
    protected $fillable = [
        'TenGioiHan','TrangThai'
    ];

}
