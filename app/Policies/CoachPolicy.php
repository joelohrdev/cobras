<?php

namespace App\Policies;

use App\Models\Coach;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CoachPolicy
{
    use HandlesAuthorization;

    public function update(User $user, Coach $coach): bool
    {
        return $coach->user_id === $user->id;
    }

    public function delete(User $user, Coach $coach): bool
    {
        return $coach->user_id === $user->id;
    }
}
