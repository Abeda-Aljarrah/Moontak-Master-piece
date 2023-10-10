@extends('layout.master')

@section('title','Shope')
@section('css')
<link href="{{ asset('CSS/single-product.css') }}" rel="stylesheet" />
@endsection

@section('js')
<script src="{{ asset('JS/single-product.js') }}"></script>
@endsection

@section('content')

    <section id="prodetails" class="section-p1">
      <div class="single-pro-image">
        <img
          src="{{ asset($product->main_image) }}"
          width="100%"
          id="MainImage"
          alt="mango"
        />
        <div class="small-img-group">
          <div class="small-img-col">
            <img
              src="{{ asset($product->main_image) }}"
              width="100%"
              class="small-img"
              alt="mango"
            />
          </div>
          <div class="small-img-col">
            <img
              src="{{ asset($product->main_image) }}"
              width="100%"
              class="small-img"
              alt="mango"
            />
          </div>
          <div class="small-img-col">
            <img
              src="{{ asset($product->main_image) }}"
              width="100%"
              class="small-img"
              alt="mango"
            />
          </div>
          <div class="small-img-col">
            <img
              src="{{ asset($product->main_image) }}"
              width="100%"
              class="small-img"
              alt="mango"
            />
          </div>
        </div>
      </div>

      <div class="single-pro-details">
        <h6>Home / Fruits & Vegetables</h6>
        <!-- <div class="pro-links">
                <a href="#" class="pro-links">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                      </svg>
                </a>
            </div> -->
        <h4>{{ $product->name }}</h4>

        <h2>Approx 1 pieces/Kg</h2>
        <h2>JOD {{ $product->main_price }}/{{ $product->main_unit }}</h2>
        <h4>JOD {{ $product->main_price }}/{{ $product->main_unit }}</h4>

        <select name="" id="">
          <option value="">0.5 Kg (JOD 0.57)</option>
          <option value="">1 Kg (JOD 1.59)</option>
          <option value="">1.5 Kg (JOD 1.59)</option>
          <option value="">2 Kg (JOD 2)</option>
          <option value="">2.5 Kg (JOD 2.85)</option>
          <option value="">3 Kg (JOD 3.40)</option>
          <option value="">3.5 Kg (JOD 4.30)</option>
          <option value="">4 Kg (JOD 5.10)</option>
          <option value="">4.5 Kg (JOD 6)</option>
          <option value="">5 Kg (JOD 6.70)</option>
        </select>
        <input type="number" value="1" />
        <button> <a href="./list.php" style="text-decoration: none; color: white; " >Add To List</a></button>
        <h4>Product Details</h4>
        <span>{{ $product->description }}</span
        >
      </div>
    </section>

    <h2 class="title best">Best seller</h2>
    <section class="best-seller">
      <svg
        class="btn2 btn--prev"
        height="96"
        viewBox="0 0 24 24"
        width="96"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path d="M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z" />
        <path d="M0-.5h24v24H0z" fill="none" />
      </svg>
      <div class="pro-containar">
        <div class="pro">
          <div class="pro-links">
            <a href="#">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                fill="currentColor"
                class="bi bi-heart"
                viewBox="0 0 16 16"
              >
                <path
                  d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"
                />
              </svg>
            </a>
            <a href="#"
              ><svg
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                fill="currentColor"
                class="bi bi-cart"
                viewBox="0 0 16 16"
              >
                <path
                  d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"
                />
              </svg>
            </a>
          </div>

          <div class="pro-image">
            <img
              src="../image/product/kiwifruit-clip-art-kiwi-d6571781c4a6f133478d6d91d368c31e.png"
              alt=""
            />
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
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                fill="currentColor"
                class="bi bi-heart"
                viewBox="0 0 16 16"
              >
                <path
                  d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"
                />
              </svg>
            </a>
            <a href="#"
              ><svg
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                fill="currentColor"
                class="bi bi-cart"
                viewBox="0 0 16 16"
              >
                <path
                  d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"
                />
              </svg>
            </a>
          </div>

          <div class="pro-image">
            <img
              src="../image/product/leaf-lettuce-iceberg-lettuce-romaine-lettuce-wrap-caesar-salad-lettuce-2ae7badcb6f4f5ef70a94e8042782278.png"
              alt=""
            />
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
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                fill="currentColor"
                class="bi bi-heart"
                viewBox="0 0 16 16"
              >
                <path
                  d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"
                />
              </svg>
            </a>
            <a href="#"
              ><svg
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                fill="currentColor"
                class="bi bi-cart"
                viewBox="0 0 16 16"
              >
                <path
                  d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"
                />
              </svg>
            </a>
          </div>

          <div class="pro-image">
            <img
              src="../image/product/lemon-fruit-clip-art-lemon-png-image-de101ab85a2ac35d7cb215ba5f85b852.png"
              alt=""
            />
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
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                fill="currentColor"
                class="bi bi-heart"
                viewBox="0 0 16 16"
              >
                <path
                  d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"
                />
              </svg>
            </a>
            <a href="#"
              ><svg
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                fill="currentColor"
                class="bi bi-cart"
                viewBox="0 0 16 16"
              >
                <path
                  d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"
                />
              </svg>
            </a>
          </div>

          <div class="pro-image">
            <img
              src="../image/product/mashed-potato-french-fries-potato-wedges-baked-potato-potato-chip-vegetable-f3ee22674ed9efa8b9956caefd0b7bbd.png"
              alt=""
            />
          </div>
          <hr>
          <div class="des">
            <h5>potato</h5>
            <h4>JOD 0.570/Kg</h4>
            <span>in stock</span>
          </div>
        </div>
      </div>
      <svg
        class="btn2 btn--next"
        height="96"
        viewBox="0 0 24 24"
        width="96"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z" />
        <path d="M0-.25h24v24H0z" fill="none" />
      </svg>
    </section>

    <section id="testimonials">
      <!--heading--->
      <div class="testimonial-heading">
        <h2>Feedback</h2>
      </div>
      <!--testimonials-box-container------>
      <div class="testimonial-box-container">
        <svg
          class="btn2 btn--prev"
          height="96"
          viewBox="0 0 24 24"
          width="96"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path d="M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z" />
          <path d="M0-.5h24v24H0z" fill="none" />
        </svg>
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
              <i class="far fa-star"></i
              ><!--Empty star-->
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
                <img
                  src="../image/persons/rachel-mcdermott-0fN7Fxv1eWA-unsplash.jpg"
                />
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
              <i class="fas fa-star"></i
              ><!--Empty star-->
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
                <img
                  src="../image/persons/stephanie-liverani-Zz5LQe-VSMY-unsplash.jpg"
                />
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
              <i class="far fa-star"></i
              ><!--Empty star-->
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
        <svg
          class="btn2 btn--next"
          height="96"
          viewBox="0 0 24 24"
          width="96"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z" />
          <path d="M0-.25h24v24H0z" fill="none" />
        </svg>
      </div>
    </section>
@endsection
