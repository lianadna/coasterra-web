<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Event extends Model
{
    protected $fillable = ['camping_id', 'organizer_id', 'schedule', 'title', 'location'];

    protected function casts(): array
    {
        return ['schedule' => 'datetime'];
    }

    public function camping(): BelongsTo
    {
        return $this->belongsTo(Camping::class);
    }

    public function organizer(): BelongsTo
    {
        return $this->belongsTo(Organizer::class);
    }
}
