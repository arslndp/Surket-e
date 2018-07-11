<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Surket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('surket', function (Blueprint $table) {
            $table->increments('id_surket');
            $table->string('jenis_surket');
            $table->string('nama_surket');
            $table->string('nik');
            $table->string('status');
            $table->string('dibuat');
            $table->string('diambil');
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
