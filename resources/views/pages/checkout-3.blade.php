@extends('layout.master')

@section('title', 'Checkout')
@section('css')
    <link href="{{ asset('CSS/checkout-3.css') }}" rel="stylesheet" />
    <style>
        .row .form-control
        {
        display: flex;
        justify-content: space-between;
        gap: 20px;
        margin-top: 10px;
        width: 100%;
        height: 40px;
        border: #365d5a solid 1px;
        border-radius: 10px;
        padding: 10px;
        }

        .part-two .phone .title {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            margin-top: 10px;
            width: 100%;
            height: 40px;
            border: #365d5a solid 1px;
            border-radius: 10px;
            padding: 10px;
        }
    </style>
@endsection

@section('js')
@endsection

@section('content')
    @php
        $totalPrice = session('totalPrice');
    @endphp

    <form action="{{ route('checkout4', ['userId' => auth()->user()->id]) }}" class="main" method="POST">
        @csrf
        @method('post')
        <div class="all-container active" data-step="1">
            <h1>Checkout</h1>
            <div class="step-wizard">
                <ul class="step-wizard-list">
                    <li class="step-wizard-item">
                        <span class="progress-count">1</span>
                        <span class="progress-label">Subscription</span>
                    </li>
                    <li class="step-wizard-item">
                        <span class="progress-count">2</span>
                        <span class="progress-label">Delivery</span>
                    </li>
                    <li class="step-wizard-item current-item">
                        <span class="progress-count">3</span>
                        <span class="progress-label">Payment</span>
                    </li>
                    {{-- <li class="step-wizard-item">
                        <span class="progress-count">4</span>
                        <span class="progress-label">Review order</span>
                    </li> --}}
                </ul>
            </div>
            <div class="all">
                <div class="edit">
                    <h4>Payment information</h4>
                    <!-- <span><a href="">Edit</a></span> -->
                </div>
                <hr />
                <div class="checkout-panel">
                    <h3 class="title">Method</h3>

                    <div class="payment-method">
                        <label for="card" class="method visa">
                            <div class="card-logos">
                                <div class="radio-input">
                                    <input id="card" type="radio" name="payment" />
                                </div>
                                <img src="https://designmodo.com/demo/checkout-panel/img/visa_logo.png" />
                                <img src="https://designmodo.com/demo/checkout-panel/img/mastercard_logo.png" />
                            </div>

                        </label>

                        <label for="paypal" class="method paypal">
                            <div class="card-logos">
                                <div class="radio-input">
                                    <input id="paypal" type="radio" name="payment" />
                                </div>
                                <img src="https://designmodo.com/demo/checkout-panel/img/paypal_logo.png" />
                            </div>
                        </label>
                    </div>
                </div>

                <hr />
                <div>
                    <h3 class="title">Card information</h3>
                    <div class="card-body">
                        <form autocomplete="off" class="form" role="form">
                            <div class="form-group">
                                <label for="cc_name" class="name">Card Holder's Name</label>
                                <input class="form-controll" name="cc_name" id="cc_name" pattern="\w+ \w+.*"
                                    title="First and last name" type="text">
                            </div>
                            <div class="form-group">
                                <label for="cc_num">Card Number</label>
                                <input autocomplete="off" id="cc_num" name="cc_num" class="form-controll" maxlength="20"
                                    pattern="\d{16}" title="Credit card number" type="text">
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label class="col-md-12" for="cc_exp_mo">Expiry date</label>
                                    <input class="form-controll" name="cc_exp_mo" size="0"
                                        placeholder="YY/MM"></input>
                                </div>
                                <div class="col-md-4">
                                    <label class="col-md-12" for="CVC">Security number</label>
                                    <input autocomplete="off" class="form-controll" name="CVC" maxlength="3"
                                        pattern="\d{3}" placeholder="CVC" title="Three digits on the back of your card"
                                        type="text">
                                </div>
                                <div class="form-group">
                                    <label for="zip">Zip code</label>
                                    <input autocomplete="off" name="zip" id="cc_num" class="form-controll"
                                        maxlength="6" type="text">
                                </div>
                            </div>
                            <input type="checkbox" name="save_card" class="checkbox">Save this card</input>
                            <hr />
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="name">
                                        <label for="address">Enter your address</label>
                                        <input type="text" name="address" required class="form-control">
                                    </div>
                                    <div class="email">
                                        <label for="street">Street Name</label>
                                        <input type="text" name="street" required class="form-control">
                                    </div>
                                    <div class="phone">
                                        <label for="building">Building Name and Number</label>
                                        <input type="text" name="building" required class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="pass">
                                        <label for="title">Title</label>
                                        <input type="text" name="title" value="{{ $user->name }}" required class="form-control">
                                    </div>
                                    <div class="re-pass">
                                        <label for="phone">Phone Number</label>
                                        <input type="tel" name="phone" required class="form-control">
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="part-two">
                            </div> --}}
                        </form>
                    </div>

                </div>

                <hr />


                <div class="summary-wrapper">
                    <div class="title" class="Summary">
                        <div>
                            <h3>Payment Summary</h3>
                        </div>
                        <div class="voucher">
                            <h4>voucher code</h4>
                            <input type="text" />
                        </div>
                        <div class="Sub">
                            <span>Sub total</span>
                            <span class="price">JOD {{ $totalPrice }}</span>
                        </div>

                        <div class="Discount">
                            <span>Discount</span>
                            <span class="pri-dis">0.0</span>
                        </div>
                        <div class="Discount">
                            <span>Sub fee</span>
                            <span class="price-dis">JOD {{ $subscriptionFee }}</span>
                        </div>

                        @php
                            // $discountAmount = ($discountPercentage / 100) * $totalPrice;
                            // $totalWithDiscount = $totalPrice + $price - $discountAmount;
                            $total = $totalPrice + $subscriptionFee;
                        @endphp

                        {{-- <span class="pri-dis">{{ $discountPercentage }}%</span> --}}


                        <div class="Total">
                            <h4>Total</h4>
                            <h4 class="tot-price">JOD {{ $total }}</h4>
                        </div>

                        <input type="hidden" name="total" id="total" value="{{ $total }}">

                    </div>
                </div>

            </div>

            <div class="button">
                <button class="previous" type="submit"><a href="./checkout-2.php">Back</a></button>
                <button class="next" type="submit">Place order</button>
            </div>
        </div>
    </form>
@endsection
