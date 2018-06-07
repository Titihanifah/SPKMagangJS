<?php

use Illuminate\Database\Seeder;

class KemampuanTambahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('kemampuan_tambahans')->insert([
            'nama_kemampuan' => 'Public Speaking'
        ]);
        DB::table('kemampuan_tambahans')->insert([
            'nama_kemampuan' => 'Desain Poster'
        ]);
        DB::table('kemampuan_tambahans')->insert([
            'nama_kemampuan' => 'Bacaan Quran bagus'
        ]);
        DB::table('kemampuan_tambahans')->insert([
            'nama_kemampuan' => 'Editing Video'
        ]);
    }
}
