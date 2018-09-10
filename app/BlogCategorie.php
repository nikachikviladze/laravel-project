<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogCategorie extends Model
{	
	public $timestamps = false;
	
    public function blog(){

        return $this->hasMany('App\Blog');
    }
}
