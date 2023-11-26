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
            background: #5FA800;
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

         /* Styles for the "Our Periods" section */
    /* h4 {
        background-color: rgba(0, 0, 0, 0.6);
        padding: 15px;
        border-radius: 8px;
    } */
    </style>
@endsection

@section('js')
    <script src="{{ asset('JS/index.js') }}"></script>
    <script>
        // JavaScript for the testimonial slider
        const slider = document.querySelector('.slider');
        const testimonials = document.querySelector('.testimonials');
        const nextBtn = document.querySelector('.btn--next');
        const prevBtn = document.querySelector('.btn--prev');
        const testimonialBoxes = document.querySelectorAll('.testimonial-box');

        const testimonialWidth = testimonialBoxes[0].offsetWidth;
        const totalTestimonials = testimonialBoxes.length;
        const visibleTestimonials = 3; // Display 3 testimonials at a time

        let currentIndex = 0;

        function setTestimonialVisibility() {
            for (let i = 0; i < totalTestimonials; i++) {
                if (i >= currentIndex && i < currentIndex + visibleTestimonials) {
                    testimonialBoxes[i].style.display = 'block';
                } else {
                    testimonialBoxes[i].style.display = 'none';
                }
            }
        }

        setTestimonialVisibility();

        nextBtn.addEventListener('click', () => {
            if (currentIndex < totalTestimonials - visibleTestimonials) {
                currentIndex++;
                setTestimonialVisibility();
            }
        });

        prevBtn.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
                setTestimonialVisibility();
            }
        });
    </script>
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
                <img src="../image/Untitled design (29).png" class="d-block mx-auto" alt="...">
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

    </section>

    <section class="cat-sec" id="category">

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
                    <div class="periods">
                        <h4>Our Periods</h4>
                        <p class="card-disc">{{ $plan->description }}</p>

                    </div>
                    <button class="card-button">Learn more</button>
                </div>
            @endforeach
        </div>
    </div>


    <h2 class="section-title">Feedback</h2>
    <section id="testimonials">
        <div class="testimonial-box-container">
            <svg class="btn2 btn--prev" height="96" viewBox="0 0 24 24" width="96"
                xmlns="http://www.w3.org/2000/svg" style="cursor: pointer">
                <path d="M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z" />
                <path d="M0-.5h24v24H0z" fill="none" />
            </svg>
            <div class="slider">
                <div class="testimonials">
                    <!-- Testimonial boxes go here -->
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
                                Your grocery website offers an impressive array of fresh produce and pantry staples, making it my go-to for quality items and convenience!
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
                                    <strong>Jood Wood</strong>
                                    <span>@joodwood</span>
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
                                The seamless navigation and prompt delivery have made my shopping experience delightful - thank you for providing such an efficient service!.
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
                                The consistent quality of products and the user-friendly interface keep me coming back - your website truly makes grocery shopping a breeze!
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
                                    <img src="https://images.unsplash.com/photo-1700676195086-81b936390de4?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                                </div>
                                <!--name-and-username-->
                                <div class="name-user">
                                    <strong>Namaa Queen</strong>
                                    <span>@namaaqueen</span>
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
                                I'm continually impressed by the diverse range of products available and the hassle-free ordering process - your grocery site has become my favorite destination for all my household needs!
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
                                    <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                                </div>
                                <!--name-and-username-->
                                <div class="name-user">
                                    <strong>Bayan Queen</strong>
                                    <span>@bayanqueen</span>
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
                                Your website's commitment to timely deliveries and well-packaged items speaks volumes about your dedication to customer satisfaction - thank you for the reliable service!
                            </p>
                        </div>
                    </div>
                    <!-- Repeat for other testimonial boxes -->
                </div>
            </div>
            <svg class="btn2 btn--next" height="96" viewBox="0 0 24 24" width="96"
                xmlns="http://www.w3.org/2000/svg" style="cursor: pointer">
                <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z" />
                <path d="M0-.25h24v24H0z" fill="none" />
            </svg>
        </div>
    </section>

    <h2 class="section-title suppliers-title">Suppliers</h2>
    <section style="margin-bottom:50px;">
        <div class="section-header">
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
