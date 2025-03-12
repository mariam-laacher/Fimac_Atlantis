<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appartement extends Model
{
    use HasFactory;

    protected $fillable = [
        'niveau',
        'designation',
        'surface',
        'salon',
        'hall',
        'cuisine',
        'chambre_1',
        'chambre_2',
        'sdb',
        'wc',
        'terrasse',
        'status',
    ];

    public function images()
    {
        return $this->hasMany(AppartementImage::class);
    }
}
