<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create a default user
        $user = \App\Models\User::create([
            'name' => 'Abir',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password')
        ]);

        // Run the seeders
        $this->call([
            SkillSeeder::class,
            ProjectSeeder::class
        ]);
    }
}
