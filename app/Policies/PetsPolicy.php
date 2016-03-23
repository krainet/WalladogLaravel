<?php

namespace Walladog\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

class PetsPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
}
