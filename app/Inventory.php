<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable = ['product_id', 'quantity_in_stock', 'stock_details'];
    
    public function product()
    {
    	return $this->belongsTo(Product::class, 'product_id');
    }
}
