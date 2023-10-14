@extends('layout.master')

@section('title', 'List')
@section('css')
    <link rel="stylesheet" href="{{ asset('CSS/style.css') }}" type="text/css">
@endsection

@section('js')
    <script>
        const categoryRows = document.querySelectorAll('.category-row');

        categoryRows.forEach(row => {
            const toggleButton = row.querySelector('.category-toggle');
            const productDetails = row.nextElementSibling;

            toggleButton.addEventListener('click', () => {
                row.classList.toggle('open');
                productDetails.classList.toggle('open');
            });
        });
    </script>
@endsection


@section('content')


    <!-- /********************************************list**********************************************/ -->
    <section>
        <div class="jumbotron jumbotron-bg text-center rounded-0"
            style="
        background-image: url('../image/twitter-header-1500x500.jpg') ; height: 30vh;
      ">
            <div class="container">
                <h1 class="pt-5">Your Cart</h1>
            </div>
        </div>
    </section>
    <section>

        <!-- Shoping Cart Section Begin -->
        <section class="shoping-cart spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shoping__cart__table">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="shoping__product">Category</th>
                                        <th>Number of products</th>
                                        <th>Total</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $totalSubtotal = 0;
                                    @endphp
                                    @foreach ($categories as $category)
                                        @php
                                            $totalQuantity = 0; // Initialize the total quantity for this category
                                            $totalPrice = 0; // Initialize the total quantity for this category
                                        @endphp
                                        @foreach ($cart as $cartItem)
                                            @if ($category->id == $cartItem->product->category_id)
                                                @php
                                                    $totalQuantity += $cartItem->Qty;
                                                    $totalPrice += $cartItem->unit_price * $cartItem->Qty;
                                                @endphp
                                            @endif
                                        @endforeach
                                        @php
                                            $totalSubtotal += $totalPrice; // Accumulate the subtotal for all categories
                                        @endphp
                                        <tr class="category-row">
                                            <td class="shoping__cart__item">
                                                <img src="{{ asset($category->image) }}" style="width: 10%;" alt="">
                                                <h5>{{ $category->name }}</h5>
                                            </td>
                                            @if (count($category->products) > 0)
                                                <td class="shoping__cart__quantity">
                                                    <div class="quantity">
                                                        <div class="pro-qty">
                                                            <input type="text" value="{{ $totalQuantity }}">
                                                        </div>
                                                    </div>
                                                </td>
                                                {{-- {{ var_dump($cart) }} --}}
                                                <td class="shoping__cart__total">
                                                    {{ $totalPrice }}
                                                </td>
                                            @else
                                                <td class="shoping__cart__quantity">
                                                    <div class="quantity">
                                                        <div class="pro-qty">
                                                            <input type="text" value="{{ $totalQuantity }}">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="shoping__cart__total">
                                                    {{ $totalPrice }}
                                                </td>
                                            @endif

                                            <td class="shoping__cart__item__close">
                                                <span class="category-toggle">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-caret-right-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                                                    </svg>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr class="product-details">
                                            <td>
                                                @if (count($category->products) > 0)
                                                    <table>
                                                        <thead>
                                                            <tr>
                                                                <th class="shoping__product">Products</th>
                                                                <th>Price</th>
                                                                <th>Quantity</th>
                                                                <th>Total</th>
                                                                <th class="shoping__cart__item__close" id="action">Action
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($cart as $cartItem)
                                                                @if ($category->id == $cartItem->product->category_id)
                                                                    <tr>
                                                                        <td class="shoping__cart__item">
                                                                            @if ($cartItem->product)
                                                                                <img src="{{ asset($cartItem->product->main_image) }}"
                                                                                    style="width: 20%;" alt="">
                                                                                <h5>{{ $cartItem->product->name }}</h5>
                                                                                </h5>
                                                                            @endif
                                                                        </td>
                                                                        <td class="shoping__cart__price">
                                                                            {{ $cartItem->unit_price }}
                                                                        </td>
                                                                        <td class="shoping__cart__quantity">
                                                                            <div class="quantity">
                                                                                <div class="pro-qty">
                                                                                    <input type="text"
                                                                                        value="{{ $cartItem->Qty }}">
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="shoping__cart__total">
                                                                            ${{ $cartItem->unit_price * $cartItem->Qty }}
                                                                        </td>
                                                                        <td class="shoping__cart__item__close">
                                                                            <span class="icon-container">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="16" height="16"
                                                                                    fill="currentColor" class="bi bi-trash"
                                                                                    viewBox="0 0 16 16">
                                                                                    <path
                                                                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z">
                                                                                    </path>
                                                                                </svg>
                                                                            </span>
                                                                        </td>
                                                                    </tr>
                                                                @endif
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                @else
                                            <td style="width: 100%;">
                                                <h5>There is no product here</h5>
                                                <span class="icon-container">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-plus-square-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z" />
                                                    </svg>
                                                </span>
                                                <label class="label">
                                                    <span>Add</span>
                                                </label>
                                            </td>
                                    @endif
                                    </td>
                                    </tr>
                                    @endforeach


                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shoping__cart__btns">
                            <a href="./product-page.php" class="primary-btn cart-btn button">CONTINUE SHOPPING</a>
                            <!-- <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                                                                                        Upadate Cart</a> -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="shoping__continue">
                            <div class="shoping__discount">
                                <h5>Discount Codes</h5>
                                <form action="#">
                                    <input type="text" placeholder="Enter your coupon code">
                                    <button type="submit" class="site-btn button">APPLY COUPON</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="shoping__checkout">
                            <h5>Cart Total</h5>
                            <ul>
                                <li>Subtotal <span>${{ $totalSubtotal }} </span></li>
                                <li>Total <span>${{ $totalSubtotal }}</span></li>
                            </ul>
                            <a href="{{ route('checkout1', ['id' => auth()->user()->id]) }}" class="primary-btn button">PROCEED TO CHECKOUT</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Shoping Cart Section End -->

    </section>

@endsection
