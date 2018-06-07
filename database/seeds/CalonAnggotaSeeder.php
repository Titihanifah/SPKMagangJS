<?php

use Illuminate\Database\Seeder;

class CalonAnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('calon_anggotas')->insert([
            'nama_calon_anggota' => "Denis",
            'hardskill' => 'Desain Kaos',
            'softskill' => 'Jujur',
            'jenis_kelamin' =>  1,
            'id_periode' => 1
        ]);
        DB::table('calon_anggotas')->insert([
            'nama_calon_anggota' => "Tania",
            'hardskill' => 'Editing Video' ,
            'softskill' => 'Bertanggung Jawab',
            'jenis_kelamin' =>  1,
            'id_periode' => 1
        ]);
        DB::table('calon_anggotas')->insert([
            'nama_calon_anggota' => "Sandi",
            'hardskill' => 'Hafalan Quran',
            'softskill' => 'Public Speaking' ,
            'jenis_kelamin' =>  0,
            'id_periode' => 1
        ]);
        DB::table('calon_anggotas')->insert([
            'nama_calon_anggota' => "Seno",
            'hardskill' => 'Developing Web',
            'softskill' => 'Komunikasi' ,
            'jenis_kelamin' =>  0,
            'id_periode' => 1
        ]);
        DB::table('calon_anggotas')->insert([
            'nama_calon_anggota' => "Amirudin",
            'hardskill' => '-' ,
            'softskill' => 'Komunikasi' ,
            'jenis_kelamin' =>  0,
            'id_periode' => 1
        ]);

    }
}
