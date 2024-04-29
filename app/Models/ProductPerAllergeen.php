<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPerAllergeen extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'allergeen_id'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function allergeen()
    {
        return $this->belongsTo(Allergeen::class);
    }
}
