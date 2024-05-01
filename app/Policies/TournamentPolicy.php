<?php

namespace App\Policies;

use App\Models\Tournament;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TournamentPolicy
{
    use HandlesAuthorization;

    public function update(User $user, Tournament $tournament): bool
    {
        return $tournament->user_id === $user->id;
    }

    public function delete(User $user, Tournament $tournament): bool
    {
        return $tournament->user_id === $user->id;
    }
}
