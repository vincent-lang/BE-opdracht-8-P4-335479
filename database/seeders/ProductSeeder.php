<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Product::create([
            'Naam' => 'Mintnopjes',
            'Barcode' => '8719587231278'
        ]);
        \App\Models\Product::create([
            'Naam' => 'Schoolkrijt',
            'Barcode' => '8719587326713'
        ]);
        \App\Models\Product::create([
            'Naam' => 'Honingdrop',
            'Barcode' => '8719587327836'
        ]);
        \App\Models\Product::create([
            'Naam' => 'Zure Beren',
            'Barcode' => '8719587321441'
        ]);
        \App\Models\Product::create([
            'Naam' => 'Cola Flesjes',
            'Barcode' => '8719587321237'
        ]);
        \App\Models\Product::create([
            'Naam' => 'Turtles',
            'Barcode' => '8719587322245'
        ]);
        \App\Models\Product::create([
            'Naam' => 'Witte Muizen',
            'Barcode' => '8719587328256'
        ]);
        \App\Models\Product::create([
            'Naam' => 'Reuzen Slangen',
            'Barcode' => '8719587325641'
        ]);
        \App\Models\Product::create([
            'Naam' => 'Zoute Rijen',
            'Barcode' => '8719587322739'
        ]);
        \App\Models\Product::create([
            'Naam' => 'Winegums',
            'Barcode' => '8719587327527'
        ]);
        \App\Models\Product::create([
            'Naam' => 'Drop Munten',
            'Barcode' => '8719587322345'
        ]);
        \App\Models\Product::create([
            'Naam' => 'Kruis Drop',
            'Barcode' => '8719587322265'
        ]);
        \App\Models\Product::create([
            'Naam' => 'Zoute Ruitjes',
            'Barcode' => '8719587323256'
        ]);
        \App\Models\Product::create([
            'Naam' => "Drop ninja's",
            'Barcode' => '8719587323277'
        ]);
    }
}
