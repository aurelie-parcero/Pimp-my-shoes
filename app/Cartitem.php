<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Cartitem extends Pivot
{
    public function products(){
        return $this->hasOne('App\Product');
    }

    public function users(){
        return $this->hasMany('App\User');
    }
}
