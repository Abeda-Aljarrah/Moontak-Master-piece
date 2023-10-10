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
    <link href="{{ asset('CSS/checkout-1.css') }}" rel="stylesheet" />
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
    <title>Moontak</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <!-- /********************************************NAV**********************************************/ -->
    <?php include './header.php' ?>



    <form action="" class="main">
      <div class="all-container active" data-step="1">
        <h1>Checkout</h1>
        <div class="step-wizard">
          <ul class="step-wizard-list">
              <li class="step-wizard-item current-item">
                  <span class="progress-count">1</span>
                  <span class="progress-label">Adders</span>
              </li>
              <li class="step-wizard-item">
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
            <h4>Address</h4>
            <span><a href="">Edit</a></span>
          </div>
          <hr />
          <div class="part-one">
            <div class="name">
              <label for="">Enter your adders</label>
              <input type="text" required />
            </div>
            <div class="email">
              <label for="">Street Name</label>
              <input type="text" required />
            </div>
            <div class="phone">
              <label for="">Building Name and Number</label>
              <input type="text" required />
            </div>
          </div>
          <div class="part-two">
            <div class="pass">
              <label for="">Title</label>
              <input type="text" required />
            </div>
            <div class="re-pass">
              <label for="">Phone Number</label>
              <input type="tel" required />
            </div>
          </div>
        </div>
        <div class="button">
          <button class="previous" type="submit"><a href="./list.php">Back</a></button>
          <button class="next" type="submit"> <a href="./checkout-2.php">Next</a> </button>
        </div>
      </div>
    </form>

    <!-- /********************************************footer**********************************************/ -->

    <?php include './footer.php' ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="/JS/checkout-1.js"></script>
  </body>
</html>
