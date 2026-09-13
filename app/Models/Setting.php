<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Setting extends Model
{
    protected $fillable = ['key', 'value', 'group', 'type', 'label', 'help', 'order'];

    protected static function booted(): void
    {
        // Settings are read on every page render, so keep them cached.
        static::saved(fn () => Cache::forget('settings.all'));
        static::deleted(fn () => Cache::forget('settings.all'));
    }

    /**
     * All settings as a key => value map.
     */
    public static function all_values(): array
    {
        return Cache::rememberForever(
            'settings.all',
            fn () => static::query()->pluck('value', 'key')->all()
        );
    }
}
