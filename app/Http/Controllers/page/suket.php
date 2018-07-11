<?php

namespace App\Http\Controllers\page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use App\surket;
use App\ktp;
use App\lampiran;
use App\non_ktp;
use Session;
use DB;

class suket extends Controller
{
    //

    public function formKtp()
    {
        return view('form.ktp');
    }

    public function ktp(Request $request)
    {
    	
    	$path = 'storage';

    	$filename = str_replace(' ', '_',Input::file('kk')->getClientOriginalName());

    	$file = $request->file('kk');

    	//uploaded tapi ga sesuai ekspetasi bro
    	//$upload = Input::file('logo')->store($path);
		$upload = $file->move($path,$filename);

    	$addSurket = surket::create([
    			'jenis_surket'	=>	'peng_KTP',
    			'nama_surket'	=>	'Surat Keterangan Pengantar Ktp',
    			'nik'			=>	Session::get('nik'),
    			'status'		=>	'prosses',
    			'dibuat'		=>	date('Y-m-d'),
    			'diambil'		=>	'null'
    	]);

    	$id_surket = surket::orderBy('id_surket','desc')->first();

    	$addLampiran = lampiran::create([
    			'nama_lampiran'	=>	'Kartu Keluarga',
    			'source'		=> 	$upload,
    			'nik'			=>	Session::get('nik'),
    			'id_surket'		=>	$id_surket->id_surket
    	]);

        $non_ktp = non_ktp::create([
                'id_surket'     =>  $id_surket->id_surket,
                'nama'          =>  Input::get('nama'),
                'jenis_kelamin' =>  Input::get('gender'),
                'Tempat_ttl'    =>  Input::get('tempat').','.Input::get('tgl').'-'.Input::get('bln').'-'.Input::get('thn'),
                'jenis_kelamin' =>  Input::get('gender'),
                'alamat'        =>  Input::get('alamat'),
                'rt'            =>  Session::get('rt'),
                'rw'            =>  Session::get('rw'),
                'kelurahan'     =>  Session::get('kelurahan'),
                'kecamatan'     =>  Session::get('kecamatan'),
                'agama'         =>  Input::get('agama'),
                'Status_nikah'  =>  Input::get('statusnikah'),
                'pekerjaan'     =>  Input::get('job'),
                'warga_negara'  =>  'INDONESIA',
                'valid_till'    =>  'Seumur hidup'
        ]);

    	return redirect('/')->with('pesan','sukses mengupload data untuk surat pengantar pembuatan KTP , selanjutnya silahkan tunggu hingga surat anda telah selesai');
    }

    public function waitinglist()
    {
        $data = surket::where('nik',Session::get('nik'))->where('status','prosses')->get();
        return view('suket.waitingList')->with('data',$data);
    }

    public function diSetujui()
    {
        $data = surket::where('nik',Session::get('nik'))->where('status','setuju')->get();
        return view('suket.acceptList')->with('data',$data);   
    }
}
