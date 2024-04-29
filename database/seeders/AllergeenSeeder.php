<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AllergeenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Allergeen::create([
            'Naam' => 'Gluten',
            'Omschrijving' => 'Dit product bevat gluten'
        ]);
        \App\Models\Allergeen::create([
            'Naam' => 'Gelatine',
            'Omschrijving' => 'Dit product bevat gelatine'
        ]);
        \App\Models\Allergeen::create([
            'Naam' => 'AZO-Kleurstof',
            'Omschrijving' => 'Dit product bevat AZO-kleurstoffen'
        ]);
        \App\Models\Allergeen::create([
            'Naam' => 'Lactose',
            'Omschrijving' => 'Dit product bevat lactose'
        ]);
        \App\Models\Allergeen::create([
            'Naam' => 'Soja',
            'Omschrijving' => 'Dit product bevat soja'
        ]);
    }
}
