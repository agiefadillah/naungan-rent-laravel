<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'name' => 'Agie Fadillah',
                'username' => 'agie',
                'email' => 'agie@naungan.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
            ],
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@naungan.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
            ],
        ])->each(fn ($user) => \App\Models\User::create($user));
    }
}
