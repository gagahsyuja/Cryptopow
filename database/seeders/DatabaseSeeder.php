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
        $this -> call(CoinsTableSeeder::class);
        $this -> call(AlgosTableSeeder::class);
        $this -> call(AccountsTableSeeder::class);
    }
}
