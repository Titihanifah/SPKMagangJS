<?php

use Illuminate\Database\Seeder;

class DetailCalonAnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('detail_calon_anggotas')->insert(['id_departemen' => "1", 'id_calon_anggota' => "1", 'prioritas' => "1"]);
        DB::table('detail_calon_anggotas')->insert(['id_departemen' => "1", 'id_calon_anggota' => "1", 'prioritas' => "1"]);
        DB::table('detail_calon_anggotas')->insert(['id_departemen' => "1", 'id_calon_anggota' => "1", 'prioritas' => "1"]);
    }
}
