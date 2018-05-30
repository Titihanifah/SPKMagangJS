<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
//            TODO: nanti di hilangin emailnya
            $table->string('email')->unique();
//            TODO: tanyakan kenapa smallInteger
            $table->smallInteger('role')->default(0); // 0 kadept , 1 BKK
            $table->string('password');
            $table->integer('id_departemen')->unsigned()->nullable();
            $table->foreign('id_departemen')
                ->references('id')->on('departemens')
                ->onDelete('cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
