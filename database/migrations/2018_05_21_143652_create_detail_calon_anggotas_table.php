<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailCalonAnggotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_calon_anggotas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_departemen')->unsigned()->nullable();
            $table->integer('id_calon_anggota')->unsigned();
            $table->integer('prioritas');
            $table->integer('rekomendasi')->nullable()->unsigned(); //rekomendasi dr kadept
            $table->boolean('favorit')->nullable();
            $table->text('keterangan')->nullable();
            $table->foreign('id_departemen')
                ->references('id')->on('departemens')
                ->onDelete('cascade');
            $table->foreign('id_calon_anggota')
                ->references('id')->on('calon_anggotas')
                ->onDelete('cascade');
            $table->foreign('rekomendasi')
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
        Schema::dropIfExists('detail_calon_anggotas');
    }
}
