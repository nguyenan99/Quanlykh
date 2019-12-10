<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buoihoc extends Model
{
    protected $table = 'buoihoc';
    protected $fillable = ['noidung', 'thoigian', 'diemdanh', 'idlophoc'];
    public $timestamp = false;
}
