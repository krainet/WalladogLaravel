<?php

namespace Walladog\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;
use Walladog\User;


class UserPolicy
{
    use HandlesAuthorization;

    protected $loggedUser;


    public function __construct()
    {
        $this->loggedUser = Auth::guard('api')->user();
    }

    public function before(User $user, $ability)
    {
        if ($user->isSuperAdmin()) {
            return true;
        }
    }


    public function show(User $user, User $ouser)
    {
        if ($user->id == $ouser->id) {
            return true;
        }
    }





}
