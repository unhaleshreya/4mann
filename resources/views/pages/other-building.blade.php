  @extends('main-layout.app')

@section('content')
 <!-- Page Header Start -->
    <div class="page-header parallaxie breadcumb-area" data-desktop="{{ asset('assets/images/breadcrumb/other.jpg') }}" data-mobile="{{ asset('assets/images/breadcrumb/Othermobile.jpg') }}">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Other Building Materials</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Other Building Materials</li>
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
            <div class="row pb-100 justify-content-center">
                <div class="col-lg-7 col-xl-7 ">
                    <img src="{{ asset('assets/images/genoa.png') }}" class="img-fluid mb-30">
                    <!-- <div class="footer-contact-circle download-brochure">
                        <a href="assets/images/resources/Catalogs/4Mann Product Catalogue - 1.3.0 - E.pdf" target="_blank"> <img src="assets/images/icon/brochure.svg" alt=""></a>
                    </div> -->
                </div>
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title wow fadeInUp text-black">
                        <h2 class="newsection-title">Premium Acrylic Laminates & Louvers by Genoa</h2>
                        <p>At 4MANN Group, our vision goes beyond Aluminium Composite Panels. We are committed to delivering a complete range of premium building material solutions that inspire design and redefine durability. As part of this commitment, we proudly introduce Genoa – our exclusive brand offering high-quality acrylic laminates and decorative interior louvers for contemporary spaces.</p>

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
                                                        <img src="{{ asset( $subcategory->sub_category_img) }}" alt="{{ $subcategory->name }}">
                                                    @else
                                                        <img src="{{ asset('assets/images/genoa.png') }}" alt="{{ $subcategory->name }}">
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
                        <h2 class="newsection-title mt-5">About Genoa</h2>
                        <p>Genoa is a premium brand under the 4MANN Group umbrella, specializing in 1.5 mm anti-scratch acrylic laminates and stylish interior louvers. Designed exclusively for indoor spaces, Genoa products blend elegance with long-lasting performance—ideal for creating modern, sophisticated environments in homes, offices, retail outlets, and hospitality projects.</p>
                        <h2 class="newsection-title mt-5">Key Products & Features</h2>
                        <p><b>1.5 mm Anti-Scratch Acrylic Laminates</b></p>
                        <ul class="about-list">
                            <li> <b>Durable Finish:</b> Resists daily wear while maintaining a flawless surface.</li>
                            <li> <b>Wide Finish Range:</b> Marble, wood grain, and striped designs to match any theme.</li>
                            <li> <b>Luxurious Appeal:</b> Glossy, tactile finishes that enhance the visual impact of interiors.</li>
                            <li> <b>Easy Maintenance:</b> Smooth, non-porous surfaces for effortless cleaning.</li>
                        </ul>
                        <h2 class="newsection-title mt-5">Decorative Interior Louvers</h2>
                        <ul class="about-list">
                            <li><b>Stylish & Functional:</b> Adds texture, depth, and character to walls and ceilings.</li>
                            <li><b>High-Quality Construction:</b> Precision-engineered for a premium finish and durability indoors.</li>
                            <li><b>Versatile Applications:</b> Perfect for wall cladding, partitions, ceiling highlights, and feature walls.</li>
                            <li><b>Multiple Designs & Shades:</b> Available in various profiles, colours, and finishes to suit diverse interior styles.</li>
                        </ul>
                        <h2 class="newsection-title mt-5">Applications</h2>
                        <ul class="about-list">
                            <li><b>Acrylic Laminates:</b>
                                <ul>
                                    <li>Kitchen cabinets, wardrobes, wall panels, and furniture surfaces.</li>
                                    <li>TV units, decorative partitions, and reception counters.</li>
                                </ul>
                            </li>
                            <li><b>Interior Louvers:</b>
                                <ul>
                                    <li>Accent walls and room dividers.</li>
                                    <li>Ceiling design elements and backdrop highlights.</li>
                                    <li>Stylish cladding for columns and feature areas.</li>
                                </ul>
                            </li>
                        </ul>
                        <h2 class="newsection-title mt-5">Why Choose Genoa?</h2>
                        <p>With Genoa, you get style without compromise. Every laminate and louver is crafted with cutting-edge technology and stringent quality checks, ensuring interiors that are visually stunning, functionally superior, and built to last.</p>
                        <h2 class="newsection-title mt-5">Explore the Full Range</h2>
                        <p>Transform your interiors with Genoa’s premium laminates and louvers—where luxury meets durability.</p>
                        <a href="https://www.genoalam.com" target="_blank">Visit www.genoalam.com →</a>
                        <h2 class="newsection-title mt-5">4MANN Group – Shaping the Future of Building Materials</h2>
                        <p>From world-class ACP solutions to premium interior laminates and louvers, we are your trusted partner for innovative and enduring surface solutions.</p>

                    </div>
                    <!-- Section Title End -->
                </div>
            </div>
        </div>
    </div>
    @endsection
