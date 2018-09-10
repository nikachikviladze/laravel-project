<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public function likes(){

        return $this->hasMany('App\BlogLike');
    }
    public function view(){

        return $this->hasMany('App\BlogView');
    }
    

    public function categorie(){
    	return $this->belongsTo('App\BlogCategorie');
    }


}
