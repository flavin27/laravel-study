<?php

namespace Database\Seeders;

use App\Models\User; // Import the User class from the correct namespace
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'John Doe',
            'email' => 'joao@teste.com',
            'password' => 'senha123',
        ]);
    }
}
