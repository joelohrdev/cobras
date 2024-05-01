<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Game extends Model
{
    protected $fillable = [
        'user_id',
        'tournament_id',
        'opponent',
        'date',
        'city',
        'state',
        'outcome',
        'our_score',
        'opponent_score',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function tournament(): BelongsTo
    {
        return $this->belongsTo(Tournament::class);
    }

    protected function casts()
    {
        return [
            'date' => 'date',
        ];
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($game) {
            $game->user_id = auth()->id();
        });
    }
}
