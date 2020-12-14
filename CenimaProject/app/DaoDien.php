<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Phim;

class DaoDien extends Model
{
    //
    
    public $timestamp = true;
    protected $table = 'dao_diens';
    protected $primaryKey = 'id';
    protected $fillable = [
        'HoTen','NamSinh','TrangThai'
    ];

    public function phims() {
        return $this->hasMany('App\Phim', 'daodien_id', 'id');
    }

}
