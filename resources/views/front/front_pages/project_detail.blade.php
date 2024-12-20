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
    <!-- Page Header Start !-->
    <div class="page-breadcrumb-area page-bg"
        style="background-image: url('{{ asset('front/asset2/images/section-bg/transportation-logistics.jpg') }}')">
        <div class="page-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <div class="page-heading">
                            <h3 class="page-title">{{ $detail_data->title ?? '' }}</h3>
                        </div>
                        <div class="breadcrumb-list">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="active">{{ $detail_data->title ?? '' }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End !-->

    <!-- Project-details Section Start !-->
    <div class="project-detail-area">
        <div class="container">
            <!-- Image gallery Start -->
            <div class="row gy-3">
                <div class="col-12 col-lg-12">
                    <div class="project-gallery-image">
                        <img src="{{ $detail_data->image ?? asset('front/asset2/images/project-detail/10_case_details_1.jpg') }}"
                            alt="project-details" />
                    </div>
                </div>
            </div>
            <!-- Image gallery End -->
            <!-- Content section Start -->
            <div class="row mt-65">
                <div class="col-12 col-xl-4">
                    <div class="project-info-widget">
                        <div class="info-item">
                            <h3>Client Name</h3>
                            <p>{{ $detail_data->client_name ?? '' }}</p>
                        </div>
                        <div class="info-item">
                            <h3>Categories</h3>
                            <p>{{ $detail_data->category ?? '' }}</p>
                        </div>
                        <div class="info-item">
                            <h3>Start Date</h3>
                            <p>{{ $detail_data->start_date ?? '' }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-8 project-details-padding-left">
                    <!-- overview start -->
                    <div class="mt-30 mt-lg-0">
                        <h2 class="project-details-title">{{ $detail_data->title ?? '' }}</h2>
                        <p>{!! $detail_data->description !!}</p>
                    </div>
                    <!-- Overview End -->
                </div>
            </div>
            <!-- Content section End -->
        </div>
    </div>
    <!-- Project-details Section end -->
@endsection
