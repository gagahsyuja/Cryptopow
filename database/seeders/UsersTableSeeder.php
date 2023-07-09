<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'ssa',
                'email' => 'ssa@ssa.com',
                'password' => Hash::make('123456')
            ]
        ];

        foreach ($users as $key => $value)
        {
            User::create($value);
        }
    }
}
