<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gart Page | @yield('title')</title>

    <meta charset="utf-8">
    <meta name="description"
        content="Download Tank - Creative Portfolio Showcase HTML Website Template that comes with rich features and well-commented code. Made by Themetorium.">
    <meta name="author" content="themetorium.net">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-5S1B0KX911"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-5S1B0KX911');
    </script>
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200;300;400;500;600;700;900&amp;display=swap"
        rel="stylesheet">

    <!-- Libs and Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/normalize/normalize.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/swiper/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/lightgallery/css/lightgallery.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/helper.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/libs/iziToast/css/iziToast.min.css') }}">

    @if (request()->routeIs('index'))
        <style>
            .ph-image {
                width: 30% !important;
                right: 10vw !important;
            }

            .pgi-image-wrap {
                box-shadow: 0px 100px 55px -75px rgb(0 0 0 / 65%);
            }

            body.ttgr-cat-nav-open .pgi-image-wrap {
                box-shadow: none;
            }

            .pgi-demo-badge {
                position: absolute;
                top: 13px;
                right: -38px;
                background-color: #df0e0e;
                padding: 2px 40px;
                text-align: center;
                letter-spacing: 1px;
                font-size: 13px;
                color: #FFF;
                transform: rotate(45deg);
            }

            .pgi-caption {
                padding-top: 30px;
            }

            .demo-features-wrap>ul {
                display: flex;
                list-style: none;
                margin: 0;
                padding: 0;
                flex-wrap: wrap;
            }

            .demo-features-wrap>ul>li {
                display: flex;
                justify-content: center;
                width: 25%;
                text-align: center;
            }

            @media (max-width: 768px) {
                .demo-features-wrap>ul>li {
                    width: 33.33333%;
                }
            }

            @media (max-width: 520px) {
                .demo-features-wrap>ul>li {
                    width: 50%;
                }
            }

            .demo-feature {
                margin: 0 10px 60px 10px;
            }

            .df-icon {
                display: inline-flex;
                width: 120px;
                height: 120px;
                background-color: #242424;
                justify-content: center;
                align-items: center;
                border-radius: 120px;
            }

            .df-title {
                margin-top: 20px;
                font-size: 16px;
                line-height: 1.4;
            }
        </style>
    @endif

</head>

<body id="body" class="tt-transition tt-boxed tt-smooth-scroll tt-magic-cursor">
    <main id="body-inner">
        <div id="page-transition">
            <div class="ptr-overlay"></div>
            <div class="ptr-preloader">
                <div class="ptr-prel-content">
                    <img src="{{ asset('gart-logo-0.png') }}" class="ptr-prel-image tt-logo-light" alt="Logo">
                </div>
            </div>
        </div>
        <div id="magic-cursor">
            <div id="ball"></div>
        </div>
        <div class="bg-noise"></div>
        <div id="scroll-container">

            {{-- Header --}}
            @include('layout.header')

            <div id="content-wrap">
                @yield('content')
                {{-- Footer --}}
                @include('layout.footer')
            </div>
    </main>

    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/gsap/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/gsap/ScrollToPlugin.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/gsap/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/smooth-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope/packery-mode.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/lightgallery/js/lightgallery-all.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery.mousewheel.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/libs/iziToast/js/iziToast.min.js') }}"></script>

    @include('admin.components.notification')

</body>

</html>
