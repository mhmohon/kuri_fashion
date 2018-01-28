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

    public function customer()
    {
    	return $this->belongsTo(Customer::class,'user_id');
    }
}
