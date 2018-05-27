<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKegiatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kegiatans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_kegiatan');;
            $table->date('tanggal_kegiatan');
            $table->time('waktu');
            $table->integer('id_departemen')->unsigned();
            $table->foreign('id_departemen')
                ->references('id')->on('departemens')
                ->onDelete('cascade');
            $table->integer('id_periode')->unsigned();
            $table->foreign('id_periode')
                ->references('id')->on('periodes')
                ->onDelete('cascade');
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
        Schema::dropIfExists('kegiatans');
    }
}
