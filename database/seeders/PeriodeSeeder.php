<?php

namespace Database\Seeders;

use App\Models\Periode;
use Illuminate\Database\Seeder;

class PeriodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Periode::create([
            'periode' => '2020/2021'
        ]);
        Periode::create([
            'periode' => '2021/2022'
        ]);
        Periode::create([
            'periode' => '2022/2023'
        ]);
    }
}
