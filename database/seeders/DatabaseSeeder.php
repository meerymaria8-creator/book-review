<?php

namespace Database\Seeders;

use App\Models\book;
use App\Models\User;use Database\Factories\BookFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Book::factory()->count(10)->create();
    }
}
