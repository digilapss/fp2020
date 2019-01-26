<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chair extends Model
{
    public function group()
    {
    	return $this->belongsTo('App\Group');
    }
}
