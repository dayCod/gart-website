<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="#" class="app-brand-link">
            <img src="{{ asset('gart/signature-black.png') }}" width="85" alt="">
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Dashboard</span>
        </li>

        <li class="menu-item @if(Route::is('admin.dashboard.index')) active @endif">
            <a href="{{ route('admin.dashboard.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-grid-alt"></i>
                <div data-i18n="Dashboard">Dashboard</div>
            </a>
        </li>

        <li class="menu-item @if(Route::is('admin.dashboard.profile.view')) active @endif">
            <a href="{{ route('admin.dashboard.profile.view') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Profil Saya">My Profile</div>
            </a>
        </li>

        <li class="menu-item @if(Route::is('admin.dashboard.webvisitor.*')) active @endif">
            <a href="{{ route('admin.dashboard.webvisitor.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user-voice"></i>
                <div data-i18n="Profil Saya">Web Visitor</div>
            </a>
        </li>

        <li class="menu-item @if(Route::is('admin.dashboard.waclick.*')) active @endif">
            <a href="{{ route('admin.dashboard.waclick.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxl-whatsapp"></i>
                <div data-i18n="Profil Saya">Whatsapp Click</div>
            </a>
        </li>

        <li class="menu-item @if(Route::is('admin.dashboard.customermessage.*')) active @endif">
            <a href="{{ route('admin.dashboard.customermessage.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-message-dots"></i>
                <div data-i18n="Profil Saya">Customer Message</div>
            </a>
        </li>

        <!-- Gart Studio -->
        <li class="menu-item @if(Route::is('admin.gart.*')) active open @endif">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-camera-movie"></i>
                <div data-i18n="Users">Gart Studio</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item @if(Route::is('admin.gart.category.*')) active @endif">
                    <a href="{{ route('admin.gart.category.index') }}" class="menu-link">
                        <div data-i18n="Category">Category</div>
                    </a>
                </li>

                <li class="menu-item @if(Route::is('admin.gart.gallery.*')) active @endif">
                    <a href="{{ route('admin.gart.gallery.index') }}" class="menu-link">
                        <div data-i18n="Gallery">Gallery</div>
                    </a>
                </li>

                <li class="menu-item @if(Route::is('admin.gart.service.*')) active @endif">
                    <a href="{{ route('admin.gart.service.index') }}" class="menu-link">
                        <div data-i18n="Service">Service</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Reise Stories -->
        <li class="menu-item @if(Route::is('admin.reise.*')) active open @endif">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-camera"></i>
                <div data-i18n="Users">Reise Stories</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item @if(Route::is('admin.reise.category.*')) active @endif">
                    <a href="{{ route('admin.reise.category.index') }}" class="menu-link">
                        <div data-i18n="Category">Category</div>
                    </a>
                </li>

                <li class="menu-item @if(Route::is('admin.reise.gallery.*')) active @endif">
                    <a href="{{ route('admin.reise.gallery.index') }}" class="menu-link">
                        <div data-i18n="Gallery">Gallery</div>
                    </a>
                </li>

                <li class="menu-item @if(Route::is('admin.reise.service.*')) active @endif">
                    <a href="{{ route('admin.reise.service.index') }}" class="menu-link">
                        <div data-i18n="Service">Service</div>
                    </a>
                </li>

            </ul>
        </li>
    </ul>
</aside>
<!-- / Menu -->
