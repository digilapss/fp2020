<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docugroup extends Model
{
   public function category()
    {
    	return $this->belongsTo('App\Group');
    }
}
