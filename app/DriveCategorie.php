<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DriveCategorie extends Model
{
    public function categorie(){
    	return $this->belongsToMany('App\Question', 'drive_categorie_question');
    }

    public function tests(){

    	return $this->hasMany('App\TestResult');
    }
}
