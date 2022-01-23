<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminCouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $coupons=Coupon::all();
        return  view('admin.coupon.index', compact('coupons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return  view('admin.coupon.create');
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
        $validated=$request->validate([
            'status'=>'required|integer',
            'amount'=>'required|integer',
            'name'=>'required|string',
            'expire'=>'required|date'

        ]);
        $code=Str::random(6);
        $coupon=Coupon::create([
            'name'=>$validated['name'],
            'amount'=>$validated['amount'],
            'status'=>$validated['status'],
            'expire'=>$validated['expire'],
            'code'=>$code
        ]);
        return  redirect('admin/homepage/coupon')
            ->with('status', 'Coupon Created Successfully');
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
        $coupon=Coupon::findOrFail($id);
        return  view('admin.coupon.edit', compact('coupon'));
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
        $coupon=Coupon::findOrFail($id);
        $input=$request->validate([
            'status'=>'required|integer',
            'amount'=>'required|integer',
            'name'=>'required|string',
            'expire'=>'required|date'

        ]);
        $coupon->update($input);
        return  redirect('admin/homepage/coupon')
            ->with('status', 'Coupon Updated Successfully');

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
        $coupon=Coupon::findOrFail($id);
        $coupon->delete();
        return  redirect('admin/homepage/coupon')
            ->with('status', 'Coupon Deleted Successfully');
    }
}
