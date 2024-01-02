<?php

namespace App\Traits;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

trait SessionTrait
{
    public static function isValid($credentials): bool|User
    {
        if ($user = Auth::validate($credentials)) {
            return $user;
        }

        return false;
    }
}
