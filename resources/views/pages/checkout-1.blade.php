@extends('layout.master')

@section('title', 'Checkout')
@section('css')
    <link href="{{ asset('CSS/checkout-2.css') }}" rel="stylesheet" />
@endsection

@section('js')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const planRadios = document.querySelectorAll('input[name="selectedPlanID"]');
        const selectedPlanIdInput = document.getElementById("selectedPlanId");
        const checkoutForm = document.getElementById("checkoutForm");

        // Initial value when the page loads
        selectedPlanIdInput.value = planRadios[0].value;
        updateFormAction();

        // Listen for changes in the selected plan
        planRadios.forEach((radio) => {
            radio.addEventListener("change", function () {
                selectedPlanIdInput.value = this.value;
                updateFormAction();
            });
        });

        function updateFormAction() {
            const userId = {{ auth()->user()->id }};
            const planId = selectedPlanIdInput.value;
            checkoutForm.action = `/checkoutsub/${planId}`;
        }
    });
</script>



@endsection

@section('content')


    <form action="{{ route('checkoutsub', ['planId' => $plans[0]->id]) }}" method="post" class="main"
        id="checkoutForm">
        @csrf
        @method('post')
        <div class="all-container active" data-step="1">
            <h1>Checkout</h1>
            <div class="step-wizard">
                <ul class="step-wizard-list">
                    <li class="step-wizard-item current-item">
                        <span class="progress-count">1</span>
                        <span class="progress-label">Subscription</span>
                    </li>
                    <li class="step-wizard-item">
                        <span class="progress-count">2</span>
                        <span class="progress-label">Delivery</span>
                    </li>
                    <li class="step-wizard-item">
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
                    <h4>Subscription</h4>
                    {{-- <span><a href="">Edit</a></span> --}}
                </div>
                <hr />
                <div class="container">
                    <div class="grid-wrapper grid-col-auto">
                        @foreach ($plans as $plan)
                            <label class="radio-card">
                                <input type="radio" name="selectedPlanID" value="{{ $plan->id }}"
                                    id="{{ $plan->name }}" />
                                <div class="card-content-wrapper"
                                    style="background-image: url('{{ asset($plan->image) }}');">
                                    <span class="check-icon"></span>
                                    <div class="card-content">
                                        <h3>{{ $plan->name }}</h3>
                                    </div>
                                </div>
                            </label>
                        @endforeach
                    </div>
                </div>


            </div>

            <div class="button">
                <button class="previous"><a href="#">Back</a></button>
                <button class="next" type="submit">Next</button>
            </div>
        </div>
        <input type="hidden" name="planId" id="selectedPlanId" value="{{ $plans[0]->id }}">

    </form>
@endsection

