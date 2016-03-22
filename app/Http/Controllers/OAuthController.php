<?php

namespace Walladog\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Walladog\Http\Requests;

class OAuthController extends Controller
{


    /**
     * Verify user in OAuth2 requests
     * @param $username
     * @param $password
     * @return bool
     */
    public function verify($username, $password){
        $credentials = [
            'email'    => $username,
            'password' => $password,
        ];

        if (Auth::once($credentials)) {
            return Auth::user()->id;
        } else {
            return false;
        }
    }
    
}
