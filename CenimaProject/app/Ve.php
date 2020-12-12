<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ve extends Model
{
    public $timestamps = TRUE;

    protected $table = 'ves';
    protected $primaryKey = 'id';
    protected $fillable = [
        'Gia', 'lichchieu_id', 'ghe_id', 'TrangThai'
    ];

    public function ghe() {
        return $this->belongsTo('App\Ghe', 'ghe_id', 'id');
    }
    public function lichchieu() {
        return $this->belongsTo('App\LichChieu', 'lichchieu_id', 'id');
    }
}
