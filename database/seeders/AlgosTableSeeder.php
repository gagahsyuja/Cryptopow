<?php

namespace Database\Seeders;

use App\Models\Algo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlgosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $algos = [
            [
                'name' => 'equihash',
                'about' => 'https://cryptorival.com/algorithms/equihash2109/'
            ],
            [
                'name' => 'ethash',
                'about' => 'https://cryptorival.com/algorithms/ethash/'
            ],
            [
                'name' => 'kawpow',
                'about' => 'https://minerstat.com/algorithm/kawpow'
            ]
        ];

        foreach ($algos as $key => $value)
        {
            Algo::create($value);
        }
    }
}
