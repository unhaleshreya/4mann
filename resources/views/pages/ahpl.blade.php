@extends('main-layout.app')

@section('content') <!-- Page Header Start -->
    <div class="page-header parallaxie breadcumb-area" data-desktop="{{ asset('assets/images/breadcrumb/AHPL.jpg') }}" data-mobile="{{ asset('assets/images/breadcrumb/AHPLmobile.jpg') }}">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">4MANN HPL </h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">4MANN HPL</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="page-blog">
        <div class="container">
            <div class="row pb-100">
                <div class="col-lg-12">
                    <div class="footer-contact-circle download-brochure mb-30">
                        <a href="{{ asset('assets/images/resources/Catalogs/4 MannHPL.pdf') }}" target="_blank"> <img src="{{ asset('assets/images/icon/brochure.svg') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title wow fadeInUp text-black">
                        <h2 class="newsection-title">Redefining Durability. Elevating Design.</h2>
                        <p>4MANN HPL (Aluminium High-Pressure Laminate) is a premium exterior-grade cladding solution engineered for high-performance façades. Combining cutting-edge technology, superior materials, and striking aesthetics, HPL offers a robust alternative to traditional HPL sheets, especially in demanding environments.</p>

                        <!-- Subcategories Section -->
                        @if(isset($subcategories) && $subcategories->count() > 0)
                        <div class="wow fadeInUp mb-5">
                            <div class="section-title">
                                <h2 class="text-anime-style-2">Subcategories</h2>
                            </div>
                            <div class="row">
                                @foreach($subcategories as $subcategory)
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="post-item wow fadeInUp">
                                        <div class="post-featured-image">
                                            <figure>
                                                <a href="{{ route('subcategory.page', $subcategory->slug ?? $subcategory->id) }}" class="image-anime">
                                                    @if($subcategory->sub_category_img)
                                                        <img src="{{ asset($subcategory->sub_category_img) }}" alt="{{ $subcategory->name }}">
                                                    @else
                                                        <img src="{{ asset('assets/images/hpl/image-1.jpg') }}" alt="{{ $subcategory->name }}">
                                                    @endif
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="post-item-body">
                                            <div class="post-item-content">
                                                <h2><a href="{{ route('subcategory.page', $subcategory->slug ?? $subcategory->id) }}">{{ $subcategory->name }}</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-lg-6">
                                <h2 class="newsection-title mt-4">Where Can You Use 4MANN HPL?</h2>
                                <p>Ideal for:</p>
                                <ul class="about-list">
                                    <li>Building Façades & Elevations</li>
                                    <li>Exterior Wall Cladding</li>
                                    <li>Gate & Compound Wall Cladding</li>
                                    <li>Canopies, Balcony Cladding, Railings</li>
                                    <li>Institutional & Commercial Buildings</li>
                                    <li>High-Rise Structures & Bungalows</li>
                                </ul>

                            </div>
                            <div class="col-lg-6">
                                <figure class="image-anime reveal">
                                    <img src="{{ asset('assets/images/fr-acp/img-03.jpg') }}" class="img-fluid " />
                                </figure>
                            </div>
                        </div>


                        <!-- <ul class="about-list">
                            <li>Aluminium-Based Core: Offers higher strength, zero swelling, and better thermal resistance than traditional paper-core HPL.</li>
                            <li>Fire-Retardant Grades Available: Suitable for sensitive applications like hospitals, kitchens, and public buildings.</li>
                            <li>Weatherproof: Withstands rain, sunlight, temperature shifts, and humidity without warping or discoloration.</li>
                            <li>Cost-Efficient: Saves 30–50% over conventional HPL in the long term due to low maintenance and longer life.</li>
                            <li>Fully Recyclable: Sustainable, eco-friendly product supporting green construction goals.</li>
                            <li>Zero Fumes or VOCs: Ideal for interior and sensitive areas with zero off-gassing.</li>
                            <li>Borer, Fungi & Termite Resistant: Perfect for coastal and high-humidity zones.</li>
                            <li>LEED Compliance: Helps in qualifying for green building certifications.</li>
                            <li>10-Year Warranty: Confidence backed by long-term performance assurance.</li>
                            <li>Available in All 4MANN Finishes: Consistent design language across your entire project.</li>
                        </ul> -->

                    </div>
                    <!-- Section Title End -->
                    <div class="mt-50 wow fadeInUp">
                        <div class="section-title">
                                <h2 class="text-anime-style-2 ">Smart Features That   <span class="newsection-subheadings">Set 4MANN HPL Apart</span></h2>
                            </div>

                        <div class="our-features-boxes ">
                            <div class="our-features-item">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/ahpl/Aluminium-Based Core.png') }}" alt="">
                                </div>
                                <div class="features-item-content">
                                    <p>Aluminium-Based Core</p>
                                </div>
                            </div>
                            <div class="our-features-item">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/ahpl/Fire-Retardant Grades Available.png') }}" alt="">
                                </div>
                                <div class="features-item-content">
                                    <p>Fire-Retardant Grades Available</p>
                                </div>
                            </div>
                            <div class="our-features-item">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/ahpl/Weatherproof.png') }}" alt="">
                                </div>
                                <div class="features-item-content">
                                    <p>Weatherproof</p>
                                </div>
                            </div>
                            <div class="our-features-item">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/ahpl/Cost-Efficient.png') }}" alt="">
                                </div>
                                <div class="features-item-content">
                                    <p>Cost-Efficient</p>
                                </div>
                            </div>
                            <div class="our-features-item">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/ahpl/Fully Recyclable.png') }}" alt="">
                                </div>
                                <div class="features-item-content">
                                    <p>Fully Recyclable</p>
                                </div>
                            </div>

                            <div class="our-features-item">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/ahpl/Zero Fumes or VOCs.png') }}" alt="">
                                </div>
                                <div class="features-item-content">
                                    <p>Zero Fumes or VOCs</p>
                                </div>
                            </div>
                            <div class="our-features-item">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/ahpl/Borer, Fungi & Termite Resistant.png') }}" alt="">
                                </div>
                                <div class="features-item-content">
                                    <p>Borer, Fungi & Termite Resistant</p>
                                </div>
                            </div>
                            <div class="our-features-item">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/ahpl/LEED Compliance.png') }}" alt="">
                                </div>
                                <div class="features-item-content">
                                    <p>LEED Compliance</p>
                                </div>
                            </div>
                            <div class="our-features-item">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/ahpl/10-Year Warranty.png') }}" alt="">
                                </div>
                                <div class="features-item-content">
                                    <p>10-Year Warranty</p>
                                </div>
                            </div>
                            <div class="our-features-item">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/ahpl/10.png') }}" alt="">
                                </div>
                                <div class="features-item-content">
                                    <p>Available in All 4MANN Finishes</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row mt-50">
                        <div class="col-lg-4">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('assets/images/hpl/image-1.jpg') }}" class="img-fluid border-radius-36" />
                            </figure>
                        </div>
                        <div class="col-lg-4">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('assets/images/hpl/image-2.jpg') }}" class="img-fluid border-radius-36" />
                            </figure>
                        </div>
                        <div class="col-lg-4">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('assets/images/hpl/image-3.jpg') }}" class="img-fluid border-radius-36" />
                            </figure>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
