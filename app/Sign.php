<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sign extends Model
{
    public $timestamps = false;

    public function signs(){

    	return $this->hasMany('App\SignDetail');
    }
}
