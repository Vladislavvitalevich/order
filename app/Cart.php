<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{

    protected $table = 'carts';
    protected $fillable = ['user_id','product_id','count'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){
        return $this->belongsTo('App\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function products(){
        return $this->belongsToMany('App\Product');
    }
}
