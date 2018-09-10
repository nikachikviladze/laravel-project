<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategorieInfo extends Model
{
	public $timestamps = false;
	
    public function categorie(){
    	return $this->belongsTo('App\Categorie');
    }
}
