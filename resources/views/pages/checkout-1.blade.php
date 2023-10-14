@extends('layout.master')

@section('title', 'Checkout')
@section('css')
    <link href="{{ asset('CSS/checkout-1.css') }}" rel="stylesheet" />
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="{{ asset('JS/checkout-1.js') }}"></script>
@endsection


@section('content')

<form action="{{ route('checkout2', ['id' => auth()->user()->id]) }}" method="post" class="main">
    @method('post')
        @csrf
        <div class="all-container active" data-step="1">
            <h1>Checkout</h1>
            <div class="step-wizard">
                <ul class="step-wizard-list">
                    <li class="step-wizard-item current-item">
                        <span class="progress-count">1</span>
                        <span class="progress-label">Adders</span>
                    </li>
                    <li class="step-wizard-item">
                        <span class="progress-count">2</span>
                        <span class="progress-label">Subscription</span>
                    </li>
                    <li class="step-wizard-item">
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
                    <h4>Address</h4>
                    <span><a href="">Edit</a></span>
                </div>
                <hr />
                <div class="part-one">
                    <div class="name">
                        <label for="address">Enter your adders</label>
                        <input type="text" name="address"  required />
                    </div>
                    <div class="email">
                        <label for="street">Street Name</label>
                        <input type="text" name="street" required />
                    </div>
                    <div class="phone">
                        <label for="building">Building Name and Number</label>
                        <input type="text" name="building" required />
                    </div>
                </div>
                <div class="part-two">
                    <div class="pass">
                        <label for="title">Title</label>
                        <input type="text" name="title" value="{{ $user->name }}" required />
                    </div>
                    <div class="re-pass">
                        <label for="phone">Phone Number</label>
                        <input type="tel" name="phone" required />
                    </div>
                </div>
            </div>
            <div class="button">
                <button class="previous"><a href="{{ route('list',['id' => auth()->user()->id]) }}">Back</a></button>
                <button class="next" type="submit" name="submit"> Next</button>
            </div>
        </div>
    </form>

@endsection
