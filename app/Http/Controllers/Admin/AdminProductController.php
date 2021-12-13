<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;



class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products=Product::where('complete',1)->get();
        return  view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $categories=Category::pluck('name','id');
        $brands=Brand::orderBy('name')->pluck('name','id');
        return  view('admin.products.create', compact('categories','brands'));
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


        if ($request->session()->has('product')) {
           $product=Product::findOrFail(session('product.id'));
            $validated=$request->validate([
                'status'=>'integer|max:25',
                'name'=>'required|max:80|string|min:20',
                'sku'=>'required|string|max:50',
                'brand_id'=>'required|integer|max:25',
                'category_id'=>'required|integer|max:25',
                'subcategory_id'=>'required|integer|max:25',
                'stock'=>'required|integer',
                'price'=>'required|max:50',
                'sale_price'=>'required|max:50',
            ]);
           $product->update([
               'status'=>$validated['status'],
               'name'=>$validated['name'],
               'sku'=>$validated['sku'],
               'brand_id'=>$validated['brand_id'],
               'category_id'=>$validated['category_id'],
               'subcategory_id'=>$validated['subcategory_id'],
               'price'=>$validated['price'],
               'sale_price'=>$validated['sale_price'],
               'stock'=>$validated['stock'],
           ]);
            $request->session()->put('product', $product);
        }else{
            $validated=$request->validate([
                'status'=>'integer|max:25',
                'name'=>'required|max:80|string|min:20',
                'sku'=>'required|string|max:50|unique:products',
                'brand_id'=>'required|integer|max:25',
                'category_id'=>'required|integer|max:25',
                'subcategory_id'=>'required|integer|max:25',
                'stock'=>'required|integer',
                'price'=>'required|max:50',
                'sale_price'=>'required|max:50',
            ]);
            $product=Product::create([
                'status'=>$validated['status'],
                'name'=>$validated['name'],
                'sku'=>$validated['sku'],
                'brand_id'=>$validated['brand_id'],
                'category_id'=>$validated['category_id'],
                'subcategory_id'=>$validated['subcategory_id'],
                'price'=>$validated['price'],
                'sale_price'=>$validated['sale_price'],
                'stock'=>$validated['stock'],

            ]);
            $request->session()->put('product', $product);
        }

        return  redirect('admin/homepage/products/step-two');


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
        $product=Product::findBySlugOrFail($id);
        return  view('admin.products.show',compact('product'));
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
        $product=Product::findOrFail($id);
        $categories=Category::pluck('name','id');
        $brands=Brand::orderBy('name')->pluck('name','id');
        return  view('admin.products.edit', compact('product','categories','brands'));
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
        $product=Product::findOrFail($id);
        $validated=$request->validate([
            'name'=>'required|max:80|string|min:20',
            'brand_id'=>'required|integer|max:25',
            'category_id'=>'required|integer|max:25',
            'subcategory_id'=>'required|integer|max:25',
            'stock'=>'required|integer',
            'price'=>'required|max:50',
            'sale_price'=>'required|max:50',
        ]);
        $product->update($validated);
        $request->session()->put('product', $product);
        return  redirect('admin/homepage/products/step-two');
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
        $product=Product::findOrFail($id);
        $product->delete();
        return redirect()->back()
            ->with('status','Product Successfully deleted');
    }

    public function subCategory(Request $request)
    {
        $subcategories=SubCategory::where('category_id',$request->category_id)->pluck('name','id');
        return response()->json($subcategories);
    }

    public  function productStepTwo(){
        return view('admin/products/step-two');
    }
    public  function productStepThree(){
        return view('admin/products/step-three');
    }
    public  function productStepFour(){
        return view('admin/products/step-four');
    }
    public  function productStepFive(){
        return view('admin/products/step-five');
    }

    public  function productActive(){
        $products=Product::where('complete',1)->where('status',1)->get();
        return view('admin/products/active',compact('products'));
    }
    public  function productInactive(){
        $products=Product::where('complete',1)->where('status',0)->get();
        return view('admin/products/inactive',compact('products'));
    }
    public  function soldOut(){
        $products=Product::where('complete',1)->where('status',1)->where('stock',0)->get();
        return view('admin/products/soldout',compact('products'));
    }
    public  function selling(){
        $products=Product::where('complete',1)->where('status',1)->get();
        return view('admin/products/selling',compact('products'));
    }
}
