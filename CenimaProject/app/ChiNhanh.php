<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiNhanh extends Model
{
    public $timestamp = false;
    protected $table = 'chi_nhanhs';
    protected $primaryKey = 'id';
    protected $fillable = [
        'TenRap', 'DiaChi', 'SDT', 'TrangThai'
    ];
    public function raps()
    {
        return $this->hasMany('App\Rap', 'chinhanh_id', 'id');
    }
}
