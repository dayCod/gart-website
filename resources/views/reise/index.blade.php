@extends('reise.layout.base')

@section('content')
    <!-- ========================
         ///// Begin page header /////
         =============================
         * Use class "ph-full" to enable fullscreen size.
         * Use class "ph-cap-sm", "ph-cap-lg", "ph-cap-xlg" or "ph-cap-xxlg" to set caption size (no class = default size).
         * Use class "ph-center" to enable content center position.
         * Use class "ph-bg-image" to enable page header background image (required for a portfolio single project!).
         * Use class "ph-bg-image-is-light" if needed, it makes the elements dark and more visible if you use a very light image (effect only with class "ph-bg-image").
         * Use class "ph-image-shadow" to enable page header background image (effect only with class "ph-bg-image").
         * Use class "ph-image-cropped" to crop image. It fixes image dimensions (no effect for "ph-bg-image"!).
         * Use class "ph-image-cover-*" to set image overlay opacity. For example "ph-image-cover-2" or "ph-image-cover-2-5" (up to "ph-image-cover-9-5").
         * Use class "ph-content-parallax" to enable content parallax.
         * Use class "ph-stroke" to enable caption title stroke style.
         -->
    <div id="page-header" class="ph-full ph-cap-sm ph-image-cropped ph-image-cover-3 ph-content-parallax">
        <div class="page-header-inner tt-wrap">

            <!-- Begin page header image
           ============================= -->
            <div class="ph-image">
                <div class="ph-image-inner">
                    <img src="{{ asset('gart/indonesian-women-wedding.jpg') }}" alt="Image">
                </div>
            </div>
            <!-- End page header image -->

            <!-- Begin page header caption
           ===============================
           Use class "max-width-*" to set caption max width if needed. For example "max-width-1000". More info about helper classes can be found in the file "helper.css".
           -->
            <div class="ph-caption max-width-1000">
                <h1 class="ph-caption-title ph-appear font-normal">Experience a timeless journey<br>
                    into the cherished <em>history of your unique love story.</em></h1>
                <div class="ph-caption-title-ghost ph-appear">Hello!</div>
                <!-- <div class="ph-caption-subtitle ph-appear">Subtitle</div> -->
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
    <!-- End page header -->


    <!-- *************************************
         *********** Begin page content ***********
         ************************************** -->
    <div id="page-content">

        <!-- =======================
          ///// Begin tt-section /////
          ============================
          * You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
          -->
        <div class="tt-section no-padding-bottom">
            <div class="tt-section-inner">

                <!-- Begin tt-Heading
            ======================
            * Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set caption size (no class = default size).
            * Use class "tt-heading-stroke" to enable stroke style.
            * Use class "tt-heading-center" to align tt-Heading to center.
            * Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
            -->
                <div class="tt-heading tt-heading-lg tt-heading-center margin-bottom-10-p anim-fadeinup">
                    <h3 class="tt-heading-subtitle text-gray">Latest Projects</h3>
                    <h2 class="tt-heading-title">Works</h2>
                    <div class="tt-btn tt-btn-link margin-top-20">
                        <a href="portfolio-grid-creative-1.html" data-hover="See All Works">See All Works</a>
                    </div>
                </div>
                <!-- End tt-Heading -->


                <!-- Begin portfolio grid (works combined with tt-Ggrid!)
            ==========================
            * Use class "pgi-hover" to enable portfolio grid item hover effect (behavior depends on "ttgr-gap-*" classes below!).
            * Use class "pgi-cap-hover" to enable portfolio grid item caption hover effect (effect only with class "pgi-cap-inside"! Also no effect on mobile devices!).
            * Use class "pgi-cap-center" to position portfolio grid item caption to center.
            * Use class "pgi-cap-inside" to position portfolio grid item caption to inside.
            -->
                <div id="portfolio-grid" class="pgi-cap-inside pgi-hover">

                    <!-- Begin tt-Grid
             ===================
             * Use class "ttgr-layout-2", "ttgr-layout-3", "ttgr-layout-4" to set grid layout (columns). No class = one column.
             * Use class "ttgr-layout-1-2", "ttgr-layout-2-1", "ttgr-layout-2-3", "ttgr-layout-3-2", "ttgr-layout-3-4" or "ttgr-layout-4-3" to set grid mixed layout (columns).
             * Use class "ttgr-layout-creative-1" or "ttgr-layout-creative-2" to set grid creative mixed layout (no effect with classes "ttgr-portrait", "ttgr-portrait-half", "ttgr-not-cropped" and "ttgr-shifted").
             * Use class "ttgr-portrait" or "ttgr-portrait-half" to enable portrait mode (no effect with classes "ttgr-layout-creative-1", "ttgr-layout-creative-2" and "ttgr-not-cropped").
             * Use class "ttgr-gap-1", "ttgr-gap-2", "ttgr-gap-3", "ttgr-gap-4", "ttgr-gap-5" or "ttgr-gap-6" to add space between items.
             * Use class "ttgr-not-cropped" to enable not cropped mode (effect only with classes "ttgr-layout-2", "ttgr-layout-3" and "ttgr-layout-4").
             * Use class "ttgr-shifted" to enable shifted layout (effect only with classes "ttgr-layout-2", "ttgr-layout-3" and "ttgr-layout-4").
             -->
                    <div class="tt-grid ttgr-layout-creative-2 ttgr-not-cropped ttgr-gap-4">

                        <!-- Begin tt-Grid items wrap
              ============================== -->
                        <div class="tt-grid-items-wrap isotope-items-wrap">

                            @foreach ($galleries as $index => $gallery)
                                @if ($index % 2 == 0)
                                    <div class="tt-grid-item isotope-item people">
                                        <div class="ttgr-item-inner">
                                            <div class="portfolio-grid-item">
                                                <a href="{{ route('gart.gallery', $gallery->slug) }}" class="pgi-image-wrap"
                                                    data-cursor="View<br>Gallery">
                                                    <!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pgi-cap-inside" is enabled on "portfolio-grid". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
                                                    <div class="pgi-image-holder cover-opacity-2">
                                                        <div class="pgi-image-inner anim-zoomin">
                                                            <figure class="pgi-image ttgr-height">
                                                                <img src="{{ $gallery->getImageURL() }}" alt="image">
                                                            </figure> <!-- /.pgi-image -->
                                                        </div> <!-- /.pgi-image-inner -->
                                                    </div> <!-- /.pgi-image-holder -->
                                                </a> <!-- /.pgi-image-wrap -->

                                                <div class="pgi-caption">
                                                    <div class="pgi-caption-inner">
                                                        <h2 class="pgi-title">{{ $gallery->title }}</h2>
                                                        <div class="pgi-categories-wrap">
                                                            <div class="pgi-category">{{ $gallery->category->name }}</div>
                                                            <!-- <div class="pgi-category">Varia</div> -->
                                                        </div> <!-- /.pli-categories-wrap -->
                                                    </div> <!-- /.pgi-caption-inner -->
                                                </div> <!-- /.pgi-caption -->
                                            </div>
                                            <!-- End portfolio grid item -->

                                        </div> <!-- /.ttgr-item-inner -->
                                    </div>
                                @else
                                    <div class="tt-grid-item isotope-item creative">
                                        <div class="ttgr-item-inner">
                                            <div class="portfolio-grid-item anim-parallax">
                                                <a href="single-project-2.html" class="pgi-image-wrap"
                                                    data-cursor="View<br>Project">
                                                    <!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pgi-cap-inside" is enabled on "portfolio-grid". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
                                                    <div class="pgi-image-holder cover-opacity-2">
                                                        <div class="pgi-image-inner anim-zoomin">
                                                            <figure class="pgi-image ttgr-height">
                                                                <img src="{{ asset('gart/gm-moira-0.jpg') }}" alt="image">
                                                            </figure> <!-- /.pgi-image -->
                                                        </div> <!-- /.pgi-image-inner -->
                                                    </div> <!-- /.pgi-image-holder -->
                                                </a> <!-- /.pgi-image-wrap -->

                                                <div class="pgi-caption">
                                                    <div class="pgi-caption-inner">
                                                        <h2 class="pgi-title">Moira</h2>
                                                        <div class="pgi-categories-wrap">
                                                            <div class="pgi-category">Photo Product</div>
                                                            <!-- <div class="pgi-category">Varia</div> -->
                                                        </div> <!-- /.pli-categories-wrap -->
                                                    </div> <!-- /.pgi-caption-inner -->
                                                </div> <!-- /.pgi-caption -->
                                            </div>
                                            <!-- End portfolio grid item -->

                                        </div> <!-- /.ttgr-item-inner -->
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <!-- End tt-Grid items wrap  -->

                    </div>
                    <!-- End tt-Grid -->

                </div>
                <!-- End portfolio grid -->

            </div> <!-- /.tt-section-inner -->
        </div>
        <!-- End tt-section -->


        <!-- =======================
          ///// Begin tt-section /////
          ============================
          * You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
          -->
        <div class="tt-section padding-bottom-xlg-150 padding-left-sm-3-p padding-right-sm-3-p">
            <div class="tt-section-inner tt-wrap max-width-1100">

                <!-- Begin tt-Heading
            ======================
            * Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set caption size (no class = default size).
            * Use class "tt-heading-stroke" to enable stroke style.
            * Use class "tt-heading-center" to align tt-Heading to center.
            * Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
            -->
                <div class="tt-heading tt-heading-lg tt-heading-center margin-bottom-15-p anim-fadeinup">
                    <h3 class="tt-heading-subtitle text-gray">What We Do</h3>
                    <h2 class="tt-heading-title">Services</h2>
                </div>
                <!-- End tt-Heading -->

                <!-- Begin accordion
            =====================
            * Use class "tt-ac-sm", "tt-ac-lg", "tt-ac-xlg" or "tt-ac-xxlg" to set accordion size.
            * Use class "tt-ac-borders" to enable borders.
            * Add class "is-open" to the "tt-accordion-content" to make this content open by default.
            -->
                <div class="tt-accordion tt-ac-xlg tt-ac-borders">
                    <div class="tt-accordion-item anim-fadeinup">
                        <div class="tt-accordion-heading">
                            <h3 class="tt-ac-head-title">Photo Product</h3>
                            <div class="tt-accordion-subtext">Mauris mauris ante</div>
                            <div class="tt-accordion-caret-wrap">
                                <div class="tt-accordion-caret magnetic-item"></div>
                            </div>
                        </div> <!-- /.tt-accordion-heading -->
                        <div class="tt-accordion-content max-width-800">
                            <p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                                ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                                amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                                odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.</p>

                            <div class="tt-btn tt-btn-link">
                                <a href="dummy-page.html" data-hover="Read More">Read More</a>
                            </div>
                        </div> <!-- /.tt-accordion-content -->
                    </div> <!-- /.tt-accordion-item -->

                    <div class="tt-accordion-item anim-fadeinup">
                        <div class="tt-accordion-heading">
                            <h3 class="tt-ac-head-title">Photo Studio</h3>
                            <div class="tt-accordion-subtext">Vivamus nisi</div>
                            <div class="tt-accordion-caret-wrap">
                                <div class="tt-accordion-caret magnetic-item"></div>
                            </div>
                        </div> <!-- /.tt-accordion-heading -->
                        <div class="tt-accordion-content max-width-800">
                            <p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                                ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                                amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                                odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.</p>

                            <div class="tt-btn tt-btn-link">
                                <a href="dummy-page.html" data-hover="Read More">Read More</a>
                            </div>
                        </div> <!-- /.tt-accordion-content -->
                    </div> <!-- /.tt-accordion-item -->

                </div>
                <!-- End accordion -->

            </div> <!-- /.tt-section-inner -->
        </div>
        <!-- End tt-section -->


        <!-- =======================
          ///// Begin tt-section /////
          ============================
          * You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
          -->
        <div class="tt-section padding-top-xlg-150 padding-bottom-xlg-150">
            <div class="tt-section-inner">

                <!-- Begin scrolling text
            ==========================
            Change data-scroll-speed="*" to adjust scrolling speed.
            Use class "scr-text-reverse" to reverse scrolling direction.
            Use class "scr-text-stroke" to enable text stroke style (no effect on smaller screens!).
            -->
                <div class="tt-scrolling-text scr-text-stroke font-italic" data-scroll-speed="15">
                    <div class="tt-scrolling-text-inner text-dark-3"
                        data-text="Historical Voyage Through Images">
                        Make your journey into history
                    </div> <!-- /.tt-scrolling-text-inner -->
                </div>
                <!-- End scrolling text -->

                <!-- Begin scrolling text
            ==========================
            Change data-scroll-speed="*" to adjust scrolling speed.
            Use class "scr-text-reverse" to reverse scrolling direction.
            Use class "scr-text-stroke" to enable text stroke style (no effect on smaller screens!).
            -->
                <div class="tt-scrolling-text scr-text-stroke scr-text-reverse font-italic" data-scroll-speed="15">
                    <div class="tt-scrolling-text-inner text-dark-3"
                        data-text="Historical Voyage Through Images">
                        Make your journey into history
                    </div> <!-- /.tt-scrolling-text-inner -->
                </div>
                <!-- End scrolling text -->

            </div> <!-- /.tt-section-inner -->
        </div>
        <!-- End tt-section -->


        <!-- =======================
          ///// Begin tt-section /////
          ============================
          * You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
          -->
        <div
            class="tt-section padding-top-xlg-150 padding-bottom-xlg-150 padding-left-sm-3-p padding-right-sm-3-p bg-white-accent-3">
            <div class="tt-section-inner tt-wrap max-width-900">

                <!-- Begin tt-Heading
            ======================
            * Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set caption size (no class = default size).
            * Use class "tt-heading-stroke" to enable stroke style.
            * Use class "tt-heading-center" to align tt-Heading to center.
            * Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
            -->
                <div class="tt-heading tt-heading-lg margin-bottom-10-p anim-fadeinup">
                    <h3 class="tt-heading-subtitle text-gray">Get in Touch</h3>
                    <h2 class="tt-heading-title">Drop Us<br> a Line</h2>
                </div>
                <!-- End tt-Heading -->

                <!-- Begin form
             ================
             * Use class "tt-form-filled" or "tt-form-minimal" to change form style.
             * Use class "tt-form-sm" or "tt-form-lg" to change form size (no class = default size).
             -->
                <form id="tt-contact-form" class="tt-form-minimal anim-fadeinup">

                    <!-- Begin hidden required fields (https://github.com/agragregra/uniMail) -->
                    <input type="hidden" name="project_name" value="yourwebsiteaddress.com">
                    <!-- Change value to your site name -->
                    <input type="hidden" name="admin_email" value="your@email.com">
                    <!-- Change value to your valid email address (where a message will be sent) -->
                    <input type="hidden" name="form_subject" value="Message from yourwebsiteaddress.com">
                    <!-- Change value to your own message subject -->
                    <!-- End Hidden Required Fields -->

                    <div class="tt-row">
                        <div class="tt-col-md-6">

                            <div class="tt-form-group">
                                <label>Name <span class="required">*</span></label>
                                <input class="tt-form-control" type="text" name="Name" placeholder="" required>
                            </div>

                        </div> <!-- /.tt-col -->

                        <div class="tt-col-md-6">

                            <div class="tt-form-group">
                                <label>Email address <span class="required">*</span></label>
                                <input class="tt-form-control" type="email" name="Email" placeholder="" required>
                            </div>

                        </div> <!-- /.tt-col -->
                    </div> <!-- /.tt-row -->

                    <div class="tt-form-group">
                        <label>Subject <span class="required">*</span></label>
                        <input class="tt-form-control" type="text" name="Subject" placeholder="" required>
                    </div>

                    <div class="tt-form-group">
                        <label>Select an option <span class="required">*</span></label>
                        <select class="tt-form-control" name="option" required>
                            <option value="" disabled selected>Please choose an option</option>
                            <option value="Say Hello">Say hello</option>
                            <option value="New Project">New project</option>
                            <option value="Feedback">Feedback</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>

                    <div class="tt-form-group">
                        <label>Message <span class="required">*</span></label>
                        <textarea class="tt-form-control" rows="6" name="Message" placeholder="" required></textarea>
                    </div>

                    <small class="tt-form-text"><em>Fields marked with an asterisk (*) are required!</em></small>

                    <div class="tt-btn tt-btn-light-outline margin-top-40">
                        <button type="submit" data-hover="Send Message">Send Message</button>
                    </div>
                </form>
                <!-- End form -->

            </div> <!-- /.tt-section-inner -->
        </div>
        <!-- End tt-section -->


    </div>
    <!-- End page content -->
@endsection
