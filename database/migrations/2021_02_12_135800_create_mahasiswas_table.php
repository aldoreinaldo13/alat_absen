<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->increments('id_mahasiswa');
            $table->char('nama',100);
            $table->integer('npm');
            $table->char('uuid',30);
            $table->char('jurusan',50);
            $table->char('kelas',20);
            $table->char('email',50);
            $table->boolean('mode_waktu');
            $table->dateTime('waktu_datang');
            $table->dateTime('waktu_keluar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswas');
    }
}
