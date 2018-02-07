<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function staff()
    {
        return $this->hasOne(Staff::class);
    }

    public function customer()
    {
        return $this->hasOne(Customer::class);
    }

    public function address()
    {
        return $this->hasMany(Address::class);
    }
    
    public function order()
    {
        return $this->hasMany(Order::class);
    }
    
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    
    public function wishlists()
    {
        return $this->hasMany(Wishlist::class);
    }
}
