<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Organizer extends Model
{
    protected $fillable = ['image', 'name', 'desc', 'schedule', 'location'];

    protected function casts(): array
    {
        return ['schedule' => 'datetime'];
    }

    public function events(): HasMany
    {
        return $this->hasMany(Event::class);
    }
}
