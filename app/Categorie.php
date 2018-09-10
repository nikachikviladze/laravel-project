<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
	public $timestamps = false;
	
    public function info(){
    	return $this->hasMany('App\CategorieInfo');
    }
}
