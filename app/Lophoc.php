<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lophoc extends Model
{
    protected $table = 'lophoc';
    protected $fillable = ['ten', 'idkhoahoc'];
    public $timestamps = false;
}
