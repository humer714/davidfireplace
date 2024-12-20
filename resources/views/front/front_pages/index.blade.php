@extends('front.layout_pages.app')
@section('meta_title')
    {{ __('Home') }}
@endsection
@section('meta_tags')
    {{ __('Home, proschimneyclening') }}
@endsection
@section('meta_description')
    {{ __('Pros Chimney Cleaning is the #1 choice for all your Chimney and air duct needs. Our expert techs have been repairing and cleaning chimneys throughout Houston') }}
@endsection


@section('content')
    <!-- Slider Area Start !-->
    <div class="slider-area style-2">
        <div class="slider-wrapper">
            <!-- single slider start -->
            <div class="single-slider-wrapper">
                <div class="single-slider"
                    style="background-image: url('{{ asset('front/asset2/images/slider/slider-1.jpg') }}')">
                    <div class="slider-overlay"></div>
                    <div class="container h-100 align-self-center">
                        <div class="slider-shape-top-triangle"></div>
                        <div class="slider-shape-bottom-left"></div>
                        <div class="row h-100">
                            <div class="col-md-5 align-self-center order-2 order-md-1">
                                <div class="slider-content-wrapper">
                                    <div class="slider-content">
                                        <span class="slider-short-title">We are Transco</span>
                                        <h1 class="slider-title">Safely Get Anything</h1>
                                        <p class="slider-short-desc">Duis aute irure dolor in reprehenderit in voluptate
                                            velit dolore eu fugiat nulla pariatur. </p>
                                        <div class="slider-btn-wrapper">
                                            <a href="{{ route('services') }}" class="theme-btn">Read More<i
                                                    class="fa-solid fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 align-self-end order-1 order-md-2 d-none d-md-block">
                                <div class="slider-image">
                                    <img src="{{ asset('front/asset2/images/slider/slider-2-feature.png') }}"
                                        alt="feature image" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single slider end -->
            <!-- single slider start -->
            <div class="single-slider-wrapper">
                <div class="single-slider"
                    style="background-image: url('{{ asset('front/asset2/images/slider/slider-2.jpg') }}')">
                    <div class="slider-overlay"></div>
                    <div class="container h-100 align-self-center">
                        <div class="slider-shape-top-triangle"></div>
                        <div class="slider-shape-bottom-left"></div>
                        <div class="row h-100">
                            <div class="col-md-5 align-self-center order-2 order-md-1">
                                <div class="slider-content-wrapper">
                                    <div class="slider-content">
                                        <span class="slider-short-title">Journey with Transco</span>
                                        <h1 class="slider-title">Trusted Transport</h1>
                                        <p class="slider-short-desc">Experience hassle-free journeys with our transport
                                            solutions that prioritize your comfort.</p>
                                        <div class="slider-btn-wrapper">
                                            <a href="{{ route('services') }}" class="theme-btn">Read More<i
                                                    class="fa-solid fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 align-self-end order-1 order-md-2 d-none d-md-block">
                                <div class="slider-image">
                                    <img src="{{ asset('front/asset2/images/slider/slider-2-feature-2.png') }}"
                                        alt="feature image" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single slider end -->
            <!-- single slider start -->
            <div class="single-slider-wrapper">
                <div class="single-slider"
                    style="background-image: url('{{ asset('front/asset2/images/slider/slider-3.jpg') }}')">
                    <div class="slider-overlay"></div>
                    <div class="container h-100 align-self-center">
                        <div class="slider-shape-top-triangle"></div>
                        <div class="slider-shape-bottom-left"></div>
                        <div class="row h-100">
                            <div class="col-md-5 align-self-center order-2 order-md-1">
                                <div class="slider-content-wrapper">
                                    <div class="slider-content">
                                        <span class="slider-short-title">Efficiency in Motion</span>
                                        <h1 class="slider-title">Largest Transport</h1>
                                        <p class="slider-short-desc">Our transport services timely and dependable delivery
                                            of your packages.</p>
                                        <div class="slider-btn-wrapper">
                                            <a href="{{ route('services') }}" class="theme-btn">Read More<i
                                                    class="fa-solid fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 align-self-end order-1 order-md-2 d-none d-md-block">
                                <div class="slider-image">
                                    <img src="{{ asset('front/asset2/images/slider/slider-2-feature-3.png') }}"
                                        alt="feature image" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single slider end -->
        </div>
        <!-- Social Profile Start -->
        <div class="container social-share-wrapper">
            <div class="social-share">
                <a href="#">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="#">
                    <i class="fab fa-yelp"></i>
                </a>
                <a href="#">
                    <i class="fab fa-yahoo"></i>
                </a>
            </div>
        </div>
        <!-- Social Profile End -->
    </div>

    <!-- Slider Area End !-->

    <!-- Feature Area Start-->
    <div class="feature-area style-1">
        <div class="container">
            <div class="feature-area-wrapper">
                <div class="row">
                    <div class="col-md-6 col-lg-3 p-lg-0">
                        <!-- single info-card start -->
                        <div class="info-card ">
                            <div class="divider"></div>
                            <div class="info-card-inner">
                                <div class="content-wrapper">
                                    <div class="title-wrapper">
                                        <div class="icon">
                                            <img src="{{ asset('front/asset2/images/icon/support.png') }}"
                                                alt="support" />
                                        </div>
                                        <h2 class="title">Premium<br />Logistics Support</h2>
                                    </div>
                                    <div class="content">
                                        <p class="desc">Knim ad minim veniam, quis nostrud exercitation ullamco laboris
                                            nisi ut aliquip ex ea commodo consequat.</p>
                                        <div class="read-more">
                                            <a href="{{ route('services') }}">
                                                <span class="icon">
                                                    <i class="fa-solid fa-angle-right"></i>
                                                </span>
                                                read more
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single info-card End-->
                    </div>
                    <div class="col-md-6 col-lg-3 p-lg-0">
                        <!-- single info-card start -->
                        <div class="info-card ">
                            <div class="divider"></div>
                            <div class="info-card-inner">
                                <div class="content-wrapper">
                                    <div class="title-wrapper">
                                        <div class="icon">
                                            <img src="{{ asset('front/asset2/images/icon/world-distribution.png') }}"
                                                alt="support" />
                                        </div>
                                        <h2 class="title">
                                            Worldwide
                                            <br />Product Delivery
                                        </h2>
                                    </div>
                                    <div class="content">
                                        <p class="desc"> Cnim ad minim veniam, quis nostrud exercitation ullamco laboris
                                            nisi ut aliquip ex ea commodo ponsequat.</p>
                                        <div class="read-more">
                                            <a href="{{ route('services') }}">
                                                <span class="icon">
                                                    <i class="fa-solid fa-angle-right"></i>
                                                </span>
                                                read more
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single info-card End-->
                    </div>
                    <div class="col-md-6 col-lg-3 p-lg-0">
                        <!-- single info-card start -->
                        <div class="info-card ">
                            <div class="divider"></div>
                            <div class="info-card-inner">
                                <div class="content-wrapper">
                                    <div class="title-wrapper">
                                        <div class="icon">
                                            <img src="{{ asset('front/asset2/images/icon/courier.png') }}"
                                                alt="support" />
                                        </div>
                                        <h2 class="title">Highly Skilled
                                            <br />Logistics Parnters
                                        </h2>
                                    </div>
                                    <div class="content">
                                        <p class="desc"> Pnim ad minim veniam, quis nostrud exercitation ullamco laboris
                                            nisi ut aliquip ex ea commodo jonsequat.</p>
                                        <div class="read-more">
                                            <a href="{{ route('services') }}">
                                                <span class="icon">
                                                    <i class="fa-solid fa-angle-right"></i>
                                                </span>
                                                read more
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single info-card End-->
                    </div>
                    <div class="col-md-6 col-lg-3 p-lg-0">
                        <!-- single info-card start -->
                        <div class="info-card ">
                            <div class="divider"></div>
                            <div class="info-card-inner">
                                <div class="content-wrapper">
                                    <div class="title-wrapper">
                                        <div class="icon">
                                            <img src="{{ asset('front/asset2/images/icon/unboxing.png') }}"
                                                alt="support" />
                                        </div>
                                        <h2 class="title">Safe & Secure<br />Product Delivery</h2>
                                    </div>
                                    <div class="content">
                                        <p class="desc"> Qnim ad minim veniam, quis nostrud exercitation ullamco laboris
                                            nisi ut aliquip ex ea commodo aonsequat.</p>
                                        <div class="read-more">
                                            <a href="{{ route('services') }}">
                                                <span class="icon">
                                                    <i class="fa-solid fa-angle-right"></i>
                                                </span>
                                                read more
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single info-card End-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Area End !-->
    <!-- About Us Area Start !-->
    <div class="about-us-area style-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title another-title">
                        <span class="short-title">We are Transico</span>
                        <h2 class="title">World Class <span>Logistic</span> and <span>Transportation</span></h2>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-6 col-md-6">
                    <div class="about-info-card style-three">
                        <div class="section-title">
                            <span class="short-title">We are Transico</span>
                            <h2 class="title">World Class <span>Logistic</span> and <span>Transportation</span></h2>
                        </div>
                        <div class="about-info-wrapper">
                            <div class="about-info-img">
                                <img src="{{ asset('front/asset2/images/about/about-info-card-3-img.jpg') }}"
                                    alt="image" />
                            </div>
                            <div class="about-info-content">
                                <div class="text">
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiatmnis iste natus error sit voluptatem acycu sa mnis iste natus error sit volup.
                                    </p>
                                </div>
                                <div class="skill-progressbar-wrapper">
                                    <div class="skill-progressbar">
                                        <div class="progress-inner" data-percentage="90%">
                                            <h4 class="progress-inner-item">
                                                <span class="skill-title">Support</span>
                                                <span class="progressbar-number">
                                                    <span class="progress-number-count">
                                                        <span class="progress-percent"></span>
                                                    </span>
                                                </span>
                                            </h4>
                                            <div class="progress-content-outter">
                                                <div class="progress-content"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="skill-progressbar">
                                        <div class="progress-inner" data-percentage="80%">
                                            <h4 class="progress-inner-item">
                                                <span class="skill-title">Service</span>
                                                <span class="progressbar-number">
                                                    <span class="progress-number-count">
                                                        <span class="progress-percent"></span>
                                                    </span>
                                                </span>
                                            </h4>
                                            <div class="progress-content-outter">
                                                <div class="progress-content"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="icon-card-wrapper">
                                    <div class="icon-card">
                                        <div class="icon">
                                            <img src="{{ asset('front/asset2/images/icon/world-shipping.png') }}"
                                                alt="map">
                                        </div>
                                        <div class="content">
                                            <h2 class="title">World Wide Service</h2>
                                            <p class="desc">Pid voluptatem accusa neul nijer majhe pariatur.</p>
                                        </div>
                                    </div>
                                    <div class="icon-card">
                                        <div class="icon">
                                            <img src="{{ asset('front/asset2/images/icon/shipment.png') }}"
                                                alt="map">
                                        </div>
                                        <div class="content">
                                            <h2 class="title">Resonable Pricing</h2>
                                            <p class="desc">Dit voluptatem accusa neul nijer majhe wariatue.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-wrapper">
                                    <a href="{{ route('about_us') }}" class="theme-btn">Read More<i
                                            class="fa-solid fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 align-self-end">
                    <div class="promotional-banner-widget">
                        <div class="promotional-bannar-img">
                            <img class="tilt-animate"
                                src="{{ asset('front/asset2/images/section-bg/promotional-banner.jpg') }}"
                                alt="image" />
                        </div>
                        <div class="promotional-bananer-content">
                            <div class="icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="content">
                                <span>Call Us Now</span>
                                <span class="text">+123 - 456 - 7890</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Area End !-->
    <!-- Service Area Start !-->
    <div class="service-area style-2 background-gray">
        <div class="container">
            <div class="row mb-70">
                <div class="col-lg-7">
                    <div class="section-title">
                        <span class="short-title">Our Service</span>
                        <h2 class="title">Best <span>Logistic</span> Service
                            <br> Anywhere
                        </h2>
                    </div>
                </div>
                <div class="col-lg-5 align-self-end">
                    <div class="section-content">
                        <p class="mb-0">Muis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                            fugiatmnis iste na minim veniam, quis nostrud exercita tion ullamco laboris nisi ut aliquip ex
                            ea dommode</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($services as $key => $item)
                    @if ($item->status == 1 && $item->is_active == 1)
                        <div class="col-12 col-md-6">
                            <div class="info-card style-three">
                                <div class="image-wrapper">
                                    <img src="{{ $item->image ?? asset('front/asset2/images/project/p-1.jpg') }}"
                                        alt="service" />
                                </div>
                                <div class="content-wrapper">
                                    <div class="content-inner">
                                        <div class="title-wrapper">
                                            <h2 class="title">{{ $item->title ?? '' }}</h2>
                                            <div class="icon">
                                                <img src=" {{ $item->icon_image ?? asset('front/asset2/images/icon/plane-air.png') }}"
                                                    alt="" />
                                            </div>
                                        </div>
                                        <div class="content-area">
                                            <div class="content">
                                                <p class="desc">{{ $item->excerpt ?? '' }}</p>
                                                <div class="read-more">
                                                    <a href="{{ route('service_detail', $item->slug) }}">
                                                        <span class="icon">
                                                            <i class="fa-solid fa-chevron-right"></i>
                                                        </span>
                                                        read more
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <!-- Service Area End !-->

    <!-- Why Choose Us Area Start -->
    <div class="why-choose-us-area style-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title">
                        <span class="short-title">Why Choose Us</span>
                        <h2 class="title">The <span>Fastest Way</span> To <br> Send & Recieve </h2>
                        <p class="text">Wuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                            fugiatmnis ist met, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labory
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 icon-card-left-padding">
                    <div class="icon-card">
                        <div class="icon">
                            <img src="{{ asset('front/asset2/images/icon/world-shipping.png') }}" alt="map" />
                        </div>
                        <div class="content">
                            <h2 class="title">Secure Transportation</h2>
                            <p class="desc">Pmni ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliqu
                                ore et dolore magna aliqua. Ut enim ad minim yenie</p>
                        </div>
                    </div>
                    <div class="icon-card">
                        <div class="icon">
                            <img src="{{ asset('front/asset2/images/icon/info-tracking.png') }}" alt="map" />
                        </div>
                        <div class="content">
                            <h2 class="title">Online Realtime Tracking</h2>
                            <p class="desc">Hmin ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliqu
                                ore et dolore magna aliqua. Ut enim ad minim denis</p>
                        </div>
                    </div>
                    <div class="icon-card">
                        <div class="icon">
                            <img src="{{ asset('front/asset2/images/icon/thumbs.png') }}" alt="map" />
                        </div>
                        <div class="content">
                            <h2 class="title">Resonable Pricing</h2>
                            <p class="desc">Qmin ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliqu
                                ore et dolore magna aliqua. Ut enim ad minim neniq</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Us Area End -->
    <!-- FAQ Area Start -->
    <div class="faq-area style-1 bg-dark-blue position-relative">
        <div class="triangle-image-shape-wrapper">
            <div class="triangle-image-shape">
                <img src="{{ asset('front/asset2/images/section-bg/triangle-image-shape.jpg') }}" alt="shape image" />
            </div>
            <div class="triangle-image-shape-border">
                <img src="{{ asset('front/asset2/images/shape/clip-path-border.png') }}" alt="shape image" />
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 align-self-end order-2 order-md-1 order-sm-1 order-xs-1">
                    <div class="promotional-banner-widget style-two">
                        <div class="title-wrapper">
                            <h3 class="title">Looking for some different information?</h3>
                        </div>
                        <div class="promotional-bananer-content">
                            <div class="icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="content">
                                <span>Call Us Now</span>
                                <span class="text">+123 456 7890</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 order-lg-2">
                    <!-- Accordion Start -->
                    <div class="accordion-wrapper style-two">
                        <div class="section-title mb-50">
                            <span class="short-title">Frequently Asked Questions</span>
                            <h2 class="title text-white">The <span>Fastest </span> and <span>Reliable</span>
                                <br />Courier Solutions
                            </h2>
                        </div>

                        <div class="accordion-box-wrapper" id="FAQStyle1FAQ">
                            <!-- Single Accordion Start -->
                            <div class="accordion-list-item">
                                <div id="headingOne">
                                    <div class="accordion-head" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        <h3 class="accordion-title">Why Transco is so popular service?</h3>
                                    </div>
                                </div>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#FAQStyle1FAQ">
                                    <div class="accordion-item-body">
                                        <p>Pnim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliqu ore
                                            et dolore magna aliqua. Ut enim ad minim ven mod tempor incidid unt ut labore et
                                            dolore magna dliqua. </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Accordion End -->
                            <!-- Single Accordion Start -->
                            <div class="accordion-list-item">
                                <div id="headingTwo">
                                    <div class="accordion-head collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <h3 class="accordion-title">What is the pricing plans for transport?</h3>
                                    </div>
                                </div>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#FAQStyle1FAQ">
                                    <div class="accordion-item-body">
                                        <p>Onim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliqu ore
                                            et dolore magna aliqua. Ut enim ad minim ven mod tempor incidid unt ut labore et
                                            dolore magna eliqus. </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Accordion End -->
                            <!-- Single Accordion Start -->
                            <div class="accordion-list-item">
                                <div id="headingThree">
                                    <div class="accordion-head collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <h3 class="accordion-title">How to get a refund if curier fails?</h3>
                                    </div>
                                </div>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#FAQStyle1FAQ">
                                    <div class="accordion-item-body">
                                        <p>Enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliqu ore
                                            et dolore magna aliqua. Ut enim ad minim ven mod tempor incidid unt ut labore et
                                            dolore magna Uliqua. </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Accordion End -->
                            <!-- Single Accordion Start -->
                            <div class="accordion-list-item">
                                <div id="headingFour">
                                    <div class="accordion-head collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        <h3 class="accordion-title">When the musics over turn off the light?</h3>
                                        <div class="icon"></div>
                                    </div>
                                </div>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#FAQStyle1FAQ">
                                    <div class="accordion-item-body">
                                        <p>Anim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliqu ore
                                            et dolore magna aliqua. Ut enim ad minim ven mod tempor incidid unt ut labore et
                                            dolore magna aliqua. </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Accordion End -->
                        </div>
                    </div>
                    <!-- Accordion End -->
                </div>
            </div>
        </div>
    </div>
    <!-- FAQ Area End -->

    <!-- Portfolio Area Start -->
    <div class="portfolio-area style-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center align-items-center mb-70">
                        <span class="short-title">Our Projects</span>
                        <h2 class="title">We Find the <span>Destination</span><br />for Your <span>Product</span></h2>
                        <div class="divider"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($projects as $key => $item)
                    @if ($item->status == 1 && $item->is_active == 1)
                        <div class="col-lg-4 col-sm-6 col-xs-12">
                            <div class="portfolio-style-two">
                                <div class="image">
                                    <img src="{{ $item->image ?? asset('front/asset2/images/project/03_home_portfolio_1.jpg') }}"
                                        alt="portfolio one">
                                    <div class="content-wrapper">
                                        <div class="content">
                                            <div class="content-inner">
                                                <span class="sub-title">{{ $item->category ?? '' }}</span>
                                                <h3 class="title">{{ $item->title ?? '' }}</h3>
                                            </div>
                                            <div class="btn">
                                                <a href="{{ route('project_detail', $item->slug) }}"><i
                                                        class="fa-solid fa-up-right-from-square"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
    </div>
    <!-- Portfolio Area End -->

    <!-- Testimonial Area Start -->
    <div class="testimonial-area style-3 background-gray overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center align-items-center mb-50">
                        <span class="short-title">Testimonials</span>
                        <h2 class="title">What <span>People</span> Say About <br /> Our<span> Service</span></h2>
                        <div class="divider"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="testimonial-slider-wrapper has-backgorund-slider" id="home3_testimonial">
                    <div>
                        <div class="testimonial-card">
                            <div class="content-wrapper">
                                <div class="content">
                                    <p class="text">
                                        Kuis aute irure dolor in reprehenderit in vol uptate velit esse cillum
                                        dolore egoiu fugiat nulla pariatur. Except eur
                                        sint occaecat vadro maser akash amar cupi datat non proident, sunt in xulpd.
                                    </p>
                                </div>
                                <div class="meta-user">
                                    <div class="user-info">
                                        <div class="image">
                                            <img src="{{ asset('front/asset2/images/testimonial/closse-up.png') }}"
                                                alt="user" />
                                        </div>
                                        <div class="info">
                                            <h2>Mike Peter</h2>
                                            <p>Journalist</p>
                                        </div>
                                    </div>
                                    <div class="icon">
                                        <img src="{{ asset('front/asset2/images/icon/testimonial-quotation.png') }}"
                                            alt="testimonial" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="testimonial-card">
                            <div class="content-wrapper">
                                <div class="content">
                                    <p class="text">
                                        Wuis aute irure dolor in reprehenderit in vol uptate velit esse cillum
                                        dolore egoiu fugiat nulla pariatur. Except eur
                                        sint occaecat vadro maser akash amar cupi datat non proident, sunt in qulpe.
                                    </p>
                                </div>
                                <div class="meta-user">
                                    <div class="user-info">
                                        <div class="image">
                                            <img src="{{ asset('front/asset2/images/testimonial/pleasant-meta.png') }}"
                                                alt="user" />
                                        </div>
                                        <div class="info">
                                            <h2>Nayna Eva</h2>
                                            <p>Traveller</p>
                                        </div>
                                    </div>
                                    <div class="icon">
                                        <img src="{{ asset('front/asset2/images/icon/testimonial-quotation.png') }}"
                                            alt="testimonial" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="testimonial-card">
                            <div class="content-wrapper">
                                <div class="content">
                                    <p class="text">
                                        Ruis aute irure dolor in reprehenderit in vol uptate velit esse cillum
                                        dolore egoiu fugiat nulla pariatur. Except eur
                                        sint occaecat vadro maser akash amar cupi datat non proident, sunt in culpa.
                                    </p>
                                </div>
                                <div class="meta-user">
                                    <div class="user-info">
                                        <div class="image">
                                            <img src="{{ asset('front/asset2/images/testimonial/meta-user.png') }}"
                                                alt="user" />
                                        </div>
                                        <div class="info">
                                            <h2>Jewel Khan</h2>
                                            <p>Traveller</p>
                                        </div>
                                    </div>
                                    <div class="icon">
                                        <img src="{{ asset('front/asset2/mages/icon/testimonial-quotation.png') }}"
                                            alt="testimonial" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Area End -->
    <!-- Latest Posts Area Start -->
    <div class="latest-posts-area style-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center align-items-center mb-70">
                        <span class="short-title">Our Blog</span>
                        <h2 class="title">Latest <span>News</span> & <span> Updates</span> <br /> About Us</h2>
                        <div class="divider"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($blogs as $item)
                    @if ($item->status == 1 && $item->is_active == 1)
                        <div class="col-12 col-md-6 col-lg-4">
                            <!-- Single-post-card start -->
                            <div class="post-card style-four">
                                <div class="image">
                                    <img src="{{ $item->image ?? asset('front/asset2/images/blog/03_home_post_2.jpg') }}"
                                        alt="post-1">
                                </div>
                                <div class="content">
                                    <div class="post-meta">
                                        <span><a
                                                href="{{ route('blog_detail', $item->slug) }}">{{ $item->category ?? '' }}</a></span>
                                        <span
                                            class="date">{{ $item->created_at ? $item->created_at->format('d F, Y') : '' }}</span>
                                    </div>
                                    <h2 class="title">
                                        <a href="{{ route('blog_detail', $item->slug) }}">{{ $item->title ?? '' }}</a>
                                    </h2>
                                </div>
                            </div>
                            <!-- Single-post-card End-->
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <!-- Latest Posts Area End -->
@endsection
