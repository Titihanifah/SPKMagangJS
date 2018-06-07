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
//            TODO: ini menggunakan string apa text ya? apa bedanya string dg text
            $table->string('hardskill');
            $table->string('softskill');
            // pemberian tanda khusus untuk anggota yang memiliki kemampuan khusus supaya nilainya berada di atas
            $table->boolean('white_card_dept_1')->nullable();
            $table->boolean('white_card_dept_2')->nullable();
//            TODO: mending 1 0 atau laki-laki perempuan
            $table->boolean('jenis_kelamin'); // 0 : laki-laki, 1 perempuan
            $table->string('departemen_final')->nullable();
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
