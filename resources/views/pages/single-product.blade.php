@extends('layout.master')

@section('title', 'Shop')
@section('css')
    <link href="{{ asset('CSS/single-product.css') }}" rel="stylesheet" />
    <style>
        /* Style the success message as a pop-up */
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
    </style>
@endsection

@section('js')
    <script src="{{ asset('JS/single-product.js') }}"></script>
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

    <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
            <img src="{{ asset($product->main_image) }}" width="100%" id="MainImage" alt="mango" />
            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="{{ asset($product->main_image) }}" width="100%" class="small-img" alt="mango" />
                </div>
                {{-- <div class="small-img-col">
                    <img src="{{ asset($product->main_image) }}" width="100%" class="small-img" alt="mango" />
                </div>
                <div class="small-img-col">
                    <img src="{{ asset($product->main_image) }}" width="100%" class="small-img" alt="mango" />
                </div>
                <div class="small-img-col">
                    <img src="{{ asset($product->main_image) }}" width="100%" class="small-img" alt="mango" />
                </div> --}}
            </div>
        </div>

        <div class="single-pro-details">
            <h6>Home / {{ $product->category->name }}</h6>
            <!-- <div class="pro-links">
                                <a href="#" class="pro-links">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                      </svg>
                                </a>
                            </div> -->
            <h4>{{ $product->name }}</h4>

            {{-- <h2>Approx 1 pieces/Kg</h2> --}}
            {{-- <h2>JOD {{ $product->main_price }}/{{ $product->main_unit }}</h2> --}}
            <h4>JOD {{ $product->main_price }}/{{ $product->main_unit }}</h4>

            {{-- <select name="" id="">
                @if ($product->main_unit == 'kg')
                    <option value="{{ $product->main_price * 0.25 }}">0.25 {{ $product->main_unit }} (JOD {{ $product->main_price * 0.25 }})</option>
                    <option value="{{ $product->main_price * 0.5 }}">0.5 {{ $product->main_unit }} (JOD {{ $product->main_price / 2 }})</option>
                    <option value="{{ $product->main_price }}" selected>1 {{ $product->main_unit }} (JOD {{ $product->main_price }})</option>
                    <option value="{{ $product->main_price * 1.5 }}">1.5 {{ $product->main_unit }} (JOD {{ $product->main_price * 1.5 }})</option>
                    <option value="{{ $product->main_price * 2 }}">2 {{ $product->main_unit }} (JOD {{ $product->main_price * 2 }})</option>
                    <option value="{{ $product->main_price * 2.5 }}">2.5 {{ $product->main_unit }} (JOD {{ $product->main_price * 2.5 }})</option>
                @else
                <option value="{{ $product->main_price }}" selected> 1{{ $product->main_unit }} (JOD {{ $product->main_price }})</option>
                @endif

            </select> --}}
            <form method="POST" action="{{ route('addToCart', ['id' => $product->id]) }}">
                @csrf
                <input type="number" name="Qty" value="1" min="0.25" step="0.25">
                <button type="submit">Add To Cart</button>
                {{-- var_dump(session('cart')); --}}
            </form>

            <h4>Product Details</h4>
            <span>{{ $product->description }}</span>
        </div>
    </section>

    <h2 class="title best">Best seller</h2>
    <section class="best-seller">
        <svg class="btn2 btn--prev" height="96" viewBox="0 0 24 24" width="96" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z" />
            <path d="M0-.5h24v24H0z" fill="none" />
        </svg>
        <div class="pro-containar">
            <div class="pro">
                <div class="pro-links">
                    <a href="#">
                        <i class="far fa-heart fa-lg"></i>
                    </a>
                    <a href="#">
                        <i class="fas fa-shopping-cart fa-lg"></i>
                    </a>
                </div>

                <div class="pro-image">
                    <img src="../image/product/kiwifruit-clip-art-kiwi-d6571781c4a6f133478d6d91d368c31e.png"
                        alt="" />
                </div>
                <hr>
                <div class="des">
                    <h5>Kiwi</h5>
                    <h4>JOD 1.990/big pack</h4>
                    <span>in stock</span>
                </div>
            </div>
        </div>
        <div class="pro-containar">
            <div class="pro">
                <div class="pro-links">
                    <a href="#">
                        <i class="far fa-heart fa-lg"></i>
                    </a>
                    <a href="#">
                        <i class="fas fa-shopping-cart fa-lg"></i>
                    </a>
                </div>

                <div class="pro-image">
                    <img src="../image/product/leaf-lettuce-iceberg-lettuce-romaine-lettuce-wrap-caesar-salad-lettuce-2ae7badcb6f4f5ef70a94e8042782278.png"
                        alt="" />
                </div>
                <hr>
                <div class="des">
                    <h5>Lettuce</h5>
                    <h4>JOD 0.490/piece</h4>
                    <span>in stock</span>
                </div>
            </div>
        </div>
        <div class="pro-containar">
            <div class="pro">
                <div class="pro-links">
                    <a href="#">
                        <i class="far fa-heart fa-lg"></i>
                    </a>
                    <a href="#">
                        <i class="fas fa-shopping-cart fa-lg"></i>
                    </a>
                </div>

                <div class="pro-image">
                    <img src="../image/product/lemon-fruit-clip-art-lemon-png-image-de101ab85a2ac35d7cb215ba5f85b852.png"
                        alt="" />
                </div>
                <hr>
                <div class="des">
                    <h5>Lemon</h5>
                    <h4>JOD 0.840/Kg</h4>
                    <span>in stock</span>
                </div>
            </div>
        </div>
        <div class="pro-containar">
            <div class="pro">
                <div class="pro-links">
                    <a href="#">
                        <i class="far fa-heart fa-lg"></i>
                    </a>
                    <a href="#">
                        <i class="fas fa-shopping-cart fa-lg"></i>
                    </a>
                </div>

                <div class="pro-image">
                    <img src="../image/product/mashed-potato-french-fries-potato-wedges-baked-potato-potato-chip-vegetable-f3ee22674ed9efa8b9956caefd0b7bbd.png"
                        alt="" />
                </div>
                <hr>
                <div class="des">
                    <h5>potato</h5>
                    <h4>JOD 0.570/Kg</h4>
                    <span>in stock</span>
                </div>
            </div>
        </div>
        <svg class="btn2 btn--next" height="96" viewBox="0 0 24 24" width="96" xmlns="http://www.w3.org/2000/svg">
            <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z" />
            <path d="M0-.25h24v24H0z" fill="none" />
        </svg>
    </section>

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
@endsection
