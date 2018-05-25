<?php

use Illuminate\Database\Seeder;

class RekomendasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //TODO: tanyakan lagi apakah tabel rekomendasi diperlukan ? karena sudah ada WHITE_CARD pd table calon_anggota
        DB::table('rekomendasis')->insert(['id_calon_anggota' => '1', 'id_departemen' => '1', 'keterangan' => 'memiliki public speaking yang bagus']);
    }
}
