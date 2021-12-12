<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Color;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductStoreStepFive extends Controller
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
            'colorFile'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'color'=>'required|string|max:50',
        ]);
        $product=Product::findOrFail(session('product.id'));

        $color=Color::create([
            'product_id'=>$product->id,
            'name'=>$validated['color'],
        ]);

        if($files=$request->file('colorFile')) {
            if ( $color->getMedia('colorFile')->count()>0){
                $color->clearMediaCollection('colorFile');
                $color->addMedia($files)->toMediaCollection('colorFile');
            }else{
                $color->addMedia($files)->toMediaCollection('colorFile');
            }

        }

        return redirect()->back();

    }
}
