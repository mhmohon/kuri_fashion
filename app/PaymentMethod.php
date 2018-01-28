<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    protected $fillable = ['method_detail'];
    
    public function order()
    {
    	return $this->hasOne(Order::class);
    }
}
