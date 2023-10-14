<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" /> -->
    <!-- <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" /> -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Delicious+Handrawn&display=swap"
        rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
    <script src="path/to/aos.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="{{ asset('CSS/footer.css') }}" rel="stylesheet" />
    <link href="{{ asset('CSS/header.css') }}" rel="stylesheet" />
    @yield('css')

</head>

<body>
    <!-- /********************************************NAV**********************************************/ -->
    <div class="navbar">

        <div class="logo">
            <h2>Moontak</h2>
        </div>


        <ul class="links">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('category', ['id' => 1]) }}">Shope</a></li>
            <li><a href="./about-us.php">About</a></li>
            <li><a href="./contact.php">Contact Us</a></li>
            <li><a href="#">Blog</a></li>
            <div>
                @if (auth()->check())
                    <a href="{{ route('list', ['id' => auth()->user()->id]) }}">
                        <span class="material-symbols-outlined icon">shopping_cart</span>
                    </a>
                @else
                    <a href="{{ url('list') }}">
                        <span class="material-symbols-outlined icon">shopping_cart</span>
                    </a>
                @endif

            </div>
            <div>
                <a href="./profile.php">
                    <span class="material-symbols-outlined icon">account_circle</span>
                </a>
            </div>
            @if (auth()->check())
                <button class="signin"><a href="{{ route('logout') }}">Logout</a></button>
            @else
                <button class="signin"><a href="{{ url('login') }}">Login</a></button>
            @endif
        </ul>



        <div class="toggle">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </div>



    {{-- <script>
        const navbar = document.querySelector('.navbar')

        navbar.querySelector('.toggle').addEventListener('click', () => {

            navbar.classList.toggle('collapsed')

        })



        window.addEventListener('scroll', (e) => {

            let windowY = window.pageYOffset

            let navbarHeight = document.querySelector('.navbar').offsetHeight

            if (windowY > navbarHeight) navbar.classList.add('sticky')
            else navbar.classList.remove('sticky')




        })
    </script> --}}
