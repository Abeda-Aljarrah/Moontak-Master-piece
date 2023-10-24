@extends('layout.master')
@section('title', 'Contact Us')

@section('css')
    <link href="{{ asset('CSS/about-us.css') }}" rel="stylesheet" />
@endsection

@section('js')
@endsection


@section('content')

    <div class="jumbotron jumbotron-bg text-center rounded-0"
        style="
        background-image: url('../image/about-us/facebook-page-cover-820x312\ \(1\)-modified.jpg');
      ">
        <div class="container">
            <h1 class="pt-5">About Us</h1>
        </div>
    </div>

    <div class="feature">
        <div>
            <img src="../image/about-us/1291768_delivery_fast_quick_truck_logistics_icon.png" class="category-image" />
            <h5 class="category-title">Fast Delivery</h5>
        </div>
        <div href="category.html">
            <img src="../image/about-us/1034365_sale_buy_price_tag_icon.png" class="category-image" />
            <h5 class="category-title">Best prices</h5>
        </div>
        <div href="category.html">
            <img src="../image/about-us/897226_balance spendings_budget_money_save money_icon.png" class="category-image" />
            <h5 class="category-title">High Security</h5>
        </div>
        <div href="category.html">
            <img src="../image/about-us/9554538_quality_premium_certificate_document_folder_icon (1) (1).png"
                class="category-image" />
            <h5 class="category-title">Great quality product</h5>
        </div>
    </div>

    <div class="our-vision">
        <div class="vision-text">
            <h1>Our Vision</h1>
            <p>At Moontak, our vision is to revolutionize the way people manage their grocery lists. We believe that grocery
                shopping should be convenient, efficient, and enjoyable for everyone. Our goal is to provide a seamless and
                user-friendly platform that simplifies the process of creating, organizing, and managing grocery lists</p>
        </div>
        <div class="vision-img">
            <img src="../image/about-us/796ae9cea82a2de21035eb8fa7f40717-removebg-preview.png" width="300px" height="400px"
                alt="">
        </div>
    </div>


    <div class="Our-Goal">
        <div class="Goal-img">
            <img src="../image/about-us/remi-walle-UOwvwZ9Dy6w-unsplash.jpg" width="500px" height="500px" alt="">
        </div>
        <div class="Goal-text">
            <h1>Our Goal</h1>
            <p>At Moontak, our vision is to revolutionize the way people manage their grocery lists. We believe that grocery
                shopping should be convenient, efficient, and enjoyable for everyone. Our goal is to provide a seamless and
                user-friendly platform that simplifies the process of creating, organizing, and managing grocery lists</p>
        </div>
    </div>
@endsection
