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
        for ($i = 0; $i < 5; $i++) {
            User::create([
                'name' => 'User ' . ($i + 1),
                'email' => 'user' . ($i + 1) . '@example.com',
                'password' => Hash::make('password'),
                'role' => 'user',
            ]);
        }
    }
}
