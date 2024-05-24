<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coach extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'phone',
        'bio',
        'avatar',
        'position',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($coach) {
            $coach->user_id = auth()->id() ?? $coach->user_id;
        });
    }

    public function getInitialsAttribute(): string
    {
        $initials = collect(explode(' ', $this->name))->map(fn ($name) => strtoupper($name[0]))->toArray();

        return implode('', $initials);
    }
}
