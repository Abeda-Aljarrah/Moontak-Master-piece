@extends('layout.master')

@section('title', 'Home')
@section('css')
    <link href="{{ asset('CSS/index.css') }}" rel="stylesheet" />
    <style>
        .carousel-item img {
            max-height: 700px;
            /* Adjust the desired height */
            width: 100%;
        }

        /* Style the text and button on the left */
        /* Adjust the font size and add space between text and button */
        .carousel-caption {
            text-align: left;
            font-family: 'Open Sans', sans-serif;
            position: absolute;
            top: 50%;
            transform: translateY(-30%);
            padding-left: 30px;
            animation: slideInLeft 1s ease-in-out;
            color: #232323
        }

        .carousel-caption h2 {
            font-size: 70px;
            font-weight: 700;
            margin-bottom: 10px;
            /* Adjust the font size as needed */
        }

        .carousel-caption h3 {
            font-weight: 800;
            font-size: 60px;
            margin-bottom: 10px;
        }


        /* Add animation keyframes for sliding in from the left */
        @keyframes slideInLeft {
            0% {
                transform: translateX(-100%);
                opacity: 0;
            }

            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }

        /* Style the buttons */
        .carousel-caption a.btn {
            border: none;
            background: #5FA800;
            font-family: "Work Sans", sans-serif;
            padding: 10px;
            height: 47px;
            width: 200px;
            font-weight: 700;
            font-size: 1.1875rem;
            color: rgb(255, 255, 255);
            border-radius: 8px;
            border: none;
            transition: background-color 0.3s ease-in-out 0s;
            margin-top: 20px;
            /* Add space above the button */
        }


        /* Style the Next button with the provided styles */
        .carousel-control-next {
            background: #5FA800;
            width: 50px;
            height: 50px;
            position: absolute;
            right: 5%;
            top: 50%;
            border-radius: 8px;
            border: none;
            transition: background-color 0.3s ease-in-out 0s;
        }

        .carousel-control-prev {
            background: #5FA800;
            width: 50px;
            height: 50px;
            position: absolute;
            left: 5%;
            top: 50%;
            border-radius: 8px;
            border: none;
            transition: background-color 0.3s ease-in-out 0s;
        }

        /* Add hover effect for the Next button */
        .carousel-control-next:hover {
            background: #5FA800;
        }
        .carousel-control-prev:hover {
            background: #5FA800;
        }

        #vola_message {
            position: fixed;
            top: 20%;
            right: 10px;
            background: #f1895e;
            /* Background color for success messages */
            color: #fff;
            font-size: 24px;
            /* Text color for success messages */
            border-radius: 5px;
            padding: 10px 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            z-index: 9999;
            opacity: 0;
            transform: translateX(100%);
            transition: opacity 0.5s, transform 0.5s;
        }

        #vola_message.show {
            opacity: 1;
            transform: translateX(0);
        }
    </style>
@endsection

@section('js')
    <script src="{{ asset('JS/index.js') }}"></script>
@endsection


@section('content')
    @if (session('success'))
        <div id="vola_message" class="alert alert-primary">{{ session('success') }}</div>
        <script>
            // Wait for the document to be fully loaded
            document.addEventListener('DOMContentLoaded', function() {
                // Select the message element
                const message = document.getElementById('vola_message');

                // Add the 'show' class to make the message visible
                message.classList.add('show');

                // Set a timeout to remove the 'show' class after 5 seconds
                setTimeout(function() {
                    message.classList.remove('show');
                }, 2000); // 5000 milliseconds = 5 seconds
            });
        </script>
    @endif
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../image/Untitled design (29).png" class="d-block mx-auto"
                    alt="...">
                <div class="carousel-caption">
                    <h1>Stay Home</h1>
                    <h2>We DELEVER!</h2>
                    <a href="link-to-page-1" class="btn btn-primary">See more</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../image/Untitled design (31).png" class="d-block mx-auto" alt="...">
                <div class="carousel-caption">

                    <h1>All You Need</h1>
                    <h2>In Front Of Your Door</h2>
                    <a href="link-to-page-1" class="btn btn-primary">Shop now</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../image/facebook-page-cover-820x312 (7).jpg" class="d-block mx-auto" alt="...">
                <div class="carousel-caption">
                    <div class="slide-3ct slide-7kv">
                        <h2> Top selling!</h2>
                        <h1>Fresh for your heath</h1>
                        <a href="link-to-page-1" class="btn btn-primary">Shop now</a>
                    </div>
                    {{-- <h2>Slide 3</h2>
                <p>This is the third slide content.</p> --}}
                    {{-- <a href="link-to-page-3" class="btn btn-primary">Button 3</a> --}}
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" ariahidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    {{-- <div class="jumbotron jumbotron-bg text-center rounded-0"
        style="
          background-image: url('../image/facebook-page-cover-820x312\ \(2\)\ \(1\)-modified\ \(1\).jpg');
        ">
        <div class="container">
            @if (session('success'))
        <div id="vola_message" class="alert alert-primary">{{ session('success') }}</div>
    @endif
            <h1 class="pt-5 tracking-in-contract">Stay home we deliver</h1>
        </div>
    </div> --}}

    </section>


    <section style="color: #232323;">
        <div class="container my-5">
            <section id="steps">
                <div class="text-center mb-5">
                    <h2 class="font-weight-bold display-4 ">How It <span style=" color: #5FA800">Works?</span></h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="bg-light position-relative px-3 my-5">
                            <div class="font-weight-bold circle text-white rounded-circle d-flex align-items-center justify-content-center mx-auto position-relative border border-white"
                                 style="width: 60px;height: 60px;top: -30px;border-width: 4px !important; background-color: #5FA800">
                                1
                            </div>
                            <div class="px-3 text-center pb-3">
                                <h4>Create an account</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bg-light position-relative px-3 my-5">
                            <div class="font-weight-bold circle text-white rounded-circle d-flex align-items-center justify-content-center mx-auto position-relative border border-white"
                                 style="width: 60px;height: 60px;top: -30px;border-width: 4px !important; background-color: #5FA800">
                                2
                            </div>
                            <div class="px-3 text-center pb-3">
                                <h4>Create your list by shopping</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bg-light position-relative px-3 my-5">
                            <div class="font-weight-bold circle text-white rounded-circle d-flex align-items-center justify-content-center mx-auto position-relative border border-white"
                                 style="width: 60px;height: 60px;top: -30px;border-width: 4px !important; background-color: #5FA800">
                                3
                            </div>
                            <div class="px-3 text-center pb-3">
                                <h4>Choose a plane</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bg-light position-relative px-3 my-5">
                            <div class="font-weight-bold circle text-white rounded-circle d-flex align-items-center justify-content-center mx-auto position-relative border border-white"
                                 style="width: 60px;height: 60px;top: -30px;border-width: 4px !important; background-color: #5FA800">
                                4
                            </div>
                            <div class="px-3 text-center pb-3">
                                <h4>Choose deliver time</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bg-light position-relative px-3 my-5">
                            <div class="font-weight-bold circle text-white rounded-circle d-flex align-items-center justify-content-center mx-auto position-relative border border-white"
                                 style="width: 60px;height: 60px;top: -30px;border-width: 4px !important; background-color: #5FA800">
                                5
                            </div>
                            <div class="px-3 text-center pb-3">
                                <h4>Add a correct location</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bg-light position-relative px-3 my-5">
                            <div class="font-weight-bold circle text-white rounded-circle d-flex align-items-center justify-content-center mx-auto position-relative border border-white"
                                 style="width: 60px;height: 60px;top: -30px;border-width: 4px !important; background-color: #5FA800">
                                6
                            </div>
                            <div class="px-3 text-center pb-3">
                                <h4>Enjoy your journey with us!</h4>
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
