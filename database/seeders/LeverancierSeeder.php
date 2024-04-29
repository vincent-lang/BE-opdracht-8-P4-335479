<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LeverancierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Leverancier::create([
            'Naam' => 'Venco',
            'ContactPersoon' => 'Bert van Linge',
            'LeverancierNummer' => 'L1029384719',
            'Mobiel' => '06-28493827',
            'Contact_id' => 1
        ]);
        \App\Models\Leverancier::create([
            'Naam' => 'Astra Sweets',
            'ContactPersoon' => 'Jasper del Monte',
            'LeverancierNummer' => 'L1029284315',
            'Mobiel' => '06-39398734',
            'Contact_id' => 2
        ]);
        \App\Models\Leverancier::create([
            'Naam' => 'Haribo',
            'ContactPersoon' => 'Sven Stalman',
            'LeverancierNummer' => 'L1029324748',
            'Mobiel' => '06-24383291',
            'Contact_id' => 3
        ]);
        \App\Models\Leverancier::create([
            'Naam' => 'Basset',
            'ContactPersoon' => 'Joyce Stelterberg',
            'LeverancierNummer' => 'L1023845773',
            'Mobiel' => '06-48293823',
            'Contact_id' => 4
        ]);
        \App\Models\Leverancier::create([
            'Naam' => 'De Bron',
            'ContactPersoon' => 'Remco Veenstra',
            'LeverancierNummer' => 'L1023857736',
            'Mobiel' => '06-34291234',
            'Contact_id' => 5
        ]);
        \App\Models\Leverancier::create([
            'Naam' => 'Quality Street',
            'ContactPersoon' => 'Johan Nooij',
            'LeverancierNummer' => 'L1029234586',
            'Mobiel' => '06-23458456',
            'Contact_id' => 6
        ]);
        \App\Models\Leverancier::create([
            'Naam' => 'Hom Ken Food',
            'ContactPersoon' => 'Hom Ken',
            'LeverancierNummer' => 'L1029234599',
            'Mobiel' => '06-23458477',
            'Contact_id' => NULL
        ]);
    }
}
