<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Cassandra\Session;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use function MongoDB\BSON\toJSON;

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
        return  view('admin.products.index');
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
        /*$validated=$request->validate([
            'status'=>'integer|max:25',
            'name'=>'required|max:80|string|min:20',
            'sku'=>'required|string|max:50|unique:products',
            'brand_id'=>'required|integer|max:25',
            'category_id'=>'required|integer|max:25',
            'subcategory_id'=>'required|integer|max:25',
            'stock'=>'required|integer|max:25',
            'price'=>'required|max:50',
            'sale_price'=>'required|max:50',
            'stock'=>'required|max:25',
            'condition'=>'required|max:25|string',
            'processor_brand'=>'max:25|string',
            'rear_camera'=>'max:25|string',
            'front_camera'=>'max:25|string',
            'cellular'=>'max:25|string',
            'operating_system'=>'max:25|string',
            'sim_card'=>'max:25|string',
            'battery_capacity'=>'max:25',
            'screen_size'=>'max:25',
            'language'=>'max:50|string',
            'display_type'=>'max:25|string',
            'details'=>'required',
            'description'=>'required',
            'box'=>'required',
            'country'=>'max:25|string',
            'weight'=>'max:25',
            'mainImage'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'imageTwo'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'imageThree'=>'image|mimes:jpeg,png,jpg,gif|max:2048',
            'imageFour'=>'image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);*/

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
}
