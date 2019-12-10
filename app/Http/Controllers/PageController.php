<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Khoahoc;
use DB;
class PageController extends Controller
{
    public function index(){
		$data = Khoahoc::all();
		 return view('page',['khoahoc' => $data]);
    }

    
    
    
}
