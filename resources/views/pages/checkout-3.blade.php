@extends('layout.master')

@section('title', 'Checkout')
@section('css')
    <link href="{{ asset('CSS/checkout-3.css') }}" rel="stylesheet" />
@endsection

@section('js')
@endsection

@section('content')
@php
    $totalPrice = session('totalPrice');
@endphp

{{-- <h3>Total Price: ${{ $totalPrice }}</h3> --}}

    <form action="" class="main" method="POST">
        @csrf
        @method('post')
        <div class="all-container active" data-step="1">
            <h1>Checkout</h1>
            <div class="step-wizard">
                <ul class="step-wizard-list">
                    <li class="step-wizard-item">
                        <span class="progress-count">1</span>
                        <span class="progress-label">Adders</span>
                    </li>
                    <li class="step-wizard-item">
                        <span class="progress-count">2</span>
                        <span class="progress-label">Subscription</span>
                    </li>
                    <li class="step-wizard-item current-item">
                        <span class="progress-count">3</span>
                        <span class="progress-label">Payment</span>
                    </li>
                    <li class="step-wizard-item">
                        <span class="progress-count">4</span>
                        <span class="progress-label">Review order</span>
                    </li>
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
                                <input class="form-controll" id="cc_name" pattern="\w+ \w+.*" title="First and last name"
                                    type="text">
                            </div>
                            <div class="form-group">
                                <label>Card Number</label>
                                <input autocomplete="off" id="cc_num" class="form-controll" maxlength="20"
                                    pattern="\d{16}" title="Credit card number" type="text">
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label class="col-md-12">Expiry date</label>
                                    <input class="form-controll" name="cc_exp_mo" size="0"
                                        placeholder="YY/MM"></input>
                                </div>
                                <div class="col-md-4">
                                    <label class="col-md-12">Security number</label>
                                    <input autocomplete="off" class="form-controll" maxlength="3" pattern="\d{3}"
                                        placeholder="CVC" required="" title="Three digits on the back of your card"
                                        type="text">
                                </div>
                                <div class="form-group">
                                    <label>Zip code</label>
                                    <input autocomplete="off" id="cc_num" class="form-controll" maxlength="6"
                                        type="text">
                                </div>
                            </div>
                            <input type="checkbox" class="checkbox">Save this card</input>
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
                            <span>Subscription fee</span>
                            <span class="pri-dis">JOD {{ $selectedPeriod->price }}</span>
                        </div>

                        <div class="Total">
                            <h4>Total</h4>
                            <h4 class="tot-price">JOD 60.26</h4>
                        </div>

                    </div>
                </div>

            </div>

            <div class="button">
                <button class="previous" type="submit"><a href="./checkout-2.php">Back</a></button>
                <button class="next" type="submit"><a href="./checkout-4.php">Next</a></button>
            </div>
        </div>
    </form>
@endsection