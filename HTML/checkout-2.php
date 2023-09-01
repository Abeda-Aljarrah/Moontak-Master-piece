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
    <link href="../CSS/checkout-2.css" rel="stylesheet" />
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
            <li class="step-wizard-item">
              <span class="progress-count">1</span>
              <span class="progress-label">Adders</span>
            </li>
            <li class="step-wizard-item current-item">
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
            <h4>Subscription</h4>
            <span><a href="">Edit</a></span>
          </div>
          <hr />
          <div class="container">
            <div class="grid-wrapper grid-col-auto">
              <label for="radio-card-1" class="radio-card">
                <input
                  type="radio"
                  name="radio-card"
                  id="radio-card-1"
                  checked
                />
                <div class="card-content-wrapper" style="background-image: url(../image/ginny-rose-stewart-_kUCAyYFVBI-unsplash-modified.jpg);">
                  <span class="check-icon"></span>
                  <div class="card-content">
                    <!-- <img
                      src="/image/ginny-rose-stewart-_kUCAyYFVBI-unsplash-modified.jpg"
                      alt=""
                    /> -->
                    <h3>Monthly plane</h3>
                    <!-- <h5>Lorem ipsum dolor sit amet, consectetur.</h5> -->
                  </div>
                </div>
              </label>
              <!-- /.radio-card -->

              <label for="radio-card-2" class="radio-card">
                <input type="radio" name="radio-card" id="radio-card-2" />
                <div class="card-content-wrapper" style="background-image: url(../image/no-revisions-ixS7UCRJTdM-unsplash-modified.jpg);">
                  <span class="check-icon"></span>
                  <div class="card-content">
                    <!-- <img
                      src="/image/no-revisions-ixS7UCRJTdM-unsplash-modified.jpg"
                      alt=""
                    /> -->
                    <h3> Quarter plane</h3>
                    <!-- <h5>Lorem ipsum dolor sit amet, consectetur.</h5> -->
                  </div>
                </div>
              </label>


              <label for="radio-card-3" class="radio-card">
                <input type="radio" name="radio-card" id="radio-card-3" />
                <div class="card-content-wrapper" style="background-image: url(../image/Premium\ Photo\ _\ Cotton\ eco\ friendly\ shopping\ bag\ full\ of\ fresh\ organic\ vegetables\ and\ grocery\ products\ on\ grey\ table-modified.jpg);">
                  <span class="check-icon"></span>
                  <div class="card-content">
                    <!-- <img
                      src="https://image.freepik.com/free-vector/people-putting-puzzle-pieces-together_52683-28610.jpg"
                      alt=""
                    /> -->
                    <h3>Yearly plane</h3>
                    <!-- <h5>Lorem ipsum dolor sit amet, consectetur.</h5> -->
                  </div>
                </div>
              </label>
              <!-- /.radio-card -->
            </div>
            <!-- /.grid-wrapper -->
          </div>
          <!-- /.container -->
          <div class="part-two">
            <div class="pass">
              <label for="">Start day</label>
              <input type="date" required />
            </div>
            <div class="re-pass">
              <label for="">Select the period</label>
              <input type="tel" required />
            </div>
          </div>
        </div>
        
        <div class="button">
          <button class="previous" type="submit"><a href="./checkout-1.php">Back</a></button>
          <button class="next" type="submit"><a href="./checkout-3.php">Next</a></button>
        </div>
      </div>
    </form>

    <!-- /********************************************footer**********************************************/ -->

    <?php include './footer.php' ?>

  </body>
</html>
