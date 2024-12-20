<footer class="footer bg-light-black">
    <div class="footer-sec">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                    <div class="footer-widget">
                        <div class="footer-widget-info">
                            <div class="footer-logo">
                                <a href="{{ route('home') }}"><img
                                        src="{{ asset('front/asset2/images/logo/footer-logo-white.png') }}"
                                        alt="Footer Logo" /></a>
                            </div>
                            <div class="footer-widget-contact">
                                <div class="footer-contact">
                                    <ul>
                                        <li>
                                            <div class="contact-icon">
                                                <i class="fa-solid fa-location-dot"></i>
                                            </div>
                                            <div class="contact-text">
                                                <span>22/1 Bardeshi, Amin Bazar<br />Dhaka 1348</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contact-icon">
                                                <i class="fa-light fa-envelope"></i>
                                            </div>
                                            <div class="contact-text">
                                                <a href="mailto:hello@transico.com"><span>hello@transico.com</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contact-icon">
                                                <i class="fa-solid fa-phone"></i>
                                            </div>
                                            <div class="contact-text">
                                                <span>+88 01234 567 890</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="social-profile">
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
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
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                    <div class="row">
                        <div class="col-6">
                            <div class="footer-widget widget_nav_menu">
                                <h2 class="footer-widget-title">Quick Link</h2>
                                <ul class="menu">
                                    <li>
                                        <a href="{{ route('home') }}">
                                            Home
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('about_us') }}">About
                                            us</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('services') }}">Services</a>
                                    </li>
                                    <li><a href="{{ route('projects') }}">Projects</a></li>
                                    <li><a href="{{ route('contact') }}">Contact
                                            Us</a></li>
                                    <li><a href="{{ route('locations') }}">Locations</a></li>
                                    <li><a href="{{ route('blogs') }}">Blogs</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="footer-widget widget_nav_menu">
                                <h2 class="footer-widget-title">Our Services</h2>
                                <ul>
                                    @php
                                        $services = App\Models\Service::where('is_active', 1)->get();
                                    @endphp
                                    @foreach ($services as $item)
                                        <li>
                                            <a href="{{ route('service_detail', $item->slug) }}">
                                                {{ $item->title ?? '' }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-text">
                        <p>© 2024 Dan garage door broken spring repair. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bg">
        <img src="{{ asset('front/asset2/images/section-bg/footer-map-shape.png') }}" alt="footer image" />
    </div>
</footer>
