<?php

namespace Walladog;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
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

    public function status(){
        return $this->belongsTo(PublicationStatus::class,'publication_status_id');
    }

    public function type(){
        return $this->belongsTo(PublicationType::class,'publication_type_id');
    }
    
    public function category(){
        return $this->belongsTo(PublicationCategory::class,'publication_category_id');
    }
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}
