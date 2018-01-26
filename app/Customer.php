<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    
    protected $fillable =  ['first_name','last_name','phone','user_id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
