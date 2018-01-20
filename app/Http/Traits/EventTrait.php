<?php

namespace App\Http\Traits;

use App\Event;
use App\User;

Trait EventTrait {

    static public function getEventsByUserId(User $user) {
        return Event::where('users_id', $user->id)->get();
    }

}
