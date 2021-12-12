<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;


class ProductStoreStepFour extends Controller
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
            'mainImage'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'imageTwo'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'imageThree'=>'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'imageFour'=>'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'keywords'=>'required',
            'meta_description'=>'required'
        ]);
        $product=Product::findOrFail(session('product.id'));
        $product->update([
            'keywords'=>$validated['keywords'],
            'meta_description'=>$validated['meta_description']
        ]);

        if($files=$request->file('mainImage')) {
            if ( $product->getMedia('mainImage')->count()>0){
                $product->clearMediaCollection('mainImage');
                $product->addMedia($files)->toMediaCollection('mainImage');
            }else{
                $product->addMedia($files)->toMediaCollection('mainImage');
            }

        }

        if($files=$request->file('imageTwo')) {
            if ( $product->getMedia('imageTwo')->count()>0){
                $product->clearMediaCollection('imageTwo');
                $product->addMedia($files)->toMediaCollection('imageTwo');
            }else{
                $product->addMedia($files)->toMediaCollection('imageTwo');
            }

        }

        if($files=$request->file('imageThree')) {
            if ( $product->getMedia('imageThree')->count()>0){
                $product->clearMediaCollection('imageThree');
                $product->addMedia($files)->toMediaCollection('imageThree');
            }else{
                $product->addMedia($files)->toMediaCollection('imageThree');
            }

        }
        if($files=$request->file('imageFour')) {
            if ( $product->getMedia('imageFour')->count()>0){
                $product->clearMediaCollection('imageFour');
                $product->addMedia($files)->toMediaCollection('imageFour');
            }else{
                $product->addMedia($files)->toMediaCollection('imageFour');
            }

        }
        $request->session()->put('product', $product);
        return  redirect('admin/homepage/products/step-five');
    }
}
