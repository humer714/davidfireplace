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
                                        <span class="slider-short-title">We are David Fireplace</span>
                                        <h1 class="slider-title">Properly Clean Fireplaces</h1>
                                        <p class="slider-short-desc">Reliable fireplace cleaning and chimney services to ensure safety.</p>
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
                                        <span class="slider-short-title">Trust Us with Fireplaces</span>
                                        <h1 class="slider-title">Reliable Chimney Services</h1>
                                        <p class="slider-short-desc">Enjoy a safe, efficient fireplace with our expert services.</p>
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
                                        <span class="slider-short-title">Safety in Every Sweep</span>
                                        <h1 class="slider-title">Top Fireplace Services</h1>
                                        <p class="slider-short-desc">Efficient, thorough chimney sweeping and fireplace inspections.</p>
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
                                        <h2 class="title">Top Fireplace <br/>Service Experts</h2>
                                    </div>
                                    <div class="content">
                                        <p class="desc">Our certified technicians provide expert fireplace cleaning, inspections, and repairs to ensure safety.</p>
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
                                        Nationwide 
                                            <br />Fireplace Services
                                        </h2>
                                    </div>
                                    <div class="content">
                                        <p class="desc"> We offer reliable fireplace cleaning and chimney inspections across the country to keep your home safe.</p>
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
                                        <h2 class="title">Skilled Fireplace
                                            <br />Experts 
                                        </h2>
                                    </div>
                                    <div class="content">
                                        <p class="desc">Our skilled team ensures thorough fireplace cleaning and inspections, guaranteeing your fireplace is safe.</p>
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
                                        <h2 class="title">Safe & Secure<br />Fireplace Care</h2>
                                    </div>
                                    <div class="content">
                                        <p class="desc"> We provide safe and secure fireplace cleaning and chimney inspections to ensure your home stays warm.</p>
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
                        <span class="short-title">We are David Fireplace</span>
                        <h2 class="title">Top Tier <span>Fireplace</span> and <span>Chimney Care</span></h2>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-6 col-md-6">
                    <div class="about-info-card style-three">
                        <div class="section-title">
                            <span class="short-title">We are David Fireplace</span>
                            <h2 class="title">Top Tier <span>Fireplace</span> and <span>Chimney Care</span></h2>
                        </div>
                        <div class="about-info-wrapper">
                            <div class="about-info-img">
                                <img src="{{ asset('front/asset2/images/about/about-info-card-3-img.jpg') }}"
                                    alt="image" />
                            </div>
                            <div class="about-info-content">
                                <div class="text">
                                    <p>We provide world-class fireplace cleaning, chimney inspections, and expert repairs.
                                         Our certified technicians ensure your fireplace runs efficiently and safely, keeping your home cozy and secure all year round.
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
                                            <h2 class="title">Nation Wide Service</h2>
                                            <p class="desc">Expert fireplace cleaning and repairs across the country.</p>
                                        </div>
                                    </div>
                                    <div class="icon-card">
                                        <div class="icon">
                                            <img src="{{ asset('front/asset2/images/icon/shipment.png') }}"
                                                alt="map">
                                        </div>
                                        <div class="content">
                                            <h2 class="title">Affordable Fireplace</h2>
                                            <p class="desc">Quality fireplace services at affordable and transparent prices.</p>
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
                                <span class="text">+1 (866) 511-2657</span>
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
                        <h2 class="title">Best <span>Fireplace</span> Service
                            <br> Anywhere
                        </h2>
                    </div>
                </div>
                <div class="col-lg-5 align-self-end">
                    <div class="section-content">
                        <p class="mb-0">We offer the best fireplace cleaning, chimney inspections, and expert repairs to ensure safety and efficiency.
                             Trusted by homeowners for top-quality service and affordable solutions nationwide.</p>
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
                        <h2 class="title">The <span>Fastest Way</span> To <br> Clean & Maintain</h2>
                        <p class="text">This transformation maintains the structure while fitting your fireplace and chimney services.
                             Let me know if you'd like to make any adjustments!
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 icon-card-left-padding">
                    <div class="icon-card">
                        <div class="icon">
                            <img src="{{ asset('front/asset2/images/icon/world-shipping.png') }}" alt="map" />
                        </div>
                        <div class="content">
                            <h2 class="title">Safe Fireplace Maintenance</h2>
                            <p class="desc">Our expert fireplace and chimney cleaning services ensure safety, efficiency,
                                 and peace of mind for your home, preventing potential hazards</p>
                        </div>
                    </div>
                    <div class="icon-card">
                        <div class="icon">
                            <img src="{{ asset('front/asset2/images/icon/info-tracking.png') }}" alt="map" />
                        </div>
                        <div class="content">
                            <h2 class="title">Detailed Fireplace Inspection Reports</h2>
                            <p class="desc">Get comprehensive reports for fireplace cleaning and inspections, 
                                keeping you informed about the safety and condition of your fireplace system.</p>
                        </div>
                    </div>
                    <div class="icon-card">
                        <div class="icon">
                            <img src="{{ asset('front/asset2/images/icon/thumbs.png') }}" alt="map" />
                        </div>
                        <div class="content">
                            <h2 class="title">Affordable Fireplace Services</h2>
                            <p class="desc">We offer affordable and transparent pricing for fireplace cleaning, inspections,
                                 and repairs, ensuring high-quality services that fit your budget.</p>
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
                                <span class="text">+1 (866) 511-2657</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 order-lg-2">
                    <!-- Accordion Start -->
                    <div class="accordion-wrapper style-two">
                        <div class="section-title mb-50">
                            <span class="short-title">Frequently Asked Questions</span>
                            <h2 class="title text-white">The <span>Safest </span> and <span>Trusted</span>
                                <br />Fireplace Services
                            </h2>
                        </div>

                        <div class="accordion-box-wrapper" id="FAQStyle1FAQ">
                            <!-- Single Accordion Start -->
                            <div class="accordion-list-item">
                                <div id="headingOne">
                                    <div class="accordion-head" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        <h3 class="accordion-title">Why David Fireplace is the Best Choice?</h3>
                                    </div>
                                </div>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#FAQStyle1FAQ">
                                    <div class="accordion-item-body">
                                        <p>David Fireplace Cleaning is known for its expert services, affordable pricing, and commitment to safety.
                                             Our skilled technicians ensure your fireplace and chimney function efficiently, making us a top choice. </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Accordion End -->
                            <!-- Single Accordion Start -->
                            <div class="accordion-list-item">
                                <div id="headingTwo">
                                    <div class="accordion-head collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <h3 class="accordion-title">What Are the Pricing Plans for Services?</h3>
                                    </div>
                                </div>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#FAQStyle1FAQ">
                                    <div class="accordion-item-body">
                                        <p>We offer affordable pricing for all our fireplace and chimney services, including cleaning, inspections,
                                             and repairs. Get transparent quotes based on your needs, with no hidden fees or surprises. </p>
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
                                        <h3 class="accordion-title">How to Get a Refund if Service Fails?</h3>
                                    </div>
                                </div>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#FAQStyle1FAQ">
                                    <div class="accordion-item-body">
                                        <p>If any of our fireplace services do not meet your expectations,
                                             we offer a clear refund process. Your satisfaction is our priority, and we’ll resolve any issues promptly. </p>
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
                                        <h3 class="accordion-title">When Service Is Complete, Close the Hearth?</h3>
                                        <div class="icon"></div>
                                    </div>
                                </div>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#FAQStyle1FAQ">
                                    <div class="accordion-item-body">
                                        <p>Once your fireplace cleaning or inspection is done, we ensure everything is secure and safely closed.
                                             Our technicians make sure your fireplace is safe to use before finishing the service. </p>
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
    <!-- <div class="portfolio-area style-1">
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
    </div> -->
    <!-- Portfolio Area End -->

    <!-- Testimonial Area Start -->
    <div class="testimonial-area style-3 background-gray overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center align-items-center mb-50">
                        <span class="short-title">Testimonials</span>
                        <h2 class="title">What <span>Clients</span> Say <br /> About <span>Us</span></h2>
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
                                    I hired David Fireplace Cleaning for chimney sweeping and maintenance. They provided excellent service, detailed inspection,
                                     and fixed a chimney crack. Professional, courteous, and reliable—highly recommended for fireplace and chimney services!
                                    </p>
                                </div>
                                <div class="meta-user">
                                    <div class="user-info">
                                        <div class="image">
                                            <img src="{{ asset('front/asset2/images/testimonial/closse-up.png') }}"
                                                alt="user" />
                                        </div>
                                        <div class="info">
                                            <h2>Lorinzo Adkins</h2>
                                            <p>Male</p>
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
                                    Once your fireplace cleaning or inspection is done,
                                     we ensure everything is secure and safely closed.
                                     Our technicians make sure your fireplace is safe to use before finishing the service.
                                    </p>
                                </div>
                                <div class="meta-user">
                                    <div class="user-info">
                                        <div class="image">
                                            <img src="{{ asset('front/asset2/images/testimonial/pleasant-meta.png') }}"
                                                alt="user" />
                                        </div>
                                        <div class="info">
                                            <h2>Shellie Sandberg</h2>
                                            <p>Female</p>
                                        </div>
                                    </div>
                                    <div class="icon">
                                        <img src="{{ asset('front/asset2/images/icon/testimonial-quotation.png') }}" alt="testimonial" />
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
                                    Fast, reliable, and thorough service! David Fireplace Cleaning cleaned our gas fireplace and conducted a safety inspection.
                                     Great communication and honest recommendations. Definitely trust them with chimney and fireplace needs.
                                    </p>
                                </div>
                                <div class="meta-user">
                                    <div class="user-info">
                                        <div class="image">
                                            <img src="{{ asset('front/asset2/images/testimonial/meta-user.png') }}"
                                                alt="user" />
                                        </div>
                                        <div class="info">
                                            <h2>Russell Martin</h2>
                                            <p>Male</p>
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
