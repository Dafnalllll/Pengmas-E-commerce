<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin User
        User::create([
            'name' => 'naufal',
            'email' => 'admin@naufal.com',
            'email_verified_at' => now(),
            'password' => Hash::make('adminnaufal'),
            'remember_token' => null,
        ]);
    }
}
