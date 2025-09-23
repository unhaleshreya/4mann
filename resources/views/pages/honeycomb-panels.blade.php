
   @extends('main-layout.app')

@section('content')
<!-- Page Header Start -->
    <div class="page-header parallaxie breadcumb-area" data-desktop="assets/images/breadcrumb/Honeycomb-panel.jpg" data-mobile="assets/images/breadcrumb/Honeycomb-panel-mobile.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">4MANN Honeycomb Panels </h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">4MANN Honeycomb Panels</li>
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
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title wow fadeInUp text-black">

                        <div class="row mt-3 mb-3 align-items-center">
                            <div class="col-lg-6">
                                <h2 class="newsection-title">Engineered for Strength. Designed for Excellence.</h2>
                                <p>4MANN Honeycomb Panels are a next-generation cladding solution crafted for projects that demand the perfect balance of lightweight structure, exceptional strength, and premium aesthetics. Developed with aerospace-grade technology, our panels feature a unique aluminium honeycomb core sandwiched between high-grade aluminium skins — delivering unmatched durability, impact resistance, and fire safety.</p>
                            </div>
                            <div class="col-lg-6">
                                <img src="assets/images/fr-acp/img-01.png" class="img-fluid" />
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
                                                        <img src="assets/images/honeycomb/image-1.jpg" alt="{{ $subcategory->name }}">
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
                        <h2 class="newsection-title">Why Choose 4MANN Honeycomb Panels?</h2>
                        <ul class="about-list">
                            <li><b>Ultra-Lightweight, Super Strong</b><br>
                                The honeycomb structure mimics natural hexagonal geometry, ensuring high stiffness with minimal weight. Ideal for high-rise façades and ceilings without adding structural load.
                            </li>
                            <li><b>Perfect Flatness </b><br>
                                The even distribution of stress across the core guarantees absolute flatness — eliminating surface undulations even in large panel formats.
                            </li>
                            <li><b>Fire-Resistant by Design</b><br>
                                Crafted with an aluminium honeycomb core and aluminium skins, 4MANN Honeycomb Panels are inherently non-combustible and do not emit toxic smoke or flaming droplets. This all-metal composition ensures excellent fire safety, meeting international standards such as EN 13501-1 Class A2-s1, d0, without the need for mineral fillers.
                            </li>
                            <li><b>Weatherproof & Impact Resistant</b><br>
                                High-performance bonding and sealed edges make them highly resistant to moisture, wind, and impact — perfect for extreme climates.
                            </li>
                            <li><b>Customizable Aesthetics</b><br>
                                Available in a wide range of finishes, textures, and custom shades. Create your signature design without compromise.
                            </li>
                            <li><b>100% Sustainable & Recyclable</b><br>
                                Composed entirely of aluminium, 4MANN Honeycomb Panels are fully recyclable at end-of-life — supporting green building goals and environmentally responsible construction.
                            </li>
                        </ul>
                         <div class="row mt-50">
                            <div class="col-lg-4">
                                <figure class="image-anime reveal">
                                    <img src="assets/images/honeycomb/image-1.jpg" class="img-fluid border-radius-36" />
                                </figure>
                            </div>
                            <div class="col-lg-4">
                                <figure class="image-anime reveal">
                                    <img src="assets/images/honeycomb/image-2.jpg" class="img-fluid border-radius-36" />
                                </figure>
                            </div>
                            <div class="col-lg-4">
                                <figure class="image-anime reveal">
                                    <img src="assets/images/honeycomb/image-3.jpg" class="img-fluid border-radius-36" />
                                </figure>
                            </div>
                        </div>
                        <h2 class="newsection-title mt-50">Technical Composition</h2>
                        <div class="wow fadeInUp table-responsive">
                            <table style="width:100%">
                                <tr>
                                    <th>Specification</th>
                                    <th>Standard</th>
                                    <th>Tolerance</th>
                                </tr>
                                <tr>
                                    <td>Top Skin</td>
                                    <td>0.7 mm – 1.0 mm Aluminium Alloy (3003/5005)</td>
                                    <td>±0.05 mm</td>
                                </tr>
                                <tr>
                                    <td>Core</td>
                                    <td>Aluminium Honeycomb (3003 grade), Cell size: 6 mm to 20 mm</td>
                                    <td>±1 mm on overall panel</td>
                                </tr>
                                <tr>
                                    <td>Bottom Skin</td>
                                    <td>0.7 mm – 1.0 mm Aluminium Alloy (3003/5005)</td>
                                    <td>±0.05 mm</td>
                                </tr>
                                <tr>
                                    <td>Coating</td>
                                    <td>PVDF / FEVE with 20–30 microns top coat</td>
                                    <td>±2 microns</td>
                                </tr>
                                <tr>
                                    <td>Panel Thickness Options</td>
                                    <td>15 mm, 20 mm, 25 mm</td>
                                    <td>±0.2 mm</td>
                                </tr>
                                <tr>
                                    <td>Width</td>
                                    <td>Standard: 1220 mm, 1500 mm</td>
                                    <td>±2 mm</td>
                                </tr>
                                <tr>
                                    <td>Length</td>
                                    <td>Up to 6000 mm</td>
                                    <td>±5 mm</td>
                                </tr>
                                <tr>
                                    <td>Weight</td>
                                    <td>~4–6 kg/m² depending on configuration</td>
                                    <td>±0.3 kg/m²</td>
                                </tr>


                            </table>
                        </div>

                        <!-- <div class="custom-slider mt-5" aria-label="Before and after image slider">
                            <div class="custom-img-wrapper">
                                <img src="https://raw.githubusercontent.com/ThomasEgMatthiesen/ThomasEgMatthiesen/refs/heads/main/hosted-assets/before.png" alt="Before">
                            </div>
                            <div class="custom-img-wrapper custom-after">
                                <img src="https://raw.githubusercontent.com/ThomasEgMatthiesen/ThomasEgMatthiesen/refs/heads/main/hosted-assets/after.png" alt="After">
                            </div>
                            <div class="custom-line"></div>
                            <input class="custom-slider-range" type="range" min="0" max="100" value="50">
                        </div> -->

                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

        </div>
    </div>
    @endsection
