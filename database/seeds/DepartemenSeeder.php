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
        DB::table('departemens')->insert(['nama_departemen' => "Kastrat"]);
        DB::table('departemens')->insert(['nama_departemen' => "Kemuslimahan"]);
        DB::table('departemens')->insert(['nama_departemen' => "BSO DOSHA"]);
        DB::table('departemens')->insert(['nama_departemen' => "BSO GMMQ"]);
        DB::table('departemens')->insert(['nama_departemen' => "Shar'E"]);
        DB::table('departemens')->insert(['nama_departemen' => "Direktorat Nasional"]);
        DB::table('departemens')->insert(['nama_departemen' => "Jaringan"]);
        DB::table('departemens')->insert(['nama_departemen' => "DPS"]);
        DB::table('departemens')->insert(['nama_departemen' => "MC"]);
        DB::table('departemens')->insert(['nama_departemen' => "Sosmas"]);
    }
}
