<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@wisata.com',
                'password' => bcrypt('wisata123'),
                'is_admin' => 1,
            'remember_token' => Str::random(10),
            ],
        ];

        User::insert($users);
    }
}

