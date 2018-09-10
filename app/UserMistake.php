<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserMistake extends Model
{
	protected $fillable = [
        'user_id', 'questions_id','theme_id', 'categorie_id'
    ];
    public $timestamps = false;

    public function questions(){
    	return $this->belongsTo('App\Question');
    }
}
