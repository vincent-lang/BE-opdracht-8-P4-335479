<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leverancier extends Model
{
    use HasFactory;

    protected $fillable = [
        'Naam',
        'ContactPersoon',
        'LeverancierNummer',
        'Mobiel',
        'contact_id'
    ];

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }

    public function producten()
    {
        return $this->hasMany(ProductPerLeverancier::class);
    }
}
