<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([
            'name' => 'Jorge',
            'email' => 'tnlcomputer@gmail.com',
            'password' => Hash::make('12345678')
        ]);
        User::create([
            'name' => 'Jose',
            'email' => 'jose@gmail.com',
            'password' => Hash::make('12345678')
        ]);
        User::create([
            'name' => 'pedro',
            'email' => 'pedro@gmail.com',
            'password' => Hash::make('12345678')
        ]);
        User::create([
            'name' => 'raul',
            'email' => 'raul@gmail.com',
            'password' => Hash::make('12345678')
        ]);
    }
}