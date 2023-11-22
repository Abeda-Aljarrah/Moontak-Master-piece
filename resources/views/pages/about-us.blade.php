@extends('layout.master')
@section('title', 'Contact Us')

@section('css')
    <link href="{{ asset('CSS/about-us.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


@endsection

@section('js')
@endsection


@section('content')

    <div class="jumbotron jumbotron-bg text-center rounded-0"
        style="
        background-image: url('https://layerdrops.com/ogenix/main-html/assets/images/backgrounds/page-header-bg.jpg');
      ">
        <div class="container">
            <h1 class="pt-5">About Us</h1>
        </div>
    </div>

    <section class="about-ori">
        <div class="container-91h">
          <div class="row-oqp">
            <div class="col-erz">
              <div class="about-s3g">
                <div class="about-three__shape-zi6 float-bob-2mn">
                  <img src="https://layerdrops.com/ogenix/main-html/assets/images/shapes/about-three-shape-2.png">
                </div>
                <div class="section-81o">
                  <span class="section-2sa">
                    Get to Know us
                  </span>
                  <h2 class="section-pj9">
                    Welcome to Moontak
                  </h2>
                </div>
                <p class="text-dkx">
                  We connect buyers and sellers of natural, organic products
                  who are so beguiled demoralized charms of pleasure.
                </p>
                <p>
                    At Moontak, our vision is to revolutionize the way people manage their grocery lists. We believe that grocery
                    shopping should be convenient, efficient, and enjoyable for everyone. Our goal is to provide a seamless and
                    user-friendly platform that simplifies the process of creating, organizing, and managing grocery lists
                </p>
                {{-- <ul class="about-ooq list-gyz">
                  <li>
                    <div class="about-dr7">
                    </div>
                    <p class="text-41p">
                      Local growth
                      <br>
                      of fresh food
                    </p>
                  </li>
                  <li>
                    <div class="about-dr7">
                    </div>
                    <p class="text-41p">
                      Healthy food
                      <br>
                      everyday
                    </p>
                  </li>
                </ul> --}}
              </div>
            </div>
            <div class="col-erz">
              <div class="about-s2d">
                <div class="box-frw slide-zyq ani-jhw style-VKoQn" id="style-VKoQn">
                  <div class="about-three__shape-176 float-bob-gkd">
                    <img src="https://layerdrops.com/ogenix/main-html/assets/images/shapes/about-three-shape-1.png">
                  </div>
                  <div class="about-nnn">
                    <img src="https://layerdrops.com/ogenix/main-html/assets/images/resources/about-three-img-1.jpg">
                  </div>
                  <div class="about-f5v">
                    <div class="about-three__experience-shape-tdl">
                      <img src="https://layerdrops.com/ogenix/main-html/assets/images/shapes/about-three-experience-shape-1.png">
                    </div>
                    <div class="about-three__experience-oph">
                      <div class="about-three__experience-shape-13q">
                        <img src="https://layerdrops.com/ogenix/main-html/assets/images/shapes/about-three-experience-shape-2.png">
                      </div>
                      <div class="about-three__experience-q7s">
                        <h3>
                          200
                        </h3>
                      </div>
                      <div class="text-i69">
                        <p>
                          Active
                          <br>
                          users
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      {{-- <div class="pt-lg-sxb pb-lg-md4 py-rl8 my-lg-6pn">
        <div class="container-9sq">
          <div class="row-kpr">
            <div class="col-1lz">
              <h2 class="fw-ixs text-bdb display1-7fa lh-a3g mb-n4q pe-lg-o4j">
                We provide
                <span class="text-l21">
                  advanced solutions
                </span>
                to grow in your online business
              </h2>
              <p class="text-nvl font-tkt fw-xpa lh-26l pe-lg-o4j me-lg-t19">
                We believe everyone deserves to have a website or online store. Innovation and simplicity makes us happy: our goal is to remove any technical or financial barriers that can prevent business owners from making their own website.
              </p>
              <p class="text-nvl font-tkt fw-xpa lh-26l pe-lg-o4j me-lg-t19">
                We believe everyone deserves to have a website or online store. Innovation and simplicity makes us happy: our goal is to remove any technical or financial barriers that can prevent business.
              </p>
            </div>
            <div class="col-1lz">
              <img src="https://uitheme.net/orgomart/images/about-1.jpg" class="w-ezd rounded-tyw">
            </div>
            <div class="col-3h8 text-yho mt-lg-bhe mt-gd2">
              <i class="btn-5kx rounded-59m feather-pw7 bor-v73 text-l21 font-35g">
              </i>
              <h2 class="display2-9bc fw-ixs text-axr mt-3la">
                750k
              </h2>
              <h6 class="text-nvl fw-xpa font-tkt lh-3mn">
                Web pages created
                <br>
                by users
              </h6>
            </div>
            <div class="col-3h8 text-yho mt-lg-bhe mt-gd2">
              <i class="btn-5kx rounded-59m feather-qwl bor-v73 text-l21 font-35g">
              </i>
              <h2 class="display2-9bc fw-ixs text-axr mt-3la">
                14.5M
              </h2>
              <h6 class="text-nvl fw-xpa font-tkt lh-3mn">
                In house grocery
                <br>
                templates
              </h6>
            </div>
            <div class="col-3h8 text-yho mt-lg-bhe mt-gd2">
              <i class="btn-5kx rounded-59m feather-bon bor-v73 text-l21 font-35g">
              </i>
              <h2 class="display2-9bc fw-ixs text-axr mt-3la">
                900K
              </h2>
              <h6 class="text-nvl fw-xpa font-tkt lh-3mn">
                Web pages created
                <br>
                by users
              </h6>
            </div>
            <div class="col-3h8 text-yho mt-lg-bhe mt-gd2">
              <i class="btn-5kx rounded-59m box-mjw bor-v73 text-l21 font-35g">
              </i>
              <h2 class="display2-9bc fw-ixs text-axr mt-3la">
                4.7
                <span class="font-yyf">
                  / 5
                </span>
              </h2>
              <h6 class="text-nvl fw-xpa font-tkt lh-3mn">
                Web pages created
                <br>
                by users
              </h6>
            </div>
          </div>
        </div>
      </div> --}}



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

    {{-- <div class="feature">
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
    </div> --}}
@endsection
