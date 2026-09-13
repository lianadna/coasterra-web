<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['status', 'image', 'title', 'subtitle', 'description'];

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('status', 'active');
    }
}
