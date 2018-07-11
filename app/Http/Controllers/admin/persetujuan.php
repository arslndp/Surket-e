<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\surket;
use App\lampiran;
use App\ktp;
use App\non_ktp;


class persetujuan extends Controller
{
    //
    public function list()
    {
    	$data = surket::orderBy('id_surket','desc')->get();
    	return view('/admin/listPersetujuan')->with('data',$data);
    }

    public function liatsurat($data)
    {
    	$surket = surket::where('id_surket',$data)->first();
    	if ($surket->jenis_surket == 'peng_KTP') 
    	{
    		$user 		= ktp::where('nik',$surket->nik)->first();
	    	$lampiran 	= lampiran::where('id_surket',$data)->get();
	    	$non_ktp	= non_ktp::where('id_surket',$surket->id_surket)->first();
	    	return view('/admin/surket/ktp')->with('surket',$surket)->with('user',$user)->with('lampiran',$lampiran)->with('non_ktp',$non_ktp);
    	}
    }

    public function setujui($data)
    {
    	$surket = surket::where('id_surket',$data)->update(['status'	=>	'setuju']);
    	return redirect()->back();
    }

    public function tidakSetuju($data)
    {
    	$surket = surket::where('id_surket',$data)->update(['status'	=>	'tidak di setuju']);
    	return redirect()->back();
    }
}
