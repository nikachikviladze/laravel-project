<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Blog;
use Illuminate\Support\Facades\Input;
use File;
use App\BlogCategorie;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blog.index', ['blogs'=>$blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = BlogCategorie::all();
        return view('admin.blog.create', ['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['title'=>'required', 'description'=>'required']);

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->description = $request->description;

        if ($request->hasFile('image')) {
            $filename = time().'.'. $request->file('image')->getClientOriginalExtension();
            Input::file('image')->move('images/blog', $filename);

            $blog->image = $filename;
        }
        if ($request->blog_categorie_id!=null) {
            $blog->blog_categorie_id = $request->blog_categorie_id;
        }
        $blog->save();
        return redirect('admin/blog')->with('success', 'ბლოგი წარმატებით დაიწერა');
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
        $blog = Blog::find($id);
        $categories = BlogCategorie::all();

        return view('admin/blog/edit', ['blog'=>$blog, 'categories'=>$categories]);
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
        $blog = Blog::find($id);
        $blog->title = $request->title;
        $blog->description = $request->description;

        if ($request->hasFile('image')) {
            $filename = time().'.'. $request->file('image')->getClientOriginalExtension();
            Input::file('image')->move('images/blog', $filename);
            if ($blog->image!=null) {
                File::delete(public_path('images/blog/'.$blog->image));
            }

            $blog->image = $filename;
        }
        if ($request->blog_categorie_id!=null) {
            $blog->blog_categorie_id = $request->blog_categorie_id;
        }
        $blog->save();
        return redirect('admin/blog')->with('warning', 'ბლოგი წარმატებით რედაქტირდა');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);

        if ($blog->image !=null) {
           File::delete(public_path('images/blog/'. $blog->image));
        }
        $blog->delete();
        return redirect('admin/blog')->with('success', 'ბლოგი წარმატებით წაიშალა');
    }
}
