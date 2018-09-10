<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionTranslate extends Model
{
    public $timestamps = false;

    public function q(){
    	return $this->belongsTo('App\Question');
    }
}
