<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CategorieImage;
use App\Categorie;
use Illuminate\Support\Facades\Storage;
use File;
use Illuminate\Support\Facades\Input;
use App\User;
use App\TestResult;
use App\RegisterClient;

class AdminController extends Controller
{
	public function __construct()
	{
	    $this->middleware('auth:admin');
	}
    public function index()
    {
        $users = User::all()->count();
        $mens = User::where('gender', 1)->get()->count();
        $fmales = User::where('gender', 2)->get()->count();
        $tests = TestResult::all()->count();
        $wrong = TestResult::where('wrong', '>', 0)->get()->sum('wrong');

        $registers = RegisterClient::orderBy('id', 'desc')->get();

        $array = RegisterClient::selectRaw("*, DATE_FORMAT(created_at, '%Y-%m-%d') as date")->get();
        $results = $array->where('date', date('Y-m-d'))->count();


    	return view('admin.main', ['users'=>$users, 'mens'=>$mens, 'fmales'=>$fmales, 'tests'=>$tests, 'wrong'=>$wrong, 'registers'=>$registers, 'results'=>$results]);
    }
    public function carcategorie()
    {
    	$images =CategorieImage::all();
    	return view('admin.carcategorie', ['images'=>$images]);
    }
    public function storeImage()
    {
    	$categories = Categorie::all();
    	return view('admin.create', ['categories'=>$categories]);

    }
    public function storeCarcategorieImage(Request $request)
    {
    	$this->validate($request, ['image'=>'required', 'type'=>'required']);
    	$filename = time().'.'. $request->file('image')->getClientOriginalExtension();
    	Input::file('image')->move('images/carimages', $filename);

    	$image = new CategorieImage();
    	$image->image = $filename;
    	$image->type = $request->type;
    	$image->save();

        return redirect()->back()->with('success', 'ფოტო წარმატებით აიტვირთა');

    }
    public function destroyCarcategorieImage($id)
    {
    	$image = CategorieImage::find($id);
        File::delete(public_path('images/carimages/'. $image->image));
        $image->delete();

        return redirect()->back()->with('success', 'ფოტო წარმატებით წაიშლა');
    }

}
