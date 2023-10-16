<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Cart;
use App\Models\Period;
use App\Models\PaymentDetail;
use App\Models\User;
use Illuminate\Http\Request;

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

        $totalPrice = session('totalPrice');
        // Fetch the subscription fee from the database based on the selected period ID
        // $subscriptionFee = Period::find($periodId)->price;

        // // Calculate the total
        // $total = $totalPrice + $subscriptionFee;

        // // Set 'total' in the session with the calculated value
        // session(['total' => $total]);

        dd($totalPrice);



        $user = auth()->user();

        PaymentDetail::create([
            'method' => $request->input('payment'),
            'amount' => $total,
        ]);
        
        Order::create([
            'user_id' => $userId,
            'payment_id' => $PaymentDetail->id,
            'total_price' => $total,
            'delivery_id' => true,
        ]);

        // Get the user's cart items
        $cartItems = Cart::where('user_id', $user->id)->get();

        // Create order details for each cart item
        foreach ($cartItems as $cartItem) {
            OrderDetail::create([
                'user_id' => $user->id,
                'product_id' => $cartItem->product_id,
                'quantity' => $cartItem->quantity,
                // Other relevant fields for order details
            ]);
        }

        // Delete the user's cart items
        Cart::where('user_id', $user->id)->delete();
        // $user = User::find($userId);
        // $periods = Period::all();
        // PaymentDetail::create([
        //     'method' => $userId,
        //     'amount' => true,
        // ]);
        // Order::create([
        //     'user_id' => $userId,
        //     'payment_id' => true,
        //     'total_price' => true,
        //     'delivery_id' => true,
        // ]);
        // OrderDetail::create([
        //     'order_id' => $userId,
        //     'product_id' => true,
        //     'unit_price' => true,
        //     'Qty' => true,
        // ]);

        return view('pages.checkout-4', compact('userId', 'periods'));
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
}
