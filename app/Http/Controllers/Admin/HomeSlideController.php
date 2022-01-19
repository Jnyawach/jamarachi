<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Product;
use App\Models\Slide;
use Illuminate\Http\Request;

class HomeSlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return  view('admin.slide.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return  view('admin.slide.create');
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
            'title'=>'required|max:70|string|min:20',
            'tagline'=>'required|max:70|string|min:15',
            'status'=>'required|integer',
           /* 'action'=>'required|string|max:15',*/
            'product_id'=>'nullable|integer',
            'blog_id'=>'nullable|integer',
            'banner'=>'required|image|mimes:png,|max:2048|dimensions:width=400,height=400'
        ]);
        $slide=Slide::create([
            'title'=>$validated['title'],
            'tagline'=>$validated['tagline'],
            'status'=>$validated['status'],


        ]);

        if($files=$request->file('banner')) {
            $slide->addMedia($files)->toMediaCollection('slide');

        }
        return redirect('admin/homepage/slide')
            ->with('status','Slide Show successfully created');
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
        //
    }
}
