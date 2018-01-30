<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['name', 'user_id', 'product_id', 'rating', 'comment', 'publication_status'];

    public function user()
	{
	    return $this->belongsTo(user::class,'user_id');
	}

	public function product()
	{
	    return $this->belongsTo(Product::class, 'product_id');
	}
}
