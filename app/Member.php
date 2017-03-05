<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public function category()
    {
    	return $this->belongsTo('App\Group');
    }
}
