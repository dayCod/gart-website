@extends('gart.layout.base')

@section('content')

<div id="page-header" class="ph-full ph-cap-xxlg ph-center ph-image-cropped ph-image-cover-2 ph-content-parallax">
    <div class="page-header-inner tt-wrap">

        <!-- Begin page header image
        ============================= -->
        <div class="ph-image">
            <div class="ph-image-inner">
                <img src="{{ $category->getImageURL() }}" alt="Image">
            </div>
        </div>
        <!-- End page header image -->

        <!-- Begin page header caption
        ===============================
        Use class "max-width-*" to set caption max width if needed. For example "max-width-1000". More info about helper classes can be found in the file "helper.css".
        -->
        <div class="ph-caption">
            <h1 class="ph-caption-title ph-appear">{{ $category->name }}</h1>
            <div class="ph-caption-title-ghost ph-appear">{{ $category->name }}</div>
            <div class="ph-caption-subtitle ph-appear">{{ $category->sub_name }}</div>
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
                    <path d="M50,250c0-110.5,89.5-200,200-200s200,89.5,200,200s-89.5,200-200,200S50,360.5,50,250" id="textcircle"></path>
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

    <!-- =======================
    ///// Begin tt-section /////
    ============================
    * You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
    -->
    <div class="tt-section">
        <div class="tt-section-inner">

            <div class="tt-section padding-left-sm-3-p padding-right-sm-3-p">
                <div class="tt-section-inner tt-wrap">

                    <div class="tt-row">
                        <div class="tt-col-lg-8">

                            <!-- Begin tt-Heading
                            ======================
                            * Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set caption size (no class = default size).
                            * Use class "tt-heading-stroke" to enable stroke style.
                            * Use class "tt-heading-center" to align tt-Heading to center.
                            * Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
                            -->
                            <div class="tt-heading tt-heading-xsm anim-fadeinup">
                                <h2 class="tt-heading-title">About</h2>
                                <!-- <h3 class="tt-heading-subtitle text-gray">Subtitle</h3> -->
                            </div>
                            <!-- End tt-Heading -->

                            <div class="anim-fadeinup text-gray">
                                <p>{{ $category->description }}</p>

                                <!-- <div class="tt-btn tt-btn-link no-margin">
                                    <a href="dummy-page.html" data-hover="Explore More">Explore More</a>
                                </div> -->
                            </div>

                        </div> <!-- /.tt-col -->

                        <div class="tt-col-lg-4">
                        </div> <!-- /.tt-col -->
                    </div> <!-- /.tt-row -->

                </div> <!-- /.tt-section-inner -->
            </div>

            <div id="portfolio-grid" class="pgi-hover">

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
                <div class="tt-grid ttgr-layout-3 ttgr-gap-3">

                    <!-- Begin tt-Ggrid top content
                    ================================ -->
                    <div class="tt-grid-top"></div>
                    <!-- End tt-Grid top content -->


                    <!-- Begin tt-Grid items wrap
                    ============================== -->
                    <div class="tt-grid-items-wrap isotope-items-wrap">

                        <!-- Begin tt-Grid item
                        ======================== -->
                        @foreach ($category->galleries as $gallery)
                            <div class="tt-grid-item isotope-item people">
                                <div class="ttgr-item-inner">

                                    <!-- Begin portfolio grid item
                                    ===============================
                                    * Use class "pgi-image-is-light" if needed, it makes the caption visible better if you use light image (only effect if "pgi-cap-inside" is enabled on "portfolio-grid"! Also no effect on small screens!).
                                    -->
                                    <div class="portfolio-grid-item">
                                        <a href="{{ route('gart.gallery', $gallery->slug) }}" class="pgi-image-wrap" data-cursor="View<br>Gallery">
                                            <!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pgi-cap-inside" is enabled on "portfolio-grid". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
                                            <div class="pgi-image-holder">
                                                <div class="pgi-image-inner anim-zoomin">
                                                    <figure class="pgi-image ttgr-height">
                                                        <img src="{{ $gallery->getImageURL() }}" alt="image">
                                                    </figure> <!-- /.pgi-image -->
                                                </div> <!-- /.pgi-image-inner -->
                                            </div> <!-- /.pgi-image-holder -->
                                        </a> <!-- /.pgi-image-wrap -->

                                        <div class="pgi-caption">
                                            <div class="pgi-caption-inner">
                                                <h2 class="pgi-title">
                                                    <a href="{{ route('gart.gallery', $gallery->slug) }}">
                                                        {{ $gallery->title }}
                                                    </a>
                                                </h2>
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
                        @endforeach
                        <!-- End tt-Grid item -->

                    </div>
                    <!-- End tt-Grid items wrap  -->

                </div>
                <!-- End tt-Grid -->

            </div>
            <!-- End portfolio grid -->


            <!-- Begin tt-pagination (uncomment below code if you want to use pagination)
            =========================
            * Use class "tt-pagin-center" to align center.
            -->
            <!-- <div class="tt-pagination tt-pagin-center anim-fadeinup">
                <div class="tt-pagin-prev">
                    <a href="" class="tt-pagin-item magnetic-item"><i class="fas fa-chevron-left"></i></a>
                </div>
                <div class="tt-pagin-numbers">
                    <a href="#0" class="tt-pagin-item magnetic-item active">1</a>
                    <a href="" class="tt-pagin-item magnetic-item">2</a>
                    <a href="" class="tt-pagin-item magnetic-item">3</a>
                    <a href="" class="tt-pagin-item magnetic-item">4</a>
                </div>
                <div class="tt-pagin-next">
                    <a href="" class="tt-pagin-item tt-pagin-next magnetic-item"><i class="fas fa-chevron-right"></i></a>
                </div>
            </div> -->
            <!-- End tt-pagination -->

        </div> <!-- /.tt-section-inner -->
    </div>
    <!-- End tt-section -->


</div>


@endsection
