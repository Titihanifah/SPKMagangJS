<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetDeptKemampuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('det_dept_kemampuans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_departemen')->unsigned();
            $table->integer('id_kemampuan_tambahan')->unsigned();
            $table->foreign('id_kemampuan_tambahan')
                ->references('id')->on('kemampuan_tambahans')
                ->onDelete('cascade');
            $table->foreign('id_departemen')
                ->references('id')->on('departemens')
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
        Schema::dropIfExists('det_dept_kemampuans');
    }
}
