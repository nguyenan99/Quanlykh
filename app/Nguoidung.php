<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nguoidung extends Model
{
    protected $table = 'nguoidung';
    protected $fillable = ['ten', 'ngaysinh', 'email', 'idgroup'];
    public $timestamps = false;
}
