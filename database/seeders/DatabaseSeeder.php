<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Dhruvin Prajapati',
            'email' => 'dj@gmail.com',
        ]);
        User::factory()->create([
            'name' => 'Dhruvin Prajapati',
            'email' => 'dj1@gmail.com',
        ]);

        Listing::factory(50)->create([
            'by_user_id' => 1
        ]);
        Listing::factory(50)->create([
            'by_user_id' => 2
        ]);
    }
}
