<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'To Thanh Phong',
            'email' => 'thnhphong4869@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);
      
    }
}
