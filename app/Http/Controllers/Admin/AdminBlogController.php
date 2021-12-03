<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts=Blog::all();
        return  view('admin.blog.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return  view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $validated=$request->validate([
            'title'=>'required|max:255|string|min:60',
            'tag'=>'required|max:255|string',
            'summary'=>'required',
            'body'=>'required',
            'post-file'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $blog=Blog::create([
            'title'=>$validated['title'],
            'summary'=>$validated['summary'],
            'body'=>$validated['body'],
            'user_id'=>Auth::id(),
        ]);
        $arrayNames = explode(',', $request->input('tag'));
        foreach($arrayNames as $tag){
           $blog->tag()->create(['name'=>$tag]);
        }
        if($files=$request->file('post-file')) {
            $blog->addMedia($files)->toMediaCollection('post');

        }

        return  redirect('admin/homepage/blog')->with('status','Post created successfully');
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
        $post=Blog::findBySlugOrFail($id);
        return  view('admin.blog.show',compact('post'));
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
        $post=Blog::findOrFail($id);
        return  view('admin.blog.edit',compact('post'));
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
        $blog=Blog::findOrFail($id);
        $validated=$request->validate([
            'title'=>'required|max:255|string|min:60',
            'tag'=>'required|max:255|string',
            'summary'=>'required',
            'body'=>'required',
            'post-file'=>'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $blog->update([
            'title'=>$validated['title'],
            'summary'=>$validated['summary'],
            'body'=>$validated['body'],

        ]);
        $arrayNames = explode(',', $request->input('tag'));
        $blog->tag()->delete();

        foreach($arrayNames as $name){
            $blog->tag()->create(['name'=>$name]);
        }
        if($files=$request->file('post-file')) {
            if ( $blog->getMedia('post')->count()>0){
                $blog->clearMediaCollection('post');
                $blog->addMedia($files)->toMediaCollection('post');
            }else{
                $blog->addMedia($files)->toMediaCollection('post');
            }

        }
        return  redirect('admin/homepage/blog')->with('status','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $blog=Blog::findOrFail($id);
        $blog->delete();
        return  redirect('admin/homepage/blog')->with('status','Post deleted successfully');

    }
}
