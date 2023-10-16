<?php

namespace App\Http\Controllers;

use App\Models\OrderDetail;
use App\Models\User;
use App\Models\Order;
use App\Models\DeliveryInfo;
use App\Models\Period;
use App\Models\Product;
use App\Models\Plan;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $OrderDetails = OrderDetail::get();
        $user = User::all();
        $order = Order::all();
        $product = Product::all();


        return view('dashboard.orderdetails.index', compact('OrderDetails', 'user', 'product', 'order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrderDetail  $orderDetail
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $plan = Plan::where('id', $id)->first();

        $plans = Plan::all();
        $periods = Period::all();
        if (auth()->check()) {

            $user = auth()->user();
            return view('pages.checkout-1', compact('id', 'plans', 'periods','plan'));
        } else {
            return view('auth.login');
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrderDetail  $orderDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $userId, $planId)
{
    // Retrieve the authenticated user based on the provided user ID
    $user = User::find($userId);

    // Retrieve the selected plan ID from the form data using the correct name
    $selectedPlanID = $request->input('selectedPlanID');

    // Retrieve the selected plan based on the provided plan ID
    $plan = Plan::find($selectedPlanID);

    // Retrieve the available periods
    $periods = Period::all();
    $plans = Plan::all(); // Add this line to retrieve the plans
    // dd($periods);


    // For debugging purposes, you can check the $plan->id here
    // dd($plan->id);

    // Rest of your code

    return view('pages.checkoutsub', compact('userId', 'plan', 'periods', 'selectedPlanID','plans'));
}





    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OrderDetail  $orderDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, OrderDetail $orderDetail)
    {
        //
        $plan = Plan::where('id', $id)->first();

        $plans = Plan::all();
        $periods = Period::all();

        User::find($id)->update([
            'address' => $request->input('address'),
            'phone' => $request->input('phone'),
        ]);

        // DeliveryInfo::create([
            DeliveryInfo::create([
                'user_id' => $id,
                'main_address' => $request->input('address'),
                'phone' => $request->input('phone'),
                'street_name' => $request->input('street'),
                'building_name' => $request->input('building'),
            ]);


        return view('pages.checkout-2', compact('id', 'plans', 'periods','plan'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrderDetail  $orderDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        OrderDetail::destroy($id);
        return back()->with('success', 'Order Detail deleted successfully.');
    }
}
