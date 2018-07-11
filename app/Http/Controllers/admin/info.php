<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\surket;
use App\lampiran;
use App\ktp;
use App\non_ktp;
use App\info as information;
use Auth;
use DB;
use Input;

class info extends Controller
{
    //

    public function list()
    {
    	$info = information::where('id_user',Auth::user()->id)->get();
    	return view('admin.info.list')->with('data',$info);    
    }

    public function createPage()
    {
    	return view('admin.info.formCreate');
    }

    public function editpage($id)
    {
    	$data = information::where('id_info',$id)->first();
    	return view('admin.info.formEdit')->with('data',$data);
    }

    public function edit()
    {
    	$data = information::where('id_info',Input::get('id'))->update([
    		'judul'	=>	Input::get('judul'),
    		'isi'	=>	Input::get('isi')
    	]);
    	return redirect('/admin/info/list');
    }

    public function view($data)
    {
    	$x = information::where('id_info',$data)->first();
    	return view('admin.info.view')->with('data',$x);
    }

    public function create()
    {
    	$x = information::create([
    		'judul'		=>	Input::get('judul'),
    		'isi'		=>	Input::get('isi'),
    		'tanggal'	=>	date('Y-m-d'),
    		'id_user'	=>	Auth::user()->id
    	]);
    	return redirect('/admin/info/list');
    }

    public function destroy($id)
    {
    	$x = information::where('id_info',$id)->delete();
    	return redirect('/admin/info/list');	
    }
}
