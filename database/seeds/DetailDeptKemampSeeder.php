<?php

use Illuminate\Database\Seeder;

class DetailDeptKemampSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('det_dept_kemampuans')->insert([
            'id_departemen' => 1,
            'id_kemampuan_tambahan' => 1
        ]);
        DB::table('det_dept_kemampuans')->insert([
            'id_departemen' => 2,
            'id_kemampuan_tambahan' => 2
        ]);
        DB::table('det_dept_kemampuans')->insert([
            'id_departemen' => 3,
            'id_kemampuan_tambahan' => 3
        ]);

    }
}
