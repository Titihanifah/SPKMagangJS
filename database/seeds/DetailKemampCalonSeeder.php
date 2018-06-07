<?php

use Illuminate\Database\Seeder;

class DetailKemampCalonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('det_kemampuan_calons')->insert([
            'id_kemampuan_tambahan' => 1,
            'id_calon_anggota' => 1,
        ]);
        DB::table('det_kemampuan_calons')->insert([
            'id_kemampuan_tambahan' => 2,
            'id_calon_anggota' => 2,
        ]);
    }
}
