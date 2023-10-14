@extends('layout.master')

@section('title', 'Checkout')
@section('css')
    <link href="{{ asset('CSS/checkout-2.css') }}" rel="stylesheet" />
@endsection

@section('js')
@endsection

@section('content')



<form action="{{ route('checkout3', ['userId' => auth()->user()->id, 'periodId' => $periods->first()->id]) }}" method="post" class="main">
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
                    <li class="step-wizard-item current-item">
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
                    <h4>Subscription</h4>
                    <span><a href="">Edit</a></span>
                </div>
                <hr />
                <div class="container">
                    <div class="part-two">
                        <div class="pass">
                            <label for="start">Start day</label>
                            <input type="date" name="start" required />
                        </div>
                        <div class="re-pass">
                            <label for="period">Select the period</label>
                            <select name="period" required id="periodSelect">
                                @foreach ($plans as $plan)
                                    @if ($selectedPlanID == $plan->id)
                                        @foreach ($periods as $period)
                                            @if ($period->plan_id == $plan->id)
                                                <option value="{{ $period->id }}">{{ $period->title }}</option>
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach
                            </select>
                        </div>

                    </div>

                </div>

                <!-- /.container -->

            </div>

            <div class="button">
                <button class="previous"><a href="./checkout-1.php">Back</a></button>
                <button class="next" type="submit">Next</button>
            </div>
        </div>
    </form>
@endsection
