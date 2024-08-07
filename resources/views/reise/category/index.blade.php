@extends('reise.layout.base')

@section('title', 'Categories')

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
                    @foreach ($categories as $category)
                        <div class="swiper-slide">

                            <a href="{{ route('reise.category', ['slug' => $category->slug]) }}" class="tt-portfolio-carousel-item" data-cursor="View<br>Category">

                                <!-- Use class "cover-opacity-*" to set an image overlay if needed. For example "cover-opacity-2". More info in the file "helper.css". -->
                                <figure class="tt-pci-image-wrap cover-opacity-2">
                                    <img class="tt-pci-image swiper-lazy" src="{{ $category->getImageURL(type: 'reise') }}" data-src="{{ $category->getImageURL(type: 'reise') }}" alt="Image">
                                </figure> <!-- /.tt-pci-image-wrap -->

                                <div class="tt-pci-caption-front">
                                    <div class="tt-pci-caption">
                                        <div class="tt-pci-caption-inner">
                                            <h2 class="tt-pci-title">{{ $category->name }}</h2> <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
                                            <div class="tt-pci-categories">
                                                {{-- <div class="tt-pci-category">People</div> --}}
                                                <!-- <div class="tt-pci-category">Varia</div> -->
                                            </div> <!-- /.tt-pci-categories -->
                                        </div> <!-- /.tt-pci-caption-inner -->
                                    </div> <!-- /.tt-pci-caption -->
                                </div> <!-- /.tt-pci-caption-front -->

                                <div class="tt-pci-caption tt-pci-caption-back">
                                    <div class="tt-pci-caption-inner">
                                        <h2 class="tt-pci-title">{{ $category->name }}</h2> <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
                                        <div class="tt-pci-categories">
                                            {{-- <div class="tt-pci-category">People</div> --}}
                                            <!-- <div class="tt-pci-category">Varia</div> -->
                                        </div> <!-- /.tt-pci-categories -->
                                    </div> <!-- /.tt-pci-caption-inner -->
                                </div> <!-- /.tt-pci-caption -->
                            </a>
                            <!-- End portfolio carousel item -->

                        </div>
                    @endforeach
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
