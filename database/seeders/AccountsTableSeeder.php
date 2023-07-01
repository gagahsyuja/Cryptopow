<?php

namespace Database\Seeders;

use App\Models\Account;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $accounts = [
            [
                'uname' => 'ssa',
                'passwd' => Hash::make('whatever')
            ]
        ];

        foreach ($accounts as $key => $value)
        {
            Account::create($value);
        }
    }
}
