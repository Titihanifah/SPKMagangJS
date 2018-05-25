<?php

use Illuminate\Database\Seeder;

class PenilaianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TODO: penilaian total_nilai sifatnya masih dummy.. seharusnya total nilai hasil penjumlahan dr detail_penialain
        DB::table(penilaians)->insert(['total_nilai' => 65, 'id_detail_calon_anggota' => '1']);
        DB::table(penilaians)->insert(['total_nilsi' => 45, 'id_detail_calon_anggota' => '2']);
    }
}
