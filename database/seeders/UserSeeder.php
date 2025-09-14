<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Mahedi Hasan',
            'email' => 'mahedi@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('12345678'),
        ]);

        User::create([
            'name' => 'Rabbil',
            'email' => 'rabbil@gmail.com',
            'role' => 'content_creator',
            'password' => Hash::make('12345678'),
        ]);

        User::create([
            'name' => 'Test Reader',
            'email' => 'reader@gmail.com',
            'role' => 'reader',
            'password' => Hash::make('12345678'),
        ]);
    }
}

