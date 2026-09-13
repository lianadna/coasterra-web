<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Donatur extends Model
{
    protected $fillable = ['name', 'email', 'phone'];

    public function donations(): HasMany
    {
        return $this->hasMany(Donation::class, 'donor_id');
    }
}
