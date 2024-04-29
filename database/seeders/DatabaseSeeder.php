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
        $this->call([
            AllergeenSeeder::class,
            ContactSeeder::class,
            LeverancierSeeder::class,
            MagazijnSeeder::class,
            ProductPerAllergeenSeeder::class,
            ProductPerLeverancierSeeder::class,
            ProductSeeder::class
        ]);
    }
}
