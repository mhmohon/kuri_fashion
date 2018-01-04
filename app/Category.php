<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //Specify which table
    protected $table = 'tbl_categories';
    
    //Declear fillable field
    protected $fillable = ['name', 'description'];
}
