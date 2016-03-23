<?php

namespace Walladog;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
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

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(SiteCategory::class,'site_category_id');
    }

    public function type(){
        return $this->belongsTo(SiteType::class,'site_type_id');
    }

    public function comments(){
        return $this->hasMany(SiteComment::class);
    }

    
}
