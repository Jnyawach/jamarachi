<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductStoreStepTwo extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
      $validated=$request->validate([
          'description'=>'required',
          'details'=>'required',
          'box'=>'required'
      ]);
       $product=Product::findOrFail(session('product.id'));
       $product->update([
           'description'=>$validated['description'],
           'details'=>$validated['details'],
           'box'=>$validated['box'],
       ]);
        $request->session()->put('product', $product);
        return  redirect('admin/homepage/products/step-three');
    }

}
