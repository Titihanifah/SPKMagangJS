<?php

use Illuminate\Database\Seeder;

class PeriodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('periodes')->insert(['tahun' => '2018', 'periode' => '1439H', 'status' => 'aktif']);
        DB::table('periodes')->insert(['tahun' => '2017', 'periode' => '1438H', 'status' => 'tidak_aktif']);
    }
}
