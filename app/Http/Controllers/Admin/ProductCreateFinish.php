<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductCreateFinish extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, $id)
    {
        //
        $product=Product::findOrFail($id);

        $product->update([
            'complete'=>1
        ]);
       
        $request->session()->forget('product');
        return  redirect('admin/homepage/products')
            ->with('status','Product Successfully created');
    }
}
