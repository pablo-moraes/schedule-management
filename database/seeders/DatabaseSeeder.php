<?php

namespace Database\Seeders;

use App\Models\User;
use App\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Admin
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'admin@gmail.com',
        // ]);
        dd(Role::ADMIN);
        if (env('APP_ENV') !== 'production') {
            // Supervisor
            User::factory()->create([
                'role' => Role::SUPERVISOR,
                'email' => 'supervisor@gmail.com',
            ]);

            // Leader
            User::factory()->create([
                'role' => Role::LEADER,
                'email' => 'leader@gmail.com'
            ]);
        }
    }
}
