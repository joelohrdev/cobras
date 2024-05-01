<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum TournamentOutcome: string implements HasLabel
{
    case First = 'first';
    case Second = 'second';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::First => 'First',
            self::Second => 'Second',
        };
    }

    public function getOrdianalIndicator(): ?string
    {
        return match ($this) {
            self::First => '1st',
            self::Second => '2nd',
        };
    }
}
