<?php

namespace Walladog\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;
use Walladog\User;


class UserPolicy
{
    use HandlesAuthorization;

    public function before(User $user, $ability)
    {
        if ($user->isSuperAdmin()) {
            return true;
        }

        //TODO: implementar deleted si se cree oportuno
        /*
        if($user->deleted==1){
            return false;
        }
        */
    }


    public function show(User $user, User $ouser)
    {
        if ($user->id == $ouser->id) {
            return true;
        }
    }

    public function showall(User $user, User $ouser)
    {
        if($user->isSuperAdmin()){
            return true;
        }
        return false;
    }

    public function update(User $user, User $ouser)
    {
        if ($user->id == $ouser->id) {
            return true;
        }
    }

    public function destroy(User $user, User $ouser)
    {
        if ($user->id == $ouser->id) {
            return true;
        }
    }

}
