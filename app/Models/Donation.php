<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Donation extends Model
{
    protected $fillable = ['camping_id', 'donor_id', 'amount', 'date', 'status'];

    protected function casts(): array
    {
        return [
            'date' => 'datetime',
            'amount' => 'integer',
        ];
    }

    public function camping(): BelongsTo
    {
        return $this->belongsTo(Camping::class);
    }

    public function donor(): BelongsTo
    {
        return $this->belongsTo(Donatur::class, 'donor_id');
    }

    public function payment(): HasOne
    {
        return $this->hasOne(Payment::class);
    }
}
