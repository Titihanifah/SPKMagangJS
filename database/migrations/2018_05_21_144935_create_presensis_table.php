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
            $table->integer('id_detail_calon_anggota')->unsigned();
            $table->integer('id_kegiatan')->unsigned();
            $table->boolean('kehadiran'); // 0 tidak hadir, 1 hadir
            $table->foreign('id_detail_calon_anggota')
                ->references('id')->on('detail_calon_anggotas')
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
