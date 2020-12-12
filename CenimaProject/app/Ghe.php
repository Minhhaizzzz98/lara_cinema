<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ghe extends Model
{
    public $timestamp = false;
    protected $table = 'ghes';
    protected $primaryKey = 'id';
    protected $fillable = [
        'rap_id', 'TrangThai'
    ];

    public function vitri()
    {
        return $this->hasOne('App\ViTri', 'ghe_id', 'id');
    }
    public function rap() {
        return $this->belongsTo('App\Rap', 'rap_id', 'id');
    }
    public function ves()
    {
        return $this->hasMany('App\Ve', 'ghe_id', 'id');
    }
    
}
