<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['pro_code', 'pro_name', 'category_id'];

    public function category()
    {
    	return $this->belongsTo(Category::class);
    }
    public function productDetail()
    {
    	return $this->hasOne(ProductDetail::class);
    }
}
