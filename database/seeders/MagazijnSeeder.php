<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MagazijnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Magazijn::create([
            'Product_id' => 1,
            'VerpakkingsEenheid' => 5,
            'AantalAanwezig' => 453
        ]);
        \App\Models\Magazijn::create([
            'Product_id' => 2,
            'VerpakkingsEenheid' => 2.5,
            'AantalAanwezig' => 400
        ]);
        \App\Models\Magazijn::create([
            'Product_id' => 3,
            'VerpakkingsEenheid' => 5,
            'AantalAanwezig' => 1
        ]);
        \App\Models\Magazijn::create([
            'Product_id' => 4,
            'VerpakkingsEenheid' => 1,
            'AantalAanwezig' => 800
        ]);
        \App\Models\Magazijn::create([
            'Product_id' => 5,
            'VerpakkingsEenheid' => 3,
            'AantalAanwezig' => 234
        ]);
        \App\Models\Magazijn::create([
            'Product_id' => 6,
            'VerpakkingsEenheid' => 2,
            'AantalAanwezig' => 345
        ]);
        \App\Models\Magazijn::create([
            'Product_id' => 7,
            'VerpakkingsEenheid' => 1,
            'AantalAanwezig' => 795
        ]);
        \App\Models\Magazijn::create([
            'Product_id' => 8,
            'VerpakkingsEenheid' => 10,
            'AantalAanwezig' => 233
        ]);
        \App\Models\Magazijn::create([
            'Product_id' => 9,
            'VerpakkingsEenheid' => 2.5,
            'AantalAanwezig' => 123
        ]);
        \App\Models\Magazijn::create([
            'Product_id' => 10,
            'VerpakkingsEenheid' => 3,
            'AantalAanwezig' => null
        ]);
        \App\Models\Magazijn::create([
            'Product_id' => 11,
            'VerpakkingsEenheid' => 2,
            'AantalAanwezig' => 367
        ]);
        \App\Models\Magazijn::create([
            'Product_id' => 12,
            'VerpakkingsEenheid' => 1,
            'AantalAanwezig' => 467
        ]);
        \App\Models\Magazijn::create([
            'Product_id' => 13,
            'VerpakkingsEenheid' => 5,
            'AantalAanwezig' => 20
        ]);
        \App\Models\Magazijn::create([
            'Product_id' => 14,
            'VerpakkingsEenheid' => 7,
            'AantalAanwezig' => 35
        ]);
    }
}
