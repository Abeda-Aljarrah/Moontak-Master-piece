<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $coupons = Coupon::get();

        return view('dashboard.coupons.index', compact('coupons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $coupons = Coupon::get();

        return view('dashboard.coupons.create', compact('coupons'));
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
        Coupon::create([
            'code' => $request->input('code'),
            'percent' => $request->input('percent'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'is_active' => $request->input('is_active'),
        ]);

        return redirect()->route('coupons.index')->with('success', 'Coupon created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function show(Coupon $coupon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $coupons = Coupon::findOrFail($id);

        return view('dashboard.coupons.edit', compact('coupons'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // Validate the request data
    $validatedData = $request->validate([
        'code' => 'required',
        'percent' => 'required',
        'start_date' => 'required',
        'end_date' => 'required',
        'is_active' => 'required',
    ]);

    // Get the data to update, excluding '_token' and '_method'
    $data = $request->except(['_token', '_method']);

    // Update the Period model by ID with the correct column name 'plan_id'
    Coupon::where('id', $id)->update($data);

    // Redirect with a success message
    return redirect()->route('coupons.index')->with('success', 'Coupon updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Coupon::destroy($id);
        return back()->with('success', 'Coupon deleted successfully.');
    }
}
