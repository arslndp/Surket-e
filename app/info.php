<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class info extends Model
{
    //
    protected $table = 'informasi';

    protected $fillable = ['judul','isi','tanggal','id_user'];

    public $timestamps = false;
}
