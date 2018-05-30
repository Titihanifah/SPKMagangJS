<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TODO: password belum di enkripsi
        DB::table('users')->insert([
            'name' => 'titihanifah',
            'email' => 'titihanifah25@gmail.com',
            'role' => 0,
            'password' => bcrypt('haititi'),
            'id_departemen' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'role' => 1,
            'password' => bcrypt('haiadmin'),
        ]);
    }
}
