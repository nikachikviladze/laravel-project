<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestResult extends Model
{
    public function categorie(){
    	
    	return $this->belongsTo('App\DriveCategorie');
    }
}
