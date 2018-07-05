<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(PeriodeSeeder::class);
        $this->call(CalonAnggotaSeeder::class);
//        $this->call(KriteriaSeeder::class);
        $this->call(DepartemenSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(DetailCalonAnggotaSeeder::class);
        $this->call(KegiatanSeeder::class);
        $this->call(TugasSeeder::class);
        $this->call(PresensiSeeder::class);
        $this->call(DetailTugasSeeder::class);
//        $this->call(PenilaianSeeder::class);
//        $this->call(KemampuanTambahanSeeder::class);
//        $this->call(DetailDeptKemampSeeder::class);
//        $this->call(DetailKemampCalonSeeder::class);

    }
}
