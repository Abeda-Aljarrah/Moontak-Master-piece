@extends('layout.master')

@section('title', 'Shop')
@section('css')
    <link href="{{ asset('CSS/product-page.css') }}" rel="stylesheet" />
@endsection

@section('js')
    <script src="{{ asset('JS/product-page.js') }}"></script>
@endsection


@section('content')
    <h2 class="title">Fruits and vegetables</h2>
    <select name="select" id="select">
        <option value="" selected="selected" disabled="disabled">Sort by</option>
        <option value="1">Alphabetically A-Z</option>
        <option value="2">Alphabetically Z-A</option>
    </select>

    <section id="product">
        <div class="filter">
            <div class="side-bar col-md-3">
                <h3 class="agileits-sear-head bar-title">Filters</h3>
                <hr />

                <div class="search-hotel">
                    <h3 class="agileits-sear-head">Search Here</h3>
                    <form action="#" method="post">
                        <input type="search" placeholder="Product name..." name="search" required="" />
                        <button type="submit" value="">OK</button>
                    </form>
                </div>

                <hr />

                <div class="d-flex">
                    <div class="wrapper">
                        <header>
                            <h3 class="agileits-sear-head">Price Range</h3>
                        </header>
                        <div class="price-input">
                            <div class="field">
                                <span>Min</span>
                                <input type="number" class="input-min" value="2.50" />
                            </div>
                            <div class="separator">-</div>
                            <div class="field">
                                <span>Max</span>
                                <input type="number" class="input-max" value="7.50" />
                            </div>
                        </div>
                        <div class="slider">
                            <div class="progress"></div>
                        </div>
                        <div class="range-input">
                            <!-- Updated max attribute to 10 -->
                            <input type="range" class="range-min" min="0.10" max="10" value="2.50"
                                step="0.10" />
                            <input type="range" class="range-max" min="0.10" max="10" value="7.50"
                                step="0.10" />
                        </div>
                    </div>
                </div>

                <hr />

                <!-- food preference -->
                <div class="left-side">
                    <h3 class="agileits-sear-head">Availability</h3>
                    <ul>
                        <li>
                            <input type="checkbox" class="checked" />
                            <span class="span">In stock</span>
                        </li>
                        <li>
                            <input type="checkbox" class="checked" />
                            <span class="span">Out of stock</span>
                        </li>
                    </ul>
                </div>

                <hr />

                <!-- discounts -->
                <div class="left-side">
                    <h3 class="agileits-sear-head">Discount</h3>
                    <ul>
                        <li>
                            <input type="checkbox" class="checked" />
                            <span class="span">5% - 20%</span>
                        </li>
                        <li>
                            <input type="checkbox" class="checked" />
                            <span class="span">20% - 60%</span>
                        </li>
                        <li>
                            <input type="checkbox" class="checked" />
                            <span class="span">60% - 80%</span>
                        </li>
                        <li>
                            <input type="checkbox" class="checked" />
                            <span class="span">90% or more</span>
                        </li>
                    </ul>
                </div>

                <hr />

                <!-- Product type -->
                <div class="left-side">
                    <h3 class="agileits-sear-head">Product type</h3>
                    <ul>
                        <li>
                            <input type="checkbox" class="checked" />
                            <span class="span">Dry</span>
                        </li>
                        <li>
                            <input type="checkbox" class="checked" />
                            <span class="span">Frozen</span>
                        </li>
                        <li>
                            <input type="checkbox" class="checked" />
                            <span class="span">Refrigerated</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        @foreach ($products as $product)
            @if ($id == $product->category_id)
                <div class="pro-containar">
                    <div class="pro">
                        <div class="pro-links">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-heart" viewBox="0 0 16 16">
                                    <path
                                        d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                </svg>
                            </a>
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                    <path
                                        d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                </svg>
                            </a>
                        </div>

                        <div class="pro-image">
                            <a href="{{ route('product', $product->id) }}">
                                <img src="{{ asset($product->main_image) }}" alt="" /></a>
                        </div>
                        <hr>
                        <div class="des">
                            <h5>{{ $product->name }}</h5>
                            <h4>JOD {{ $product->main_price }}/{{ $product->main_unit }}</h4>
                            <span>
                                @if ($product->availability > 0)
                                    In stock
                                @else
                                    Out of stock
                                @endif
                            </span>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
        @if ($products->isEmpty())
        <div class="alert alert-warning">
            There are no products in this category.
        </div>
    @endif


        <section class="pagination-container">
            <ul class="pagination modal-1">
                <li><a href="#" class="prev">&laquo</a></li>
                <li><a href="#" class="active">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#" class="next">&raquo;</a></li>
            </ul>
            <br />
        </section>
    </section>

    <h2 class="title best">Best seller</h2>
    <section class="best-seller">
        <svg class="btn2 btn--prev" height="96" viewBox="0 0 24 24" width="96"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z" />
            <path d="M0-.5h24v24H0z" fill="none" />
        </svg>
        <div class="pro-containar">
            <div class="pro">
                <div class="pro-links">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                        </svg>
                    </a>
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                            <path
                                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                        </svg>
                    </a>
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                            <path
                                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                        </svg>
                    </a>
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                            <path
                                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                        </svg>
                    </a>
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                            <path
                                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>
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
        <svg class="btn2 btn--next" height="96" viewBox="0 0 24 24" width="96"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z" />
            <path d="M0-.25h24v24H0z" fill="none" />
        </svg>
    </section>
@endsection