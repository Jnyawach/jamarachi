<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Promotion;
use Illuminate\Http\Request;

class AdminPromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $promotions=Promotion::all();
        return  view('admin.promotions.index', compact('promotions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return  view('admin.promotions.create');
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
            'name'=>'string|max:50|required',
            'status'=>'required|max:50',
            'start_date'=>'required|string',
            'end_date'=>'required|string',
            'extra_offers'=>'nullable',
            'discount'=>'required|max:50'
        ]);

        $promotion=Promotion::create([
            'name'=>$validated['name'],
            'status'=>$validated['status'],
            'start'=>$validated['start_date'],
            'end'=>$validated['end_date'],
            'extra_offers'=>$validated['extra_offers'],
            'discount'=>$validated['discount']

        ]);

         return  redirect('admin/homepage/promotions')
             ->with('status','Promotion successfully created');
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
        $promotion=Promotion::findBySlugOrFail($id);
        return  view('admin.promotions.show', compact('promotion'));
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
        $promotion=Promotion::findOrFail($id);
        return  view('admin.promotions.edit', compact('promotion'));
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
        $promotion=Promotion::findOrfail($id);
        $validated=$request->validate([
            'name'=>'string|max:50|required',
            'status'=>'required|max:50',
            'start_date'=>'required|string',
            'end_date'=>'required|string',
            'extra_offers'=>'nullable',
            'discount'=>'required|max:50'
        ]);
        $promotion->update([
            'name'=>$validated['name'],
            'status'=>$validated['status'],
            'start'=>$validated['start_date'],
            'end'=>$validated['end_date'],
            'extra_offers'=>$validated['extra_offers'],
            'discount'=>$validated['discount']

        ]);

        return  redirect('admin/homepage/promotions')
            ->with('status','Promotion updated created');

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
        $promotion=Promotion::findOrFail($id);
        $promotion->delete();
        return  redirect('admin/homepage/promotions')
            ->with('status','Promotion deleted created');
    }

    public function productAdd ($id){
        //Product add to promotion
        $promotion=Promotion::findBySlugOrFail($id);
        $products=Product::where('complete',1)->where('status',1)->get();
        return view('admin/promotions/products',compact('products','promotion'));
    }
}
