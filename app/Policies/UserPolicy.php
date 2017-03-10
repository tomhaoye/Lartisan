<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\User;

class UserPolicy
{
    use HandlesAuthorization;

    public function __construct()
    {
        //
    }

    public function update(User $currentUser, User $user)
    {
        return $currentUser->id == $user->id;
    }

    public function delete(User $currentUser, User $user)
    {
        return $currentUser->id == $user->id;
    }
}
