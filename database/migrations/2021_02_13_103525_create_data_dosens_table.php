<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataDosensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_dosen', function (Blueprint $table) {
            $table->increments('id');
            $table->char('nama',100);
            $table->integer('nid');
            $table->char('uuid',30);
            $table->char('jabatan',50);
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
        Schema::dropIfExists('data_dosen');
    }
}
