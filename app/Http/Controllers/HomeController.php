<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TestResult;
use App\Question;
use Auth;
use Date;
use DB;
use App\UserMistake;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = TestResult::where('user_id', Auth::id())->orderBy('id', 'desc')->get();

        return view('home', ['results'=>$results]);
    }
    public function test($id)
    {
        $result = TestResult::where('user_id', Auth::id())->findOrFail($id);
        $r=json_decode($result->result, true);


        $ids_ordered = implode(',', array_column($r, 'ticket_id'));
        $tests = Question::whereIn('id', array_column($r, 'ticket_id'))
                          ->orderByRaw(DB::raw("FIELD(id, $ids_ordered)"))
                          ->get();

        $answers = array_column($r, 'position'); 

        // არასწორი პასუხების მართვა

        $wrongTickets = implode(',', array_column($r, 'wrongTicket'));

        if ($wrongTickets=='') {
            $t =null;
            
        }else{
            // შეკითხვების დალაგება თანმიმდევრობის მიხედვით
            $wrongTests = Question::whereIn('id', array_column($r, 'wrongTicket'))
                          ->orderByRaw(DB::raw("FIELD(id, $wrongTickets)"))
                          ->get();

            // შეკითხვების დაჯგუფება კატეგორიეს მიხედვით, ფორმატი მასივი

            $t = $wrongTests->groupBy('theme_id')->toArray(); 

            // ციფრების მასივი, რაოდენობა = დაჯგუფებულ შეკითხვებს

            $ar2 =[];
            for ($i=0; $i < count($t); $i++) { 
                array_push($ar2, $i);
            }
            // 

            array_multisort($t, SORT_DESC, $ar2);

            if (request()->name=='mistake') {
                $tests = Question::whereIn('id', array_column($r, 'wrongTicket'))
                          ->orderByRaw(DB::raw("FIELD(id, $wrongTickets)"))
                          ->get();

                $answers = array_column($r, 'wrongPosition');           
            }

        }
        return view('test', ['result'=>$result, 'tests'=>$tests, 'answers'=>$answers, 't'=>$t]);
    }
    public function userStatistic($id)
    {

      $userMistake = UserMistake::where('user_id', Auth::id())->get();
      $themes = $userMistake->groupBy('theme_id')->toArray();
      $count = $userMistake->count();
      $ar2 =[];

      for ($i=0; $i < count($themes); $i++) { 
          array_push($ar2, $i);
      }

      array_multisort($themes, SORT_DESC, $ar2);

      $userTickets = TestResult::where('user_id', Auth::id())->get()->count();

      $correct = TestResult::where('user_id', Auth::id())->where('correct', '>', 0)->get()->sum('correct');
      $wrong = TestResult::where('user_id', Auth::id())->where('wrong', '>', 0)->get()->sum('wrong');

      $win=0;
      $looser=0;

      foreach (TestResult::where('user_id', Auth::id())->get() as $key => $value) {
          $sum = $value->correct+$value->wrong;

          if ($sum-$value->wrong>=$sum-3) {
              ++$win;
          }else{
              ++$looser;
          }
      }

      $record = TestResult::where('user_id', Auth::id())->orderBy('time', 'asc')->first();
      $user = User::where('id', Auth::id())->first()->created_at;

      return view('userStatistic', ['count'=>$count, 
                                    'themes'=>$themes, 
                                    'userTickets'=>$userTickets, 
                                    'looser'=>$looser, 
                                    'win'=>$win,
                                    'correct'=>$correct,
                                    'wrong'=>$wrong,
                                    'record'=>$record,
                                    'user'=>$user

                                  ]);
    }

    public function exercise()
    {
      $mistakes = UserMistake::where('user_id', Auth::id())->get();

      return view('home2');

    }
}
