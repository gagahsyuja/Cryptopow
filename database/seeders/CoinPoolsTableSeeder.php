<?php

namespace Database\Seeders;

use App\Models\CoinPool;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoinPoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $coinpool = [
            [
                'coin_short_name' => 'aion',
                'pool_short_name' => 'aionpool'
            ],
            [
                'coin_short_name' => 'aion',
                'pool_short_name' => 'aionmine'
            ],
            [
                'coin_short_name' => 'aion',
                'pool_short_name' => 'aionpool'
            ],
            [
                'coin_short_name' => 'flux',
                'pool_short_name' => '2miners'
            ],
            [
                'coin_short_name' => 'flux',
                'pool_short_name' => 'miningpoolhub'
            ],
            [
                'coin_short_name' => 'flux',
                'pool_short_name' => 'minerpool'
            ],
            [
                'coin_short_name' => 'btg',
                'pool_short_name' => '2miners'
            ],
            [
                'coin_short_name' => 'btg',
                'pool_short_name' => 'miningpoolhub'
            ],
            [
                'coin_short_name' => 'btg',
                'pool_short_name' => 'zergpool'
            ],
            [
                'coin_short_name' => 'etc',
                'pool_short_name' => '2miners'
            ],
            [
                'coin_short_name' => 'etc',
                'pool_short_name' => 'pool'
            ],
            [
                'coin_short_name' => 'etc',
                'pool_short_name' => 'ezil'
            ],
            [
                'coin_short_name' => 'ethw',
                'pool_short_name' => '2miners'
            ],
            [
                'coin_short_name' => 'ethw',
                'pool_short_name' => 'f2pool'
            ],
            [
                'coin_short_name' => 'ethw',
                'pool_short_name' => 'nanopool'
            ],
            [
                'coin_short_name' => 'zil',
                'pool_short_name' => 'ezil'
            ],
            [
                'coin_short_name' => 'zil',
                'pool_short_name' => 'k1pool'
            ],
            [
                'coin_short_name' => 'neox',
                'pool_short_name' => '2miners'
            ],
            [
                'coin_short_name' => 'neox',
                'pool_short_name' => 'zergpool'
            ],
            [
                'coin_short_name' => 'rvn',
                'pool_short_name' => '2miners'
            ],
            [
                'coin_short_name' => 'rvn',
                'pool_short_name' => 'f2pool'
            ],
            [
                'coin_short_name' => 'rvn',
                'pool_short_name' => 'minerpool'
            ],
            [
                'coin_short_name' => 'rvn',
                'pool_short_name' => 'nanopool'
            ],
            [
                'coin_short_name' => 'doge',
                'pool_short_name' => 'poolin'
            ]
        ];

        foreach ($coinpool as $key => $value)
        {
            CoinPool::create($value);
        }
    }
}
