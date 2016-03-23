<?php

namespace Walladog;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];


    public function location(){
        return $this->hasOne(Location::class);
    }
    
    public function address(){
        return $this->hasOne(Address::class);
    }
    
    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function image(){
        return $this->hasOne(Image::class);
    }

    public function pets(){
        return $this->hasMany(Pet::class);
    }
}
