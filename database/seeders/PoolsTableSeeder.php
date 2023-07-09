<?php

namespace Database\Seeders;

use App\Models\Pool;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pool = [
            [
                'short_name' => '2miners',
                'name' => '2Miners',
                'site' => 'https://2miners.com'
            ],
            [
                'short_name' => 'aionmine',
                'name' => 'AIONMINE',
                'site' => 'https://aionmine.com'
            ],
            [
                'short_name' => 'aionpool',
                'name' => 'Aion Pool',
                'site' => 'https://aionpool.tech'
            ],
            [
                'short_name' => 'ezil',
                'name' => 'Ezil',
                'site' => 'https://ezil.me'
            ],
            [
                'short_name' => 'f2pool',
                'name' => 'F2Pool',
                'site' => 'https://f2pool.com'
            ],
            [
                'short_name' => 'k1pool',
                'name' => 'K1Pool',
                'site' => 'https://k1pool.com'
            ],
            [
                'short_name' => 'miningpoolhub',
                'name' => 'Mining Pool Hub',
                'site' => 'https://miningpoolhub.com'
            ],
            [
                'short_name' => 'nanopool',
                'name' => 'Nanopool',
                'site' => 'https://nanopool.org'
            ],
            [
                'short_name' => 'pool',
                'name' => 'Pool',
                'site' => 'https://pool.ms'
            ],
            [
                'short_name' => 'poolin',
                'name' => 'Poolin',
                'site' => 'https://poolin.com'
            ],
            [
                'short_name' => 'zergpool',
                'name' => 'Zergpool',
                'site' => 'https://zergpool.com'
            ]
        ];

        foreach ($pool as $key => $value)
        {
            Pool::create($value);
        }
    }
}
