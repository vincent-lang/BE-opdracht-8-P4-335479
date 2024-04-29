<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductPerLeverancierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\ProductPerLeverancier::create([
            'Leverancier_id' => 1,
            'Product_id' => 1,
            'DatumLevering' => '2023-04-09',
            'Aantal' => 23,
            'DatumEerstVolgendeLevering' => '2023-04-16',
        ]);
        \App\Models\ProductPerLeverancier::create([
            'Leverancier_id' => 1,
            'Product_id' => 1,
            'DatumLevering' => '2023-04-18',
            'Aantal' => 21,
            'DatumEerstVolgendeLevering' => '2023-04-25',
        ]);
        \App\Models\ProductPerLeverancier::create([
            'Leverancier_id' => 1,
            'Product_id' => 2,
            'DatumLevering' => '2023-04-09',
            'Aantal' => 12,
            'DatumEerstVolgendeLevering' => '2023-04-16',
        ]);
        \App\Models\ProductPerLeverancier::create([
            'Leverancier_id' => 1,
            'Product_id' => 3,
            'DatumLevering' => '2023-04-10',
            'Aantal' => 11,
            'DatumEerstVolgendeLevering' => '2023-04-17',
        ]);
        \App\Models\ProductPerLeverancier::create([
            'Leverancier_id' => 2,
            'Product_id' => 4,
            'DatumLevering' => '2023-04-14',
            'Aantal' => 16,
            'DatumEerstVolgendeLevering' => '2023-04-21',
        ]);
        \App\Models\ProductPerLeverancier::create([
            'Leverancier_id' => 2,
            'Product_id' => 4,
            'DatumLevering' => '2023-04-21',
            'Aantal' => 23,
            'DatumEerstVolgendeLevering' => '2023-04-28',
        ]);
        \App\Models\ProductPerLeverancier::create([
            'Leverancier_id' => 2,
            'Product_id' => 5,
            'DatumLevering' => '2023-04-14',
            'Aantal' => 45,
            'DatumEerstVolgendeLevering' => '2023-04-21',
        ]);
        \App\Models\ProductPerLeverancier::create([
            'Leverancier_id' => 2,
            'Product_id' => 6,
            'DatumLevering' => '2023-04-14',
            'Aantal' => 30,
            'DatumEerstVolgendeLevering' => '2023-04-21',
        ]);
        \App\Models\ProductPerLeverancier::create([
            'Leverancier_id' => 3,
            'Product_id' => 7,
            'DatumLevering' => '2023-04-12',
            'Aantal' => 12,
            'DatumEerstVolgendeLevering' => '2023-04-19',
        ]);
        \App\Models\ProductPerLeverancier::create([
            'Leverancier_id' => 3,
            'Product_id' => 7,
            'DatumLevering' => '2023-04-19',
            'Aantal' => 23,
            'DatumEerstVolgendeLevering' => '2023-04-26',
        ]);
        \App\Models\ProductPerLeverancier::create([
            'Leverancier_id' => 3,
            'Product_id' => 8,
            'DatumLevering' => '2023-04-10',
            'Aantal' => 12,
            'DatumEerstVolgendeLevering' => '2023-04-17',
        ]);
        \App\Models\ProductPerLeverancier::create([
            'Leverancier_id' => 3,
            'Product_id' => 9,
            'DatumLevering' => '2023-04-11',
            'Aantal' => 1,
            'DatumEerstVolgendeLevering' => '2023-04-18',
        ]);
        \App\Models\ProductPerLeverancier::create([
            'Leverancier_id' => 4,
            'Product_id' => 10,
            'DatumLevering' => '2023-04-16',
            'Aantal' => 24,
            'DatumEerstVolgendeLevering' => '2023-04-30',
        ]);
        \App\Models\ProductPerLeverancier::create([
            'Leverancier_id' => 5,
            'Product_id' => 11,
            'DatumLevering' => '2023-04-10',
            'Aantal' => 47,
            'DatumEerstVolgendeLevering' => '2023-04-17',
        ]);
        \App\Models\ProductPerLeverancier::create([
            'Leverancier_id' => 5,
            'Product_id' => 11,
            'DatumLevering' => '2023-04-19',
            'Aantal' => 60,
            'DatumEerstVolgendeLevering' => '2023-04-26',
        ]);
        \App\Models\ProductPerLeverancier::create([
            'Leverancier_id' => 5,
            'Product_id' => 12,
            'DatumLevering' => '2023-04-11',
            'Aantal' => 45,
            'DatumEerstVolgendeLevering' => null,
        ]);
        \App\Models\ProductPerLeverancier::create([
            'Leverancier_id' => 5,
            'Product_id' => 13,
            'DatumLevering' => '2023-04-12',
            'Aantal' => 23,
            'DatumEerstVolgendeLevering' => null,
        ]);
        \App\Models\ProductPerLeverancier::create([
            'Leverancier_id' => 7,
            'Product_id' => 14,
            'DatumLevering' => '2023-04-14',
            'Aantal' => 20,
            'DatumEerstVolgendeLevering' => null,
        ]);
    }
}
