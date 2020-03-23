<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class CartItem extends Pivot
{
    protected $table = 'cartitems';
    public function products(){
        return $this->hasOne('App\Product');
    }

    public function users(){
        return $this->hasMany('App\User');
    }
}
