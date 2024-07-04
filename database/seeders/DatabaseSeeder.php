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
        $users = [
            [
                'name' => 'Superadmin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('password'),
                'phone' => '081234567899',
                'role' => 'super',
            ],
            [
                'name' => 'Wahyu',
                'email' => 'wahyu@gmail.com',
                'password' => bcrypt('password'),
                'phone' => '081234567789',
                'role' => 'admin',
            ],
            [
                'name' => 'Hermawan',
                'email' => 'hermawan@gmail.com',
                'password' => bcrypt('password'),
                'phone' => '081234567789',
                'role' => 'pengguna',
            ]
            ];
    }
}
