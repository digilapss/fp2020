<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function Member()
    {
    	return $this->hasMany('App\Member');
    }

    public function Docugroup()
    {
    	return $this->hasMany('App\Docugroup');
    }
}
