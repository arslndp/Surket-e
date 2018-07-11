<?php

namespace App\Http\Controllers\page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\surket;
use App\lampiran;
use App\ktp;
use App\non_ktp;
use App\info as information;
use DB;
use Input;

class info extends Controller
{
    //

    public function list()
    {
    	$info = information::get();
    	return view('info.list')->with('data',$info);    
    }

    public function view($id)
    {
    	$data = information::where('id_info',$id)->first();
    	return view('info.view')->with('data',$data);
    }
}
