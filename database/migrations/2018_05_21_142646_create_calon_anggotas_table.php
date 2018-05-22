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
            $table->string('hardskill');
            $table->string('softskill');
            $table->boolean('white_card_dept_1')->nullable();
            $table->boolean('white_card_dept_2')->nullable();
            // $table->enum('status', ['proses', 'diterima', 'cantalope']);
            $table->enum('jenis_kelamin',['perempuan','laki-laki']);
            $table->string('departemen_final');
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
