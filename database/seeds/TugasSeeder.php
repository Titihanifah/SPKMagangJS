<?php

use Illuminate\Database\Seeder;

class TugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TODO: perlukah adanya deadline, jika ya tipe datanya apa?
        DB::table('tugas')->insert(['nama_tugas' => 'Essay', 'deskripsi' => 'membuat essay dengan tema pentingnya agama dalam kehidupan', 'deadline' => now(),'id_departemen' => '1', 'id_periode' => '1']);
        DB::table('tugas')->insert(['nama_tugas' => 'Digitalisasi Buku', 'deskripsi' => 'membuat digitalisasi buku minimal 6 halaman A4 (softfile)','deadline' => now(), 'id_departemen' => '2', 'id_periode' => '1']);

    }
}
