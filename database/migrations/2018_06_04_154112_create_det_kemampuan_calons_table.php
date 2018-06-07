<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetKemampuanCalonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('det_kemampuan_calons', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_kemampuan_tambahan')->unsigned();
            $table->integer('id_calon_anggota')->unsigned();
            $table->boolean('kepunyaan')->nullable();
            $table->foreign('id_kemampuan_tambahan')
                ->references('id')->on('kemampuan_tambahans')
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
        Schema::dropIfExists('det_kemampuan_calons');
    }
}
