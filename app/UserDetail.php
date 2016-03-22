<?php

namespace Walladog;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{

    protected $fillable = [
        
    ];

    protected $hidden = [

    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function avatar(){
        return $this->hasOne(Image::class);
    }

}
