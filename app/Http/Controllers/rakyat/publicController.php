<?php

namespace App\Http\Controllers\rakyat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ktp;
use Session;
use Input;
use DB;

class publicController extends Controller
{
    //

    public function logKtp()
    {
    	$nik = Input::get('nik');
    	$data = ktp::where('nik',$nik)->first();
		//Session::put('nik',$data->nik);
    	Session::put(['nik' => $data->nik]);
    	Session::put(['nama' => $data->Nama]);
    	Session::put(['Tempat_ttl' => $data->Tempat_ttl]);
    	Session::put(['jenis_kelamin' => $data->jenis_kelamin]);
    	Session::put(['Alamat' => $data->Alamat]);
    	Session::put(['rt' => $data->rt]);
    	Session::put(['rw' => $data->rw]);
    	Session::put(['kelurahan' => $data->kelurahan]);
    	Session::put(['kecamatan' => $data->kecamatan]);
    	Session::put(['agama' => $data->agama]);
    	Session::put(['Status_nikah' => $data->Status_nikah]);
    	Session::put(['pekerjaan' => $data->pekerjaan]);
    	Session::put(['warga_negara' => $data->warga_negara]);
    	Session::put(['valid_till' => $data->valid_till]);
    	return redirect('/')->with('msg','berhasil login');
    }

    public function logOutKtp()
    {
        Session::put(['nik' => '']);
        Session::put(['nama' => '']);
        Session::put(['Tempat_ttl' => '']);
        Session::put(['jenis_kelamin' => '']);
        Session::put(['Alamat' => '']);
        Session::put(['rt' => '']);
        Session::put(['rw' => '']);
        Session::put(['kelurahan' => '']);
        Session::put(['kecamatan' => '']);
        Session::put(['agama' => '']);
        Session::put(['Status_nikah' => '']);
        Session::put(['pekerjaan' => '']);
        Session::put(['warga_negara' => '']);
        Session::put(['valid_till' => '']);
        return redirect('/')->with('msg','berhasil Keluar');
    }
}
