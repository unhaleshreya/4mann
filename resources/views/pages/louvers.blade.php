 @extends('main-layout.app')

@section('content')
<!-- Page Header Start -->
    <div class="page-header parallaxie breadcumb-area" data-desktop="{{ asset('assets/images/breadcrumb/Louvers.jpg') }}" data-mobile="{{ asset('assets/images/breadcrumb/Louvers-mobile.jpg') }}">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Aluminium Composite Louvers – METAFLUTE</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Aluminium Composite Louvers – METAFLUTE</li>
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
               @include('includes.downloadbroacer')
                <div class="col-lg-12 mt-2">
                    <!-- Section Title Start -->
                    <div class="section-title wow fadeInUp text-black">
                        <div class="row">
                             <div class="col-lg-6">
                                 <h2 class="newsection-title">A Bold Statement in Facade Design</h2>
                                <p>4MANN introduces <b>METAFLUTE,</b> a premium range of aluminium composite louvers that blend striking aesthetics with high performance. Designed for both <b>interior</b> and <b>exterior</b> applications, METAFLUTE adds depth, texture, and sophistication to any architectural project—whether it's a modern high-rise, a commercial landmark, or a bespoke residential space.</p>

                                <h2 class="newsection-title mt-5">Why METAFLUTE?</h2>
                                <p>Crafted with precision from high-quality aluminium composite material, METAFLUTE is engineered for <b>style, durability, and easy installation. </b>Its unique fluted design brings a dynamic visual rhythm to facades, ceilings, and partitions—transforming spaces into statements.</p>

                            </div>
                            <div class="col-lg-6">
                               <figure class="image-anime reveal">
                                    <img src="{{ asset('assets/images/louvers/section.jpg') }}" class="img-fluid border-radius-36" />
                                </figure>
                            </div>
                        </div>

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
                                                        <img src="{{ asset('storage/' . $subcategory->sub_category_img) }}" alt="{{ $subcategory->name }}">
                                                    @else
                                                        <img src="{{ asset('assets/images/louvers/image-1.jpg') }}" alt="{{ $subcategory->name }}">
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

                          <div class="mt-50 wow fadeInUp">
                            <div class="section-title">
                                <h2 class="text-anime-style-2 "> Key  <span class="newsection-subheadings">Benefits</span></h2>
                            </div>

                            <div class="our-features-boxes ">
                                <div class="our-features-item">
                                    <div class="icon-box">
                                        <img src="{{ asset('assets/images/acp/Architectural.png') }}" alt="">
                                    </div>
                                    <div class="features-item-content">
                                        <p>Architectural Elegance </p>
                                    </div>
                                </div>
                                <div class="our-features-item">
                                    <div class="icon-box">
                                        <img src="{{ asset('assets/images/acp/Weather-uv-resistence.png') }}" alt="">
                                    </div>
                                    <div class="features-item-content">
                                        <p>Weather & UV Resistance </p>
                                    </div>
                                </div>
                                <div class="our-features-item">
                                    <div class="icon-box">
                                        <img src="{{ asset('assets/images/acp/lightwet-yet -strong.png') }}" alt="">
                                    </div>
                                    <div class="features-item-content">
                                        <p>Lightweight yet Strong</p>
                                    </div>
                                </div>
                                <div class="our-features-item">
                                    <div class="icon-box">
                                        <img src="{{ asset('assets/images/acp/low-maintaineneccce.png') }}" alt="">
                                    </div>
                                    <div class="features-item-content">
                                        <p>Low Maintenance</p>
                                    </div>
                                </div>
                                <div class="our-features-item">
                                    <div class="icon-box">
                                        <img src="{{ asset('assets/images/acp/Sustainable.png') }}" alt="">
                                    </div>
                                    <div class="features-item-content">
                                        <p>Sustainable Choice</p>
                                    </div>
                                </div>

                                <div class="our-features-item">
                                    <div class="icon-box">
                                        <img src="{{ asset('assets/images/acp/Customisable-lenghts.png') }}" alt="">
                                    </div>
                                    <div class="features-item-content">
                                        <p>Customisable Lengths</p>
                                    </div>
                                </div>


                            </div>
                        </div>




                        <h4 class="newsection-subheadings newsection-title mt-5">Features</h4>
                        <ul class="about-list">
                            <li><b>Premium ACP Construction –</b>Combines lightweight aluminium with robust core for stability.</li>
                            <li><b>Wide Range of Finishes –</b>Solid colours, metallics, woodgrains, and stone textures to match any design.</li>
                            <li><b>Fire-Retardant Options –</b>Available in FR-rated variants for enhanced safety.</li>
                            <li><b>Precision Manufacturing –</b>Ensures uniformity in profile, shade, and surface finish. </li>
                            <li><b>Indoor & Outdoor Compatibility – </b>Ideal for facades, soffits, ceilings, and partitions.</li>

                        </ul>


                        <h4 class="newsection-subheadings newsection-title mt-5">Applications </h4>
                        <ul class="about-list">
                            <li><b>Exterior Cladding – </b>Create striking, ventilated building facades.</li>
                            <li><b>Balcony & Terrace Paneling –</b>Stylish, weatherproof finish for open spaces.</li>
                            <li><b>Roof & Canopy Detailing –</b>Adds texture and protection overhead.</li>
                            <li><b>Interior Feature Walls –</b>Perfect for lobbies, reception areas, and corporate spaces.</li>
                            <li><b>Gate, Fence & Railing Panels –</b>Durable, decorative, and low-maintenance.</li>
                            <li><b>Accent & Highlighter Panels –</b>Bring visual interest to plain surfaces.</li>
                        </ul>

                        <h2 class="newsection-title mt-5">METAFLUTE – Designed for Architects, Built for Longevity</h2>
                        <p>Whether you’re designing a luxury residence, a commercial complex, or a public landmark, METAFLUTE offers the perfect balance of <b>functionality, style, and sustainability.</b> Backed by 4MANN’s expertise in aluminium composite solutions, it’s more than a product—it’s an architectural upgrade.</p>

                        <div class="row mt-50">
                            <div class="col-lg-4">
                                <figure class="image-anime reveal">
                                    <img src="{{ asset('assets/images/louvers/image-1.jpg') }}" class="img-fluid border-radius-36" />
                                </figure>
                            </div>
                            <div class="col-lg-4">
                                <figure class="image-anime reveal">
                                    <img src="{{ asset('assets/images/louvers/image-2.jpg') }}" class="img-fluid border-radius-36" />
                                </figure>
                            </div>
                            <div class="col-lg-4">
                                <figure class="image-anime reveal">
                                    <img src="{{ asset('assets/images/louvers/image-3.jpg') }}" class="img-fluid border-radius-36" />
                                </figure>
                            </div>
                        </div>


                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

        </div>
    </div>
@endsection
