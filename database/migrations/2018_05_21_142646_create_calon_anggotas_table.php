<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalonAnggotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calon_anggotas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_calon_anggota');
            $table->enum('jenis_kelamin',['laki-laki','perempuan']);
            $table->string('asal')->nullable();
            $table->string('alamat_yogyakarta')->nullable();
            $table->string('sumber_belajar_islam')->nullable();
            $table->string('pengalaman_organisasi')->nullable();
            $table->string('pengalaman_kepanitiaan')->nullable();
            $table->string('minat')->nullable();
            $table->string('hardskill')->nullable();
            $table->string('softskill')->nullable();
            $table->string('riwayat_penyakit')->nullable();
            $table->string('departemen_akhir')->nullable();
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
        Schema::dropIfExists('calon_anggotas');
    }
}
