<?php

use Illuminate\Database\Seeder;
use App\QuestionTranslate;

class Question_translatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 1741; $i++) { 
    		$post = new QuestionTranslate();
    		$post->question_id = $i;
        	$post->question = 'test';
        	$post->description = 'test';
        	$post->locale = 'ka';
        	$post->save();
    	}
    }
}
