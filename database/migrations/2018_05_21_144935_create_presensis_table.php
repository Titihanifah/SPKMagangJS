<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresensisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presensis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_calon_anggota')->unsigned();
            $table->integer('id_kegiatan')->unsigned();
            $table->enum('kehadiran',['hadir','tidak hadir']);
            $table->foreign('id_calon_anggota')
                ->references('id')->on('calon_anggotas')
                ->onDelete('cascade');
            $table->foreign('id_kegiatan')
                ->references('id')->on('kegiatans')
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
        Schema::dropIfExists('presensis');
    }
}
