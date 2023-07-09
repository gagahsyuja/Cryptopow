<?php

namespace Database\Seeders;

use App\Models\Miner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MinersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $miner = [
            [
                'algo' => 'equihash',
                'name' => 'miniZ',
                'source' => 'https://github.com/miniZ-miner/miniZ'
            ],
            [
                'algo' => 'equihash',
                'name' => 'GMiner',
                'source' => 'https://github.com/develsoftware/GMinerRelease'
            ],
            [
                'algo' => 'ethash',
                'name' => 'GMiner',
                'source' => 'https://github.com/develsoftware/GMinerRelease'
            ],
            [
                'algo' => 'kawpow',
                'name' => 'miniZ',
                'source' => 'https://github.com/miniZ-miner/miniZ'
            ],
            [
                'algo' => 'ethash',
                'name' => 'miniZ',
                'source' => 'https://github.com/miniZ-miner/miniZ'
            ],
            [
                'algo' => 'equihash',
                'name' => 'lolMiner',
                'source' => 'https://github.com/Lolliedieb/lolMiner-releases'
            ],
            [
                'algo' => 'ethash',
                'name' => 'lolMiner',
                'source' => 'https://github.com/Lolliedieb/lolMiner-releases'
            ],
            [
                'algo' => 'kawpow',
                'name' => 'T-Rex',
                'source' => 'https://github.com/trexminer/T-Rex'
            ],
            [
                'algo' => 'kawpow',
                'name' => 'NBMiner',
                'source' => 'https://github.com/NebuTech/NBMiner'
            ],
        ];

        foreach ($miner as $key => $value)
        {
            Miner::create($value);
        }
    }
}
