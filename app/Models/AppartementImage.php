<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppartementImage extends Model
{
    use HasFactory;

    protected $fillable = ['appartement_id', 'image_path'];

    public function appartement()
    {
        return $this->belongsTo(Appartement::class);
    }
}
