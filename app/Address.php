<?php

namespace Walladog;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];


    public function user(){
        $this->belongsTo(User::class);
    }
    
    public function partner(){
        $this->belongsTo(Partner::class);
    }
}
