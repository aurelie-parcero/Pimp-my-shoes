<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function clients() {
        return $this->belongsTo('App\Client');
    }

    public function products() {
        return $this->belongsToMany('App\Product');
    }
}
