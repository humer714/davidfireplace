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


    <div class="blog-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 blog-details-wrapper">
                    <!-- Post Details Start -->
                    <article class="single-post-item">
                        <div class="post-thumbnail">

                            <img src="{{ $detail_data->image ?? asset('front/asset2/images/blog-detail/b-details-feature.jpg') }}"
                                alt="Blog Image" />

                        </div>
                        <div class="post-content-wrapper">
                            <div class="post-meta">
                                <span><i
                                        class="far fa-calendar-check"></i>{{ $detail_data->created_at ? $detail_data->created_at->format('d F, Y') : '' }}</span>
                                <span><i class="far fa-user"></i>Admin</span>
                                <span><i class="far fa-tag"></i>{{ $detail_data->category ?? '' }}</span>
                            </div>
                            <h3 class="post-title">
                                {{ $detail_data->title ?? '' }}
                            </h3>
                            <div class="post-content">
                                {!! $detail_data->description !!}
                            </div>

                        </div>
                    </article>
                    <!-- Post Details End -->
                </div>

            </div>
        </div>
    </div>
@endsection
