<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Camping extends Model
{
    protected $fillable = [
        'image', 'category', 'start_date', 'end_date',
        'title', 'subtitle', 'description', 'target',
    ];

    protected function casts(): array
    {
        return [
            'start_date' => 'datetime',
            'end_date' => 'datetime',
            'target' => 'integer',
        ];
    }

    public function donations(): HasMany
    {
        return $this->hasMany(Donation::class);
    }

    public function events(): HasMany
    {
        return $this->hasMany(Event::class);
    }

    public function comments(): MorphMany
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    /**
     * Total amount successfully donated to this campaign.
     */
    public function collected(): int
    {
        return (int) $this->donations()->where('status', 'SUCCESS')->sum('amount');
    }

    /**
     * How much of the target has been reached, capped at 100%.
     */
    public function progress(): float
    {
        if ($this->target <= 0) {
            return 0.0;
        }

        return round(min(100, ($this->collected() / $this->target) * 100), 1);
    }
}
