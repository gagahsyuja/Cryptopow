<?php

namespace Database\Seeders;

use App\Models\Coin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoinsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $coins = [
            [
                'algo' => 'equihash',
                'short_name' => 'aion',
                'name' => 'Aion',
                'image_url' => 'https://cryptologos.cc/logos/aion-aion-logo.png?v=025',
                'price_url' => ''
            ],
            [
                'algo' => 'equihash',
                'short_name' => 'btg',
                'name' => 'Bitcoin Gold',
                'image_url' => 'https://cryptologos.cc/logos/bitcoin-gold-btg-logo.png?v=023',
                'price_url' => 'https://indodax.com/api/ticker/btgidr'
            ],
            [
                'algo' => 'equihash',
                'short_name' => 'flux',
                'name' => 'Flux',
                'image_url' => 'https://cryptologos.cc/logos/zel-flux-logo.png?v=023',
                'price_url' => 'https://indodax.com/api/ticker/fluxidr'
            ],
            [
                'algo' => 'ethash',
                'short_name' => 'etc',
                'name' => 'Ethereum Classic',
                'image_url' => 'https://cryptologos.cc/logos/ethereum-classic-etc-logo.png?v=025',
                'price_url' => 'https://indodax.com/api/ticker/etcidr'
            ],
            [
                'algo' => 'ethash',
                'short_name' => 'zil',
                'name' => 'Zilliqa',
                'image_url' => 'https://cryptologos.cc/logos/zilliqa-zil-logo.png?v=025',
                'price_url' => 'https://indodax.com/api/ticker/zilidr'
            ],
            [
                'algo' => 'kawpow',
                'short_name' => 'rvn',
                'name' => 'RavenCoin',
                'image_url' => 'https://cryptologos.cc/logos/ravencoin-rvn-logo.png?v=023',
                'price_url' => 'https://indodax.com/api/ticker/rvnidr'
            ]
            
        ];

        foreach ($coins as $key => $value)
        {
            Coin::create($value);
        }
    }
}
