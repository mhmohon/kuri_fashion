<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['pro_code', 	'avg_rating', 'rating_count', 'pro_name', 'category_id'];

    public function category()
    {
    	return $this->belongsTo(Category::class,'category_id');
    }
    public function productDetail()
    {
        return $this->hasOne(ProductDetail::class);
    }
    public function wishlist()
    {
    	return $this->hasOne(Wishlist::class);
    }
    public function orderItem()
    {
    	return $this->hasOne(OrderItem::class);
    }
    public function inventory()
    {
    	return $this->hasOne(Inventory::class);
    }
    public function reviews()
	{
		return $this->hasMany(Review::class);
	}
    
	public function recalculateRating($rating)
    {
    	$reviews = $this->reviews();
	    $avgRating = $reviews->avg('rating');
		$this->avg_rating = round($avgRating,1);
		$this->rating_count = $reviews->count();
    	$this->save();
    }
}
