
    @extends('main-layout.app')

@section('content') <!-- Page Header Start -->
    <div class="page-header parallaxie breadcumb-area" data-desktop="assets/images/breadcrumb/Aluminium.jpg" data-mobile="assets/images/breadcrumb/Aluminiummobile.jpg">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Aluminium Composite Panels</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Aluminium Composite Panels</li>
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
                    <div class="section-title">
                        <p class="wow fadeInUp">Our ACP Aluminium sheet is crafted with two high-strength aluminium solid sheets, bounded to a core material typically made from Low-Density Polyethylene (LDPE), Fire-Retardant (FR) mineral-filled materials, or advanced metal core. It features three coats of PVDF and an additional layer of protective film. All these layers are bounded together using a strong adhesive. The ACP sheet then undergoes more than 50 stringent quality control tests using cutting-edge machinery imported from Germany and Japan. Third-Party certifications awarded to our products demonstrate our dedication to providing exceptional quality.</p>


                        <div class="row mt-5 wow fadeInUp">
                            <div class="col-lg-12 text-center">
                                <img src="assets/images/acp/acp.jpeg" class="img-fluid" />
                            </div>
                        </div>
                        <div class="mt-50 wow fadeInUp">
                            <div class="section-title">
                                <h2 class="text-anime-style-2 "> ACP <span>FEATURES</span></h2>
                            </div>

                            <div class="our-features-boxes ">
                                <div class="our-features-item">
                                    <div class="icon-box">
                                        <img src="assets/images/acp/Flatness.png" alt="">
                                    </div>
                                    <div class="features-item-content">
                                        <p>Superior Flatness</p>
                                    </div>
                                </div>
                                <div class="our-features-item">
                                    <div class="icon-box">
                                        <img src="assets/images/acp/light.png" alt="">
                                    </div>
                                    <div class="features-item-content">
                                        <p>Light-weight</p>
                                    </div>
                                </div>
                                <div class="our-features-item">
                                    <div class="icon-box">
                                        <img src="assets/images/acp/paint.png" alt="">
                                    </div>
                                    <div class="features-item-content">
                                        <p>Paint Finish Consistency</p>
                                    </div>
                                </div>
                                <div class="our-features-item">
                                    <div class="icon-box">
                                        <img src="assets/images/acp/uv.png" alt="">
                                    </div>
                                    <div class="features-item-content">
                                        <p>UV-resistant</p>
                                    </div>
                                </div>
                                <div class="our-features-item">
                                    <div class="icon-box">
                                        <img src="assets/images/acp/weather.png" alt="">
                                    </div>
                                    <div class="features-item-content">
                                        <p>Weather-proof</p>
                                    </div>
                                </div>

                                <div class="our-features-item">
                                    <div class="icon-box">
                                        <img src="assets/images/acp/fireret.png" alt="">
                                    </div>
                                    <div class="features-item-content">
                                        <p>Available in Fire-Retardant</p>
                                    </div>
                                </div>
                                <div class="our-features-item">
                                    <div class="icon-box">
                                        <img src="assets/images/acp/Impctresistent.png" alt="">
                                    </div>
                                    <div class="features-item-content">
                                        <p>Impact-resistant</p>
                                    </div>
                                </div>
                                <div class="our-features-item">
                                    <div class="icon-box">
                                        <img src="assets/images/acp/vibration1.png" alt="">
                                    </div>
                                    <div class="features-item-content">
                                        <p>Vibration & Dampening-resistant</p>
                                    </div>
                                </div>
                                <div class="our-features-item">
                                    <div class="icon-box">
                                        <img src="assets/images/acp/Soundheat.png" alt="">
                                    </div>
                                    <div class="features-item-content">
                                        <p>Sound & Heat Insulation</p>
                                    </div>
                                </div>
                                <div class="our-features-item">
                                    <div class="icon-box">
                                        <img src="assets/images/acp/Easyinstallationan.png" alt="">
                                    </div>
                                    <div class="features-item-content">
                                        <p>Easy Installation & Maintenance</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="wow fadeInUp">
                <div class="section-title">
                    <h2 class="text-anime-style-2">ACP SHEET <span>DESIGN</span></h2>
                </div>
              @if(isset($subcategories) && $subcategories->count() > 0)
                        <div class="wow fadeInUp mb-5">
                            <div class="section-title">
                                <h2 class="text-anime-style-2">Subcategories</h2>
                            </div>
                            <div class="row">
                                @foreach($subcategories as $subcategory)
                                <div class="col-lg-3 col-md-6 mb-4">
                                    <div class="post-item pro-grid wow fadeInUp">
                                        <div class="post-featured-image">
                                            <figure>
                                                <a href="{{ route('subcategory.page', $subcategory->slug ?? $subcategory->id) }}" class="image-anime" data-cursor-text="View">
                                                    @if($subcategory->sub_category_img)
                                                        <img src="{{ asset( $subcategory->sub_category_img) }}" alt="{{ $subcategory->name }}">
                                                    @else
                                                        <img src="assets/images/product/metalic-flair-series.png" alt="{{ $subcategory->name }}">
                                                    @endif
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="post-item-body">
                                            <div class="post-item-content text-center">
                                                <h2><a href="{{ route('subcategory.page', $subcategory->slug ?? $subcategory->id) }}">{{ $subcategory->name }}</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endif
            </div>

            <div class="wow fadeInUp table-responsive">
                <table style="width: 100%" >
                    <tr>
                        <th>Product Grade</th>
                        <th>Total ACP Thickness</th>
                        <th>Front Skin Thickness</th>
                        <th>LDPE Core Thickness</th>
                        <th>Back Skin Thickness</th>
                        <th>Front Skin Coating Thickness</th>
                        <th>Back Skin Coating Thickness</th>
                    </tr>
                    <tr>
                        <td>Platinum</td>
                        <td>4 mm</td>
                        <td>0.50 mm</td>
                        <td>3.00 mm</td>
                        <td>0.50 mm</td>
                        <td>25 μ ± 3</td>
                        <td>7 μ ± 1</td>
                    </tr>
                    <tr>
                        <td>Pearl</td>
                        <td>4 mm</td>
                        <td>0.25 mm</td>
                        <td>3.50 mm</td>
                        <td>0.25 mm</td>
                        <td>25 μ ± 3</td>
                        <td>7 μ ± 1</td>
                    </tr>
                    <tr>
                        <td>Ruby</td>
                        <td>3 mm</td>
                        <td>0.25 mm</td>
                        <td>2.50 mm</td>
                        <td>0.25 mm</td>
                        <td>25 μ ± 3</td>
                        <td>7 μ ± 1</td>
                    </tr>

                </table>
            </div>
        </div>
    </div>
@endsection
