<?php

use Illuminate\Database\Seeder;

class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('kriterias')->insert(['nama_keriteria' => 'Tugas' , 'bobot' => '0.3']);
        DB::table('kriterias')->insert(['nama_kriteria' => 'Kehadiran', 'bobot' => '0.7']);


    }
}
