<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailTugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_tugas', function (Blueprint $table) {
            $table->increments('id');
//            TODO: ganti nilai_tugas
            $table->integer('nilai_tugas')->nullable();
            $table->integer('id_tugas')->unsigned();
            $table->integer('id_calon_anggota')->unsigned();
            $table->foreign('id_tugas')
                ->references('id')->on('tugas')
                ->onDelete('cascade');
            $table->foreign('id_calon_anggota')
                ->references('id')->on('calon_anggotas')
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
        Schema::dropIfExists('detail_tugas');
    }
}
