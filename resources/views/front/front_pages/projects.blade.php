@extends('front.layout_pages.app')


@section('meta_title')
    {{ __('Projects') }}
@endsection
@section('meta_tags')
    {{ __('Projects, proschimneyclening') }}
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
                            <h3 class="page-title">Projects</h3>
                        </div>
                        <div class="breadcrumb-list">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="active">All Projects</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End !-->


    <!-- Case-Studies-two Start -->
    <div class="project-page-wrapper">
        <div class="container">
            <div class="row">
                @foreach ($projects as $item)
                    @if ($item->status == 1)
                        <div class="col-lg-4 col-sm-6 col-xs-12">
                            <div class="portfolio-style-two">
                                <div class="image">
                                    <img src="{{ $item->image ?? asset('front/asset2/images/project/03_home_portfolio_1.jpg') }}"
                                        alt="portfolio one">
                                    <div class="content-wrapper">
                                        <div class="content">
                                            <div class="content-inner">
                                                <span class="sub-title">{{ $item->category ?? '' }}</span>
                                                <h3 class="title">{{ $item->title ?? '' }}</h3>
                                            </div>
                                            <div class="btn">
                                                <a href="{{ route('project_detail', $item->slug) }}"><i
                                                        class="fa-solid fa-up-right-from-square"></i></a>
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
    <!--   Case-Studies-two End -->
@endsection
