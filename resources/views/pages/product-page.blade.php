@extends('layout.master')

@section('title', 'Shop')
@section('css')
    <link href="{{ asset('CSS/product-page.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

@endsection

@section('js')
    <script src="{{ asset('JS/product-page.js') }}"></script>
@endsection


@section('content')


    <div class="jumbotron jumbotron-bg text-center rounded-0"
        style="
        background-image: url('https://images.unsplash.com/photo-1542838132-92c53300491e?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
      ">
        <div class="container">
            <h1 class="pt-5">{{ $categoryName }}</h1>
        </div>
    </div>
    {{-- <h2 class="title">Fruits and vegetables</h2> --}}
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
                    <form action="{{ route('searchfilter') }}" method="get">
                        @csrf
                        <input type="search" placeholder="Product name..." name="search" required="" />
                        <input type="hidden" name="id" value="{{ $id }}">
                        <button type="submit" value="">OK</button>
                    </form>
                </div>

                <hr />

                <!-- Product type -->
                <div class="left-side">
                    <h3 class="agileits-sear-head">Category</h3>
                    <form action="{{ route('filterCategory') }}" method="get">
                        @csrf
                        <ul>
                        @foreach ($categories as $category)
                            <li>
                                <input type="checkbox" class="checked" name="categories" value="{{ $category->id }}" />
                                <span class="span">{{ $category->name }}</span>
                            </li>
                        @endforeach
                    </ul>
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
                                <input type="number" class="input-min" value="0.50" />
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

            </div>
        </div>

        @foreach ($products as $product)
            @if ($id == $product->category_id)
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


        {{-- <section class="pagination-container">
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
        </section> --}}
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
        <svg class="btn2 btn--next" height="96" viewBox="0 0 24 24" width="96"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z" />
            <path d="M0-.25h24v24H0z" fill="none" />
        </svg>
    </section>
@endsection
