<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Khoahoc extends Model
{
    protected $table = 'khoahoc';
    protected $fillable = ['ten', 'ngonngu', 'thoigianbatdau', 'thoigianketthuc'];
    public $timestamps = false;
}
