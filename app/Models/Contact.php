<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'Straat',
        'Huisnummer',
        'Postcode',
        'Stad'
    ];

    public function Leverancier()
    {
        return $this->hasOne(Leverancier::class);
    }
}
