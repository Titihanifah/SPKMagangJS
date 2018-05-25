<?php

use Illuminate\Database\Seeder;

class DepartemenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('departemens')->insert(['nama_departemen' => "Kemuslimahan"]);
        DB::table('departemens')->insert(['nama_departemen' => "Infokes"]);
        DB::table('departemens')->insert(['nama_departemen' => "Media Center"]);
        DB::table('departemens')->insert(['nama_departemen' => "BSO GMMQ"]);
        DB::table('departemens')->insert(['nama_departemen' => "Kastrat"]);
        DB::table('departemens')->insert(['nama_departemen' => "Syar'e"]);


    }
}
