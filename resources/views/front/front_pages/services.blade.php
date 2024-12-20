@extends('front.layout_pages.app')


@section('meta_title')
    {{ __('Services') }}
@endsection
@section('meta_tags')
    {{ __('Services, proschimneyclening') }}
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
                            <h3 class="page-title">Services</h3>
                        </div>
                        <div class="breadcrumb-list">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="active">All Services</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End !-->


    <!-- Service Area Start -->
    <div class="service-area style-1 empty-area-title">
        <div class="container">
            <div class="row">
                @foreach ($services as $key => $item)
                    @if ($item->status == 1)
                        <!-- Single Service Start !-->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="info-card style-two"
                                style="background-image: url('{{ $item->image ?? asset('front/asset2/images/service/service-item-1.jpg') }}')">
                                <div class="info-card-inner">
                                    <div class="content-wrapper">
                                        <div class="title-wrapper">
                                            <div class="icon">
                                                <img src="{{ $item->icon_image ?? asset('front/asset2/images/icon/transport.png') }} "
                                                    alt="" />
                                            </div>
                                            <h2 class="title">{{ $item->title ?? '' }}</h2>
                                        </div>
                                        <div class="content">
                                            <p class="desc">
                                                {{ $item->excerpt ?? '' }}
                                            </p>
                                            <div class="read-more">
                                                <a href="{{ route('service_detail', $item->slug) }}">
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
                        </div>
                        <!-- Single Service End !-->
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <!-- Service Area end -->
@endsection
