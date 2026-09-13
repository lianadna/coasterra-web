<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Comment extends Model
{
    protected $fillable = [
        'commentable_type', 'commentable_id', 'parent_id',
        'name', 'email', 'message', 'status',
    ];

    /**
     * The blog post or campaign this comment belongs to.
     */
    public function commentable(): MorphTo
    {
        return $this->morphTo();
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function replies(): HasMany
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    /** Only comments an admin has approved are shown to visitors. */
    public function scopeApproved(Builder $query): Builder
    {
        return $query->where('status', 'approved');
    }

    /**
     * A readable label for the admin listing, e.g. "Blog: World Mangrove Day".
     */
    public function getSubjectAttribute(): string
    {
        $subject = $this->commentable;

        if (! $subject) {
            return '—';
        }

        return class_basename($this->commentable_type).': '.($subject->title ?? '#'.$subject->id);
    }
}
