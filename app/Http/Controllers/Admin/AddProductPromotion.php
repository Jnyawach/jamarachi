<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Promotion;
use Illuminate\Http\Request;

class AddProductPromotion extends Controller
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
       $promotion=Promotion::findOrfail($request->promotion_id);
       $product_id=$request->product_id;
       $promotion->products()->attach($product_id);
       return redirect()->back()
           ->with('status','Product Successfully Promoted');
    }
}
