<?php

namespace App;

use Filament\Support\Contracts\HasLabel;

enum Social: string implements HasLabel
{
    case FACEBOOK = 'facebook';
    case TWITTER = 'twitter';
    case INSTAGRAM = 'instagram';
    case YOUTUBE = 'youtube';
    case SNAPCHAT = 'snapchat';
    case TIKTOK = 'tiktok';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::FACEBOOK => 'Facebook',
            self::TWITTER => 'Twitter',
            self::INSTAGRAM => 'Instagram',
            self::YOUTUBE => 'YouTube',
            self::SNAPCHAT => 'Snapchat',
            self::TIKTOK => 'TikTok',
        };
    }

    public function getIcon(): string
    {
        return match ($this) {
            self::FACEBOOK => 'fab fa-facebook',
            self::TWITTER => 'fab fa-twitter',
            self::INSTAGRAM => 'fab fa-instagram',
            self::YOUTUBE => 'fab fa-youtube',
            self::SNAPCHAT => 'fab fa-snapchat',
            self::TIKTOK => 'fab fa-tiktok',
        };
    }
}
