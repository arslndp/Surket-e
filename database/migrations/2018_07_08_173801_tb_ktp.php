<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbKtp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('ktp', function (Blueprint $table) {
            $table->integer('nik')->primarykey(); //rancu
            $table->string('Nama');
            $table->string('Tempat_ttl');
            $table->string('jenis_kelamin');
            $table->string('Alamat');
            $table->string('rt');
            $table->string('rw');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('agama');
            $table->string('Status_nikah');
            $table->string('pekerjaan');
            $table->string('warga_negara');
            $table->string('valid_till');
            //$table->rememberToken();
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
