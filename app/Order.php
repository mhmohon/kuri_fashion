<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id', 'payment_id', 'address_id', 'order_description', 'order_date','estimate_delivery_date', 'status'];

    public function customer()
    {
    	return $this->belongsTo(Customer::class,'user_id');
    }
    public function payment()
    {
    	return $this->belongsTo(PaymentMethod::class, 'payment_id');
    }
    public function address()
    {
    	return $this->belongsTo(Address::class, 'address_id');
    }
    public function orderItem()
    {
    	return $this->hasMany(OrderItem::class);
    }
}
