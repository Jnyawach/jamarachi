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
        $product=$request->validate([
            'name'=>'required|max:80|string|min:20',
            'sku'=>'required|string|max:50|unique:products',
            'brand_id'=>'required|integer',
            'category_id'=>'required|integer',
            'subcategory_id'=>'required|integer'

        ]);
      /*$product=Product::create([
          'name'=>$validated['name'],
          'sku'=>$validated['sku'],
          'brand_id'=>$validated['brand_id'],
          'category_id'=>$validated['category_id'],
          'subcategory_id'=>$validated['subcategory_id']

      ]);*/
        if($request->session()->has('product')){
            $request->session()->forget('product');
            $request->session()->put('product', $product);
        }else{
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
}
