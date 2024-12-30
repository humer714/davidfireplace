@extends('front.layout_pages.app')


@section('meta_title')
    {{ __('contact Us') }}
@endsection
@section('meta_tags')
    {{ __('contact Us, proschimneyclening') }}
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
                            <h3 class="page-title">Contact us</h3>
                        </div>
                        <div class="breadcrumb-list">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="active">Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End !-->

    <!-- Contact-info Section Start !-->
    <div class="contact-info-area">
        <div class="container">
            <div class="row gx-xl-5">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="icon-card style-four">
                        <div class="icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="content">
                            <h2 class="title">Address</h2>
                            <p class="desc">United State</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="icon-card style-four">
                        <div class="icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="content">
                            <h2 class="title">Phone</h2>
                            <p class="desc">+1 (866) 511-2657</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="icon-card style-four">
                        <div class="icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="content">
                            <h2 class="title">Email</h2>
                            <p class="desc">Info@davidfireplacecleaningrepair.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact-info Section End -->

    <!-- Contact Form Section Start -->
    <div class="contact-form-area">
        <!-- Submit form Start -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="contact-title">
                        <h2>Send Us A Message</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
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
                    
                    <!-- Comment Form Start -->
                    <div class="comment-respond mt-45">
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
                                        <input type="text" id="msg_phone_no" placeholder="Phone No" name="phone_number"
                                            required>

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
                                    <div class="form-check col-lg-6" style="background-color: #F2F5FA;">
                                        <input class="form-check-input" type="checkbox" id="garage_door_repair"
                                            style="border: #778196 1px solid !important;" name="garage_door_repair"
                                            value="Garage Door Repair">
                                        <label class="form-check-label" for="garage_door_repair">Garage Door
                                            Repair</label>
                                    </div>
                                    <div class="form-check col-lg-6" style="background-color: #F2F5FA;">
                                        <input class="form-check-input" type="checkbox" id="garage_opener_installation"
                                            style="border: #778196 1px solid !important;" name="garage_opener_installation"
                                            value="Garage Opener Installation">
                                        <label class="form-check-label" for="garage_opener_installation">Garage Opener
                                            Installation</label>
                                    </div>
                                    <div class="form-check col-lg-6" style="background-color: #F2F5FA;">
                                        <input class="form-check-input" type="checkbox" id="door_out_of_tracks"
                                            style="border: #778196 1px solid !important;" name="door_out_of_tracks"
                                            value="Door Out of Tracks">
                                        <label class="form-check-label" for="door_out_of_tracks">Door Out of
                                            Tracks</label>
                                    </div>
                                    <div class="form-check col-lg-6" style="background-color: #F2F5FA;">
                                        <input class="form-check-input" type="checkbox" id="garage_door_installation"
                                            style="border: #778196 1px solid !important;" name="garage_door_installation"
                                            value="Garage Door Installation">
                                        <label class="form-check-label" for="garage_door_installation">Garage Door
                                            Installation</label>
                                    </div>
                                    <div class="form-check col-lg-6" style="background-color: #F2F5FA;">
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
                    <!-- Comment Form End -->
                </div>
            </div>
        </div>
        <!-- Submit form End -->
    </div>
    <!-- Contact Form Section End -->
    <div class="row">
        <div class="col-12">
            <div class="map-wodget">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52887706.14540557!2d-161.74454347928352!3d35.99563672201457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2s!4v1735340196221!5m2!1sen!2s"
                    style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
@endsection
