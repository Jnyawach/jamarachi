<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class AdminSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $subcategories=SubCategory::all();
        $categories=Category::all();
        return  view('admin.subcategory.index',compact('subcategories','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name'=>'required|string|max:25',
            'status'=>'required|max:1',
            'category_id'=>'required|max:15'
        ]);
        $category=SubCategory::create([
            'name'=>$validated['name'],
            'status'=>$validated['status'],
            'category_id'=>$validated['category_id']
        ]);

        return  redirect()->back()->with('status','Category added Successfully');
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
        $category=SubCategory::findOrFail($id);
        $validated=$request->validate([
            'name'=>'required|string|max:25',
            'status'=>'required|max:1',
            'category_id'=>'required|max:15'
        ]);
       $category->update([
            'name'=>$validated['name'],
            'status'=>$validated['status'],
            'category_id'=>$validated['category_id']
        ]);

        return  redirect()->back()->with('status','Category updated Successfully');
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
        $category=SubCategory::findOrFail($id);
        $category->delete();
        return  redirect()->back()->with('status','Category deleted Successfully');
    }
}
