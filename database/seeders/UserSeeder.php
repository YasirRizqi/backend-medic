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
            'name' => 'Pasien Dummy Satu',
            'email' => 'pasien1@example.com',
            'password' => Hash::make('password'),
            'role' => 'pasien',
        ]);

        User::create([
            'name' => 'Pasien Dummy Dua',
            'email' => 'pasien2@example.com',
            'password' => Hash::make('password'),
            'role' => 'pasien',
        ]);
    }
}
