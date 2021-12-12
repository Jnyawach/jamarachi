<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProductStoreStepThree extends Controller
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
            'condition'=>'required|max:25|string',
            'cpu'=>'nullable|max:25|string',
            'processor_brand'=>'nullable|max:25|string',
            'rear_camera'=>'nullable|max:25|string',
            'front_camera'=>'nullable|max:25|string',
            'cellular'=>'nullable|max:25|string',
            'operating_system'=>'nullable|max:25|string',
            'sim_card'=>'nullable|max:25|string',
            'battery'=>'nullable|max:25',
            'screen_size'=>'nullable|max:25',
            'language'=>'nullable|max:50|string',
            'display_type'=>'nullable|max:25|string',
            'country'=>'nullable|max:25|string',
            'weight'=>'required',
        ]);

        $product=Product::findOrFail(session('product.id'));
        $product->update([
            'condition'=>$validated['condition'],
            'cpu'=>$validated['cpu'],
            'processor_brand'=>$validated['processor_brand'],
            'rear_camera'=>$validated['rear_camera'],
            'front_camera'=>$validated['front_camera'],
            'cellular'=>$validated['cellular'],
            'operating_system'=>$validated['operating_system'],
            'sim_card'=>$validated['sim_card'],
            'battery'=>$validated['battery'],
            'screen_size'=>$validated['screen_size'],
            'language'=>$validated['language'],
            'display_type'=>$validated['display_type'],
            'country'=>$validated['country'],
            'weight'=>$validated['weight'],

        ]);
        $request->session()->put('product', $product);
        return  redirect('admin/homepage/products/step-four');
    }
}
