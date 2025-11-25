<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Buat user test untuk login/register
        User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('password'), // Gunakan Hash::make
        ]);

        // 2. Panggil ProductSeeder untuk data amplang
        $this->call([
            ProductSeeder::class,
        ]);
    }
}