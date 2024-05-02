<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Player extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'name',
        'number',
        'grad_year',
        'hs',
        'avatar',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected static function booted(): void
    {
        parent::boot();
        static::creating(function ($player) {
            $player->user_id = auth()->id() ?? $player->user_id;
        });
    }
}
