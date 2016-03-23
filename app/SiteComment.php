<?php

namespace Walladog;

use Illuminate\Database\Eloquent\Model;

class SiteComment extends Model
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
    
    public function site(){
        return $this->belongsTo(Site::class,'comment_id');
    }
}
