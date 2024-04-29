<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Contact::create([
            'Straat' => 'Van Gilslaan',
            'Huisnummer' => '34',
            'Postcode' => '1045CB',
            'Stad' => 'Hilvarenbeek'
        ]);
        \App\Models\Contact::create([
            'Straat' => 'Den Dolderpad',
            'Huisnummer' => '2',
            'Postcode' => '1067RC',
            'Stad' => 'Utrecht'
        ]);
        \App\Models\Contact::create([
            'Straat' => 'Fredo Raalteweg',
            'Huisnummer' => '257',
            'Postcode' => '1236OP',
            'Stad' => 'Nijmegen'
        ]);
        \App\Models\Contact::create([
            'Straat' => 'Bertrand Russellhof',
            'Huisnummer' => '21',
            'Postcode' => '2034AP',
            'Stad' => 'Den Haag'
        ]);
        \App\Models\Contact::create([
            'Straat' => 'Leon van Bonstraat',
            'Huisnummer' => '213',
            'Postcode' => '145XC',
            'Stad' => 'Lunteren'
        ]);
        \App\Models\Contact::create([
            'Straat' => 'Bea van Lingenlaan',
            'Huisnummer' => '234',
            'Postcode' => '2197FG',
            'Stad' => 'Sint Pancras'
        ]);
    }
}
