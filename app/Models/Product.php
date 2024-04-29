<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'Naam',
        'Barcode'
    ];

    public function productenPerLeverancier()
    {
        return $this->hasMany(ProductPerLeverancier::class);
    }

    public function productenPerAllergeen()
    {
        return $this->hasMany(ProductPerAllergeen::class);
    }

    public function Magazijn()
    {
        return $this->hasOne(Magazijn::class);
    }
}
