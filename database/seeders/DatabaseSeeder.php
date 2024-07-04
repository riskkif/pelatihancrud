<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $roles = ['super', 'admin', 'pengguna'];
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
            foreach($roles as $role){
                Role::create([
                    'name' => $role
                ]);
            foreach($users as $user){
                User::create([
                    'name' => $user['name'],
                    'email' => $user['email'],
                    'password' => $user['password'],
                    'phone' => $user['phone'],
                ])->assignRole($user['role']);

            }
    }
}
}