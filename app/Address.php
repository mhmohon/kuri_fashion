<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    
    protected $fillable = ['street_address', 'region', 'city', 'user_id'];

    public function order()
    {
    	return $this->hasOne(Order::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class,'user_id');
    }
}
