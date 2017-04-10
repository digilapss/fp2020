<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catpart extends Model
{
    public function partner()
    {
    	return $this->hasMany('App\Partner');
    }
}
