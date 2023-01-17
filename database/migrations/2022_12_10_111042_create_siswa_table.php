<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id('nisn');
            $table->string('nama');
            $table->string('tempat_lahir')->nullable();
            // $table->foreign('id_kelas');
            $table->string('no_hp');
            $table->date('tanggal_lahir')->nullable();
            $table->string('jenis_kelamin');
            $table->string('alamat')->nullable();
            $table->string('nama_wali')->nullable();
            $table->string('telp_wali')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
}