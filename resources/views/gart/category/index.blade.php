@extends('gart.layout.base')

@section('content')

<div id="content-wrap">

    <div id="page-content">

        <div class="tt-portfolio-carousel pci-hover pci-caption-stroke cursor-drag-mouse-down pc-scale-down" data-simulate-touch="true" data-mousewheel="true" data-keyboard="true" data-grab-cursor="true" data-pagination-type="fraction">

            <!-- Begin swiper container -->
            <div class="swiper">

                <!-- Begin swiper wrapper (required) -->
                <div class="swiper-wrapper">

                    <!-- Begin swiper slide
                    ======================== -->
                    <div class="swiper-slide">

                        <a href="{{ route('gart.category', ['slug' => 'test']) }}" class="tt-portfolio-carousel-item" data-cursor="View<br>Category">

                            <!-- Use class "cover-opacity-*" to set an image overlay if needed. For example "cover-opacity-2". More info in the file "helper.css". -->
                            <figure class="tt-pci-image-wrap cover-opacity-2">
                                <img class="tt-pci-image swiper-lazy" src="{{ asset('gart/gm-flora-0.jpg') }}" data-src="{{ asset('gart/gm-flora-0.jpg') }}" alt="Image">
                            </figure> <!-- /.tt-pci-image-wrap -->

                            <div class="tt-pci-caption-front">
                                <div class="tt-pci-caption">
                                    <div class="tt-pci-caption-inner">
                                        <h2 class="tt-pci-title">Photo<br class="hide-from-sm"> Product</h2> <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
                                        <div class="tt-pci-categories">
                                            {{-- <div class="tt-pci-category">People</div> --}}
                                            <!-- <div class="tt-pci-category">Varia</div> -->
                                        </div> <!-- /.tt-pci-categories -->
                                    </div> <!-- /.tt-pci-caption-inner -->
                                </div> <!-- /.tt-pci-caption -->
                            </div> <!-- /.tt-pci-caption-front -->

                            <div class="tt-pci-caption tt-pci-caption-back">
                                <div class="tt-pci-caption-inner">
                                    <h2 class="tt-pci-title">Photo<br class="hide-from-sm"> Product</h2> <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
                                    <div class="tt-pci-categories">
                                        {{-- <div class="tt-pci-category">People</div> --}}
                                        <!-- <div class="tt-pci-category">Varia</div> -->
                                    </div> <!-- /.tt-pci-categories -->
                                </div> <!-- /.tt-pci-caption-inner -->
                            </div> <!-- /.tt-pci-caption -->
                        </a>
                        <!-- End portfolio carousel item -->

                    </div>
                    <!-- End swiper slide -->

                </div>
                <!-- End swiper wrapper -->

            </div>
            <!-- End swiper container -->

            <!-- Begin portfolio carousel navigation
            ========================================= -->
            <div class="tt-pc-navigation tt-swiper-nav">
                <div class="tt-pc-nav-prev">
                    <div class="tt-pc-arrow tt-pc-arrow-prev magnetic-item"></div>
                </div>
                <div class="tt-pc-nav-next">
                    <div class="tt-pc-arrow tt-pc-arrow-next magnetic-item"></div>
                </div>
                <div class="tt-pc-pagination"></div>
            </div>
            <!-- End portfolio carousel navigation -->

        </div>
        <!-- End portfolio carousel -->


    </div>
    <!-- End page content -->

</div>
@endsection
