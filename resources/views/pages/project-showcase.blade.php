 @extends('main-layout.app')

@section('content')
<div class="page-header parallaxie breadcumb-area" data-desktop="{{ asset($project->project_image) }}" data-mobile="{{ asset($project->project_image) }}">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">{{ $project->project_title }}</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $project->project_title }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Project Single Start -->
    <div class="page-project-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Project Sidebar Start -->
                    <div class="project-sidebar">
                        <!-- Project detail Box Start -->
                        <div class="project-detail-box">
                            <!-- Project Detail Title Start -->
                            <div class="project-detail-title">
                                <h3>project details</h3>
                            </div>
                            <!-- Project Detail Title End -->

                            <div class="project-detail-list">
                                <!-- Project Detail Item Start -->
                                <div class="project-detail-item">
                                    <div class="icon-box">
                                        <img src="{{ asset('assets/images/project-details-icon/sidebar-project-detail-1.svg') }}" alt="">
                                    </div>
                                    <div class="project-detail-content">
                                        <h3>client:</h3>
                                        <p>{{ $project->project_client }}</p>
                                    </div>
                                </div>
                                <!-- Project Detail Item End -->

                                <!-- Project Detail Item Start -->
                                <div class="project-detail-item">
                                    <div class="icon-box">
                                        <img src="{{ asset('assets/images/project-details-icon/sector.svg') }}" alt="">
                                    </div>
                                    <div class="project-detail-content">
                                        <h3>Sector:</h3>
                                        <p>{{ $project->project_sector }}</p>
                                    </div>
                                </div>
                                <!-- Project Detail Item End -->

                                <!-- Project Detail Item Start -->
                                <div class="project-detail-item">
                                    <div class="icon-box">
                                        <img src="{{ asset('assets/images/project-details-icon/product.svg') }}" alt="">
                                    </div>
                                    <div class="project-detail-content">
                                        <h3>Product:</h3>
                                        <p>{{ $project->product->product_title }}</p>
                                        {{-- <p>CORTEN STEEL (MA-652)</p> --}}
                                    </div>
                                </div>
                                <!-- Project Detail Item End -->

                                <!-- Project Detail Item Start -->
                                <div class="project-detail-item">
                                    <div class="icon-box">
                                        <img src="{{ asset('assets/images/project-details-icon/sidebar-project-detail-5.svg') }}" alt="">
                                    </div>
                                    <div class="project-detail-content">
                                        <h3>location:</h3>
                                        <p>{{ $project->project_location }}</p>
                                    </div>
                                </div>
                                <!-- Project Detail Item End -->
                            </div>
                        </div>
                        <!-- Project detail Box End -->

                    </div>
                    <!-- Project Sidebar End -->
                </div>

                <div class="col-lg-8">
                    <!-- Project Single Content Start -->
                    <div class="project-single-content">

                        <!-- Project Entry Start -->
                        <div class="project-entry">
                            <!-- Project Info Start -->
                            <div class="project-info">
                                <h2 class="text-anime-style-2">Project <span>overview</span></h2>
                                <p class="wow fadeInUp" data-wow-delay="0.2s">{{ $project->project_description }}</p>
                                {{-- <p class="wow fadeInUp" data-wow-delay="0.4s">The hotel is a 2.5-hour drive from Mumbai and Surat, making it an ideal location for a weekend getaway as you enjoy the road trip on your way to the hotel! With the largest banquet facility in the area, two bars, two specialty restaurants, luxury suites, and a meandering pool, this hotel has everything you need.</p> --}}
                            </div>
                            <!-- Project Info End -->


                        </div>
                        <!-- Project Entry End -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Project Single End -->


    <!-- Photo Gallery Section Start -->
    <div class="pb-100">
        <div class="container">

            <!-- gallery section start -->
            <div class="row">
                <!-- Section Title Start -->

                <div class="col-lg-12 text-center mb-5">
                    <div class="section-title">
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Project <span>Gallery</span></h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <!-- Gallery Section -->
                    <div class="row">
                        <div class="col-lg-4 col-6">
                            <!-- image gallery start -->
                            <div class="project-gallery wow fadeInUp" data-cursor-text="View">
                                <a href="{{ asset('storage/' . $project->project_image) }}" class="image-anime" data-fancybox="gallery" data-caption="{{ $project->project_title }}">
                                    <img src="{{ asset('storage/' . $project->project_image) }}" alt="Image Gallery">
                                </a>
                            </div>
                            <!-- image gallery end -->
                        </div>

                        <div class="col-lg-4 col-6">
                            <!-- image gallery start -->
                            <div class="project-gallery wow fadeInUp" data-cursor-text="View">
                                <a href="{{ asset('storage/' . $project->project_image) }}" class="image-anime" data-fancybox="gallery" data-caption="{{ $project->project_title }}">
                                    <img src="{{ asset('assets/images/deltin/12.png') }}" alt="Image Gallery">
                                </a>
                            </div>
                            <!-- image gallery end -->
                        </div>

                        <div class="col-lg-4 col-6">
                            <!-- image gallery start -->
                            <div class="project-gallery wow fadeInUp" data-cursor-text="View">
                                <a href="{{ asset('storage/' . $project->project_image) }}" class="image-anime" data-fancybox="gallery" data-caption="{{ $project->project_title }}">
                                    <img src="{{ asset('assets/images/deltin/13.png') }}" alt="Image Gallery">
                                </a>
                            </div>
                            <!-- image gallery end -->
                        </div>

                        <div class="col-lg-4 col-6">
                            <!-- image gallery start -->
                            <div class="project-gallery wow fadeInUp" data-cursor-text="View">
                                <a href="{{ asset('storage/' . $project->project_image) }}" class="image-anime" data-fancybox="gallery" data-caption="{{ $project->project_title }}">
                                    <img src="{{ asset('assets/images/deltin/14.png') }}" alt="Image Gallery">
                                </a>
                            </div>
                            <!-- image gallery end -->
                        </div>

                        <div class="col-lg-4 col-6">
                            <!-- image gallery start -->
                            <div class="project-gallery wow fadeInUp" data-cursor-text="View">
                                <a href="{{ asset('storage/' . $project->project_image) }}" class="image-anime" data-fancybox="gallery" data-caption="{{ $project->project_title }}">
                                    <img src="{{ asset('assets/images/deltin/15.png') }}" alt="Image Gallery">
                                </a>
                            </div>
                            <!-- image gallery end -->
                        </div>

                        <div class="col-lg-4 col-6">
                            <!-- image gallery start -->
                            <div class="project-gallery wow fadeInUp" data-cursor-text="View">
                                <a href="{{ asset('storage/' . $project->project_image) }}" class="image-anime" data-fancybox="gallery" data-caption="{{ $project->project_title }}">
                                    <img src="{{ asset('assets/images/deltin/16.png') }}" alt="Image Gallery">
                                </a>
                            </div>
                            <!-- image gallery end -->
                        </div>

                        <div class="col-lg-4 col-6">
                            <!-- image gallery start -->
                            <div class="project-gallery wow fadeInUp" data-cursor-text="View">
                                <a href="{{ asset('storage/' . $project->project_image) }}" class="image-anime" data-fancybox="gallery" data-caption="{{ $project->project_title }}">
                                    <img src="{{ asset('assets/images/deltin/17.png') }}" alt="Image Gallery">
                                </a>
                            </div>
                            <!-- image gallery end -->
                        </div>

                        <div class="col-lg-4 col-6">
                            <!-- image gallery start -->
                            <div class="project-gallery wow fadeInUp" data-cursor-text="View">
                                <a href="{{ asset('storage/' . $project->project_image) }}" class="image-anime" data-fancybox="gallery" data-caption="{{ $project->project_title }}">
                                    <img src="{{ asset('assets/images/deltin/18.png') }}" alt="Image Gallery">
                                </a>
                            </div>
                            <!-- image gallery end -->
                        </div>

                    </div>

                </div>


            </div>
            <!-- gallery section end -->
        </div>
    </div>
    <!-- Photo Gallery Section End -->

    <!-- Our Testimonial Section Start -->
    <div class="our-testimonial">
        <div class="container">
            <div class="row align-items-center">


                <div class="col-lg-12">
                    <!-- Our Testimonial Content Start -->
                    <div class="our-testimonial-content ">
                        <!-- Section Title Start -->
                        <div class="section-title mb-30">
                            <h3 class="wow fadeInUp">Our client say</h3>
                            <h2 class="text-anime-style-3 " data-cursor="-opaque">What our satisfied clients <span>are saying</span></h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Testimonial Slider Start -->
                        <div class="testimonial-slider">
                            <div class="swiper">
                                <div class="swiper-wrapper" data-cursor-text="Drag">
                                    <!-- Testimonial Slide Start -->
                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="testimonial-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>

                                            <div class="testimonial-content">
                                                <p>“4MANN ACPs strike the perfect balance between style and strength. The finish options are stunning, and the durability is unmatched!”</p>
                                            </div>

                                            <div class="testimonial-body">
                                                <div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="{{ asset('assets/images/client/client.png') }}" alt="">
                                                    </figure>
                                                </div>
                                                <div class="author-content">
                                                    <h3>Riya Biradar</h3>
                                                    <p>Homeowner</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Testimonial Slide End -->

                                    <!-- Testimonial Slide Start -->
                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="testimonial-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>

                                            <div class="testimonial-content">
                                                <p>“Lightweight panels, easy installation, and top-notch quality—4MANN has made our projects smoother and more efficient.”</p>
                                            </div>

                                            <div class="testimonial-body">
                                                <div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="{{ asset('assets/images/client/client.png') }}" alt="">
                                                    </figure>
                                                </div>
                                                <div class="author-content">
                                                    <h3>Seema</h3>
                                                    <p>senior engineer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Testimonial Slide End -->
                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="testimonial-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>

                                            <div class="testimonial-content">
                                                <p>“Our office got a complete facelift with 4MANN ACPs. Modern, sleek, and weather-resistant — exactly what we needed!”</p>
                                            </div>

                                            <div class="testimonial-body">
                                                <div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="{{ asset('assets/images/client/client.png') }}" alt="">
                                                    </figure>
                                                </div>
                                                <div class="author-content">
                                                    <h3>Shital</h3>
                                                    <p>senior engineer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="testimonial-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>

                                            <div class="testimonial-content">
                                                <p>“The vibrant ACP panels from 4MANN elevated our storefront look. Great customer support and excellent product!”</p>
                                            </div>

                                            <div class="testimonial-body">
                                                <div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="{{ asset('assets/images/client/client.png') }}" alt="">
                                                    </figure>
                                                </div>
                                                <div class="author-content">
                                                    <h3>Anita</h3>
                                                    <p>senior engineer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="testimonial-btn">
                                    <div class="testimonial-button-prev"></div>
                                    <div class="testimonial-button-next"></div>
                                </div> -->
                            </div>
                        </div>
                        <!-- Testimonial Slider End -->
                    </div>
                    <!-- Our Testimonial Content End -->
                </div>


            </div>
        </div>
    </div>
    <!-- Our Testimonial Section End -->
    @endsection
