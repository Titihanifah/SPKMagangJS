<?php

use Illuminate\Database\Seeder;

class DetailTugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('detail_tugas')->insert([
            'nilai_tugas' => '25',
            'id_tugas' => '1',
            'id_detail_calon_anggota' => '1'
        ]);
        DB::table('detail_tugas')->insert([
            'nilai_tugas' => '55',
            'id_tugas' => '1',
            'id_detail_calon_anggota' => '2'
        ]);
        DB::table('detail_tugas')->insert([
            'nilai_tugas' => '60',
            'id_tugas' => '2',
            'id_detail_calon_anggota' => '3'
        ]);
        DB::table('detail_tugas')->insert([
            'nilai_tugas' => '70',
            'id_tugas' => '2',
            'id_detail_calon_anggota' => '4'
        ]);

    }
}
