<!-- Preloader Start !-->
{{-- <div id="preloader">
    <div id="preloader-status">
        <div class="loading-container">
            <div class="ball1"></div>
            <div class="ball2"></div>
            <div class="ball3"></div>
            <div class="ball4"></div>
        </div>
    </div>
</div> --}}
<!-- Preloader End !-->

<!-- Header Start !-->
<header class="header-area style-three">

    <!-- Header Nav Menu Start -->
    <div class="header-menu-area sticky-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-6 d-flex align-items-center">
                    <div class="logo">
                        <a href="{{ route('home') }}" class="standard-logo">
                            <img src="{{ asset('front/asset2/images/logo/logo-2.png') }}" alt="logo" />
                        </a>
                        <a href="{{ route('home') }}" class="sticky-logo">
                            <img src="{{ asset('front/asset2/images/logo/logo-2.png') }}" alt="logo" />
                        </a>
                        <a href="{{ route('home') }}" class="retina-logo">
                            <img src="{{ asset('front/asset2/images/logo/logo-2.png') }}" alt="logo" />
                        </a>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-6 col-6 d-flex align-items-center justify-content-end">
                    <div class="menu d-inline-block">
                        <nav id="main-menu" class="main-menu">
                            <ul>
                                <li>
                                    <a href="{{ route('home') }}">Home</a>
                                </li>
                                <li>
                                    <a href="{{ route('about_us') }}">About</a>
                                </li>

                                <li>
                                    <a href="{{ route('services') }}">Services</a>
                                </li>
                                <li>
                                    <a href="{{ route('projects') }}">Projects</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}">Contact Us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('locations') }}">Locations</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('blogs') }}">Blogs</a>
                                </li>

                            </ul>
                        </nav>
                    </div>
  
                    <!-- Mobile Menu Toggle Button Start !-->
                    <div class="mobile-menu-bar d-lg-none text-end">
                        <a href="#" class="mobile-menu-toggle-btn"><i class="fal fa-bars"></i></a>
                    </div>
                    <!-- Mobile Menu Toggle Button End !-->
                </div>
            </div>
        </div>
    </div>
    <!-- Header Nav Menu End -->
</header>
<!-- Header End !-->
<!-- Menu Sidebar Section Start -->
<div class="menu-sidebar-area">
    <div class="menu-sidebar-wrapper">
        <div class="menu-sidebar-close">
            <button class="menu-sidebar-close-btn" id="menu_sidebar_close_btn">
                <i class="fal fa-times"></i>
            </button>
        </div>
        <div class="menu-sidebar-content">
            <div class="menu-sidebar-logo">
                <a href="{{ route('home') }}">
                    <img src="images/logo/logo-2.png" alt="logo" />
                </a>
            </div>
            <div class="mobile-nav-menu"></div>
         
        </div>
    </div>
</div>
<!-- Menu Sidebar Section Start -->
