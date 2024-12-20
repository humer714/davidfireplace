@extends('front.layout_pages.app')

@section('css')
<style>
    .accordion-button:focus {
        border-color: #ff6731 !important;
    }
    .accordion-button:not(.collapsed) {
        color: #ff6731 !important;
    }
</style>
@endsection
@section('meta_title')
    {{ __('Locations') }}
@endsection
@section('meta_tags')
    {{ __('Locations, proschimneyclening') }}
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
                            <h3 class="page-title">Locations</h3>
                        </div>
                        <div class="breadcrumb-list">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="active">All Locations</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End !-->


    <div class="latest-posts-area style-3">
        <div class="container">
            <div class="row">
                @foreach ($states as $index => $item)
                    <div class="accordion" id="accordionExample{{ $index }}" style="color: #ff6731 !important;">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne{{ $index }}">
                                <button class="accordion-button collapsed d-flex justify-content-between align-items-center"
                                    type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne{{ $index }}" aria-expanded="false"
                                    aria-controls="collapseOne{{ $index }}">
                                    <span class="me-auto">{{ $item->title ?? '' }}</span>
                                </button>
                            </h2>
                            <div id="collapseOne{{ $index }}" class="accordion-collapse collapse"
                                aria-labelledby="headingOne{{ $index }}"
                                data-bs-parent="#accordionExample{{ $index }}">
                                <div class="accordion-body">
                                    <input type="text" id="search-one{{ $index }}" class="form-control mb-3"
                                        placeholder="Search cities..."
                                        oninput="filterCities('state-one{{ $index }}', this)">
                                    <div id="state-one{{ $index }}" class="row">
                                        @foreach ($item->cities as $city)
                                            <div class="col-lg-2 col-md-3 col-sm-6 city">
                                                <a href="{{ route('location_detail', $city->slug) }}" style="color: #ff6731 !important;">
                                                    {{ $city->title ?? '' }}
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <script>
        // Function to filter cities
        function filterCities(stateId, inputElement) {
            // Get the search query entered by the user
            var query = inputElement.value.toLowerCase();

            // Get the container for the cities (based on the passed stateId)
            var cityContainer = document.getElementById(stateId);

            // Get all city elements within the container
            var cities = cityContainer.getElementsByClassName('city');

            // Loop through each city and check if it matches the query
            Array.from(cities).forEach(function(city) {
                var cityName = city.textContent || city.innerText;

                // If city name contains the search query, show the city, else hide it
                if (cityName.toLowerCase().indexOf(query) !== -1) {
                    city.style.display = 'block'; // Show city
                } else {
                    city.style.display = 'none'; // Hide city
                }
            });
        }
    </script>
@endsection
