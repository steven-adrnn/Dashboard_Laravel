<?php

namespace Database\Seeders;

use App\Models\User; // Tambahkan ini
use Illuminate\Support\Facades\Hash; // Pastikan ini juga ada

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password123'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Editor User',
            'email' => 'editor@example.com',
            'password' => Hash::make('password123'),
            'role' => 'editor',
        ]);

        User::create([
            'name' => 'Viewer User',
            'email' => 'viewer@example.com',
            'password' => Hash::make('password123'),
            'role' => 'viewer',
        ]);
    }
}
