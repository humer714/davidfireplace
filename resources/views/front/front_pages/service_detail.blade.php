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
@section('css')
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


    <!-- Service-details Section Start !-->
    <div class="service-details-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 order-2 order-xl-1">
                    <!-- sidebar start -->
                    <div class="service-sidebar">
                        <!-- service-categories start -->
                        <div class="widget widget_service_categories">
                            <ul>
                                @foreach ($list_services as $item)
                                    <li>
                                        <a href="{{ route('service_detail', $item->slug) }}">
                                            <i class="fa-solid fa-caret-right"></i>
                                            {{ $item->title ?? '' }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- service-categories end -->
                        <!-- service-promotion start -->
                        <div class="widget widget_service_promotion"
                            style="background: url('{{ asset('front/asset2/images/section-bg/promotional-widget-bg.jpg') }}');">
                            <div class="overlay"></div>
                            <div class="widget-subtitle">
                                <p>Need Help?</p>
                            </div>
                            <div class="promotion-card">
                                <h4>
                                    Call Us<br />to Get Expert Advice & Guidence
                                </h4>
                                <a href="{{ route('contact') }}" class="secondary-btn">
                                    <span class="icon">
                                        <i class="fa-solid fa-phone"></i>
                                    </span>
                                    <div class="btn-text">
                                        <p>Call Us</p>
                                        <h4>+1 866 511-2657</h4>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- service-promotion end -->
                    </div>
                    <!-- sidebar end -->
                </div>
                <div class="col-xl-9 order-1">
                    <div class="details-main">
                        <div class="details-img-wrapper">
                            <div class="service-feature-img">
                                <img src="{{ $detail_data->image ?? asset('front/asset2/images/service-detail/service-details-main.jpg') }}"
                                    alt="service-details" />
                            </div>
                            <div class="text">
                                <h2>{{ $detail_data->title ?? '' }}</h2>
                                <p>{!! $detail_data->description !!}</p>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service-details Section end -->
@endsection
