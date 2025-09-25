@extends('main-layout.app')

@section('content')
    <!-- Page Header Start -->
       <div class="page-header parallaxie breadcumb-area" data-desktop="{{ asset('assets/images/breadcrumb/blog.jpg') }}" data-mobile="{{ asset('assets/images/breadcrumb/blogmobile.jpg') }}">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque"> Media & News</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Media & News</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Page Single Post Start -->
    <div class="page-single-post">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Post Featured Image Start -->
                    <div class="post-image">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('storage/' . $mediaBlog->image) }}" alt="">
                        </figure>
                    </div>
                    <!-- Post Featured Image Start -->

                    <!-- Post Single Content Start -->
                    <div class="post-content">
                        <!-- Post Entry Start -->
                        <div class="post-entry">
                            <span style="font-weight: normal;color: #b44880;">19 May , 2025</span>
                            <h4 style="margin-top: 10px;">{{ $mediaBlog->title }}</h4>
                            <p class="wow fadeInUp">{!! $mediaBlog->html_content !!}</p>

                            
                        </div>
                        <!-- Post Entry End -->


                    </div>
                    <!-- Post Single Content End -->
                </div>

                <div class="col-lg-4">
                        @include('pages.blog-menu')
                </div>
            </div>
        </div>
    </div>
    <!-- Page Single Post End -->
    @endsection
