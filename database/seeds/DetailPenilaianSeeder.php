<?php

use Illuminate\Database\Seeder;

class DetailPenilaianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('detail_penilaians')->insert(['nilai' => "10", 'id_penilaian' => "1", 'id_kriteria' => "1"]);
        DB::table('detail_penilaians')->insert(['nilai' => "25", 'id_penilaian' => "2", 'id_kriteria' => "1"]);
        DB::table('detail_penilaians')->insert(['nilai' => "50", 'id_penilaian' => "1", 'id_kriteria'=> "2" ]);

    }
}
