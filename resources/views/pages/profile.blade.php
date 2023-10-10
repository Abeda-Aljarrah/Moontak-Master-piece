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
    <link href="{{ asset('CSS/profile.css') }}" rel="stylesheet" />
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

    <h2 style="padding-left:20%; padding-top:70px ; " >Profile</h2>
    <div class="profile-container">
        <aside class="settings-sidebar">
            <ul class="settings-list">
                <li class="active"><a href="#">Personal Information</a></li>
                <li><a href="#">Address</a></li>
                <li><a href="#">Order History</a></li>
                <li><a href="#">My Subscription</a></li>
            </ul>
        </aside>

        <div class="profile-header">
                <img src="../image/persons/christina-wocintechchat-com-0Zx1bDv5BNY-unsplash.jpg" alt="Profile Picture" class="profile-picture">
                <button>Upload</button>
        </div>

        <div>
            <form action="">
                <div class="name">
                    <label for="">Name</label>
                    <input type="text" required>
                </div>
                <div class="email">
                    <label for="">E-mail</label>
                    <input type="email" required>
                </div>
                <div class="phone">
                    <label for="">Phone Number</label>
                    <input type="tel" required>
                </div>
                <div class="pass">
                    <label for="">Password</label>
                    <input type="password" required>
                </div>
                <div class="re-pass">
                    <label for="">Change password</label>
                    <input type="password" required>
                </div>

                  <button type="submit" class="save">Save</button>
            </form>
        </div>

    </div>





    <!-- /********************************************footer**********************************************/ -->

    <?php include './footer.php' ?>

  </body>
</html>
