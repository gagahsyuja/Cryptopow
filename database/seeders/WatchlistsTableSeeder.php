<?php

namespace Database\Seeders;

use App\Models\Watchlist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WatchlistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $watchlists = [
            [
                'uname' => 'ssa',
                'short_name' => 'btg'
            ],
            [
                'uname' => 'ssa',
                'short_name' => 'etc'
            ]
        ];

        foreach ($watchlists as $key => $value)
        {
            Watchlist::create($value);
        }
    }
}
