<!DOCTYPE html>
<html lang="en">
<head>
    <title>Portfolio Grid Classic | Tank - Creative Portfolio Showcase HTML Website Template by Themetorium</title>

    <meta
        charset="utf-8">
    <meta
        name="description"
        content="Download Tank - Creative Portfolio Showcase HTML Website Template that comes with rich features and well-commented code. Made by Themetorium.">
    <meta
        name="author"
        content="themetorium.net">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
            <header id="tt-header" class="tt-header-fixed">
                <div class="tt-header-inner">
                    <div class="tt-header-col">
                        <div class="tt-logo">
                            <a href="index-2.html">
                                <img src="{{ asset('gart-logo-0.png') }}" class="tt-logo-light magnetic-item" alt="Logo">
                                <img src="assets/img/logo-dark.png" class="tt-logo-dark magnetic-item" alt="Logo">
                            </a>
                        </div>
                    </div>
                </div>
            </header>

            <div id="content-wrap">
                <div id="page-header" class="ph-full ph-cap-xlg ph-image-cover-2 ph-content-parallax">
                    <div class="page-header-inner tt-wrap">
                        <div class="ph-image">
                            <div class="ph-image-inner">
                                <img src="{{ asset('assets/img/hero-img.jpg') }}" alt="Image" style="border-radius: 10px;">
                            </div>
                        </div>
                        <div class="ph-caption">
                            <h1 class="ph-caption-title ph-appear max-width-1000">Gart</h1>
                            <div class="ph-caption-title-ghost ph-appear">History</div>
                            <div class="ph-caption-subtitle ph-appear max-width-650">Welcome to our photography studio. We specialize in capturing unforgettable moments through our lens. Share your story with us and let's create lasting memories together.</div>
                            <div class="tt-btn tt-btn-primary ph-appear margin-top-60">
                                <a href="https://api.whatsapp.com/send/?phone=6282210866763&text=Hi there! I'm interested with your works. Could you provide more details on the pricing, and availability? Looking forward to your response. Thank you!&type=phone_number&app_absent=0" target="_blank" rel="noopener"
                                    data-hover="Contact Here!">Contact Here!</a>
                            </div>
                        </div>
                        <!-- End page header caption -->

                    </div> <!-- /.page-header-inner -->
                    <a href="#page-content" class="scroll-down-circle" data-offset="30">
                        <div class="sdc-inner ph-appear">
                            <div class="sdc-icon"><i class="fas fa-chevron-down"></i></div>
                            <svg viewBox="0 0 500 500">
                                <defs>
                                    <path
                                        d="M50,250c0-110.5,89.5-200,200-200s200,89.5,200,200s-89.5,200-200,200S50,360.5,50,250"
                                        id="textcircle"></path>
                                </defs>
                                <text dy="30" style="font-size: 40px;">
                                    <textPath xlink:href="#textcircle">Our Works</textPath>
                                </text>
                            </svg>
                        </div> <!-- /.sdc-inner -->
                    </a>
                    <div class="made-with-love ph-appear">
                        <div class="mwl-inner">
                            <div class="mwl-text">Made with</div>
                            <div class="mwl-icon"><i class="far fa-heart"></i></div>
                        </div>
                    </div>
                    <!-- End made with love -->

                </div>
                <!-- End page header -->
                <div id="page-content">
                    <div class="tt-section bg-white-accent-3 padding-top-xlg-150">
                        <div class="tt-section-inner tt-wrap max-width-1700">
                            <div class="tt-heading tt-heading-lg tt-heading-center margin-bottom-7-p anim-fadeinup">
                                <h3 class="tt-heading-subtitle text-gray">Explore Creation</h3>
                                <h2 class="tt-heading-title">Our Works</h2>
                            </div>
                            <div id="portfolio-grid">
                                <div class="tt-grid ttgr-layout-3 ttgr-gap-3 ttgr-not-cropped">
                                    <div style="display: flex; justify-content: center; flex-wrap: wrap;">

                                        <div class="tt-grid-item isotope-item pages">
                                            <div class="ttgr-item-inner">
                                                <div class="portfolio-grid-item">
                                                    <a href="landing-page-1.html" class="pgi-image-wrap"
                                                        target="_blank" rel="noopener" data-cursor="View">
                                                        <div class="pgi-image-holder">
                                                            <div class="pgi-image-inner anim-zoomin">
                                                                <figure class="pgi-image ttgr-height">
                                                                    <img class="tt-lazy"
                                                                        src="{{ asset('gart/gart-bg.png') }}"
                                                                        data-src=""
                                                                        alt="image">
                                                                </figure>
                                                            </div>
                                                        </div>
                                                    </a>

                                                    <div class="pgi-caption">
                                                        <div class="pgi-caption-inner">
                                                            <h2 class="pgi-title">
                                                                <a href="landing-page-1.html" target="_blank"
                                                                    rel="noopener">Gart Studio Project</a>
                                                            </h2>
                                                            <div class="pgi-categories-wrap">
                                                                <div class="pgi-category">Build at 2013</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="tt-grid-item isotope-item pages">
                                            <div class="ttgr-item-inner">
                                                <div class="portfolio-grid-item">
                                                    <a href="landing-page-1.html" class="pgi-image-wrap"
                                                        target="_blank" rel="noopener" data-cursor="View">
                                                        <div class="pgi-image-holder">
                                                            <div class="pgi-image-inner anim-zoomin">
                                                                <figure class="pgi-image ttgr-height">
                                                                    <img class="tt-lazy"
                                                                        src="{{ asset('gart/reise-bg.png') }}"
                                                                        data-src=""
                                                                        alt="image">
                                                                </figure>
                                                            </div>
                                                        </div>
                                                    </a>

                                                    <div class="pgi-caption">
                                                        <div class="pgi-caption-inner">
                                                            <h2 class="pgi-title">
                                                                <a href="landing-page-1.html" target="_blank"
                                                                    rel="noopener">Reise Stories</a>
                                                            </h2>
                                                            <div class="pgi-categories-wrap">
                                                                <div class="pgi-category">Build at 2020</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tt-section padding-bottom-xlg-150">
                        <div class="tt-section-inner tt-wrap">
                            <div class="tt-page-nav tt-pn-scroll">
                                <a href="https://1.envato.market/tank" class="tt-pn-link anim-fadeinup"
                                    target="_blank" rel="noopener">
                                    <div class="tt-pn-title">Contact us!</div>
                                    <div class="tt-pn-hover-title">Contact us!</div>
                                </a> <!-- /.tt-pn-link -->

                                <div class="tt-pn-subtitle anim-fadeinup">Let's do the Collaboration</div>

                                <!-- Use if destination page contains page header image -->
                                <div class="tt-pn-image">
                                    <img src="{{ asset('gart-logo-text.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                <footer id="tt-footer">
                    <div class="tt-footer-inner">
                        <div class="footer-col tt-align-center-left">
                            <div class="footer-col-inner">
                                <div class="tt-btn tt-btn-link">
                                    <a href="#" class="scroll-to-top" data-hover="Back to top">Back to top</a>
                                </div>
                            </div>
                        </div>
                        <div class="footer-col tt-align-center order-m-last">
                            <div class="footer-col-inner">
                                <div class="tt-copyright">
                                    © Copyright - <a href="/" target="_blank" rel="noopener" class="tt-link">Gart Studio Project</a>
                                </div>
                            </div>
                        </div>
                        <div class="footer-col tt-align-center-right">
                            <div class="footer-col-inner">
                                <div class="footer-social">
                                    <div class="footer-social-text">
                                        <span>Follow</span><i class="fas fa-share-alt"></i>
                                    </div>
                                    <div class="social-buttons">
                                        <ul>
                                            <li><a href="https://www.instagram.com/gartstudioproject/" class="magnetic-item" target="_blank" rel="noopener">Ig.</a></li>
                                            <li><a href="https://www.youtube.com/" class="magnetic-item" target="_blank" rel="noopener">Yt.</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
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

</body>
</html>
