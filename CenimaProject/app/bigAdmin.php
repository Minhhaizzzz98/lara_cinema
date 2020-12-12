<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bigAdmin extends Model
{
    protected $fillable = [
      "name"
    ];

    protected $primaryKey = 'MaNV';


    public function quanly()
    {
        return $this->hasMany('App\QuanLy');
    }

}
