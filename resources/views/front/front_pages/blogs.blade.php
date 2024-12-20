@extends('front.layout_pages.app')


@section('meta_title')
    {{ __('Blogs') }}
@endsection
@section('meta_tags')
    {{ __('Blogs, proschimneyclening') }}
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
                            <h3 class="page-title">Blogs</h3>
                        </div>
                        <div class="breadcrumb-list">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="active">All Blogs</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End !-->

    <!-- Blog Area Start -->
    <div class="latest-posts-area style-3">
        <div class="container">
            <div class="row">
                @foreach ($blogs as $item)
                    @if ($item->status == 1)
                        <div class="col-12 col-md-6 col-lg-4">
                            <!-- Single-post-card start -->
                            <div class="post-card style-four">
                                <div class="image">
                                    <img src="{{ $item->image ?? asset('front/asset2/images/blog/03_home_post_2.jpg') }}"
                                        alt="post-1">
                                </div>
                                <div class="content">
                                    <div class="post-meta">
                                        <span><a
                                                href="{{ route('blog_detail', $item->slug) }}">{{ $item->category ?? '' }}</a></span>
                                        <span
                                            class="date">{{ $item->created_at ? $item->created_at->format('d F, Y') : '' }}</span>
                                    </div>
                                    <h2 class="title">
                                        <a href="{{ route('blog_detail', $item->slug) }}">{{ $item->title ?? '' }}</a>
                                    </h2>
                                </div>
                            </div>
                            <!-- Single-post-card End-->
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <!-- Blog Area End -->
@endsection
