<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
  
class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'user',
            'alamat' => 'Denpasar City',
            'email' => 'user@gmail.com',
            'password' => bcrypt('123456'),
            'role' => 'user'
        ]);
    }
}