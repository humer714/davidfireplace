<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ trim($__env->yieldContent('meta_title', 'David FirePlace Cleaning Repair')) }} - David Fireplace Cleaning Repair</title>
    <meta name="keywords" content="{{ trim($__env->yieldContent('meta_tags', 'Default meta Keywords')) }}" />
    <meta name="description" content="{{ trim($__env->yieldContent('meta_description', 'Default meta description')) }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- all css here -->

    <!--Favicon-->

    <link rel="icon" type="image/png" href="{{ asset('front/asset2/images/logo/favicon.png') }}" />

    <link rel="apple-touch-icon" href="{{ asset('front/asset2/images/logo/apple-touch-icon.png') }}" />
    <link rel="apple-touch-icon" sizes="57x57"
        href="{{ asset('front/asset2/images/logo/apple-touch-icon-57x57.png') }}" />
    <link rel="apple-touch-icon" sizes="72x72"
        href="{{ asset('front/asset2/images/logo/apple-touch-icon-72x72.png') }}" />
    <link rel="apple-touch-icon" sizes="76x76"
        href="{{ asset('front/asset2/images/logo/apple-touch-icon-76x76.png') }}" />
    <link rel="apple-touch-icon" sizes="114x114"
        href="{{ asset('front/asset2/images/logo/apple-touch-icon-114x114.png') }}" />
    <link rel="apple-touch-icon" sizes="120x120"
        href="{{ asset('front/asset2/images/logo/apple-touch-icon-120x120.png') }}" />
    <link rel="apple-touch-icon" sizes="144x144"
        href="{{ asset('front/asset2/images/logo/apple-touch-icon-144x144.png') }}" />
    <link rel="apple-touch-icon" sizes="152x152"
        href="{{ asset('front/asset2/images/logo/apple-touch-icon-152x152.png') }}" />
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('front/asset2/images/logo/apple-touch-icon-180x180.png') }}" />

    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Roboto:wght@400;500;700&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('front/asset2/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/asset2/css/fontawesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/asset2/css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/asset2/css/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/asset2/css/meanmenu.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/asset2/css/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/asset2/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/asset2/css/style.css') }}" />



    @yield('css')


</head>


<body>
    
    <!-- ======= Header ======= -->
    @include('front.layout_pages.header')



    <!-- Menu Sidebar Section Start -->
    <div class="body-overlay"></div>


    @yield('content')



    <!-- ======= Footer ======= -->
    @include('front.layout_pages.footer')


    <!-- all js here -->

    <!-- Scroll Up Section Start -->
    <div id="scrollTop" class="scrollup-wrapper">
        <div class="scrollup-btn">
            <i class="fa-regular fa-angle-up"></i>
        </div>
    </div>
    <!-- Scroll Up Section End -->
    {{-- show cal' icon same as scroll --}}
    <!-- Call Button Section -->
    <div id="callButton" class="scrollup-wrapper"style="right: 100px;">
        <button class="scrollup-btn btn btn-primary rounded-circle">
            <i class="fa-solid fa-phone"></i>
        </button>
    </div>
    <!-- Scroll Down Section End -->
    <script src="{{ asset('front/asset2/js/jquery.min.js') }}"></script>
    <script src="{{ asset('front/asset2/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/asset2/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('front/asset2/js/slick.min.js') }}"></script>
    <script src="{{ asset('front/asset2/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('front/asset2/js/waypoints.js') }}"></script>
    <script src="{{ asset('front/asset2/js/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('front/asset2/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('front/asset2/js/inview.min.js') }}"></script>
    <script src="{{ asset('front/asset2/js/wow.js') }}"></script>
    <script src="{{ asset('front/asset2/js/tilt.jquery.js') }}"></script>
    <script src="{{ asset('front/asset2/js/custom.js') }}"></script>


    @yield('script')
</body>

</html>
