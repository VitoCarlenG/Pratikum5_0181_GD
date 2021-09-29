<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MigrasiDataPegawai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pegawai', function (Blueprint $table) {
            $table->id();
            $table->string('nip');
            $table->string('nama_pegawai');
            $table->unsignedBigInteger('departemen_id');
            $table->foreign('departemen_id')->references('id')->on('data_departemen');
            $table->string('email');
            $table->integer('telepon');
            $table->boolean('gender');
            $table->boolean('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_pegawai');
    }
}
