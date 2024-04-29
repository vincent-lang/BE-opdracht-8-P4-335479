<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductPerAllergeenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\ProductPerAllergeen::create([
            'Product_id' => 1,
            'Allergeen_id' => 2
        ]);
        \App\Models\ProductPerAllergeen::create([
            'Product_id' => 1,
            'Allergeen_id' => 1
        ]);
        \App\Models\ProductPerAllergeen::create([
            'Product_id' => 1,
            'Allergeen_id' => 3
        ]);
        \App\Models\ProductPerAllergeen::create([
            'Product_id' => 3,
            'Allergeen_id' => 4
        ]);
        \App\Models\ProductPerAllergeen::create([
            'Product_id' => 6,
            'Allergeen_id' => 5
        ]);
        \App\Models\ProductPerAllergeen::create([
            'Product_id' => 9,
            'Allergeen_id' => 2
        ]);
        \App\Models\ProductPerAllergeen::create([
            'Product_id' => 9,
            'Allergeen_id' => 5
        ]);
        \App\Models\ProductPerAllergeen::create([
            'Product_id' => 10,
            'Allergeen_id' => 2
        ]);
        \App\Models\ProductPerAllergeen::create([
            'Product_id' => 12,
            'Allergeen_id' => 4
        ]);
        \App\Models\ProductPerAllergeen::create([
            'Product_id' => 13,
            'Allergeen_id' => 1
        ]);
        \App\Models\ProductPerAllergeen::create([
            'Product_id' => 13,
            'Allergeen_id' => 4
        ]);
        \App\Models\ProductPerAllergeen::create([
            'Product_id' => 13,
            'Allergeen_id' => 5
        ]);
        \App\Models\ProductPerAllergeen::create([
            'Product_id' => 14,
            'Allergeen_id' => 5
        ]);
    }
}
