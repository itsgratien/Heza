<?php

namespace App\Policies;

use App\User;
use App\Story;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function view(User $user, Story $stoy){
      return $user->id==$story->owner_id;
    }
}
