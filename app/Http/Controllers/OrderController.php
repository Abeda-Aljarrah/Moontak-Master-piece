<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Cart;
use App\Models\DeliveryInfo;
use App\Models\Period;
use App\Models\PaymentDetail;
use App\Models\User;
use Illuminate\Http\Request;
use Validator;
use Stripe;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $orders = Order::get();
        $user = User::all();

        return view('dashboard.orders.index', compact('orders', 'user'));
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
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $userId)
    {
        // dd(session()->all());

        $user = auth()->user();
        User::find($userId)->update([
            'address' => $request->input('address'),
            'phone' => $request->input('phone'),
        ]);

        // Create a new DeliveryInfo record
        $deliveryInfo = DeliveryInfo::create([
            'user_id' => $userId,
            'main_address' => $request->input('address'),
            'phone' => $request->input('phone'),
            'street_name' => $request->input('street'),
            'building_name' => $request->input('building'),
        ]);


        $paymentDetail = PaymentDetail::create([
            'method' => $request->input('payment'),
            'amount' => $request->input('total'), // You need to ensure 'total' is in the form data
        ]);

        $subTotal = $request->input('sub_total');
        $subFee = $request->input('sub_fee');

        // Use these values while creating the order
        $order = Order::create([
            'user_id' => $userId,
            'payment_id' => $paymentDetail->id,
            'total_price' => $request->input('total'),
            'delivery_id' => $deliveryInfo->id,
            'sub_total' => $subTotal,
            'sub_fee' => $subFee,
        ]);

        // Get the user's cart items
        $cartItems = Cart::where('user_id', $user->id)->get();

        // Create order details for each cart item
        foreach ($cartItems as $cartItem) {
            OrderDetail::create([
                'order_id' => $order->id,
                'product_id' => $cartItem->product_id,
                'unit_price' => $cartItem->unit_price,
                'Qty' => $cartItem->Qty,
                // Other relevant fields for order details
            ]);
        }

        // Delete the user's cart items
        Cart::where('user_id', $user->id)->delete();

        return redirect()->route('home', compact('userId'))->with('success', 'Your order placed.');
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
    public function order(Order $order)
    {
        //
        $user = auth()->user();
        $orders = Order::where('user_id', $user->id)->get();

        // Check if the user is found
        if (!$user) {
            // Handle the case where the user is not found, for example, redirect to an error page.
            return redirect()->route('error.page');
        }
        return view('pages.order', compact('user','orders'));
    }
}
