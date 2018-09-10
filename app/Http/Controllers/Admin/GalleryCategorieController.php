<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\GalleryCategorie;
use App\Image;

class GalleryCategorieController extends Controller
{
	public function __construct()
	{
	    $this->middleware('auth:admin');
	}
    public function index()
        {
        	$albums = GalleryCategorie::all();
        	return view('admin/gallery/albums', ['albums'=>$albums]);
        }
        public function store(Request $request)
        {
        	$album = new GalleryCategorie();
        	$album->name =  $request->name;
        	$album->save();

        	$album = GalleryCategorie::where('id', $album->id)->first();


            return $album->toJson(); 
        }
        public function show($id)
        {
        	$album = GalleryCategorie::findOrFail($id);
        	return view('admin/gallery/show', ['album'=>$album]);
        }
        public function update(Request $request, $id)
        {
        	$album = GalleryCategorie::find($id);
        	$album->name = $request->name;
        	$album->save();
        	return redirect()->back();
        }
        public function destroy($id)
        {
        	$album = GalleryCategorie::find($id);

            $gallery = Image::where('gallery_categorie_id', $id)->get();

            foreach($gallery as $gal)
            {
              $pathToYourFile = public_path('storage/images/'. $gal->image);
              unlink($pathToYourFile);
            }

        	$album->delete();
        	return redirect()->back();
        }
}
