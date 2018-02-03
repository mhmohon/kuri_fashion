<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    
    protected $fillable = ['house_no', 'street_address', 'route', 'city', 'state', 'country', 'latitude', 'longitude', 'user_id'];

    public function order()
    {
    	return $this->hasOne(Order::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class,'user_id');
    }
}
