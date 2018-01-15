<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = ['cat_name', 'cat_description', 'publication_status'];

    public static function published()
    {
    	return static::where('publication_status', 1);
    }

    public function product()
    {
    	return $this->hasMany(Product::class);
    }

}
