<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenilaiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penilaians', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nilai');
            $table->integer('id_detail_calon_anggota')->unsigned();
            $table->integer('id_kriteria')->unsigned();
            $table->foreign('id_detail_calon_anggota')
                ->references('id')->on('detail_calon_anggotas')
                ->onDelete('cascade');
            $table->foreign('id_kriteria')
                ->references('id')->on('kriterias')
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
        Schema::dropIfExists('penilaians');
    }
}
