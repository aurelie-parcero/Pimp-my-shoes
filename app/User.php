<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    const ADMIN_ROLE = 'admin';
    const DEFAULT_ROLE = 'user';

    public function isAdmin()
    {
        return $this->role === self::ADMIN_ROLE;
    }

    public function getRememberTokenName()
    {
        return '';
    }

    public function orders() {
        return $this->hasMany('App\Order');
    }

    public function cartItems() {
        return $this->belongsToMany(Product::class ,"cartitems")
            ->using(CartItem::class)
            ->withPivot([
                'quantity',
            ]);
    }
}

