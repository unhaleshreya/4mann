

    @extends('main-layout.app')

@section('content')<!-- Page Header Start -->
    <div class="page-header parallaxie breadcumb-area" data-desktop="{{ asset('assets/images/breadcrumb/Fire-Retardant.jpg') }}" data-mobile="{{ asset('assets/images/breadcrumb/Fireretardentmobile.jpg') }}">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Fire Retardant ACP Panels</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Fire Retardant ACP Pane
                                    ls</li>
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
                        <div class="row ">
                            <div class="col-lg-6">
                                 <h2>What is FR ACP?</h2>
                                <p>Fire-Retardant Aluminium Composite Panel (FR ACP) is a specially engineered building material designed to reduce the risk of fire hazards in buildings. Unlike standard ACPs, FR ACPs are made using a core filled with mineral-based, non-combustible materials which delay ignition and prevent the spread of flames, smoke, and toxic gases.</p>
                                <p>They are widely used in facades, cladding, signage, and interiors where fire safety is a regulatory or design requirement—especially in high-rise buildings, public infrastructure, airports, hospitals, and educational institutions.</p>
                            </div>
                            <div class="col-lg-6">
                                <figure class="image-anime reveal">
                                    <img src="{{ asset('assets/images/fr-acp/img-02.jpeg') }}" class="border-radius-36" alt="">
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
                                                        <img src="{{ asset('assets/images/fr-acp/img-02.jpeg') }}" alt="{{ $subcategory->name }}">
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


                        <ul class="about-list">
                            <li><b>4MANN FR B1 – Balanced Safety for Everyday Projects</b><br>
                                4MANN FR B1 panels are designed using a mineral-filled core containing approximately 70% fire-retardant minerals like Aluminium Trihydroxide (ATH) and Magnesium Hydroxide (MDH), blended with specially engineered polymers. This composition strikes a balance between fire safety, structural integrity, and cost-effectiveness.
                                <ul>
                                    <li> Why This Composition Works:
                                        <ul>
                                            <li>The ATH/MDH minerals decompose when exposed to heat, releasing water vapour, which cools the surface and slows down flame spread. </li>
                                            <li> The polymer binders give structural strength while maintaining a controlled calorific value. </li>
                                            <li> This mineral-polymer ratio ensures the panel achieves EN 13501-1 Class B-s1, d0 rating:
                                                <ul>
                                                    <li> B: Limited combustibility</li>
                                                    <li> s1: Low smoke generation</li>
                                                    <li> d0: No flaming droplets</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>Benefits from the Composition:
                                        <ul>
                                            <li>Controlled flame spread without significant smoke or toxic gas emission.</li>
                                            <li>Improved thermal insulation and dimensional stability.</li>
                                            <li>Safe evacuation time for occupants in case of fire</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><b>4MANN FR A2 – Highest Grade Fire Protection for Critical Infrastructure</b><br> 4MANN FR A2 panels use a 90–95% non-combustible mineral core, made primarily from Aluminium Hydroxide and ceramic-grade inorganic fillers. The polymer content is reduced to an absolute minimum, which makes the core nearly inert to fire.
                                <ul>
                                    <li>
                                        Why This Composition Matters:
                                        <ul>
                                            <li>The high mineral content ensures the panel does not burn, melt, or contribute to fire load.</li>
                                            <li>It produces almost zero smoke and no toxic emissions, enabling people to safely evacuate during critical fire situations.</li>
                                            <li>Meets the strictest fire classification – A2-s1, d0:
                                                <ul>
                                                    <li>A2: Very limited contribution to fire</li>
                                                    <li> s1: Negligible smoke</li>
                                                    <li> d0: No flaming droplets</li>
                                                </ul>
                                            </li>

                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <b>Ideal For High-Risk Applications:</b><br>
                                <ul>
                                    <li>Airports, metros, and transport terminals </li>
                                    <li>Hospitals and hotels.</li>
                                    <li>High-rise commercial towers </li>
                                    <li>Defence, government, and critical infrastructure </li>
                                </ul>
                            </li>

                        </ul>
                        <h2 class="newsection-title">Available in All Standard Finishes</h2>
                        <p>All 4MANN FR ACP panels—whether B1 or A2 grade—are available in the entire range of finishes offered in our standard ACP collection. From solid colours and metallics to wood, stone, sparkle, and custom textures, you don’t have to compromise on aesthetics to ensure safety.</p>
                       <!-- <div class="row mt-50">
                            <div class="col-lg-4">
                                <figure class="image-anime reveal">
                                    <img src="assets/images/acp/image-2.jpg" class="img-fluid border-radius-36" />
                                </figure>
                            </div>
                            <div class="col-lg-4">
                                <figure class="image-anime reveal">
                                    <img src="assets/images/acp/image-3.jpg" class="img-fluid border-radius-36" />
                                </figure>
                            </div>
                            <div class="col-lg-4">
                                <figure class="image-anime reveal">
                                    <img src="assets/images/acp/image-4.jpg" class="img-fluid border-radius-36" />
                                </figure>
                            </div>
                        </div>-->

                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

        </div>
    </div>
    @endsection
