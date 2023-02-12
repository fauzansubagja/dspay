<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'Admin',
            'email' => 'admin@gmail.com',
            'role' => 'Administrator',
            'user_description' => 'Administrator',
            'password' => bcrypt('password'),
        ]);
        User::create([
            'username' => 'Andhika',
            'nis' => '2021118526',
            'email' => 'andhika@gmail.com',
            'no_tlp' => '085754344451',
            'role' => 'User',
            'user_description' => 'User',
            'password' => bcrypt('password'),
        ]);
    }
}
