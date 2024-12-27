@extends('front.layout_pages.app')


@section('meta_title')
    {{ __('About Us') }}
@endsection
@section('meta_tags')
    {{ __('About Us, proschimneyclening') }}
@endsection
@section('meta_description')
    {{ __('Pros Chimney Cleaning is committed to quality customer service and practical, repeatable results in chimney sweeping, air duct cleaning.') }}
@endsection

@section('content')
    <!-- Page Header Start !-->
    <div class="page-breadcrumb-area page-bg"
        style="background-image: url('{{ asset('front/asset2/images/section-bg/transportation-logistics.jpg') }}')">
        <div class="page-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <div class="page-heading">
                            <h3 class="page-title">About Us</h3>
                        </div>
                        <div class="breadcrumb-list">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="active">About Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End !-->


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
                                    <p>We provide world-class fireplace cleaning, chimney inspections, 
                                        and expert repairs. Our certified technicians ensure your fireplace runs efficiently and safely, keeping your home cozy and secure all year round.
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
                                            <img src="{{ asset('front/asset2/images/icon/shipment.png') }}" alt="map">
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
                                src="{{ asset('front/asset2/images/section-bg/promotional-banner.jpg') }}" alt="image" />
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

    <!-- Counter Up Area Start -->
    <div class="counter-up-area style-3 position-relative background-blue"
        style="background-image: url('{{ asset('front/asset2/images/section-bg/counter-bg.jpg') }}')">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="counter-card">
                        <div class="counter-item">
                            <div class="counter-title">
                                <h1 class="number">
                                    <span class="counter">1</span>
                                </h1>
                                <p class="title">United States</p>
                            </div>
                            <div class="counter-content">
                                <p class="text">Offering comprehensive fireplace services across the entire country</p>
                            </div>

                        </div>
                        <div class="counter-item">
                            <div class="counter-title">
                                <h1 class="number">
                                    <span class="counter">1700</span>
                                </h1>
                                <p class="title">United States Cites</p>
                            </div>
                            <div class="counter-content">
                                <p class="text">Providing fireplace services in 1700 locations of USA </p>
                            </div>
                        </div>
                        <div class="counter-item">
                            <div class="counter-title">
                                <h1 class="number">
                                    <span class="counter">5000</span> <span>+</span>
                                </h1>
                                <p class="title">People Engaged</p>
                            </div>
                            <div class="counter-content">
                                <p class="text">Providing expert fireplace services to numerous satisfied clients </p>
                            </div>
                        </div>
                        <div class="counter-item">
                            <div class="counter-title">
                                <h1 class="number">
                                    <span class="counter">10</span> <span>M</span>
                                </h1>
                                <p class="title">Order Delivered</p>
                            </div>
                            <div class="counter-content">
                                <p class="text">Successfully completing fireplace services with customer satisfaction</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter Up Area End -->
    <!-- FAQ Area Start -->
    <div class="faq-area style-3">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span class="short-title">Frequently Asked Questions</span>
                        <h2 class="title">The <span>Reliable </span> & <span>Efficient  </span> <br>Fireplace Services
                        </h2>
                        <p class="text mt-30">David Fireplace Cleaning offers reliable and efficient fireplace and chimney services,
                             including cleaning, maintenance, repair, and safety inspections. Our certified experts ensure your fireplace operates safely and efficiently, 
                             providing peace of mind and preventing potential hazards.
                        </p>
                    </div>

                    <nav>
                        <ul class="nav-tab mb-30" id="nav-tab" role="tablist">
                            <li class="active" id="nav-tab1" data-bs-toggle="tab" data-bs-target="#nav-tab1_item"
                                role="tab" aria-controls="nav-tab1_item" aria-selected="true">Our Mission</li>
                            <li class="" id="nav-tab2" data-bs-toggle="tab" data-bs-target="#nav-tab2_item"
                                role="tab" aria-controls="nav-tab2_item" aria-selected="false">Our Vission</li>
                            <li class="" id="nav-tab3" data-bs-toggle="tab" data-bs-target="#nav-tab3_item"
                                role="tab" aria-controls="nav-tab3_item" aria-selected="false">Our Principle</li>
                        </ul>
                    </nav>
                    <div class="tab-content tab-content-wrapper" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-tab1_item" role="tabpanel"
                            aria-labelledby="nav-tab1" tabindex="0">
                            <div class="row">
                                <div class="col-lg-7 col-sm-6 order-sm-1 order-2">
                                    <p>Our Commitment to Quality Fireplace and Chimney Care Services</p>
                                    <p>We provide expert fireplace cleaning, repair, and safety inspections, ensuring safe,
                                         efficient operation and peace of mind for your home.</p>
                                </div>
                                <div class="col-lg-5 col-sm-6 order-sm-2 order-1">
                                    <div class="image">
                                        <img src="{{ asset('front/asset2/images/about/attractive.jpg') }}"
                                            alt="attractive" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-tab2_item" role="tabpanel" aria-labelledby="nav-tab2"
                            tabindex="0">
                            <div class="row">
                                <div class="col-lg-7 col-sm-6 order-sm-1 order-2">
                                    <p>Our Vision for Safe, Efficient Fireplace and Chimney Solutions for All</p>
                                    <p>We strive to deliver top-quality fireplace maintenance, repair, and safety checks,
                                         ensuring every home stays warm, safe, and hazard-free.</p>
                                </div>
                                <div class="col-lg-5 col-sm-6 order-sm-2 order-1">
                                    <div class="image">
                                        <img src="{{ asset('front/asset2/images/about/our-vission.jpg') }}"
                                            alt="vission" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-tab3_item" role="tabpanel" aria-labelledby="nav-tab3"
                            tabindex="0">
                            <div class="row">
                                <div class="col-lg-7 col-sm-6 order-sm-1 order-2">
                                    <p>Our Principles for Trusted Fireplace Care and Superior Customer Satisfaction</p>
                                    <p>We prioritize safety, efficiency, and quality in every fireplace cleaning,
                                         inspection, and repair service to ensure customer satisfaction and peace of mind.</p>
                                </div>
                                <div class="col-lg-5 col-sm-6 order-sm-2 order-1">
                                    <div class="image">
                                        <img src="{{ asset('front/asset2/images/about/principle.jpg') }}"
                                            alt="principle" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- FAQ Area End -->
    <!-- About Timeline Start -->
    <div class="timeline-area style-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center align-items-center mb-70">
                        <span class="short-title">History</span>
                        <h2 class="title">Know More <span>Detail</span> About<br />Our <span>Company</span></h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12">
                    <div class="time-card-wrapper">
                        <div class="time-card-item">
                            <div class="time-card-desc">
                                <div class="title">
                                    <h2>Company Founded</h2>
                                </div>
                                <div class="desc">
                                    <p>David Fireplace Cleaning was founded on Nov 26, 2010, 
                                        with a commitment to providing high-quality fireplace and chimney services to homeowners.</p>
                                </div>
                            </div>
                            <div class="circle-wrapper">
                                <div class="time-card-circle"></div>
                            </div>
                            <div class="time-card-time">
                                <p class="time-card-date">Nov 26, 2010</p>
                            </div>
                        </div>
                        <div class="time-card-item">
                            <div class="time-card-desc">
                                <div class="title">
                                    <h2>New Office Taken</h2>
                                </div>
                                <div class="desc">
                                    <p>David Fireplace Cleaning expanded by opening a new office to better serve our growing customer base.</p>
                                </div>
                            </div>
                            <div class="circle-wrapper">
                                <div class="time-card-circle"></div>
                            </div>
                            <div class="time-card-time">
                                <p class="time-card-date">April 10, 2011</p>
                            </div>
                        </div>
                        <div class="time-card-item">
                            <div class="time-card-desc">
                                <div class="title">
                                    <h2>Become Top Company</h2>
                                </div>
                                <div class="desc">
                                    <p>David Fireplace Cleaning had become a leading provider of reliable and safe fireplace and chimney services.</p>
                                </div>
                            </div>
                            <div class="circle-wrapper">
                                <div class="time-card-circle"></div>
                            </div>
                            <div class="time-card-time">
                                <p class="time-card-date">August 15, 2014</p>
                            </div>
                        </div>
                        <div class="time-card-arrow">
                            <i class="fa-solid fa-angle-down"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Timeline Start -->

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
@endsection
