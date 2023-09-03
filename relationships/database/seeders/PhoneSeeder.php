<?php

namespace Database\Seeders;

use App\Models\Phone;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Phone::create([
            'prefix' => '54',
            'phone_number' => '1166666666',
            'user_id' => 1,
        ]);
        Phone::create([
            'prefix' => '55',
            'phone_number' => '1177777777',
            'user_id' => 1,
        ]);

    }
}