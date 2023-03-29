<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Super Admin',
            'alamat' => 'Denpasar City',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('123456'),
            'role' => 'Super Admin'
        ]);
    }
}
