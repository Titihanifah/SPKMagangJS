<?php

use Illuminate\Database\Seeder;

class PresensiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TODO: tidak hadir bisakah tidak di beri _
        DB::table('presensis')->insert([
            'id_calon_anggota' => 1,
            'id_kegiatan' => 1,
            'kehadiran' => 0
        ]);
        DB::table('presensis')->insert([
            'id_calon_anggota' => 2,
            'id_kegiatan' => 2,
            'kehadiran' => 1
        ]);

    }
}
