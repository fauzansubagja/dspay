<?php

namespace Database\Seeders;

use App\Models\Proli;
use Illuminate\Database\Seeder;

class ProliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Proli::create([
            'Proli' => 'DKV',
        ]);
        Proli::create([
            'Proli' => 'PPLG',
        ]);
        Proli::create([
            'Proli' => 'TELK',
        ]);
        Proli::create([
            'Proli' => 'TJKT',
        ]);
        Proli::create([
            'Proli' => 'TKTL',
        ]);
        Proli::create([
            'Proli' => 'TKI',
        ]);
        Proli::create([
            'Proli' => 'TKI-O',
        ]);
    }
}
