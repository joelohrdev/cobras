<?php

namespace App\Policies;

use App\Models\Player;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PlayerPolicy
{
    use HandlesAuthorization;

    public function update(User $user, Player $player): bool
    {
        return $player->user_id === $user->id;
    }

    public function delete(User $user, Player $player): bool
    {
        return $player->user_id === $user->id;
    }
}
