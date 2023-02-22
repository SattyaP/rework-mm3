<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Blog;
use App\Models\Tag;
use Session;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::orderBy('id')->paginate(10);

        return view('admin.blog.index', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tag = Tag::all();

        return view('admin.blog.create', compact('tag'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'image' => 'required|image|mimes:png,jpg',
            'tag_id' => 'required',
            'description' => 'required',
            'article' => 'required'
        ]);

        $image = $request->file('image')->store('public/blogs');
        $blog = Blog::create([
            'title' => $request->title,
            'image' => $image,
            'tag_id' => $request->tag_id,
            'description' => $request->description,
            'article' => $request->article
        ]);

        if ($blog) {
            Session::flash('success', 'Success adding data blog');
            return redirect()->route('blog.index');
        } else {
            Session::flash('error', 'Failed adding data blog');
            return redirect()->route('blog.index');
        }
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
        $blog = Blog::findOrFail($id);
        Storage::delete($blog->image);
        $blog->delete();
        if ($blog) {
            Session::flash('success', 'Success delete data blog');
            return redirect()->route('blog.index');
        } else {
            Session::flash('error', 'Failed delete data blog');
            return redirect()->route('blog.index');
        }
    }
}
