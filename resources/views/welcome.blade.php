@extends('layout.base')

@section('content')
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
                <div class="ph-caption-subtitle ph-appear max-width-650">Welcome to our photography studio.
                    We specialize in capturing unforgettable moments through our lens. Share your story with
                    us and let's create lasting memories together.</div>
                <div class="tt-btn tt-btn-primary ph-appear margin-top-60">
                    <a href="https://api.whatsapp.com/send/?phone=6282210866763&text=Hi there! I'm interested with your works. Could you provide more details on the pricing, and availability? Looking forward to your response. Thank you!&type=phone_number&app_absent=0"
                        target="_blank" rel="noopener" data-hover="Contact Here!">Contact Whatsapp Here!</a>
                </div>
            </div>
            <!-- End page header caption -->

        </div> <!-- /.page-header-inner -->
        <a href="#page-content" class="scroll-down-circle" data-offset="30">
            <div class="sdc-inner ph-appear">
                <div class="sdc-icon"><i class="fas fa-chevron-down"></i></div>
                <svg viewBox="0 0 500 500">
                    <defs>
                        <path d="M50,250c0-110.5,89.5-200,200-200s200,89.5,200,200s-89.5,200-200,200S50,360.5,50,250"
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
                                        <a href="landing-page-1.html" class="pgi-image-wrap" target="_blank" rel="noopener"
                                            data-cursor="View">
                                            <div class="pgi-image-holder">
                                                <div class="pgi-image-inner anim-zoomin">
                                                    <figure class="pgi-image ttgr-height">
                                                        <img class="tt-lazy" src="{{ asset('gart/gart-bg.png') }}"
                                                            data-src="" alt="image">
                                                    </figure>
                                                </div>
                                            </div>
                                        </a>

                                        <div class="pgi-caption">
                                            <div class="pgi-caption-inner">
                                                <h2 class="pgi-title">
                                                    <a href="landing-page-1.html" target="_blank" rel="noopener">Gart Studio
                                                        Project</a>
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
                                        <a href="landing-page-1.html" class="pgi-image-wrap" target="_blank" rel="noopener"
                                            data-cursor="View">
                                            <div class="pgi-image-holder">
                                                <div class="pgi-image-inner anim-zoomin">
                                                    <figure class="pgi-image ttgr-height">
                                                        <img class="tt-lazy" src="{{ asset('gart/reise-bg.png') }}"
                                                            data-src="" alt="image">
                                                    </figure>
                                                </div>
                                            </div>
                                        </a>

                                        <div class="pgi-caption">
                                            <div class="pgi-caption-inner">
                                                <h2 class="pgi-title">
                                                    <a href="landing-page-1.html" target="_blank" rel="noopener">Reise
                                                        Stories</a>
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
                    <a href="{{ route('contact-us') }}" class="tt-pn-link anim-fadeinup" target="_blank" rel="noopener">
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
    </div>
@endsection
