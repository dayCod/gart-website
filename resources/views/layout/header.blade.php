<header id="tt-header" class="tt-header-fixed">
    <div class="tt-header-inner">
        <div class="tt-header-col">
            <div class="tt-logo">
                <a href="{{ route('index') }}">
                    <img src="{{ asset('gart-logo-0.png') }}" class="tt-logo-light magnetic-item" alt="Logo">
                    <img src="assets/img/logo-dark.png" class="tt-logo-dark magnetic-item" alt="Logo">
                </a>
            </div>
        </div>
        <div class="tt-header-col">

            <!-- Begin overlay menu toggle button -->
            <div id="tt-ol-menu-toggle-btn-wrap">
                <div class="tt-ol-menu-toggle-btn-text">
                    <span class="text-menu" data-hover="Open">Menu</span>
                    <span class="text-close">Close</span>
                </div>
                <div class="tt-ol-menu-toggle-btn-holder">
                    <a href="#" class="tt-ol-menu-toggle-btn magnetic-item"><span></span></a>
                </div>
            </div>
            <!-- End overlay menu toggle button -->

            <!-- Begin overlay menu
            ========================
            * Use class "tt-ol-menu-center" to align menu to center.
            * Use class "tt-ol-menu-count" to enable menu counter.
            -->
            <nav class="tt-overlay-menu tt-ol-menu-center tt-ol-menu-count">
                <div class="tt-ol-menu-holder">
                    <div class="tt-ol-menu-inner tt-wrap">
                        <div class="tt-ol-menu-content">
                            <ul class="tt-ol-menu-list">

                                <li class="tt-ol-submenu-wrap">
                                    <div class="tt-ol-submenu-trigger">
                                        <a href="{{ route('index') }}">Home</a>
                                    </div>
                                </li>

                                <li class="tt-ol-submenu-wrap">
                                    <div class="tt-ol-submenu-trigger">
                                        <a href="#">About</a>
                                        <div class="tt-ol-submenu-caret-wrap">
                                            <div class="tt-ol-submenu-caret magnetic-item"></div>
                                        </div>
                                    </div>
                                    <div class="tt-ol-submenu">
                                        <ul class="tt-ol-submenu-list">
                                            <li><a href="{{ route('about-us') }}">About Us</a></li>
                                            <li><a href="{{ route('about-me') }}">About Me</a></li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="tt-ol-submenu-wrap">
                                    <div class="tt-ol-submenu-trigger">
                                        <a href="{{ route('contact-us') }}">Contact Us</a>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="bg-noise"></div>

            </nav>

        </div>
    </div>
</header>
