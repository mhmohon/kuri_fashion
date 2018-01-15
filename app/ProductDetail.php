<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    protected $fillable = ['pro_image', 'pro_info', 'pro_other_colors', 'pro_size', 'pro_price', 'pro_level', 'pro_status', 'product_id'];

    public function product()
    {
    	return $this->belongsTo(Product::class);
    }
}
