<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <!-- <link href="../CSS/list.css" rel="stylesheet" /> -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Delicious+Handrawn&display=swap" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet" />
  <!-- Css Styles -->
  <link rel="stylesheet" href="{{ asset('CSS/style.css') }}" type="text/css">
  <title>Moontak</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <!-- /********************************************NAV**********************************************/ -->
  <?php include './header.php' ?>

  <!-- /********************************************list**********************************************/ -->
  <section>
    <div class="jumbotron jumbotron-bg text-center rounded-0" style="
        background-image: url('../image/twitter-header-1500x500.jpg') ; height: 30vh;
      ">
      <div class="container">
        <h1 class="pt-5">Your Cart</h1>
      </div>
    </div>
  </section>
  <section>

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="shoping__cart__table">
              <table>
                <thead>
                  <tr>
                    <th class="shoping__product">Category</th>
                    <!-- <th>Price</th> -->
                    <th>Number of products</th>
                    <th>Total</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="category-row">
                    <td class="shoping__cart__item">
                      <img src="../image/icons/healthy-food (2).png" style="width: 10%;" alt="">
                      <h5>Fresh Garden Vegetable</h5>
                    </td>
                    <!-- <td class="shoping__cart__price">
                      $39.00
                    </td> -->
                    <td class="shoping__cart__quantity">
                      <div class="quantity">
                        <div class="pro-qty">
                          <input type="text" value="1">
                        </div>
                      </div>
                    </td>
                    <td class="shoping__cart__total">
                      $39.99
                    </td>
                    <td class="shoping__cart__item__close">
                      <span class="category-toggle"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                          <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                        </svg></span>
                    </td>
                  </tr>
                  <!-- /**************************************************/ -->
                  <!-- /**************************************************/ -->
                  <!-- /**************************************************/ -->
                  <tr class="product-details">
                    <td>
                      <table>
                        <thead>
                          <tr>
                            <th class="shoping__product">Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th class="shoping__cart__item__close" id="action">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="shoping__cart__item">
                              <img src="../image/product/avocado-juice-fruit-vegetable-guacamole-avocado-15ef7f2e6fb831e8da3c703e4f24b50d.png" style="width: 20%;" alt="">
                              <h5>Vegetable’s Package</h5>
                            </td>
                            <td class="shoping__cart__price">
                              $55.00
                            </td>
                            <td class="shoping__cart__quantity">
                              <div class="quantity">
                                <div class="pro-qty">
                                  <input type="text" value="1">
                                </div>
                              </div>
                            </td>
                            <td class="shoping__cart__total">
                              $110.00
                            </td>
                            <td class="shoping__cart__item__close">
                              <span class="icon-container">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"></path>
                                  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"></path>
                                </svg>
                              </span>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>

                  <!-- /**************************************************/ -->
                  <!-- /**************************************************/ -->
                  <!-- /**************************************************/ -->

                  <tr class="category-row">
                    <td class="shoping__cart__item">
                      <img src="../image/icons/barbecue.png" style="width: 10%;" alt="">
                      <h5>Fresh Garden Vegetable</h5>
                    </td>
                    <!-- <td class="shoping__cart__price">
                      $39.00
                    </td> -->
                    <td class="shoping__cart__quantity">
                      <div class="quantity">
                        <div class="pro-qty">
                          <input type="text" value="1">
                        </div>
                      </div>
                    </td>
                    <td class="shoping__cart__total">
                      $39.99
                    </td>
                    <td class="shoping__cart__item__close">
                      <span class="category-toggle"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                          <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                        </svg></span>
                    </td>
                  </tr>
                  <!-- /**************************************************/ -->
                  <!-- /**************************************************/ -->
                  <!-- /**************************************************/ -->
                  <tr class="product-details">
                    <td>
                      <table>
                        <thead>
                          <tr>
                            <th class="shoping__product">Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th class="shoping__cart__item__close" id="action">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="shoping__cart__item">
                              <img src="../image/product/avocado-juice-fruit-vegetable-guacamole-avocado-15ef7f2e6fb831e8da3c703e4f24b50d.png" style="width: 20%;" alt="">
                              <h5>Vegetable’s Package</h5>
                            </td>
                            <td class="shoping__cart__price">
                              $55.00
                            </td>
                            <td class="shoping__cart__quantity">
                              <div class="quantity">
                                <div class="pro-qty">
                                  <input type="text" value="1">
                                </div>
                              </div>
                            </td>
                            <td class="shoping__cart__total">
                              $110.00
                            </td>
                            <td class="shoping__cart__item__close">
                              <span class="icon-container">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"></path>
                                  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"></path>
                                </svg>
                              </span>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>

                  <!-- /**************************************************/ -->
                  <!-- /**************************************************/ -->
                  <!-- /**************************************************/ -->


                  <tr class="category-row">
                    <td class="shoping__cart__item">
                      <img src="../image/icons/dairy.png" style="width: 10%;" alt="">
                      <h5>Fresh Garden Vegetable</h5>
                    </td>
                    <!-- <td class="shoping__cart__price">
                      $39.00
                    </td> -->
                    <td class="shoping__cart__quantity">
                      <div class="quantity">
                        <div class="pro-qty">
                          <input type="text" value="1">
                        </div>
                      </div>
                    </td>
                    <td class="shoping__cart__total">
                      $39.99
                    </td>
                    <td class="shoping__cart__item__close">
                      <span class="category-toggle"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                          <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                        </svg></span>
                    </td>
                  </tr>
                  <!-- /**************************************************/ -->
                  <!-- /**************************************************/ -->
                  <!-- /**************************************************/ -->
                  <tr class="product-details">
                    <td>
                      <table>
                        <thead>
                          <tr>
                            <th class="shoping__product">Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th class="shoping__cart__item__close" id="action">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="shoping__cart__item">
                              <img src="../image/product/avocado-juice-fruit-vegetable-guacamole-avocado-15ef7f2e6fb831e8da3c703e4f24b50d.png" style="width: 20%;" alt="">
                              <h5>Vegetable’s Package</h5>
                            </td>
                            <td class="shoping__cart__price">
                              $55.00
                            </td>
                            <td class="shoping__cart__quantity">
                              <div class="quantity">
                                <div class="pro-qty">
                                  <input type="text" value="1">
                                </div>
                              </div>
                            </td>
                            <td class="shoping__cart__total">
                              $110.00
                            </td>
                            <td class="shoping__cart__item__close">
                              <span class="icon-container">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"></path>
                                  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"></path>
                                </svg>
                              </span>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>

                  <!-- /**************************************************/ -->
                  <!-- /**************************************************/ -->
                  <!-- /**************************************************/ -->
                  <tr class="category-row">
                    <td class="shoping__cart__item">
                      <img src="../image/icons/cleaning.png" style="width: 10%;" alt="">
                      <h5>Fresh Garden Vegetable</h5>
                    </td>
                    <!-- <td class="shoping__cart__price">
                      $39.00
                    </td> -->
                    <td class="shoping__cart__quantity">
                      <div class="quantity">
                        <div class="pro-qty">
                          <input type="text" value="1">
                        </div>
                      </div>
                    </td>
                    <td class="shoping__cart__total">
                      $39.99
                    </td>
                    </td>
                    <td class="shoping__cart__item__close">
                      <span class="category-toggle"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                          <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                        </svg></span>
                    </td>
                  </tr>
                  <!-- /**************************************************/ -->
                  <!-- /**************************************************/ -->
                  <!-- /**************************************************/ -->
                  <tr class="product-details">
                    <td>
                      <table>
                        <thead>
                          <tr>
                            <th class="shoping__product">Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th class="shoping__cart__item__close" id="action">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="shoping__cart__item">
                              <img src="../image/product/avocado-juice-fruit-vegetable-guacamole-avocado-15ef7f2e6fb831e8da3c703e4f24b50d.png" style="width: 20%;" alt="">
                              <h5>Vegetable’s Package</h5>
                            </td>
                            <td class="shoping__cart__price">
                              $55.00
                            </td>
                            <td class="shoping__cart__quantity">
                              <div class="quantity">
                                <div class="pro-qty">
                                  <input type="text" value="1">
                                </div>
                              </div>
                            </td>
                            <td class="shoping__cart__total">
                              $110.00
                            </td>
                            <td class="shoping__cart__item__close">
                              <span class="icon-container">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"></path>
                                  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"></path>
                                </svg>
                              </span>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>

                  <!-- /**************************************************/ -->
                  <!-- /**************************************************/ -->
                  <!-- /**************************************************/ -->
                  <tr class="category-row">
                    <td class="shoping__cart__item">
                      <img src="../image/icons/shopping-cart.png" style="width: 10%;" alt="">
                      <h5>Fresh Garden Vegetable</h5>
                    </td>
                    <!-- <td class="shoping__cart__price">
                      $39.00
                    </td> -->
                    <td class="shoping__cart__quantity">
                      <div class="quantity">
                        <div class="pro-qty">
                          <input type="text" value="1">
                        </div>
                      </div>
                    </td>
                    <td class="shoping__cart__total">
                      $39.99
                    </td>
                    <td class="shoping__cart__item__close">
                      <span class="category-toggle"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                          <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                        </svg></span>
                    </td>
                  </tr>
                  <!-- /**************************************************/ -->
                  <!-- /**************************************************/ -->
                  <!-- /**************************************************/ -->
                  <tr class="product-details">
                    <td>
                      <table>
                        <thead>
                          <tr>
                            <th class="shoping__product">Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th class="shoping__cart__item__close" id="action">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="shoping__cart__item">
                              <img src="../image/product/avocado-juice-fruit-vegetable-guacamole-avocado-15ef7f2e6fb831e8da3c703e4f24b50d.png" style="width: 20%;" alt="">
                              <h5>Vegetable’s Package</h5>
                            </td>
                            <td class="shoping__cart__price">
                              $55.00
                            </td>
                            <td class="shoping__cart__quantity">
                              <div class="quantity">
                                <div class="pro-qty">
                                  <input type="text" value="1">
                                </div>
                              </div>
                            </td>
                            <td class="shoping__cart__total">
                              $110.00
                            </td>
                            <td class="shoping__cart__item__close">
                              <span class="icon-container">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"></path>
                                  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"></path>
                                </svg>
                              </span>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>

                  <!-- /**************************************************/ -->
                  <!-- /**************************************************/ -->
                  <!-- /**************************************************/ -->
                  <tr class="category-row">
                    <td class="shoping__cart__item">
                      <img src="../image/icons/baby-products (1).png" style="width: 10%;" alt="">
                      <h5>Fresh Garden Vegetable</h5>
                    </td>
                    <!-- <td class="shoping__cart__price">
                      $39.00
                    </td> -->
                    <td class="shoping__cart__quantity">
                      <div class="quantity">
                        <div class="pro-qty">
                          <input type="text" value="1">
                        </div>
                      </div>
                    </td>
                    <td class="shoping__cart__total">
                      $39.99
                    </td>
                    <td class="shoping__cart__item__close">
                      <span class="category-toggle"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                          <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                        </svg></span>
                    </td>
                  </tr>
                  <!-- /**************************************************/ -->
                  <!-- /**************************************************/ -->
                  <!-- /**************************************************/ -->
                  <tr class="product-details" style="width: 100%; padding-left: 70%; ">
                    <td style="width: 100%;">
                      <h5>There is no available product</h5>
                      <span class="icon-container">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
                          <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z" />
                        </svg>
                      </span>
                      <label class="label">
                        <span>Add</span>
                      </label>
                    </td>
                  </tr>

                  <!-- /**************************************************/ -->
                  <!-- /**************************************************/ -->
                  <!-- /**************************************************/ -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="shoping__cart__btns">
              <a href="./product-page.php" class="primary-btn cart-btn button">CONTINUE SHOPPING</a>
              <!-- <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                Upadate Cart</a> -->
            </div>
          </div>
          <div class="col-lg-6">
            <div class="shoping__continue">
              <div class="shoping__discount">
                <h5>Discount Codes</h5>
                <form action="#">
                  <input type="text" placeholder="Enter your coupon code">
                  <button type="submit" class="site-btn button">APPLY COUPON</button>
                </form>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="shoping__checkout">
              <h5>Cart Total</h5>
              <ul>
                <li>Subtotal <span>$454.98</span></li>
                <li>Total <span>$454.98</span></li>
              </ul>
              <a href="./checkout-1.php" class="primary-btn button">PROCEED TO CHECKOUT</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Shoping Cart Section End -->
  </section>

  <!-- /********************************************footer**********************************************/ -->
  <script>
    const categoryRows = document.querySelectorAll('.category-row');

    categoryRows.forEach(row => {
      const toggleButton = row.querySelector('.category-toggle');
      const productDetails = row.nextElementSibling;

      toggleButton.addEventListener('click', () => {
        row.classList.toggle('open');
        productDetails.classList.toggle('open');
      });
    });
  </script>
  <?php include './footer.php' ?>

</body>

</html>
