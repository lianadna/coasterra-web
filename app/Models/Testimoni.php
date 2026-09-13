<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    protected $fillable = ['image', 'name', 'rating', 'description', 'role', 'video'];

    protected function casts(): array
    {
        return ['rating' => 'decimal:1'];
    }
}
