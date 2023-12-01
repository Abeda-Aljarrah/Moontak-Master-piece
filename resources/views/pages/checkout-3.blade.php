@extends('layout.master')

@section('title', 'Checkout')
@section('css')
    <link href="{{ asset('CSS/checkout-3.css') }}" rel="stylesheet" />
    <style>
        .row .form-control {
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

    <div class="container" style="margin-top: 50px; margin-bottom: 50px" data-step="1">
        <div class="text-center">

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
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Payment Summary</span>
                    <span class="badge badge-secondary badge-pill">3</span>
                </h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Sub total</h6>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <span class="text-muted">JOD {{ $totalPrice }}</span>

                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Sub fee</h6>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <span class="text-muted">JOD {{ $subscriptionFee }}</span>

                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Discount</h6>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <span class="text-muted">JOD 0</span>
                    </li>
                    @php
                        // $discountAmount = ($discountPercentage / 100) * $totalPrice;
                        // $totalWithDiscount = $totalPrice + $price - $discountAmount;
                        $total = $totalPrice + $subscriptionFee;
                    @endphp
                    <li class="list-group-item d-flex justify-content-between bg-light">
                        <div class="text-success">
                            <h6 class="my-0">Promo code</h6>
                            <small>EXAMPLECODE</small>
                        </div>
                        <span class="text-success">0</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (JOD)</span>
                        <strong>JOD {{ $total }}</strong>
                    </li>
                    <input type="hidden" name="total" id="total" value="{{ $total }}">
                    <input type="hidden" name="sub_total" id="sub_total" value="{{ $totalPrice }}">
                    <input type="hidden" name="sub_fee" id="sub_fee" value="{{ $subscriptionFee }}">

                </ul>

                <form class="card p-2">
                    <div style="display: flex; align-items: center;">
                        <input type="text" class="form-control" placeholder="Promo code">
                        <button style="background-color: #5FA800; height: 40px; margin:10px; border:none " type="submit"
                            class="btn btn-secondary">Apply</button>
                    </div>
                </form>


            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Billing address</h4>
                <form action="{{ route('checkout4', ['userId' => auth()->user()->id]) }}" method="POST"
                    class="needs-validation main" novalidate>
                    @csrf
                    @method('post')
                    <input type="hidden" name="total" id="total" value="{{ $total }}">
                    <input type="hidden" name="sub_total" id="sub_total" value="{{ $totalPrice }}">
                    <input type="hidden" name="sub_fee" id="sub_fee" value="{{ $subscriptionFee }}">

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Name</label>
                            <input type="text" class="form-control" id="firstName" placeholder=""
                                value="{{ $user->name }}" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="phone">Phone number</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder=""
                                value="" required>
                            <div class="invalid-feedback">
                                Valid Phone number is required.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St"
                            required>
                        <div class="invalid-feedback">
                            Please enter your shipping address.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="street">Street Name <span class="text-muted">(Optional)</span></label>
                        <input type="text" class="form-control" id="street" name="street"
                            placeholder="Apartment or suite">
                    </div>
                    <div class="mb-3">
                        <label for="building">Building Name<span class="text-muted">(Optional)</span></label>
                        <input type="text" class="form-control" id="building" name="building"
                            placeholder="Apartment or suite">
                    </div>

                    <hr class="mb-4">
                    {{-- <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="same-address">
                        <label class="custom-control-label" for="same-address">Shipping address is the same as my billing
                            address</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="save-info">
                        <label class="custom-control-label" for="save-info">Save this information for next time</label>
                    </div>
                    <hr class="mb-4"> --}}

                    <h4 class="mb-3">Payment</h4>

                    <div class="d-block my-3">
                        <div class="custom-control custom-radio">
                            <input id="card" type="radio" name="payment" class="custom-control-input" checked
                                required>
                            <label class="custom-control-label" for="card">Credit card</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="cash" type="radio" name="payment" class="custom-control-input" required>
                            <label class="custom-control-label" for="cash">Cash</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="paypal" type="radio" name="payment" class="custom-control-input" required>
                            <label class="custom-control-label" for="paypal">PayPal</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="cc-name">Name on card</label>
                            <input type="text" name="name" class="form-control" id="cc-name" placeholder=""
                                required>
                            <small class="text-muted">Full name as displayed on card</small>
                            <div class="invalid-feedback">
                                Name on card is required
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cc-number">Credit card number</label>
                            <input type="text" name="number" class="form-control" id="cc-number" placeholder=""
                                required>
                            <div class="invalid-feedback">
                                Credit card number is required
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="cc-expiration">Expiration</label>
                            <input type="text" name="exp_year" class="form-control" id="cc-expiration"
                                placeholder="" required>
                            <div class="invalid-feedback">
                                Expiration date required
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="cc-cvv">CVV</label>
                            <input type="text" class="form-control" name="cvc" id="cc-cvv" placeholder=""
                                required>
                            <div class="invalid-feedback">
                                Security code required
                            </div>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" style="background-color: #5FA800; border: none"
                        type="submit">Place order</button>
                </form>
            </div>
        </div>

        {{-- <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; 2017-2019 Company Name</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
        </footer> --}}
    </div>
@endsection
