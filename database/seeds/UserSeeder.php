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


        DB::table('users')->insert([
            'name' => 'BKK',
            'email' => 'bkk@js.ugm.ac.id',
            'role' => 1,
            'password' => bcrypt('haibkk'),
        ]);
        DB::table('users')->insert([
            'name' => 'Kadept Kastrat',
            'email' => 'kastrat@js.ugm.ac.id',
            'role' => 0,
            'password' => bcrypt('haikastrat'),
            'id_departemen' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'Kadept Kemuslimahan',
            'email' => 'kemuslimahan@js.ugm.ac.id',
            'role' => 0,
            'password' => bcrypt('haikemuslimahan'),
            'id_departemen' => 2,
        ]);
        DB::table('users')->insert([
            'name' => 'Kadept BSO DOSHA',
            'email' => 'bsodosha@js.ugm.ac.id',
            'role' => 0,
            'password' => bcrypt('haibsodosha'),
            'id_departemen' => 3,
        ]);
        DB::table('users')->insert([
            'name' => 'Kadept BSO GMMQ',
            'email' => 'bsogmmq@js.ugm.ac.id',
            'role' => 0,
            'password' => bcrypt('haibsogmmq'),
            'id_departemen' => 4,
        ]);
        DB::table('users')->insert([
            'name' => 'Kadept Shar\'E',
            'email' => 'share@js.ugm.ac.id',
            'role' => 0,
            'password' => bcrypt('haishare'),
            'id_departemen' => 5,
        ]);
        DB::table('users')->insert([
            'name' => 'Kadept Direktorat Nasional',
            'email' => 'direktoratnasional@js.ugm.ac.id',
            'role' => 0,
            'password' => bcrypt('haidirektoratnasional'),
            'id_departemen' => 6,
        ]);
        DB::table('users')->insert([
            'name' => 'Kadept Jaringan',
            'email' => 'jaringan@js.ugm.ac.id',
            'role' => 0,
            'password' => bcrypt('haijaringan'),
            'id_departemen' => 7,
        ]);
        DB::table('users')->insert([
            'name' => 'Kadept DPS',
            'email' => 'dps@js.ugm.ac.id',
            'role' => 0,
            'password' => bcrypt('haidps'),
            'id_departemen' => 8,
        ]);
        DB::table('users')->insert([
            'name' => 'Kadept MC',
            'email' => 'mc@js.ugm.ac.id',
            'role' => 0,
            'password' => bcrypt('haimc'),
            'id_departemen' => 9,
        ]);
        DB::table('users')->insert([
            'name' => 'Kadept Sosmas',
            'email' => 'sosmas@js.ugm.ac.id',
            'role' => 0,
            'password' => bcrypt('haisosmas'),
            'id_departemen' => 10,
        ]);
    }
}
