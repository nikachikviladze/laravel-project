<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SignDetail extends Model
{
    public $timestamps = false;

    public function sign(){

    	return $this->belongsTo('App\Sign');
    }
}
