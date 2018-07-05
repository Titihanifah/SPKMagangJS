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
        DB::table('detail_calon_anggotas')->insert([
            'id_departemen' => 1,
            'id_calon_anggota' => 1,
            'prioritas' => 1
        ]);
        DB::table('detail_calon_anggotas')->insert([
            'id_departemen' => 3,
            'id_calon_anggota' => 1,
            'prioritas' => 2
        ]);

        DB::table('detail_calon_anggotas')->insert([
            'id_departemen' => 3,
            'id_calon_anggota' => 2,
            'prioritas' => 1
        ]);
        DB::table('detail_calon_anggotas')->insert([
            'id_departemen' => 4,
            'id_calon_anggota' => 2,
            'prioritas' => 2
        ]);

        DB::table('detail_calon_anggotas')->insert([
            'id_departemen' => 2,
            'id_calon_anggota' => 3,
            'prioritas' => 2
        ]);
        DB::table('detail_calon_anggotas')->insert([
            'id_departemen' => 1,
            'id_calon_anggota' =>3,
            'prioritas' => 1
        ]);

        DB::table('detail_calon_anggotas')->insert([
            'id_departemen' => 2,
            'id_calon_anggota' => 4,
            'prioritas' => 2
        ]);
        DB::table('detail_calon_anggotas')->insert([
            'id_departemen' => 4,
            'id_calon_anggota' => 4,
            'prioritas' => 1
        ]);

        DB::table('detail_calon_anggotas')->insert([
            'id_departemen' => 6,
            'id_calon_anggota' => 5,
            'prioritas' => 2
        ]);
        DB::table('detail_calon_anggotas')->insert([
            'id_departemen' => 3,
            'id_calon_anggota' => 5,
            'prioritas' => 1
        ]);
    }
}
