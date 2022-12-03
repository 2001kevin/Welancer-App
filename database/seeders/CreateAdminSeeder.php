<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
  
class CreateAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Admin',
            'last_name' => 'Capstone',
            'username' => 'C22-042',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
            'role' => 'admin'
        ]);
    }
}