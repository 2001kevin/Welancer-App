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
            'first_name' => 'User',
            'last_name' => 'Capstone',
            'username' => 'user-042',
            'email' => 'user@gmail.com',
            'password' => bcrypt('123456'),
            'role' => 'user'
        ]);
    }
}