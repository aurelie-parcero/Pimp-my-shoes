<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function orders()
    {
        return $this->belongsToMany('App\Order');
    }

    public function users()
    {
        return $this->belongsToMany(User::class,"cartitems");
    }

}
