<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BlogCategorie;

class CategorieController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
    	$categories = BlogCategorie::all();
    	return view('admin/categorie/albums', ['categories'=>$categories]);
    }
    public function store(Request $request)
    {
    	$categorie = new BlogCategorie();
    	$categorie->name =  $request->name;
    	$categorie->save();

    	$categorie = BlogCategorie::where('id', $categorie->id)->first();


        return $categorie->toJson(); 
    }
    public function show($id)
    {
    	$categorie = BlogCategorie::findOrFail($id);
    	return view('admin/categorie/show', ['album'=>$album]);
    }
    public function update(Request $request, $id)
    {
    	$categorie = BlogCategorie::find($id);
    	$categorie->name = $request->name;
    	$categorie->save();
    	return redirect()->back();
    }
    public function destroy($id)
    {
    	$categorie = BlogCategorie::find($id);

    	$categorie->delete();
    	return redirect()->back();
    }
}
