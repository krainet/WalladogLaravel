<?php

namespace Walladog;

use Illuminate\Database\Eloquent\Model;


class Pet extends Model
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

    public function location(){
        return $this->hasOne(Location::class);
    }

    public function images(){
        return $this->hasMany(Image::class);
    }

    public function partner(){
        return $this->belongsTo(Partner::class);
    }
}
