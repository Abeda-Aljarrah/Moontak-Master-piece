<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- Add jQuery script -->
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}

    <style>
        body {
            font-family: var(--font-stack-body);
            font-weight: var(--font-weight-body);
            font-style: var(--font-style-body);
            font-size: 14px;
            line-height: normal;
            color: var(--color-secondary);
            letter-spacing: normal;
        }

        * {
            box-sizing: border-box;
        }

        body {
            font-family: var(--font-stack-body);
            font-weight: var(--font-weight-body);
            font-style: var(--font-style-body);
        }

        body {
            margin: 0;
            font-family: var(--bs-font-sans-serif);
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            background-color: #fff;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: transparent;
        }

        body {
            color: var(--color-secondary);
            font-size: 14px;
            font-family: var(--font-stack-body);
            font-weight: var(--font-weight-body);
            font-style: var(--font-style-body);
            letter-spacing: normal;
            line-height: normal;
        }

        :root {
            --bs-font-sans-serif: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

        @media (prefers-reduced-motion: no-preference) {
            :root {
                scroll-behavior: smooth;
            }
        }

        :root {
            --color-primary: #f5ab1e;
            --color-secondary: #333333;
            --font-stack-body: Poppins, sans-serif;
            --font-weight-body: 400;
            --font-style-body: normal;
            --font-stack-header: Poppins, sans-serif;
            --font-weight-header: 500;
            --font-style-header: normal;
        }

        .tag-zyn {
            position: relative;
            -ms-touch-action: pan-Y;
            touch-action: manipulation;
            -moz-backface-visibility: hidden;
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
        }

        .owl-carousel .tag-zyn::after {
            content: ".";
            display: block;
            clear: both;
            visibility: hidden;
            line-height: 0;
            height: 0;
        }

        .item-t2h {
            -webkit-tap-highlight-color: transparent;
            position: relative;
        }

        .item-t2h {
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            -webkit-transform: translate3d(0, 0, 0);
            -moz-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
        }

        .item-t2h {
            min-height: 1px;
            float: left;
            -webkit-backface-visibility: hidden;
            -webkit-touch-callout: none;
        }

        .item-t2h {
            -ms-touch-action: pan-y;
            touch-action: pan-y;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .slide-djg {
            position: relative;
        }

        a {
            color: #0d6efd;
            text-decoration: underline;
        }

        a {
            color: var(--color-secondary);
            display: inline-block;
            text-decoration: none;
            -webkit-transition: all .2s ease-in-out 0s;
            -o-transition: all .2s ease-in-out 0s;
            transition: all .2s ease-in-out 0s;
        }

        a:hover {
            color: #0a58ca;
        }

        a:hover {
            color: var(--color-primary);
            text-decoration: none;
            -webkit-transition: all .2s ease-in-out 0s;
            -o-transition: all .2s ease-in-out 0s;
            transition: all .2s ease-in-out 0s;
        }

        .slide-djg .slide-3ct {
            position: absolute;
            bottom: 50%;
            transform: translateY(50%);
            width: 35%;
        }

        .slide-djg .slide-3ct.slide-bb3 {
            right: 10%;
            text-align: right;
        }

        .slide-djg .slide-3ct.slide-7kv {
            left: 10%;
            right: 10%;
            margin: 0 auto;
            text-align: center;
        }

        .slide-djg .slide-3ct.slide-yyj {
            left: 10%;
            text-align: left;
        }

        img {
            vertical-align: middle;
        }

        img {
            max-width: 100%;
        }

        .img-l6s {
            max-width: 100%;
            height: auto;
        }

        .item-t2h img {
            display: block;
            width: 100%;
        }

        .slide-djg .mobile-3sk {
            display: none;
        }

        span {
            display: inline-block;
        }

        .slide-djg .slide-3ct span {
            font-size: 20px;
            display: block;
            font-weight: 600;
        }

        h1 {
            font-family: var(--font-stack-header);
            font-weight: var(--font-weight-header);
            font-style: var(--font-style-header);
        }

        h1 {
            margin-top: 0;
            margin-bottom: .5rem;
            font-weight: 500;
            line-height: 1.2;
        }

        h1 {
            font-size: calc(1.375rem + 1.5vw);
        }

        @media (min-width: 1200px) {
            h1 {
                font-size: 2.5rem;
            }
        }

        h1 {
            color: var(--color-secondary);
            margin: 0;
            padding: 0;
            font-family: var(--font-stack-header);
            font-weight: var(--font-weight-header);
            font-style: var(--font-style-header);
            line-height: normal;
        }

        .slide-djg .slide-3ct h1 {
            font-size: 50px;
            margin-top: 12px;
            font-weight: 600;
        }

        .btn-p4v {
            display: inline-block;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: center;
            text-decoration: none;
            vertical-align: middle;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            background-color: transparent;
            border: 1px solid transparent;
            padding: .375rem .75rem;
            font-size: 1rem;
            border-radius: .25rem;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }

        .btn-p4v {
            background-color: var(--color-primary);
        }

        .btn-d6v {
            padding: 10px 30px;
            border-radius: 50px;
            color: #fff;
            font-size: 14px;
            font-weight: 600;
            border: 2px solid var(--color-primary);
            background-color: var(--color-primary);
            text-align: center;
        }

        .slide-djg .slide-3ct a {
            margin-top: 32px;
        }

        .btn-p4v:hover {
            color: #212529;
        }

        .btn-d6v:hover {
            color: var(--color-primary);
            background-color: transparent;
        }

        .act-okh .slide-djg .slide-3ct span {
            -webkit-animation-name: fadeInUp;
            animation-name: fadeInUp;
            -webkit-animation-delay: 0.7s;
            animation-delay: 0.7s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-duration: 0.7s;
            animation-duration: 0.7s;
        }

        .act-okh .slide-djg .slide-3ct h1 {
            -webkit-animation-name: fadeInUp;
            animation-name: fadeInUp;
            -webkit-animation-delay: 1.0s;
            animation-delay: 1.0s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-duration: 1.0s;
            animation-duration: 1.0s;
        }

        .act-okh .slide-djg .slide-3ct a {
            -webkit-animation-name: fadeInUp;
            animation-name: fadeInUp;
            -webkit-animation-delay: 1.6s;
            animation-delay: 1.6s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-duration: 1.6s;
            animation-duration: 1.6s;
        }


        @keyframes fadeInUp {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0);
                opacity: 0;
                transform: translate3d(0px, 100%, 0px);
            }

            100% {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
                opacity: 1;
                transform: translateZ(0px);
            }

        }

        /* These were inline style tags. Uses id+class to override almost everything */
        #style-nkbZN.style-nkbZN {
            transform: translate3d(-4557px, 0px, 0px);
            transition: all 0.25s ease 0s;
            width: 10635px;
        }

        #style-ZREYY.style-ZREYY {
            width: 1519.2px;
        }

        #style-PI1T7.style-PI1T7 {
            color: #343a40;
        }

        #style-QE8LC.style-QE8LC {
            color: #343a40;
        }

        #style-xVBKi.style-xVBKi {
            width: 1519.2px;
        }

        #style-P3LAg.style-P3LAg {
            color: #232323;
        }

        #style-7hLwf.style-7hLwf {
            color: #232323;
        }

        #style-TMt3v.style-TMt3v {
            width: 1519.2px;
        }

        #style-B7Wro.style-B7Wro {
            color: #232323;
        }

        #style-w5vYK.style-w5vYK {
            color: #232323;
        }

        #style-vpwMp.style-vpwMp {
            width: 1519.2px;
        }

        #style-KFVRW.style-KFVRW {
            display: none;
        }

        #style-oe6Ks.style-oe6Ks {
            color: #343a40;
        }

        #style-Ogo5j.style-Ogo5j {
            color: #343a40;
        }

        #style-IJytI.style-IJytI {
            width: 1519.2px;
        }

        #style-yEM1F.style-yEM1F {
            color: #232323;
        }

        #style-gWtLT.style-gWtLT {
            color: #232323;
        }

        #style-5cYpI.style-5cYpI {
            width: 1519.2px;
        }

        #style-SMkTE.style-SMkTE {
            color: #232323;
        }

        #style-Ioesr.style-Ioesr {
            color: #232323;
        }

        #style-rGrXE.style-rGrXE {
            width: 1519.2px;
        }

        #style-Ko28i.style-Ko28i {
            color: #343a40;
        }

        #style-VLxLF.style-VLxLF {
            color: #343a40;
        }
    </style>
</head>
<body>
    <div class="owl-carousel" id="dynamic-slider">
        <!-- Dynamic slider items will be added here -->
        <div class="tag-zyn style-nkbZN" id="style-nkbZN">
            <div class="item-t2h style-ZREYY" id="style-ZREYY">
                <div>
                    <div class="slide-djg">
                        <a href="/collections/cat2">
                            <img class="img-l6s"
                                src="https://vegina-store.myshopify.com/cdn/shop/files/slider2.jpg?v=1613781673">
                            <img class="img-l6s mobile-3sk"
                                src="https://vegina-store.myshopify.com/cdn/shop/files/mobileslider-2.jpg?v=1658921909">
                        </a>
                        <div class="slide-3ct slide-bb3">
                            <span id="style-PI1T7" class="style-PI1T7">
                                Organic indian masala
                            </span>
                            <h1 id="style-QE8LC" class="style-QE8LC">
                                Prod of indian
                                <br>
                                100% packaging
                            </h1>
                            <a href="/collections/cat2" class="btn-p4v btn-d6v">
                                Shop now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item-t2h style-xVBKi" id="style-xVBKi">
                <div>
                    <div class="slide-djg">
                        <a href="/collections/fast-foods">
                            <img class="img-l6s"
                                src="https://vegina-store.myshopify.com/cdn/shop/files/slider3_7f623fd1-a932-4b5c-92c7-292044869712.jpg?v=1624439470">
                            <img class="img-l6s mobile-3sk"
                                src="https://vegina-store.myshopify.com/cdn/shop/files/mobileslider-3.jpg?v=1658921909">
                        </a>
                        <div class="slide-3ct slide-7kv">
                            <span id="style-P3LAg" class="style-P3LAg">
                                Top selling!
                            </span>
                            <h1 id="style-7hLwf" class="style-7hLwf">
                                Fresh for your heath
                            </h1>
                            <a href="/collections/fast-foods" class="btn-p4v btn-d6v">
                                Shop now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item-t2h style-TMt3v" id="style-TMt3v">
                <div>
                    <div class="slide-djg">
                        <a href="/collections/fruits">
                            <img class="img-l6s"
                                src="https://vegina-store.myshopify.com/cdn/shop/files/slider1-min.jpg?v=1613780889">
                            <img class="img-l6s mobile-3sk"
                                src="https://vegina-store.myshopify.com/cdn/shop/files/mobileslider-1.jpg?v=1658921909">
                        </a>
                        <div class="slide-3ct slide-yyj">
                            <span id="style-B7Wro" class="style-B7Wro">
                                Summer vege sale
                            </span>
                            <h1 id="style-w5vYK" class="style-w5vYK">
                                Fresh fruits
                                <br>
                                &amp; vegetable
                            </h1>
                            <a href="/collections/fruits" class="btn-p4v btn-d6v">
                                Shop now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item-t2h act-okh style-vpwMp" id="style-vpwMp">
                <div>
                    <div class="slide-djg">
                        <a href="/collections/cat2">
                            <img class="img-l6s style-KFVRW"
                                src="https://vegina-store.myshopify.com/cdn/shop/files/slider2.jpg?v=1613781673"
                                id="style-KFVRW">
                            <img class="img-l6s mobile-3sk"
                                src="https://vegina-store.myshopify.com/cdn/shop/files/mobileslider-2.jpg?v=1658921909">
                        </a>
                        <div class="slide-3ct slide-bb3">
                            <span id="style-oe6Ks" class="style-oe6Ks">
                                Organic indian masala
                            </span>
                            <h1 id="style-Ogo5j" class="style-Ogo5j">
                                Prod of indian
                                <br>
                                100% packaging
                            </h1>
                            <a href="/collections/cat2" class="btn-p4v btn-d6v">
                                Shop now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item-t2h style-IJytI" id="style-IJytI">
                <div>
                    <div class="slide-djg">
                        <a href="/collections/fast-foods">
                            <img class="img-l6s"
                                src="https://vegina-store.myshopify.com/cdn/shop/files/slider3_7f623fd1-a932-4b5c-92c7-292044869712.jpg?v=1624439470">
                            <img class="img-l6s mobile-3sk"
                                src="https://vegina-store.myshopify.com/cdn/shop/files/mobileslider-3.jpg?v=1658921909">
                        </a>
                        <div class="slide-3ct slide-7kv">
                            <span id="style-yEM1F" class="style-yEM1F">
                                Top selling!
                            </span>
                            <h1 id="style-gWtLT" class="style-gWtLT">
                                Fresh for your heath
                            </h1>
                            <a href="/collections/fast-foods" class="btn-p4v btn-d6v">
                                Shop now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item-t2h style-5cYpI" id="style-5cYpI">
                <div>
                    <div class="slide-djg">
                        <a href="/collections/fruits">
                            <img class="img-l6s"
                                src="https://vegina-store.myshopify.com/cdn/shop/files/slider1-min.jpg?v=1613780889">
                            <img class="img-l6s mobile-3sk"
                                src="https://vegina-store.myshopify.com/cdn/shop/files/mobileslider-1.jpg?v=1658921909">
                        </a>
                        <div class="slide-3ct slide-yyj">
                            <span id="style-SMkTE" class="style-SMkTE">
                                Summer vege sale
                            </span>
                            <h1 id="style-Ioesr" class="style-Ioesr">
                                Fresh fruits
                                <br>
                                &amp; vegetable
                            </h1>
                            <a href="/collections/fruits" class="btn-p4v btn-d6v">
                                Shop now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item-t2h style-rGrXE" id="style-rGrXE">
                <div>
                    <div class="slide-djg">
                        <a href="/collections/cat2">
                            <img class="img-l6s"
                                src="https://vegina-store.myshopify.com/cdn/shop/files/slider2.jpg?v=1613781673">
                            <img class="img-l6s mobile-3sk"
                                src="https://vegina-store.myshopify.com/cdn/shop/files/mobileslider-2.jpg?v=1658921909">
                        </a>
                        <div class="slide-3ct slide-bb3">
                            <span id="style-Ko28i" class="style-Ko28i">
                                Organic indian masala
                            </span>
                            <h1 id="style-VLxLF" class="style-VLxLF">
                                Prod of indian
                                <br>
                                100% packaging
                            </h1>
                            <a href="/collections/cat2" class="btn-p4v btn-d6v">
                                Shop now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <link href="{{ asset('CSS/checkout-2.css') }}" rel="stylesheet" /> --}}

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    {{-- <script>
        // Replace this with actual data fetching logic from your CMS or backend
        const sliderData = [
            {
                title: "Slide 1",
                content: "This is the first slide content.",
                image: "https://vegina-store.myshopify.com/cdn/shop/files/mobileslider-1.jpg?v=1658921909",
                link: "link-to-page-1"
            },
            {
                title: "Slide 2",
                content: "This is the second slide content.",
                image: "https://vegina-store.myshopify.com/cdn/shop/files/slider3_7f623fd1-a932-4b5c-92c7-292044869712.jpg?v=1624439470",
                link: "link-to-page-2"
            },
            {
                title: "Slide 3",
                content: "This is the third slide content.",
                image: "https://vegina-store.myshopify.com/cdn/shop/files/mobileslider-2.jpg?v=1658921909",
                link: "link-to-page-3"
            }
        ];

        // Create dynamic slider items
        const sliderContainer = document.getElementById('dynamic-slider');
        sliderData.forEach((slide, index) => {
            const slideItem = `
                <div class="item">
                    <img src="${slide.image}" alt="${slide.title}">
                    <div class="carousel-caption">
                        <h2>${slide.title}</h2>
                        <p>${slide.content}</p>
                        <a href="${slide.link}" class="btn btn-primary">Button ${index + 1}</a>
                    </div>
                </div>
            `;
            sliderContainer.innerHTML += slideItem;
        });

        // Initialize the Owl Carousel
        jQuery(document).ready(function($) {
            $("#dynamic-slider").owlCarousel({
                items: 1,
                autoplay: true,
                autoplayTimeout: 5000,
                loop: true,
                nav: true,
                dots: true
            });
        });
    </script> --}}
</body>
</html>


