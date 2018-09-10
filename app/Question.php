<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
	public $timestamps = false;
    protected $fillable = ['theme_id', 'question', 'description', 'image'];

    
    protected $with = ['options', 'questions'];

    public function options(){
        return $this->hasMany('App\Option');
    }
    public function questions(){
    	return $this->hasMany('App\QuestionTranslate');
    }


    public function theme(){
    	return $this->belongsTo('App\Theme');
    }

    public function cat(){
    	return $this->belongsToMany('App\DriveCategorie');
    }

    public function userMistake(){
        return $this->hasMany('App\UserMistake');
    }
    
}
