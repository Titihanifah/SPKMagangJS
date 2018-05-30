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
        $this->call(KriteriaSeeder::class);
        $this->call(DepartemenSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(KegiatanSeeder::class);
        $this->call(TugasSeeder::class);

    }
}
