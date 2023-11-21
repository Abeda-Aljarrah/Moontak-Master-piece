<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show()
{
    $user = auth()->user();

    if ($user) {
        $categories = Category::all();
        $products = Product::all();
        $cart = Cart::where('user_id', '=', $user->id)->get();
    } else {
        $categories = Category::all();
        $products = Product::all();
        $cart = Cart::all();

        // Handle the case when the user is not authenticated
        return view('pages.list', compact('cart', 'categories', 'products'));
    }

    if ($cart === null) {
        $cart = []; // Set cart to an empty array if it's null
    }

    return view('pages.list', compact('cart', 'categories', 'products'));
}



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
    public function remove($id)
{

    if ($id==null) {
        // Handle the case when the product is not found
        // You may want to return a response or redirect with an error message
        return redirect()->back()->with('error', 'Product not found.');
    }

    if (auth()->user()) {
        Cart::where('product_id', $id)->delete();
    } else {
        $cart = session('cart');
        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
    }

    return redirect()->back()->with('success', 'Product deleted successfully');
    // Redirect or return a response as needed
}


public function updateQuantity(Request $request)
    {
        // Logic to update cart item quantity
        $itemId = $request->input('itemId');
        $newQty = $request->input('newQty');

        // Perform your update logic here...

        // For example, if you want to return the updated total
        // $newTotal = $newQty * $cartItem['unit_price'];

        // return response()->json(['newTotal' => $newTotal]);
    }


}
