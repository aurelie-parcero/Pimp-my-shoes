<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function order() {
        return $this->hasMany('App\Order');
    }
}
