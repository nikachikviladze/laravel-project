<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Theme;
use App\DriveCategorie;
use App\Question;
use App\RegisterClient;
use App\Categorie;
use App\CategorieInfo;
use App\CategorieImage;
use App\SignDetail;
use App\Sign;
use App\TestResult;
use Auth;
use App\GalleryCategorie;
use App\Image;
use App\Blog;
use App\BlogView;
use App\BlogLike;
use App\BlogCategorie;
use App\UserMistake; 
use DB;

class PagesController extends Controller
{
    public function index()
    {
        $categories = DriveCategorie::all();
    	return view('main', ['categories'=>$categories]);
    }
    public function tickets()
    {


    	$themes = Theme::all();
    	$categories = DriveCategorie::all();
    	$catName='';

    	if (request()->group) {
            if( Question::where('theme_id', request()->group)->get()->isEmpty())
            {
                abort(404);
            }
            // თემის მიხედვით ძებნა
    		$questions = Question::where('theme_id', request()->group)->paginate(20);
    		$count = count(Question::where('theme_id', request()->group)->get());
    		$name = Theme::where('id', request()->group)->first()->name;
    	}else{
            // ყველა ბილეთის ჩვენება
    		$questions = Question::paginate(20);
    		$count = count(Question::all());
    		$name = 'ყველა ბილეთი';
    	}
    	if(request()->name)
    	{
            // ჯგუფის მიხედვით ძებნა
            if( DriveCategorie::where('name', request()->name)->get()->isEmpty())
            {
                abort(404);
            }
            $id = DriveCategorie::where('name', request()->name)->first()->id;
    		$cat = DriveCategorie::find($id);
    		$catName = $cat->name;

    		if(request()->group!=null)
    		{
                // ჯგუფის და თემის მიხედვით ძებნა
    			$questions = $cat->categorie()->where('theme_id', request()->group)->paginate(20);
                $count = count($cat->categorie()->where('theme_id', request()->group)->get());
            }else{
                // მარტო ჯგუფის მიხედვთ ძებნა
                $questions = $cat->categorie()->paginate(20);
    			$count = count($cat->categorie()->get());
    		}

    	}
    	
    	return view('tickets', ['themes'=> $themes, 
                                'categories'=>$categories, 
                                'questions'=>$questions, 
                                'name'=>$name, 
                                'catName'=>$catName, 
                                'count'=>$count
                                ]);
    }
    public function number(Request $request)
    {

        if($request->number==null||$request->number<=0||$request->number>1741 )
        {
            abort(404);
        }
        $questions = Question::where('id', $request->number)->first();
        $theme = Theme::where('id', $questions->theme_id)->first()->name;

        if($request->ajax())
        {
            return [
                'questions'=>$questions,
                'options'=>$questions->options,
                'theme'=>$theme,
                'categories'=>$questions->cat,
            ];
        }        
    }
    public function exem()
    {
        if(request()->group)
        {
            $cat = DriveCategorie::findOrFail(request()->group);
            $catName = $cat->id;
            $take = $cat->take;
        }else{
            $take = null;
        }
        $themes = Theme::all();
        $categories = DriveCategorie::all();


        

        return view('exem', ['categories'=>$categories, 'themes'=>$themes, 'take'=>$take]);
    }
    public function start(Request $request)
    {        

        if ($request->cat<=0||$request->cat>9) {
            abort(404);
        }

        $cat = DriveCategorie::find($request->cat);
        // კატეგორიების მიხედვით ბილეთების გამოტანა

        if ($request->number>100) {
            $request->number=100;
        }

             
        if ($request->arr) {
            if ($request->number) {
                // შესაბამისი რაოდენობის ბილეთის გამოტანა
                $results =  $cat->categorie()
                                ->inRandomOrder()
                                ->take($request->number)
                                ->whereIn('theme_id', $request->arr)
                                ->with('options')
                                ->get();
            }else{

                // კატეგორიაში არსებული ყველა ბილეთის გამოტანა
                $results = $cat->categorie()->inRandomOrder()->whereIn('theme_id', $request->arr)->with('options')->get();            
            }

        }else{

            if ($request->number) {
                $results = $cat->categorie()->inRandomOrder()->take($request->number)->with('options')->get();
            }else{            
                // რენდომ კატეგორიების მიხედვით ბილეთების გამოტანა
                $results = $cat->categorie()->inRandomOrder()->take($cat->take)->with('options')->get();
            }
        }

        if ($request->hard ==1) {

            $hard = UserMistake::select('questions_id')->where('categorie_id',$request->cat)->take(30)->inRandomOrder()->distinct()->get()->toArray();

            if ($hard==null) {
                die();
            }

            $ids_ordered = implode(',', array_column($hard, 'questions_id'));

            $results  = Question::whereIn('id', array_column($hard, 'questions_id'))->orderByRaw(DB::raw("FIELD(id, $ids_ordered)"))->get();
        }

        $count =count($results);


        if($request->ajax())
        {
            return   ['results'=>$results, 'take'=>$cat->take, 'count'=>$count];
        }        
    }
    public function save(Request $request)
    {
        if($request->ajax())
        {
            $testResult = new TestResult();
            $testResult->result = json_encode($request->result);
            $testResult->user_id = Auth::id();
            $testResult->time = $request->time;
            $testResult->categorie_id = $request->cat;
            $testResult->correct = $request->correct;
            $testResult->wrong = $request->wrong;

            $testResult->save();

            foreach (array_column($request->result, 'wrongTicket') as $questions_id) {
                $q = Question::where('id', $questions_id)->first();

                UserMistake::firstOrCreate(['user_id' => Auth::id(), 'questions_id'=> $questions_id, 'theme_id'=>$q->theme->id, 'categorie_id'=>$request->cat]);             
            }

        } 
    }
    public function register(Request $request)
    {
        $this->validate($request, ['name'=>'required', 'email'=>'required|email', 'phone'=>'required|numeric']);

        $registerClient = new RegisterClient();
        $registerClient->name =  $request->name;
        $registerClient->email =  $request->email;
        $registerClient->phone =  $request->phone;
        $registerClient->time =  $request->time;
        $registerClient->day =  $request->day;
        $registerClient->type =  $request->type;
        $registerClient->curse =  $request->curse;

        $registerClient->save();

        return redirect()->back()->with('success', 'თქვენ წარმატებით დარეგისტრირდით, შეგეხმიანებით მალე');

    }
    public function categories()
    {
        $categories =Categorie::all();
        $infos = CategorieInfo::all()->groupBy('categorie_id');
        $images = CategorieImage::all();


        return view('categories', ['categories'=>$categories, 'infos'=>$infos, 'images'=>$images]);
    }
    public function signs()
    {
        $categories = Sign::all();
        $signs = SignDetail::all();

        return view('signs', ['categories'=>$categories, 'signs'=>$signs]);
    }
    
    public function practical()
    {
        return view('practical');
    }
    public function theorea()
    {
        return view('theorea');
    }
    public function regulation()
    {
        return view('regulation');
    }
    public function gallery()
    {
        $categories = GalleryCategorie::all();
        $images = Image::all();
        return view('gallery', ['categories'=>$categories, 'images'=>$images]);
    }
    public function contact()
    {
        return view('contact');
    }
    public function blog()
    {
        $blogs = Blog::orderBy('id', 'desc')->paginate(9);

        if (request()->id!=null) {
            $blogs = Blog::where('blog_categorie_id', request()->id)->paginate(9);
            if ($blogs->isEmpty())
            {
                $blogs = Blog::orderBy('id', 'desc')->paginate(9);
            }
        }
        // dd(date('j F', strtotime($blog->created_at)) );
        return view('blog', ['blogs'=>$blogs]);
    }
    public function showBlog($id)
    {
        $blog = Blog::findOrFail($id); 
        $blogs =Blog::orderBy('id', 'desc')->where('id', '!=', $id)->take(5)->get();
        $categories = BlogCategorie::all();

        $count = BlogView::where('blog_id', $id)->first(); 

        $likes = count(BlogLike::where('blog_id', $id)->get());
        $userLike = BlogLike::where('blog_id', $id)->where('ip', \Request::ip())->first();


        if ($count==null ||$userLike==null) {
           $count =0;
           $userLike == null;
        }else{
            $count = BlogView::where('blog_id', $id)->first()->count; 
            $userLike == true;
        }

        return view('show', ['blog'=>$blog, 'blogs'=>$blogs, 'count'=>$count, 'likes'=>$likes, 'userLike'=>$userLike, 'categories'=>$categories]);
    }
    public function count(Request $request)
    {

        if($request->ajax())
        {
            $blogView = BlogView::where('blog_id', $request->id)->first();

            if ($blogView==null) {
                $blogView = new BlogView();
                $blogView->blog_id =$request->id;
                $blogView->count = 1;
            }else{
                $blogView->count = $blogView->count+1;
                
            }
            $blogView->save();

            return $blogView->count;
        }  
    }

    public function like(Request $request)
    {

        if($request->ajax())
        {

            $like = BlogLike::where('blog_id', $request->id)->where('ip', \Request::ip())->first();

            if ($like==null) {
                $like = new BlogLike();
                $like->blog_id =$request->id;
                $like->ip = \Request::ip();
                $like->save();

                $liked = true;
            }else{
                $like->delete();

                $liked = false;   
            }
            $count = count(BlogLike::where('blog_id', $request->id)->get());


            return ['count'=>$count, 'liked'=>$liked];
        }  
    }
    public function statistic()
    {
        $all= TestResult::all()->count();

        $week = TestResult::where('created_at', '>', date("Y-m-d H:i:s", strtotime( "-1 week" )))->get()->count();

        $correct = TestResult::where('correct', '>', 0)->get()->sum('correct');
        $wrong = TestResult::where('wrong', '>', 0)->get()->sum('wrong');

        $users = TestResult::all()->groupBy('user_id')->count();

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


        $userMistake = UserMistake::all();
        $themes = $userMistake->groupBy('theme_id')->toArray();
        $count = $userMistake->count();
        $ar2 =[];

        for ($i=0; $i < count($themes); $i++) { 
            array_push($ar2, $i);
        }

        array_multisort($themes, SORT_DESC, $ar2);

        
        return view('statistic', ['all'=>$all,
                                  'week'=>$week, 
                                  'correct'=>$correct, 
                                  'wrong'=>$wrong, 
                                  'users'=>$users,
                                  'win'=>$win,
                                  'looser'=>$looser,
                                  'themes'=>$themes,
                                  'count'=>$count
                              ]);
    }
}