@extends('layout.master')

@section('title', 'Home')
@section('css')
    <link href="{{ asset('CSS/index.css') }}" rel="stylesheet" />
@endsection

@section('js')
    <script src="{{ asset('JS/index.js') }}"></script>
@endsection


@section('content')


    <div class="jumbotron jumbotron-bg text-center rounded-0"
        style="
          background-image: url('../image/facebook-page-cover-820x312\ \(2\)\ \(1\)-modified\ \(1\).jpg');
        ">
        <div class="container">
            @if (session('success'))
        <div id="vola_message" class="alert alert-primary">{{ session('success') }}</div>
    @endif
            <h1 class="pt-5 tracking-in-contract">Stay home we deliver</h1>
        </div>
    </div>

    </section>


    <section style="color: #365d5a;">
        <div class="container my-5">
            <section id="steps">
                <div class="text-center mb-5">
                    <h2 class="font-weight-bold display-4" style="color: #365d5a;">How It <span
                            style=" color: #f1895e">Works?</span></h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="bg-light position-relative px-3 my-5">
                            <div class="font-weight-bold circle text-white rounded-circle d-flex align-items-center justify-content-center mx-auto position-relative border border-white"
                                style="width: 60px;height: 60px;top: -30px;border-width: 4px !important; ">
                                <img src="../image/How it works/2202250_account_avatar_human_man_profile_icon.png"
                                    class="how-image" />

                            </div>
                            <div class="px-3 text-center pb-3">
                                <h4>Create an account</h4>
                                <!-- <p class="font-weight-light my-3">Create an account</p> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bg-light position-relative px-3 my-5">
                            <div class="font-weight-bold circle text-white rounded-circle d-flex align-items-center justify-content-center mx-auto position-relative border border-white"
                                style="width: 60px;height: 60px;top: -30px;border-width: 4px !important;">
                                <img src="../image/How it works/3586362_checklist_document_list_paper_icon.png"
                                    class="how-image" />

                            </div>
                            <div class="px-3 text-center pb-3">
                                <h4>Create your list by shopping</h4>
                                <!-- <p class="font-weight-light my-3">Lorem ipsum dolor sit consectetur adipisicing elit. Alias amet
                                deleniti et fugit iusto nesciunt.</p> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bg-light position-relative px-3 my-5">
                            <div class="font-weight-bold circle text-white rounded-circle d-flex align-items-center justify-content-center mx-auto position-relative border border-white"
                                style="width: 60px;height: 60px;top: -30px;border-width: 4px !important;">
                                <img src="../image/How it works/7114165_application_notification_subscription_subscribe_alarm_icon.png"
                                    class="how-image" />

                            </div>
                            <div class="px-3 text-center pb-3">
                                <h4>Choose a plane</h4>
                                <!-- <p class="font-weight-light my-3">Lorem ipsum dolor sit consectetur adipisicing elit. Alias amet
                                deleniti et fugit iusto nesciunt.</p> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bg-light position-relative px-3 my-5">
                            <div class="font-weight-bold circle text-white rounded-circle d-flex align-items-center justify-content-center mx-auto position-relative border border-white"
                                style="width: 60px;height: 60px;top: -30px;border-width: 4px !important;">
                                <img src="../image/How it works/9876797_calendar_calendar date_shipping_delivery_logistics_icon.png"
                                    class="how-image" />

                            </div>
                            <div class="px-3 text-center pb-3">
                                <h4>Choose the days/period you want to deliver your list</h4>
                                <!-- <p class="font-weight-light my-3">Lorem ipsum dolor sit consectetur adipisicing elit. Alias amet
                                deleniti et fugit iusto nesciunt.</p> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bg-light position-relative px-3 my-5">
                            <div class="font-weight-bold circle text-white rounded-circle d-flex align-items-center justify-content-center mx-auto position-relative border border-white"
                                style="width: 60px;height: 60px;top: -30px;border-width: 4px !important;">
                                <img src="../image/How it works/3586361_location_map_navigation_pointer_icon.png"
                                    class="how-image" />

                            </div>
                            <div class="px-3 text-center pb-3">
                                <h4>Add a correct location</h4>
                                <!-- <p class="font-weight-light my-3">Lorem ipsum dolor sit consectetur adipisicing elit. Alias amet
                                deleniti et fugit iusto nesciunt.</p> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bg-light position-relative px-3 my-5">
                            <div class="font-weight-bold circle text-white rounded-circle d-flex align-items-center justify-content-center mx-auto position-relative border border-white"
                                style="width: 60px;height: 60px;top: -30px;border-width: 4px !important;">
                                <img src="../image/How it works/9027005_shopping_cart_thin_icon.png" class="how-image" />

                            </div>
                            <div class="px-3 text-center pb-3">
                                <h4>Enjoy your journey with us!</h4>
                                <!-- <p class="font-weight-light my-3">Lorem ipsum dolor sit consectetur adipisicing elit. Alias amet
                                deleniti et fugit iusto nesciunt.</p> -->
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </div>
    </section>



    <section class="cat-sec">

        <div class="col-md-12">
            <div class="section-header d-flex justify-content-between mb-5">
                <h2 class="section-title">Our Categories</h2>
            </div>
        </div>

        <div class="category-carousel swiper swiper-initialized swiper-horizontal">
            <div class="swiper-wrapper" id="swiper-wrapper-fac3d4d32a28dfbd" aria-live="polite">
                @foreach ($categories as $category)
                    <a href="{{ route('category', $category->id) }}" class="bounce-in-fwd">
                        <img src="{{ $category->image }}" class="category-image" />
                        <h3 class="category-title">{{ $category->name }}</h3>
                    </a>
                @endforeach
            </div>
        </div>

    </section>


    <div class="our-plans">
        <h2 class="section-title">Our Plans</h2>
        <div class="card-containar fade-in-top" data-aos="fade-up">
            @foreach ($plans as $plan)
                <div class="card hidden"
                    style="
            background-image: url('{{ asset($plan->image) }}');
          ">
                    <h2 class="card-title">{{ $plan->name }}</h2>
                    <button class="card-button">Learn more</button>
                </div>
            @endforeach
        </div>
    </div>







    <section id="testimonials">
        <!--heading--->
        <div class="testimonial-heading">
            <h2 class="section-title">Feedback</h2>
        </div>
        <!--testimonials-box-container------>
        <div class="testimonial-box-container">
            <!--BOX-1-------------->
            <div class="testimonial-box">
                <!--top------------------------->
                <div class="box-top">
                    <!--profile----->
                    <div class="profile">
                        <!--img---->
                        <div class="profile-img">
                            <img src="../image/persons/ian-dooley-d1UPkiFd04A-unsplash.jpg" />
                        </div>
                        <!--name-and-username-->
                        <div class="name-user">
                            <strong>Liam mendes</strong>
                            <span>@liammendes</span>
                        </div>
                    </div>
                    <!--reviews------>
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i><!--Empty star-->
                    </div>
                </div>
                <!--Comments---------------------------------------->
                <div class="client-comment">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Exercitationem, quaerat quis? Provident temporibus architecto
                        asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam
                        tenetur voluptates incidunt blanditiis sed atque cumque.
                    </p>
                </div>
            </div>
            <!--BOX-2-------------->
            <div class="testimonial-box">
                <!--top------------------------->
                <div class="box-top">
                    <!--profile----->
                    <div class="profile">
                        <!--img---->
                        <div class="profile-img">
                            <img src="../image/persons/rachel-mcdermott-0fN7Fxv1eWA-unsplash.jpg" />
                        </div>
                        <!--name-and-username-->
                        <div class="name-user">
                            <strong>Noah Wood</strong>
                            <span>@noahwood</span>
                        </div>
                    </div>
                    <!--reviews------>
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i><!--Empty star-->
                    </div>
                </div>
                <!--Comments---------------------------------------->
                <div class="client-comment">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Exercitationem, quaerat quis? Provident temporibus architecto
                        asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam
                        tenetur voluptates incidunt blanditiis sed atque cumque.
                    </p>
                </div>
            </div>
            <!--BOX-3-------------->
            <div class="testimonial-box">
                <!--top------------------------->
                <div class="box-top">
                    <!--profile----->
                    <div class="profile">
                        <!--img---->
                        <div class="profile-img">
                            <img src="../image/persons/stephanie-liverani-Zz5LQe-VSMY-unsplash.jpg" />
                        </div>
                        <!--name-and-username-->
                        <div class="name-user">
                            <strong>Oliver Queen</strong>
                            <span>@oliverqueen</span>
                        </div>
                    </div>
                    <!--reviews------>
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i><!--Empty star-->
                    </div>
                </div>
                <!--Comments---------------------------------------->
                <div class="client-comment">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Exercitationem, quaerat quis? Provident temporibus architecto
                        asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam
                        tenetur voluptates incidunt blanditiis sed atque cumque.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section style="margin: 50px;">
        <div class="section-header">
            <h2 class="section-title suppliers-title">Suppliers</h2>
        </div>
        <div class="Suppliers">
            <img src="../image/Suppliers/327425817_576396794017077_4140454578082634265_n-removebg-preview.png"
                alt="Rakan" class="supp-image" />
            <img src="../image/Suppliers/340631960_748992923552285_952954235911564382_n-removebg-preview (1).png"
                alt="Sameh mole" class="supp-image" />
            <img src="../image/Suppliers/المراعي-removebg-preview (1).png" alt="al-razy" class="supp-image" />
            <img src="../image/Suppliers/channels4_profile-removebg-preview.png" alt="Kasih" class="supp-image" />
            <img src="../image/Suppliers/logo.png" alt="Nabeel" class="supp-image" />
            <!-- <img src="/image/Suppliers/المراعي-removebg-preview (1).png" alt="maraee" class="supp-image"> -->
        </div>
    </section>
@endsection
