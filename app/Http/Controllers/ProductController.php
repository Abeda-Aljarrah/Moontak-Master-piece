<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Category;
use App\Models\Discount;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::get();
        $category = Category::all();
        // dd($categoryName);
        return view('dashboard.products.index', compact('products', 'category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categoryNames = Category::get();
        $discountPercents = Discount::get();

        // $categories= $donations->category->name;
        return view('dashboard.products.create', compact('categoryNames', 'discountPercents'));
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
        $relativeImagePath = null; // Initialize relativeImagePath as null

        $newImageName = uniqid() . '-' . $request->name . '.' . $request->file('image')->extension();
        $relativeImagePath = 'assets/images/' . $newImageName;
        $request->file('image')->move(public_path('assets/images'), $newImageName);
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'main_price' => [
                'required',
                'regex:/^\d{1,3}(\.\d{1,2})?$/',
            ],
        ]);


        Product::create([
            'name' => $request->input('name'),
            'main_price' => $request->input('price'),
            'description' => $request->input('description'),
            'availability' => $request->input('availability'),
            'Qty' => $request->input('Qty'),
            'discount_id' => $request->input('discount_id'),
            'main_unit' => $request->input('main_unit'),
            'main_weight' => $request->input('main_weight'),
            'Expiration_Date' => $request->input('Expiration_Date'),
            'main_image' => $relativeImagePath,
            'category_id' => $request->input('category_id'),
        ]);

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Product::where('category_id', $id)->get();
        $categories = Category::all();

        return view('pages.product-page', compact('categories', 'products', 'id'));
    }


    public function showsingle($id)
    {
        $product = Product::find($id);
        $categories = Category::all();

        if (!$product) {
            // Handle the case where the product is not found, e.g., display an error message or redirect
            return redirect()->route('home')->with('error', 'Product not found.');
        }

        return view('pages.single-product', compact('categories', 'product'));
    }
    public function addToCart(Request $request, $id)
    {
        $product = Product::find($id);

        if (auth()->user()) {
            $user_idd = auth()->user()->id;
            $cart = new Cart();
            $cart->user_id = $user_idd; // Replace with the actual user ID.
            $cart->product_id = $id;
            $cart->unit_price = $product->main_price;
            $cart->Qty = $request->input('Qty');
            // dd($cart->Qty);
            if ($cart->Qty < 1) {
                // Handle the case where the quantity is less than 1, e.g., set a default value or return an error message.
                return redirect()->route('product', ['id' => $id])->with('error', 'Invalid quantity.');
            }

            // $cart->Qty = $qty;
            $cart->save();
            if (!$product) {
                // Handle the case where the product is not found, e.g., display an error message or redirect
                return redirect()->route('home')->with('error', 'Product not found.');
            }

            // Logic to add the product to the cart (e.g., using a session or database)
            // You can implement your cart logic here

            return redirect()->route('product', ['id' => $id])->with('success', 'Product added to the cart.');
        } else {

            $cart = session()->get('cart', []);

            $cart[$id] = [
                'product_id' => $id,
                'unit_price' => $product->main_price,
                'Qty' => $request->input('Qty'),
            ];

            session()->put('cart', $cart);
            return redirect()->route('product', ['id' => $id])->with('success', 'Product added to the cart.');


            // $cart = new Cart();
            // $cart->product_id = $id;
            // $cart->unit_price = $product->main_price;
            // $cart->Qty = $request->input('Qty');

            // $cart->save();

            // return redirect()->route('product', ['id' => $id])->with('success', 'Product added to the cart.');
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $products = Product::findOrFail($id);
        $discountPercents = Discount::get();
        $categoryNames = Category::get();



        return view('dashboard.products.edit', compact('products', 'discountPercents', 'categoryNames'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required',
            // 'image' => 'required',
            'main_price' => 'required',
            'description' => 'required',
        ]);
        $data = $request->except(['_token', '_method']);

        // Check if a new image was uploaded
        if ($request->hasFile('image')) {
            $newImage = $this->storeImage($request);

            // Update the image column only if a new image was uploaded
            $data['main_image'] = $newImage;
        }

        Product::where('id', $id)->update($data);


        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Product::destroy($id);
        return back()->with('success', 'Product deleted successfully.');
    }

    public function storeImage($request)
    {
        $newImageName = uniqid() . '-' . $request->addedCategoryName . '.' . $request->file('image')->extension();
        $relativeImagePath = 'assets/images/' . $newImageName;
        $request->file('image')->move(public_path('assets/images'), $newImageName);


        return $relativeImagePath;
    }
}
