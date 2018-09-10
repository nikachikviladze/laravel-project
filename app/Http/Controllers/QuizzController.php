<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DriveCategorie;
use App\Question;
use App\Theme; 
use App\QuestionTranslate;
use App\Option;

class QuizzController extends Controller
{
    public function index()
    {
    	$questions = Question::paginate(30);

    	return view('quizz', [ 'questions'=>$questions]);
    }
    public function c()
    {
        $themes = Theme::orderBy('id', 'desc')->get();
        $categories = DriveCategorie::all();

        return view('Create', ['themes'=>$themes, 'categories'=>$categories]);
    }
    public function c_store(Request $request)
    {
        $this->validate($request, ['question|required', 'option1|required', 'option2|required']);
        $question = new Question();
        $question->theme_id = $request->theme_id;
        if($request->hasFile('image')){
            $image= $request->file('image');
            $filename = time() . '.'. $image->getClientOriginalExtension();
            
            $location = public_path('tickets/'. $filename);
            Image::make($image)->save($location);

            $question->image =  $filename;
        }
        $question->save();
        $questionId = $question->id;

        $title = new QuestionTranslate();
        $title->question = $request->question;
        $title->locale =  app()->getLocale();
        $title->question_id =$questionId;
        $title->description = $request->description;
        $title->save();


        $question->cat()->sync($request->categories, false);

        $option = new Option();
        $option->option1 = $request->option1;
        $option->option2 = $request->option2;
        $option->option3 = $request->option3;
        $option->option4 = $request->option4;
        $option->answer = $request->answer; 
        $option->question_id =$questionId;
        $option->locale =app()->getLocale();
        $option->save();

        return redirect()->back();


    }


    public function create($id)
    {
        $question = Question::find($id);
        return view('quizzCreate', ['question'=>$question]);
    }
    public function update(Request $request, $id)
    {


        $items = QuestionTranslate::where('question_id', $id)->get();

        foreach ($items as $key => $item) {

          $p = QuestionTranslate::find($item->id);
          $p->question = $request->question[$key];
          $p->save();
        }

        if(count($items) != count($request->locale))
        {
          for ($i=0; $i <  count($request->locale)-count($items) ; $i++) {
            if($request->question[count($items)+$i]!=null)
            {
              $p = new QuestionTranslate;
              $p->question = $request->question[count($items)+$i];
              $p->locale = $request->locale[count($items)+$i];
              $p->question_id = $id;
              $p->save();
            }
          }
        }

        $options = Option::where('question_id', $id)->get();

        foreach ($options as $key => $item) {

          $o = Option::find($item->id);
          $o->option1 = $request->option1[$key];
          $o->option2 = $request->option2[$key];
          if(isset($request->option3[$key]))
          {
            $o->option3 = $request->option3[$key];
          }
          if(isset($request->option4[$key]))
          {
            $o->option4 = $request->option4[$key];
            
          }
          $o->save();
        }

        // dd($options);
        if(count($options) != count($request->locale))
        {
          for ($i=0; $i <  count($request->locale)-count($options) ; $i++) {
            if($request->option1[count($options)+$i]!=null)
            {
              $p = new Option;
              $p->option1 = $request->option1[count($options)+$i];
              $p->option2 = $request->option2[count($options)+$i];
              $p->question_id = $id;
              $p->locale = $request->locale[count($options)+$i];
              if (isset($request->option3[count($options)+$i])) {
                $p->option3 = $request->option3[count($options)+$i];

              }
              if (isset( $request->option4[count($options)+$i])) {
                $p->option4 = $request->option4[count($options)+$i];
              }

              
              $p->save();
            }
          }
        }

        return redirect()->back();


    }
}
