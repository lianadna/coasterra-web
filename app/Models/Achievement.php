<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    protected $fillable = ['value', 'suffix', 'label', 'order'];

    protected function casts(): array
    {
        return ['value' => 'integer', 'order' => 'integer'];
    }
}
