<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ktp extends Model
{
    //
    protected $table = 'ktp';

    protected $fillable = ['nik' , 'nama', 'Tempat_ttl','jenis_kelamin','Alamat','rt','rw','kelurahan','kecamatan','agama','Status_nikah','pekerjaan','warga_negara','valid_till'];

    public $timestamps = false;

}
