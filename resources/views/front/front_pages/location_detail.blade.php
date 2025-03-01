@extends('front.layout_pages.app')

@section('meta_title')
{{ $detail_data->meta_title ?? '' }}
@endsection
@section('meta_tags')
{{ $detail_data->meta_tag ?? '' }}
@endsection
@section('meta_description')
{{ $detail_data->meta_description ?? '' }}
@endsection

@section('content')
<style>
    .price-card {
        box-shadow: 0px 0px 20px 5px #679eb5;
        background-color: #31373f;
    }

    .banner-link {
        margin: 1rem 0;
        position: relative;
        display: flex;
        align-items: center;
    }

    .banner-link .icon {
        width: 35px;
        height: 35px;
        background-color: #f15a29;
        border: 5px solid white;
        border-radius: 5px;
        outline: 2px solid blue;
        transform: rotate(45deg);
    }

    .banner-link .text {
        height: 45px;
        width: 95%;
        position: absolute;
        left: 10px;
        padding: 9px 20px 10px 35px;
        border-radius: 10px;
        background-color: #21a89b;
        color: #000;
        font-size: 16px;
        font-weight: bold;
        z-index: -1;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .line-bar {
        position: relative;
        width: 3px;
        margin: auto;
        height: 100%;
        background-color: #f15a29;
    }

    .right-banners {
        display: grid;
        grid-template-columns: 50% 50%;
        column-gap: 1rem;
        row-gap: 1rem;
    }
    @media (max-width: 576px) { /* Mobile sizes */
        .right-banners {
            display: block; /* Reset grid layout */
        }
    }
    .list-wrappers h2 {
        font-size: 18px;
        text-align: center;
        color: #ffffff;
    }

    .bottomsqure {
        position: absolute;
        bottom: 0;
        width: 15px;
        height: 15px;
        background-color: #f15a29;
        right: -6px;
    }
</style>
<!-- Page Header Start !-->
<div class="page-breadcrumb-area page-bg"
    style="background-image: url('{{ $detail_data->image ?? asset('front/asset2/img/breadcrumb-bg.jpg') }}')">
    <div class="page-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-wrapper">
                    <div class="page-heading">
                        <h3 class="page-title" style="font-size: 40px;">David Fire Place Cleaning Repair, {{ $detail_data->title ?? '' }},
                            {{ $detail_data->state->title ?? '' }}
                        </h3>
                    </div>
                    <div class="breadcrumb-list">
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>
                                <a href="{{ route('locations') }}">
                                    Locations
                                </a>
                            </li>
                            <li class="active">{{ $detail_data->title ?? '' }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End !-->

<!-- Feature Area Start !-->
<div class="feature-area style-2">
    <div class="container">
        <div class="feature-area-inner">
            <div class="row">
                <div class="col-12 col-lg-6 p-0">
                    <div class="icon-card style-two">
                        <div class="icon">
                            <img src="{{ asset('front/asset2/images/icon/map.png') }}" alt="map" />
                        </div>
                        <div class="content">
                            <h2 class="title">Top-Quality Fireplace Services</h2>
                            <p class="desc">Elivering top-quality fireplace and chimney services, ensuring safety, efficiency,
                                 and customer satisfaction with every service completed.</p>
                        </div>
                        <div class="divider"></div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 p-0">
                    <div class="icon-card style-two">
                        <div class="icon">
                            <img src="{{ asset('front/asset2/images/icon/home_3_icon_card_1.png') }}" alt="map" />
                        </div>
                        <div class="content">
                            <h2 class="title">Trusted Fireplace Safety & Care</h2>
                            <p class="desc">Ensuring your home’s safety with guaranteed fireplace and chimney inspections, cleaning, and repairs for long-term protection.</p>
                        </div>
                        <div class="divider"></div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 p-0">
                    <div class="icon-card style-two">
                        <div class="icon">
                            <img src="{{ asset('front/asset2/images/icon/home_3_icon_card_3.png') }}" alt="map" />
                        </div>
                        <div class="content">
                            <h2 class="title">Affordable Service Options</h2>
                            <p class="desc">Offering flexible pricing for all fireplace and chimney services, tailored to fit your budget without compromising on quality.</p>
                        </div>
                        <div class="divider"></div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 p-0">
                    <div class="icon-card style-two">
                        <div class="icon">
                            <img src="{{ asset('front/asset2/images/icon/home_3_icon_card_4.png') }}" alt="map" />
                        </div>
                        <div class="content">
                            <h2 class="title">Expert Technicians & Service</h2>
                            <p class="desc">Dedicated team of certified fireplace experts providing efficient service, professional advice, and ensuring optimal performance for every customer.</p>
                        </div>
                        <div class="divider"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature Area End !-->

<div class="service-details-wrapper" style="padding-top: 25px !important;">
    <div class="container">
        <div class="card" style="box-shadow: 0px 0px 20px 5px #ff6731;">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="service-details-content">
                            <p>{!! $detail_data->description !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="service-details-wrapper" style="padding-top: 25px !important;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                <a href="tel:{{ $detail_data->contact_number ?? '+1 (866) 982-4629' }}" class="theme-btn"
                    style="float:none; display:inline;">{{ $detail_data->contact_number ?? '+1 (866) 982-4629' }}
                </a>
            </div>

        </div>
    </div>
</div>


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
                    <p class="mb-0">We offer the best fireplace cleaning, chimney inspections,
                         and expert repairs to ensure safety and efficiency. Trusted by homeowners for top-quality service and affordable solutions nationwide.</p>
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



<div class="service-details-wrapper" style="padding-top: 25px !important;">
    <div class="container">
        <div class="card" style="box-shadow: 0px 0px 20px 5px #ff6731;">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="service-details-content">
                            <p>{!! $detail_data->excerpt !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="pricing-area style-1 background-gray" style="padding-top: 40px !important; padding-bottom: 40px !important;">
    <div class="container">
        <div class="row ">
            <div class="col-lg-4 mb-2 price-card">
                <div class="">
                    <div class="list-wrappers">
                        <h2 style="margin-bottom: 27px;">Things To Do In {{ $detail_data->title ?? '' }}</h2>
                        <a href="{{json_decode($detail_data->dynamic_url, true)[0] ?? '#'}}" target="_blank">
                            <div class="banner-link" style="margin: 1.6rem 0;">
                                <div class="icon"></div>
                                <div class="text">Official Govt. Website</div>
                            </div>
                        </a>
                        <a href="{{json_decode($detail_data->dynamic_url, true)[1] ?? '#'}}" target="_blank">
                            <div class="banner-link" style="margin: 1.6rem 0;">
                                <div class="icon"></div>
                                <div class="text">More About {{ $detail_data->title ?? '' }}</div>
                            </div>
                        </a>
                        <a href="{{json_decode($detail_data->dynamic_url, true)[2] ?? '#'}}" target="_blank">
                            <div class="banner-link" style="margin: 1.6rem 0;">
                                <div class="icon"></div>
                                <div class="text">Weather Of {{ $detail_data->title ?? '' }}</div>
                            </div>
                        </a>
                        <a href="{{json_decode($detail_data->dynamic_url, true)[3] ?? '#'}}" target="_blank">
                            <div class="banner-link" style="margin: 1.6rem 0;">
                                <div class="icon"></div>
                                <div class="text">Pharmacies In {{ $detail_data->title ?? '' }}</div>
                            </div>
                        </a>
                        <a href="{{json_decode($detail_data->dynamic_url, true)[4] ?? '#'}}" target="_blank">
                            <div class="banner-link" style="margin: 1.6rem 0;">
                                <div class="icon"></div>
                                <div class="text">Parks In {{ $detail_data->title ?? '' }}</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 mb-2 ">
                <div class="list-wrappers price-card">
                    <h2>
                        Top Fireplace & Chimney Services People Search For In {{ $detail_data->title ?? '' }}
                    </h2>
                    <div class="right-banners">
                        <div class="row mb-1">
                            <div class="col-lg-12">
                                <div class="banner-link">
                                    <div class="icon"></div>
                                    <div class="text">Fireplace Cleaning Services {{ $detail_data->title ?? '' }}</div>
                                </div>
                                <div class="banner-link">
                                    <div class="icon"></div>
                                    <div class="text">Chimney Cleaning {{ $detail_data->title ?? '' }}</div>
                                </div>
                                <div class="banner-link">
                                    <div class="icon"></div>
                                    <div class="text">Chimney Sweep {{ $detail_data->title ?? '' }}</div>
                                </div>
                                <div class="banner-link">
                                    <div class="icon"></div>
                                    <div class="text">Fireplace Cleaning Services {{ $detail_data->title ?? '' }}</div>
                                </div>
                                <div class="banner-link">
                                    <div class="icon"></div>
                                    <div class="text">Chimney Cleaning {{ $detail_data->title ?? '' }}</div>
                                </div>
                                <div class="banner-link">
                                    <div class="icon"></div>
                                    <div class="text">Chimney Sweep {{ $detail_data->title ?? '' }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-lg-12">  
                                <div class="banner-link">
                                    <div class="icon"></div>
                                    <div class="text">Cracked Chimney Repair {{ $detail_data->title ?? '' }}</div>
                                </div>
                                <div class="banner-link">
                                    <div class="icon"></div>
                                    <div class="text">Fireplace Repair {{ $detail_data->title ?? '' }}</div>
                                </div>
                                <div class="banner-link">
                                    <div class="icon"></div>
                                    <div class="text">Certified Chimney Inspectors {{ $detail_data->title ?? '' }}</div>
                                </div>
                                <div class="banner-link">
                                    <div class="icon"></div>
                                    <div class="text">Cracked Chimney Repair {{ $detail_data->title ?? '' }}</div>
                                </div>
                                <div class="banner-link">
                                    <div class="icon"></div>
                                    <div class="text">Fireplace Repair {{ $detail_data->title ?? '' }}</div>
                                </div>
                                <div class="banner-link">
                                    <div class="icon"></div>
                                    <div class="text">Certified Chimney Inspectors {{ $detail_data->title ?? '' }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<!-- Testimonial Area Start -->
<div class="testimonial-slider-area style-1 overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5 pr-0">
                <div class="section-title mb-40">
                    <span class="short-title">Testimonials</span>
                    <h2 class="title">What <span>Clients</span> Say <br /> About <span>Us</span></h2>
                    <p class="text">Customers praise David Fireplace Cleaning & Repair for reliable, professional service, expert technicians, friendly staff, and affordable, quality results.</p>
                </div>
                <div class="testimonial-slider-arrow">
                    <button type='button' class="testimonial-arrow-btn" id="trigger_testimonial_prev"><i
                            class='fa-solid fa-angle-left'></i></button>
                    <button type='button' class="testimonial-arrow-btn" id="trigger_testimonial_next"><i
                            class='fa-solid fa-angle-right'></i></button>
                </div>
            </div>
            <div class="col-xl-8 col-lg-7 p-0">
                <div class="testimonial-slider-wrapper" id="testimonial_two">
                    <div>
                        <div class="testimonial-card style-two">
                            <div class="icon">
                                <img src="{{ asset('front/asset2/images/icon/testimonial-quotation-2.png') }}"
                                    alt="testimonial" />
                            </div>
                            <div class="content-wrapper">
                                <div class="content">
                                    <p class="text">David Fireplace Cleaning provided excellent chimney cleaning and safety inspection. The technicians were professional,
                                         thorough, and efficient. Highly recommend for anyone needing fireplace maintenance and repairs.
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
                        <div class="testimonial-card style-two">
                            <div class="icon">
                                <img src="{{ asset('front/asset2/images/icon/testimonial-quotation-2.png') }}"
                                    alt="testimonial" />
                            </div>
                            <div class="content-wrapper">
                                <div class="content">
                                    <p class="text">Fast, reliable, and thorough service! David Fireplace Cleaning cleaned our gas fireplace and conducted a safety inspection.
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
                    <div>
                        <div class="testimonial-card style-two">
                            <div class="icon">
                                <img src="{{ asset('front/asset2/images/icon/testimonial-quotation-2.png') }}"
                                    alt="testimonial" />
                            </div>
                            <div class="content-wrapper">
                                <div class="content">
                                    <p class="text">I hired David Fireplace Cleaning for chimney sweeping and maintenance. They provided excellent service, detailed inspection, and fixed a chimney crack.
                                         Professional, courteous, and reliable—highly recommended for fireplace and chimney services!
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
</div>
<!-- Testimonial Area End -->
<!-- Appointment shape start -->
<div class="squre-shape-wrapper">
    <div class="appointment-squre-shape"></div>
</div>
<!-- Appointment shape end -->
<!-- Appointment Area Start -->
<div class="appointment-area style-1 position-relative"
    style="background-image: url('{{ asset('front/asset2/images/appointment/appointment-bg.jpg') }}')">
    <div class="blue-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <!-- Form Start -->
                <div class="comment-respond style-three bg-white p-50">
                    <div class="post-comments-title">
                        <span class="sub-title">Know the price</span>
                        <h2>Get A Free Quote</h2>
                    </div>
                    @if (Session::has('message'))
                        <p class="alert {{ Session::get('alert-class', 'alert-info') }} mb-2">
                            {{ Session::get('message') }}
                        </p>
                    @endif
                    @if (Session::has('errors'))
                        <p class="alert {{ Session::get('alert-class', 'alert-danger') }} mb-2">
                            {{ Session::get('errors') }}
                        </p>
                    @endif
                    <form action="{{ route('contact.store') }}" method="post" class="comment-form">
                        @csrf

                        <div class="row gx-2">

                            <div class="col-xl-6">
                                <div class="contacts-name">
                                    <input type="text" id="name" placeholder="Name" name="name" required>

                                </div>
                            </div>


                            <div class="col-xl-6">
                                <div class="contacts-name">
                                    <input type="email" class="email" id="eemail" placeholder="Email"
                                        name="email" required>

                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="contacts-name">
                                    <input type="text" id="msg_postal_code" placeholder="Postal code"
                                        name="postal_code" required>

                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="contacts-name">
                                    <input type="text" id="msg_phone_no" placeholder="Phone No"
                                        name="phone_number" required>

                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="contacts-name">
                                    <input type="text" id="msg_subject" placeholder="Subject" name="subject"
                                        required>
                                </div>
                            </div>

                            <!-- Checkboxes -->
                            <div class="col-xl-12">
                                <label for="services" class="form-label">
                                    <h5>type of service do you need?</h5>
                                </label>
                                <div class="form-check col-lg-6">
                                    <input class="form-check-input" type="checkbox" id="garage_door_repair"
                                        style="border: #778196 1px solid !important;" name="garage_door_repair"
                                        value="Garage Door Repair">
                                    <label class="form-check-label" for="garage_door_repair">Garage Door
                                        Repair</label>
                                </div>
                                <div class="form-check col-lg-6">
                                    <input class="form-check-input" type="checkbox" id="garage_opener_installation"
                                        style="border: #778196 1px solid !important;"
                                        name="garage_opener_installation" value="Garage Opener Installation">
                                    <label class="form-check-label" for="garage_opener_installation">Garage Opener
                                        Installation</label>
                                </div>
                                <div class="form-check col-lg-6">
                                    <input class="form-check-input" type="checkbox" id="door_out_of_tracks"
                                        style="border: #778196 1px solid !important;" name="door_out_of_tracks"
                                        value="Door Out of Tracks">
                                    <label class="form-check-label" for="door_out_of_tracks">Door Out of
                                        Tracks</label>
                                </div>
                                <div class="form-check col-lg-6">
                                    <input class="form-check-input" type="checkbox" id="garage_door_installation"
                                        style="border: #778196 1px solid !important;" name="garage_door_installation"
                                        value="Garage Door Installation">
                                    <label class="form-check-label" for="garage_door_installation">Garage Door
                                        Installation</label>
                                </div>
                                <div class="form-check col-lg-6">
                                    <input class="form-check-input" type="checkbox" id="other" name="other"
                                        style="border: #778196 1px solid !important;" value="Other">
                                    <label class="form-check-label" for="other">Other</label>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="contacts-message">
                                    <textarea name="message" cols="20" rows="3" placeholder="Start writing your message"></textarea>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="contacts-name">
                                    {!! NoCaptcha::renderJs() !!}
                                    {!! NoCaptcha::display() !!}
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="theme-btn" type="submit">Submit Now
                                    <spna class="icon">
                                        <i class="fa-solid fa-angle-right"></i>
                                    </spna>
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
                <!-- Form End -->
            </div>
            <div class="col-xl-6">
                <!-- Accordion Start -->
                <div class="accordion-wrapper">
                    <div class="section-title mt-20 mb-20">
                        <span class="short-title text-white">Frequently Asked Questions</span>
                        <h2 class="title text-white">The Safest and Trusted Fireplace<br />Services</h2>
                    </div>

                    <div class="accordion-box-wrapper" id="appointmentAreaStyle1FAQ">
                        <!-- Single Accordion Start -->
                        <div class="accordion-list-item">
                            <div id="headingOne">
                                <div class="accordion-head" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    <h3 class="accordion-title">Why David Fireplace is the Best Choice?</h3>
                                </div>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne" data-bs-parent="#appointmentAreaStyle1FAQ">
                                <div class="accordion-item-body">
                                    <p>David Fireplace Cleaning is known for its expert services, affordable pricing, and commitment to safety.
                                         Our skilled technicians ensure your fireplace and chimney function efficiently, making us a top choice.</p>
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
                                data-bs-parent="#appointmentAreaStyle1FAQ">
                                <div class="accordion-item-body">
                                    <p>We offer affordable pricing for all our fireplace and chimney services, including cleaning, inspections, and repairs. 
                                        Get transparent quotes based on your needs, with no hidden fees or surprises.</p>
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
                                aria-labelledby="headingThree" data-bs-parent="#appointmentAreaStyle1FAQ">
                                <div class="accordion-item-body">
                                    <p>If any of our fireplace services do not meet your expectations, we offer a clear refund process.
                                         Your satisfaction is our priority, and we’ll resolve any issues promptly.</p>
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
                                </div>
                            </div>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#appointmentAreaStyle1FAQ">
                                <div class="accordion-item-body">
                                    <p>Once your fireplace cleaning or inspection is done, we ensure everything is secure and safely closed.
                                         Our technicians make sure your fireplace is safe to use before finishing the service.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Accordion End -->
                        <!-- Single Accordion Start -->
                        <div class="accordion-list-item">
                            <div id="headingFive">
                                <div class="accordion-head collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false"
                                    aria-controls="collapseFive">
                                    <h3 class="accordion-title">What is creosote, and why is it dangerous?</h3>
                                </div>
                            </div>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#appointmentAreaStyle1FAQ">
                                <div class="accordion-item-body">
                                    <p>Creosote is a byproduct of burning wood and can accumulate on the walls of your chimney. Over time, it hardens and can become a fire hazard.
                                         In severe cases, creosote buildup can block the chimney, leading to poor ventilation and increased risk of fire.</p>
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
<!-- Appointment Area End -->



<!-- Start Map -->
<div class="row">
    <div class="col-12">
        <div class="map-wodget">
            <iframe
                src="{{ $detail_data->google_map ?? 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3401.547206339729!2d74.33781015!3d31.509127499999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3919045d068c3be1%3A0xb5921f5500b949c1!2sBlock%20E2%20Block%20E%202%20Gulberg%20III%2C%20Lahore%2C%20Punjab!5e0!3m2!1sen!2s!4v1724777464483!5m2!1sen!2s' }}"
                style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
<!-- end map -->
@endsection