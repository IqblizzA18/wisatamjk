<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name'           => 'admin',
                'email'          => 'admin@wisata.com',
                'password'       => bcrypt('wisata123'),
                'is_admin'       => true, // ✅ tambahkan ini
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}

