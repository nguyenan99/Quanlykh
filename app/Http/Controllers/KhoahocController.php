<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Khoahoc;
use App\Lophoc;
use DB;
class KhoahocController extends Controller
{
    public function index(){
    	$data = Khoahoc::all();
		 return view('danhsachkhoahoc',['khoahoc' => $data]);
    }

    public function getChitietkhoahoc($id){
    	$chitiet = Khoahoc::find($id);
    	return view('chitietkhoahoc', compact('chitiet'));
    }

    public function themkhoahoc(){
    	return view('themkhoahoc');
    }


    public function xoakhoahoc($id){
        $khoahoc = Khoahoc::findorfail($id);
        $khoahoc->delete();
        return redirect()->route('danhsachkhoahoc');
    }
}
