<?php

use Illuminate\Database\Seeder;

class KegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TODO: diteliti ini belum ada waktu dan kegiatan
        DB::table('kegiatans')->insert(['nama_kegiatan' => 'First Gathering','tanggal_kegiatan' => now(),'waktu' => now(), 'id_departemen' => 1, 'id_periode' => 1]);
        DB::table('kegiatans')->insert(['nama_kegiatan' => 'Pelatihan Desain','tanggal_kegiatan' => now(),'waktu' => now(), 'id_departemen' => 2, 'id_periode' => 1]);
        DB::table('kegiatans')->insert(['nama_kegiatan' => 'LK','tanggal_kegiatan' => now(),'waktu' => now(), 'id_departemen' => 3, 'id_periode' => 1]);
        DB::table('kegiatans')->insert(['nama_kegiatan' => 'Tahsin','tanggal_kegiatan' => now(),'waktu' => now(), 'id_departemen' => 4, 'id_periode' => 1]);



    }
}
