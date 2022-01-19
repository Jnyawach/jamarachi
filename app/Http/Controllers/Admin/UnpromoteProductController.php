<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Promotion;
use Illuminate\Http\Request;

class UnPromoteProductController extends Controller
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
        $promotion=Promotion::findOrFail($id);
        $promotion->products()->detach($request->product_id);
        return redirect()->back()
            ->with('status','Product Successfully Deleted from Promotion');
    }
}
