<?php

namespace Walladog;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'delivery_address_id',
        'invoice_address_id',
        'id_location',
        'id_type',
        'id_level',
        'id_user_detail',
        'id_user_state',
        'password',
        'remember_token',
        'facebook_token',
        'twitter_token',
        'oauth2_token',
        'google_token',
        'deleted',
        'updated_at'
    ];

    public function detail(){
        return $this->hasOne(UserDetail::class);
    }

    public function location(){
        return $this->hasOne(Location::class);
    }

    public function addresses(){
        return $this->hasMany(Address::class);
    }

    public function isSuperAdmin(){
        return $this->isSuperAdmin == 1;
    }



}
