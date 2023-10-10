<?php

namespace App\Http\Controllers;

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
        return view('dashboard.products.create', compact('categoryNames','discountPercents'));
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
    public function show(Product $product)
    {
        //
        $products = Product::get();
        $categories = Category::all();

        // dd($product);

    return view('pages.product-page', compact('categories', 'products'));

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



        return view('dashboard.products.edit', compact('products','discountPercents','categoryNames'));
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
