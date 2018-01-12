<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Category extends Model
{
    //Specify which table
    protected $table = 'tbl_categories';
    
    //Declear fillable field
    protected $fillable = ['cat_name', 'cat_description', 'publication_status'];

    public static function published()
    {
    	return static::where('publication_status',1)->get();
    }
    public function product()
    {
        return $this->hasMany('App\Product');
    }

}

