<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Food;
use Illuminate\Auth\Access\HandlesAuthorization;

class FoodPolicy
{
    use HandlesAuthorization;

    public function delete(User $user, Food $food)
    {
        return $user->id === $food->user_id;
    }
}
