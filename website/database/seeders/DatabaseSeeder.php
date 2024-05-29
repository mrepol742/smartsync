<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'fullname' => 'Test User',
            'username' => 'test',
            'email' => 'test@example.com',
            'login_method' => 'form',
            'status' => 'active',
            'type' => 'user',
            'password' => 'df35hh6b4h,.763?'
        ]);
    }
}
