<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailPenilaiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_penilaians', function (Blueprint $table) {
            $table->increments('id');
//            TODO: ganti nilai_penilaian
            $table->integer('nilai')->unsigned();
            $table->integer('id_penilaian')->unsigned();
            $table->integer('id_kriteria')->unsigned();
            $table->foreign('id_penilaian')
                ->references('id')->on('penilaians')
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
        Schema::dropIfExists('detail_penilaians');
    }
}
