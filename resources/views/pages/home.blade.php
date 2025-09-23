@extends('main-layout.app')

@section('content')
@php
    $isMobile = request()->header('User-Agent') &&
        preg_match('/mobile|android|iphone|ipad|phone/i', request()->header('User-Agent'));
@endphp
    <!-- Hero Section Start -->
    <div class="hero hero-slider-layout">
        <div class="swiper">
            <div class="swiper-wrapper">

                {{-- If DB banners exist, show them --}}
                @if(isset($banners) && $banners->count() > 0)
                @foreach($banners as $banner)
                @if($isMobile && !empty($banner->mobile_img_path))
                <div class="swiper-slide">
                    <div class="hero-slide">
                        <div class="hero-slider-image">
                            {{-- Mobile check with fallback --}}
                            @if($isMobile && !empty($banner->mobile_img_path))
                                <img class="images-mobile" src="{{ asset('storage/' . $banner->mobile_img_path) }}" alt="">
                            @else
                                <img class="images-desk" src="{{ asset('storage/' . $banner->image_path) }}" alt="">
                            @endif
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="hero-content">
                                        <div class="section-title dark-section">
                                            <h3 class="wow fadeInUp">welcome our industry</h3>

                                            {{-- Banner Text --}}
                                            @if($banner->text_content)
                                                <h1 class="text-anime-style-2" data-cursor="-opaque">
                                                    {!! $banner->text_content !!}
                                                </h1>
                                            @else
                                                <h1 class="text-anime-style-2" data-cursor="-opaque">
                                                    Excellence in <span>Building Materials</span>
                                                </h1>
                                            @endif

                                            {{-- Banner Sub Text --}}
                                            @if($banner->sub_text_content)
                                                <p class="wow fadeInUp" data-wow-delay="0.25s">
                                                    {!! $banner->sub_text_content !!}
                                                </p>
                                            @else
                                                <p class="wow fadeInUp" data-wow-delay="0.25s">
                                                    Pioneers in Premium Building Materials & ACP Solutions
                                                </p>
                                            @endif
                                        </div>

                                        <div class="hero-btn wow fadeInUp" data-wow-delay="0.4s">
                                            <a href="#" class="btn-default"><span>explore more</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @if(!$isMobile && !empty($banner->image_path))
                <div class="swiper-slide">
                    <div class="hero-slide">
                        <div class="hero-slider-image">
                            {{-- Mobile check with fallback --}}
                            @if($isMobile && !empty($banner->mobile_img_path))
                                <img class="images-mobile" src="{{ asset('storage/' . $banner->mobile_img_path) }}" alt="">
                            @else
                                <img class="images-desk" src="{{ asset('storage/' . $banner->image_path) }}" alt="">
                            @endif
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="hero-content">
                                        <div class="section-title dark-section">
                                            <h3 class="wow fadeInUp">welcome our industry</h3>

                                            {{-- Banner Text --}}
                                            @if($banner->text_content)
                                                <h1 class="text-anime-style-2" data-cursor="-opaque">
                                                    {!! $banner->text_content !!}
                                                </h1>
                                            @else
                                                <h1 class="text-anime-style-2" data-cursor="-opaque">
                                                    Excellence in <span>Building Materials</span>
                                                </h1>
                                            @endif

                                            {{-- Banner Sub Text --}}
                                            @if($banner->sub_text_content)
                                                <p class="wow fadeInUp" data-wow-delay="0.25s">
                                                    {!! $banner->sub_text_content !!}
                                                </p>
                                            @else
                                                <p class="wow fadeInUp" data-wow-delay="0.25s">
                                                    Pioneers in Premium Building Materials & ACP Solutions
                                                </p>
                                            @endif
                                        </div>

                                        <div class="hero-btn wow fadeInUp" data-wow-delay="0.4s">
                                            <a href="#" class="btn-default"><span>explore more</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif

            @endforeach

                {{-- Else fallback to static banners --}}
                @else
                    <div class="swiper-slide">
                        <div class="hero-slide">
                            <div class="hero-slider-image">
                                <img class="images-desk" src="{{ asset('assets/images/banner/hero-bg1.jpg') }}" alt="">
                                <img class="images-mobile" src="{{ asset('assets/images/banner/mobile1.jpg') }}" alt="">
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="hero-content">
                                            <div class="section-title dark-section">
                                                <h3 class="wow fadeInUp">welcome our industry</h3>
                                                <h1 class="text-anime-style-2" data-cursor="-opaque">
                                                    Excellence in <span>Building Materials</span>
                                                </h1>
                                                <p class="wow fadeInUp" data-wow-delay="0.25s">
                                                    Pioneers in Premium Building Materials & ACP Solutions
                                                </p>
                                            </div>
                                            <div class="hero-btn wow fadeInUp" data-wow-delay="0.4s">
                                                <a href="#" class="btn-default"><span>explore more</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="hero-slide">
                            <div class="hero-slider-image">
                                <img class="images-desk" src="{{ asset('assets/images/banner/hero-bg3.jpg') }}" alt="">
                                <img class="images-mobile" src="{{ asset('assets/images/banner/mobile2.jpg') }}" alt="">
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="hero-content">
                                            <div class="section-title dark-section">
                                                <h3 class="wow fadeInUp">welcome our industry</h3>
                                                <h1 class="text-anime-style-2" data-cursor="-opaque">
                                                    Elevating Exteriors, <span>Defining Interiors</span>
                                                </h1>
                                                <p class="wow fadeInUp" data-wow-delay="0.25s">
                                                    Crafting Excellence in Every Panel Innovation, Quality & Design That Lasts
                                                </p>
                                            </div>
                                            <div class="hero-btn wow fadeInUp" data-wow-delay="0.4s">
                                                <a href="#" class="btn-default"><span>explore more</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

            </div>
            <div class="hero-pagination"></div>
        </div>
    </div>



    <!-- About Us Start -->
    <div class="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <figure class="image-anime reveal">
                        <img src="{{ asset('assets/images/about/about.jpg') }}" class="img-fluid" alt="">
                    </figure>
                </div>

                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">about us</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">4MANN Group 30+ Years of <span>Innovation in Building Materials & Design</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">4MANN Group a leading business house with multifaceted activities like manufacturing, marketing and distribution of new age building materials and other products also make best effort to use it's more than 30 years of experience in building industry for enhancing the exterior and interior decorations.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">We M/s. 4MANN Industries Pvt. Ltd. are primarily into manufacturing and marketing of Premium and Exclusive range of Aluminum Composite Panels (ACP) under the brand names 4MANN and ARROWBONDRin India and abroad and is regarded as one of the market leaders in the ACP Industry.</p>
                        </div>

                        <div class="about-content-body">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="about-list-btn">
                                        <div class="about-content-btn wow fadeInUp" data-wow-delay="0.75s">
                                            <a href="#" class="btn-default"><span>learn more</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Our Services section simplified (rest identical to original) -->
    @include('pages.partials.home-sections')
@endsection

