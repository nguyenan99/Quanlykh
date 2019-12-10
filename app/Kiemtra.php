<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kiemtra extends Model
{
    protected $table = 'kiemtra';
    protected $fillable = ['thoigian', 'idlophoc', 'idhocvien', 'diem'];
    public $timestamps  = false;
}
