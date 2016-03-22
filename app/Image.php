<?php

namespace Walladog;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','user_detail_id','id_pet','id_partner','id_product','url_short','url_big'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];

    public function user(){
        return $this->BelongsTo(User::class);
    }
}
