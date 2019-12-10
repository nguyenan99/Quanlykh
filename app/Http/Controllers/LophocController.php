<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lophoc;
use DB;
class LophocController extends Controller
{
    public function lophoc(){
    	 $lophoc = Lophoc::all();
    	 return view('page',['lophoc' => $lophoc]);
    }
}
