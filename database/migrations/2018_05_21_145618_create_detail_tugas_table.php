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
            $table->integer('nilai_tugas')->nullable();
            $table->integer('id_tugas')->unsigned();
            $table->integer('id_detail_calon_anggota')->unsigned();
            $table->foreign('id_tugas')
                ->references('id')->on('tugas')
                ->onDelete('cascade');
            $table->foreign('id_detail_calon_anggota')
                ->references('id')->on('detail_calon_anggotas')
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
