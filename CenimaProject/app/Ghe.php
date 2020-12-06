<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ghe extends Model
{
    public $timestamp = false;
    protected $table = 'ghes';
    protected $primaryKey = 'id';
    protected $fillable = [
        'TrangThai'
    ];

    public function vitri()
    {
        return $this->hasOne('App\ViTri', 'ghe_id', 'id');
    }
    
}
