<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lampiran extends Model
{
    //

    protected $table = 'lampiran';

    protected $fillable = ['nama_lampiran','source','nik','id_surket'];

    public $timestamps = false;
}
