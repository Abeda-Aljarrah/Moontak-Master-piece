<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://getbootstrap.com/docs/5.3/assets/css/docs.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap"
      rel="stylesheet"
    />
    <link href="{{ asset('CSS/about-us.css') }}" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Caveat&family=Delicious+Handrawn&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lora&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">


    <title>Moontak</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <!-- /********************************************NAV**********************************************/ -->
    <?php include './header.php' ?>

    <div
      class="jumbotron jumbotron-bg text-center rounded-0"
      style="
        background-image: url('../image/about-us/facebook-page-cover-820x312\ \(1\)-modified.jpg');
      "
    >
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
          <img
            src="../image/about-us/897226_balance spendings_budget_money_save money_icon.png"
            class="category-image"
          />
          <h5 class="category-title">High Security</h5>
        </div>
        <div href="category.html">
          <img src="../image/about-us/9554538_quality_premium_certificate_document_folder_icon (1) (1).png" class="category-image" />
          <h5 class="category-title">Great quality product</h5>
        </div>
    </div>

    <div class="our-vision">
      <div class="vision-text">
        <h1>Our Vision</h1>
        <p>At Moontak, our vision is to revolutionize the way people manage their grocery lists. We believe that grocery shopping should be convenient, efficient, and enjoyable for everyone. Our goal is to provide a seamless and user-friendly platform that simplifies the process of creating, organizing, and managing grocery lists</p>
      </div>
      <div class="vision-img">
        <img src="../image/about-us/796ae9cea82a2de21035eb8fa7f40717-removebg-preview.png" width="300px" height="400px" alt="">
      </div>
    </div>


    <div class="Our-Goal">
      <div class="Goal-img">
        <img src="../image/about-us/remi-walle-UOwvwZ9Dy6w-unsplash.jpg" width="500px" height="500px" alt="">
      </div>
      <div class="Goal-text">
        <h1>Our Goal</h1>
        <p>At Moontak, our vision is to revolutionize the way people manage their grocery lists. We believe that grocery shopping should be convenient, efficient, and enjoyable for everyone. Our goal is to provide a seamless and user-friendly platform that simplifies the process of creating, organizing, and managing grocery lists</p>
      </div>
    </div>



    <!-- <div class="team">
      <h1>Our Team</h1>
      <section class="our-team-section">

        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="https://i.ibb.co/8x9xK4H/team.jpg">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Abeda Aljarrah</h3>
                            <span class="post">Software engineer</span>
                        </div>
                        <ul class="social">
                            <li>
                                <a href="#"  target="_blank"class="fab fa-facebook"></a>
                            </li>
                            <li>
                                <a href="#" class="fab fa-twitter"></a>
                            </li>
                            <li>
                                <a href="#" class="fab fa-google-plus"></a>
                            </li>
                            <li>
                                <a href="#" class="fab fa-linkedin"></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="https://i.ibb.co/8x9xK4H/team.jpg">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Abdulrahman Aljarrah</h3>
                            <span class="post">Software engineer</span>
                        </div>
                        <ul class="social">
                            <li>
                                <a href="#" class="fab fa-facebook"></a>
                            </li>
                            <li>
                                <a href="#" class="fab fa-twitter"></a>
                            </li>
                            <li>
                                <a href="#" class="fab fa-google-plus"></a>
                            </li>
                            <li>
                                <a href="#" class="fab fa-linkedin"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>
    </div> -->







    <!-- /********************************************footer**********************************************/ -->

    <?php include './footer.php' ?>

  </body>
</html>
