<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\GalleryCategorie;
use Illuminate\Support\Facades\Storage;
use File;
use Illuminate\Support\Facades\Input;
use App\Image;

class ImagesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::orderBy('id', 'desc')->get();

        return view('admin.images.index', ['images'=>$images]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $albums = GalleryCategorie::orderBy('id', 'desc')->get();
        return view('admin.images.create', ['albums'=>$albums]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('file')) {
           foreach($request->file('file') as $file){
              $size = getimagesize($file);
              $filename = str_random(5).'-'. time().'-'.str_random(5).'.'. $file->getClientOriginalExtension();

              Storage::put('public/images/'. $filename, fopen($file, 'r+'));

               $image = new Image();
               $image->image = $filename;
               $image->width = $size[0];
               $image->height = $size[1];
               if (!empty($request->album_id)) {
                   $image->gallery_categorie_id = $request->album_id;
               }
               $image->save();
           }
         }
         return redirect()->back()->with('success', 'ფოტო[ები] წარმატებით აიტვირთა');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = Image::find($id);
        File::delete(public_path('Storage/images/'. $image->image));
        $image->delete();

        return redirect()->back()->with('success', 'ფოტო წარმატებით წაიშლა');
    }
}
