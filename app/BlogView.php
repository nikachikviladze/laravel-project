<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogView extends Model
{
    protected $fillable = [
        'count',
    ];

    public function blog(){
    	return $this->belongsTo('App\Blog');
    }
}
