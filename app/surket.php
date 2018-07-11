<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class surket extends Model
{
    //

    protected $table = 'surket';

    protected $fillable = ['jenis_surket','nama_surket','nik','status','dibuat','diambil'];

    public $timestamps = false;
}
