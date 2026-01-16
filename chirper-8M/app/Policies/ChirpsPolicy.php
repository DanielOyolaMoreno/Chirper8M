<?php

namespace App\Policies;

use App\Models\Chirps;
use App\Models\User;

class ChirpsPolicy
{
    public function update(User $user, Chirps $chirp): bool
    {
        return $chirp->user_id === $user->id;
    }

    public function delete(User $user, Chirps $chirp): bool
    {
        return $chirp->user_id === $user->id;
    }
}
