<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuocGia extends Model
{
    //
    public $timestamp = true;
    protected $table = 'quoc_gias';
    protected $primaryKey = 'id';
    protected $fillable = [
        'TenQuocGia'
    ];

    
}
