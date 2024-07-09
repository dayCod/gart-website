@extends('layout.base')

@section('content')
    <div id="page-header" class="ph-full ph-cap-xxlg ph-center ph-image-cropped ph-image-cover-4 ph-content-parallax">
        <div class="page-header-inner tt-wrap">

            <!-- Begin page header image
            ============================= -->
            <div class="ph-image">
                <div class="ph-image-inner">
                    <img src="{{ asset('gart/about-us-bg-2.jpg') }}" alt="Image">
                </div>
            </div>
            <!-- End page header image -->

            <!-- Begin page header caption
            ===============================
            Use class "max-width-*" to set caption max width if needed. For example "max-width-1000". More info about helper classes can be found in the file "helper.css".
            -->
            <div class="ph-caption">
                <h1 class="ph-caption-title ph-appear">About</h1>
                <div class="ph-caption-title-ghost ph-appear">About</div>
                <div class="ph-caption-subtitle ph-appear">The House</div>
            </div>
            <!-- End page header caption -->

        </div> <!-- /.page-header-inner -->

        <!-- Begin scroll down circle (you can change "data-offset" to set scroll top offset)
        ============================== -->
        <a href="#page-content" class="scroll-down-circle" data-offset="30">
            <div class="sdc-inner ph-appear">
                <div class="sdc-icon"><i class="fas fa-chevron-down"></i></div>
                <svg viewBox="0 0 500 500">
                    <defs>
                        <path d="M50,250c0-110.5,89.5-200,200-200s200,89.5,200,200s-89.5,200-200,200S50,360.5,50,250"
                            id="textcircle"></path>
                    </defs>
                    <text dy="30">
                        <textPath xlink:href="#textcircle">Scroll down - Scroll down -</textPath>
                    </text>
                </svg>
            </div> <!-- /.sdc-inner -->
        </a>
        <!-- End scroll down circle -->

        <!-- Begin made with love
        ========================== -->
        <div class="made-with-love ph-appear">
            <div class="mwl-inner">
                <div class="mwl-text">Made with</div>
                <div class="mwl-icon"><i class="far fa-heart"></i></div>
            </div>
        </div>
        <!-- End made with love -->

    </div>

    <div id="page-content">
        <div class="tt-section">
            <div class="tt-section-inner tt-wrap">

                <div class="tt-row">
                    <div class="tt-col-lg-4 padding-right-lg-5-p">
                        <div class="tt-heading tt-heading-sm margin-bottom-60 anim-fadeinup">
                            <h2 class="tt-heading-title text-gray">The<br class="hide-from-md"> Story</h2>
                            <!-- <h3 class="tt-heading-subtitle text-gray">Subtitle</h3> -->
                        </div>
                    </div>

                    <div class="tt-col-lg-8">

                        <div class="text-xxlg font-alter">
                            <p class="anim-fadeinup">Hello, we going manor who did. Do ye is considered occasion directly
                                that. May ecstatic did surprise elegance the ignorant age. Own her miss cold. It so numerous
                                if outlived possession.</p>

                            <p class="anim-fadeinup">Fat new smallness few supposing suspicion two. Course sir awesome <a
                                    href="https://1.envato.market/tank" target="_blank" rel="noopener">website teplates</a>
                                add entire design. How one dull get busy dare far. At principle perfectly by sweetness do.
                                As mr started arrival.</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div class="tt-section padding-top-xlg-150 padding-bottom-xlg-200">
            <div class="tt-section-inner tt-wrap">
                <div
                    class="tt-heading tt-heading-xxlg tt-heading-stroke tt-heading-center margin-bottom-10-p anim-fadeinup">
                    <h3 class="tt-heading-subtitle text-gray">What We Do</h3>
                    <h2 class="tt-heading-title">Services</h2>
                </div>
                <div class="tt-accordion tt-ac-xlg tt-ac-borders">

                    <div class="tt-accordion-item anim-fadeinup">
                        <div class="tt-accordion-heading">
                            <h3 class="tt-ac-head-title">Wedding Package</h3>
                            <div class="tt-accordion-subtext">Lorem ipsum dolor sit amet.</div>
                            <div class="tt-accordion-caret-wrap">
                                <div class="tt-accordion-caret magnetic-item"></div>
                            </div>
                        </div> <!-- /.tt-accordion-heading -->
                        <div class="tt-accordion-content max-width-800">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci illo id quasi explicabo earum accusantium, exercitationem impedit? Dicta perferendis id ipsa deleniti reiciendis accusamus nisi?</p>
                        </div> <!-- /.tt-accordion-content -->
                    </div> <!-- /.tt-accordion-item -->

                    <div class="tt-accordion-item anim-fadeinup">
                        <div class="tt-accordion-heading">
                            <h3 class="tt-ac-head-title">Photo Product</h3>
                            <div class="tt-accordion-subtext">Lorem ipsum dolor sit amet.</div>
                            <div class="tt-accordion-caret-wrap">
                                <div class="tt-accordion-caret magnetic-item"></div>
                            </div>
                        </div> <!-- /.tt-accordion-heading -->
                        <div class="tt-accordion-content max-width-800">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci illo id quasi explicabo earum accusantium, exercitationem impedit? Dicta perferendis id ipsa deleniti reiciendis accusamus nisi?</p>
                        </div> <!-- /.tt-accordion-content -->
                    </div> <!-- /.tt-accordion-item -->

                    <div class="tt-accordion-item anim-fadeinup">
                        <div class="tt-accordion-heading">
                            <h3 class="tt-ac-head-title">Photo Studio</h3>
                            <div class="tt-accordion-subtext">Lorem ipsum dolor sit amet.</div>
                            <div class="tt-accordion-caret-wrap">
                                <div class="tt-accordion-caret magnetic-item"></div>
                            </div>
                        </div> <!-- /.tt-accordion-heading -->
                        <div class="tt-accordion-content max-width-800">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci illo id quasi explicabo earum accusantium, exercitationem impedit? Dicta perferendis id ipsa deleniti reiciendis accusamus nisi?</p>
                        </div> <!-- /.tt-accordion-content -->
                    </div> <!-- /.tt-accordion-item -->

                </div>
                <!-- End accordion -->

            </div> <!-- /.tt-section-inner -->
        </div>
        <!-- End tt-section -->

        <div class="tt-section padding-top-xlg-150 padding-bottom-xlg-150 bg-white-accent-2">
            <div class="tt-section-inner tt-wrap">
                <div
                    class="tt-heading tt-heading-xxlg tt-heading-stroke tt-heading-center margin-bottom-10-p anim-fadeinup">
                    <h3 class="tt-heading-subtitle text-gray">Proudly Served</h3>
                    <h2 class="tt-heading-title">Brands</h2>
                    <!-- <h3 class="tt-heading-subtitle text-gray">Subtitle</h3> -->
                </div>
                <!-- End tt-Heading -->
                <ul class="tt-logo-wall cl-col-44 anim-fadeinup">
                    <li><a href="https://1.envato.market/tank" class="cursor-alter" target="_blank" rel="noopener"><img
                                src="assets/img/clients/client-1.png" alt="Client"></a></li>
                    <li><a href="https://1.envato.market/tank" class="cursor-alter" target="_blank" rel="noopener"><img
                                src="assets/img/clients/client-2.png" alt="Client"></a></li>
                    <li><a href="https://1.envato.market/tank" class="cursor-alter" target="_blank" rel="noopener"><img
                                src="assets/img/clients/client-3.png" alt="Client"></a></li>
                    <li><a href="https://1.envato.market/tank" class="cursor-alter" target="_blank" rel="noopener"><img
                                src="assets/img/clients/client-4.png" alt="Client"></a></li>
                    <li><a href="https://1.envato.market/tank" class="cursor-alter" target="_blank" rel="noopener"><img
                                src="assets/img/clients/client-5.png" alt="Client"></a></li>
                    <li><a href="https://1.envato.market/tank" class="cursor-alter" target="_blank" rel="noopener"><img
                                src="assets/img/clients/client-6.png" alt="Client"></a></li>
                    <li><a href="https://1.envato.market/tank" class="cursor-alter" target="_blank" rel="noopener"><img
                                src="assets/img/clients/client-7.png" alt="Client"></a></li>
                    <li><a href="https://1.envato.market/tank" class="cursor-alter" target="_blank" rel="noopener"><img
                                src="assets/img/clients/client-8.png" alt="Client"></a></li>
                    <li><a href="https://1.envato.market/tank" class="cursor-alter" target="_blank" rel="noopener"><img
                                src="assets/img/clients/client-9.png" alt="Client"></a></li>
                    <li><a href="https://1.envato.market/tank" class="cursor-alter" target="_blank" rel="noopener"><img
                                src="assets/img/clients/client-10.png" alt="Client"></a></li>

                    <!-- Use the below example if you want a list without links -->
                    <!-- <li><img src="assets/img/clients/client-1.png" alt="Client"></li> -->
                </ul>
                <!-- End logo wall -->

            </div> <!-- /.tt-section-inner -->
        </div>
        <!-- End tt-section -->
        <div class="tt-section padding-top-xlg-150 padding-bottom-xlg-150">
            <div class="tt-section-inner tt-wrap">
                <div class="tt-page-nav tt-pn-scroll">
                    <a href="{{ route('contact-us') }}" class="tt-pn-link anim-fadeinup">
                        <div class="tt-pn-title">Contact Us</div>
                        <div class="tt-pn-hover-title">Contact Us</div>
                    </a> <!-- /.tt-pn-link -->

                    <div class="tt-pn-subtitle anim-fadeinup">Let's do the Collaboration</div>

                    <!-- Use if destination page contains page header image -->
                    <div class="tt-pn-image">
                        <img src="{{ asset('gart-logo-text.png') }}" alt="image">
                    </div>
                </div>
                <!-- End page nav -->

            </div> <!-- /.tt-section-inner -->
        </div>
        <!-- End tt-section -->


    </div>
@endsection
