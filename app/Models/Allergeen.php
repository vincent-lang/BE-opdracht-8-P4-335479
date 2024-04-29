<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allergeen extends Model
{
    use HasFactory;

    protected $fillable = [
        'Naam',
        'Omschrijving'
    ];

    public function productenPerAllergeen()
    {
        return $this->hasMany(ProductPerAllergeen::class);
    }
}
