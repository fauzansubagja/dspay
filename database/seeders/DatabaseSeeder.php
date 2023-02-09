<?php

namespace Database\Seeders;

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
        $this->call(AdminUserSeeder::class);
        $this->call(ProliSeeder::class);
        $this->call(KelasSeeder::class);
        $this->call(PeriodeSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}