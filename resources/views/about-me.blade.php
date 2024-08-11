@extends('layout.base')

@section('title', 'About Me')

@section('content')

<div id="page-header" class="ph-full ph-cap-xxlg ph-center ph-image-cropped ph-image-cover-4 ph-content-parallax">
    <div class="page-header-inner tt-wrap">

        <!-- Begin page header image
        ============================= -->
        <div class="ph-image">
            <div class="ph-image-inner">
                <img src="{{ asset('gart/about-me-bg-2.jpg') }}" alt="Image">
            </div>
        </div>
        <!-- End page header image -->

        <!-- Begin page header caption
        ===============================
        Use class "max-width-*" to set caption max width if needed. For example "max-width-1000". More info about helper classes can be found in the file "helper.css".
        -->
        <div class="ph-caption">
            <h1 class="ph-caption-title ph-appear">Gart</h1>
            <div class="ph-caption-title-ghost ph-appear">Gart</div>
            <div class="ph-caption-subtitle ph-appear">Tegar Hedriansyah</div>
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
        <div class="tt-section-inner tt-wrap max-width-900">
            <div class="font-alter text-gray-2" style="font-size: 15pt;">
                <p class="anim-fadeinup">Hello, my name is <strong class="text-white">Tegar Hedriansyah</strong>. seasoned photographer who has dedicated his life to the art of photography. With over a decade of experience capturing beautiful moments, Tegar is known for his high dedication and commitment to perfection in every shot.</p>

                <p class="anim-fadeinup">Born with a keen eye for detail and a natural talent for capturing the essence of every subject, I began my photography career as a hobby that evolved into a passionate profession. I believe that every picture has a story to tell, and through my lens, I reveal the beauty and emotions often hidden from ordinary view.</p>

                <p class="anim-fadeinup">I have worked with a diverse range of clients, from couples looking to immortalize their special day, companies needing professional visuals for branding, to art projects requiring a creative and visionary touch. My work has been recognized and exhibited in various galleries and published in numerous renowned publications.</p>

                <p class="anim-fadeinup">Beyond my technical skills, I am also known for my personal approach to each project. I listen attentively to the needs and desires of my clients, ensuring that the final result not only meets but exceeds their expectations. In every photo session, I create a comfortable and natural atmosphere, allowing my subjects to present themselves confidently and authentically.</p>

                <p class="anim-fadeinup">My dedication to photography is evident not only in my work but also in my continuous efforts to learn and grow. I stay abreast of the latest technology and trends in photography, ensuring I remain at the forefront of the industry.</p>

                <p class="anim-fadeinup">For me, photography is not just a job, but a calling. Through my lens, I strive to capture the world's beauty and share it with others. With me, you can truly "make your journey into history," as I am committed to delivering unforgettable moments and inspiring through every photo I take.</p>

            </div>

            <img src="{{ asset('gart/signature.png') }}" class="anim-fadeinup margin-top-30" alt="Signature">

        </div> <!-- /.tt-section-inner -->
    </div>
</div>

@endsection
