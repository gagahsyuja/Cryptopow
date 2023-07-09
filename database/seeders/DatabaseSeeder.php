<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this -> call(UsersTableSeeder::class);
        $this -> call(CoinsTableSeeder::class);
        $this -> call(CoinPoolsTableSeeder::class);
        $this -> call(AlgosTableSeeder::class);
        $this -> call(PoolsTableSeeder::class);
        $this -> call(AccountsTableSeeder::class);
        $this -> call(MinersTableSeeder::class);
        $this -> call(WatchlistsTableSeeder::class);
    }
}
