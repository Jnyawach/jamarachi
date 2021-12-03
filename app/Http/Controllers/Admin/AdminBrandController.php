<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class AdminBrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $brands=Brand::all();
        return  view('admin.brand.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return  view('admin.brand.create');
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
            'name'=>'required|max:25|string',
            'logo'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $brand=Brand::create([
           'name'=>$validated['name'],
        ]);
        if($files=$request->file('logo')) {
            $brand->addMedia($files)->toMediaCollection('logo');

        }
        return redirect('admin/homepage/brand')->with('status', 'Brand Added Successfully');
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
        $brand=Brand::findOrFail($id);
        return view('admin.brand.edit',compact('brand'));
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
        $brand=Brand::findOrFail($id);
        $brand->update([' name'=>$request->name]);
        if($files=$request->file('logo')) {
            if ( $brand->getMedia('logo')->count()>0){
                $brand->clearMediaCollection('logo');
                $brand->addMedia($files)->toMediaCollection('logo');
            }else{
                $brand->addMedia($files)->toMediaCollection('logo');
            }

        }
        return redirect('admin/homepage/brand')->with('status', 'Brand Update d Successfully');


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
        $brand=Brand::findOrFail($id);
        $brand->delete();
        return redirect()->back()->with('status','Brand deleted Successfully');
    }
}
