<?php

namespace Walladog;

use Illuminate\Database\Eloquent\Model;

class PublicationCategory extends Model
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
    
    public function publications(){
        return $this->hasMany(Publication::class);
    }
    
    
}
