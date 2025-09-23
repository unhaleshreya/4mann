
    @extends('main-layout.app')

@section('content')
 <!-- Page Header Start -->
       <div class="page-header parallaxie breadcumb-area" data-desktop="assets/images/breadcrumb/Aluminium.jpg" data-mobile="assets/images/breadcrumb/Aluminiummobile.jpg">

        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Metallic Flair Series</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Metallic Flair Series</li>
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
         @include('includes.downloadbroacer')
        <div class="container">

            <!-- Section Title Start -->
            <div class="section-title">
                <h2 class="text-anime-style-2" ><span>Metallic Flair Series</span></h2>
                <p class="wow fadeInUp">Eye-catchy and Stylish Effects, metallic textures and beautiful visuals provide a rich look and feel. It enhances your own vision and aesthetics.</p>
            </div>
            <!-- Section Title End -->

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
                                            <img src="assets/images/metallic-product/cosmic-chill.jpg" alt="{{ $subcategory->name }}">
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
                <div class="col-lg-4 col-md-6">
                    <div class="post-item wow fadeInUp">
                        <div class="post-featured-image">
                            <figure>
                                <a href="{{route('cosmic-chill')}}" class="image-anime">
                                    <img src="assets/images/metallic-product/cosmic-chill.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                        <div class="post-item-body">
                            <div class="post-item-content">
                                <h2>MA-651</h2>
                                <h2><a href="{{route('cosmic-chill')}}">COSMIC CHILL</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="post-item wow fadeInUp">
                        <div class="post-featured-image">
                            <figure>
                                <a href="#" class="image-anime">
                                    <img src="assets/images/metallic-product/corten-steel.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                        <div class="post-item-body">
                            <div class="post-item-content">
                                <h2>MA-652</h2>
                                <h2>CORTEN STEEL</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="post-item wow fadeInUp">
                        <div class="post-featured-image">
                            <figure>
                                <a href="javascript:void(0)" class="image-anime">
                                    <img src="assets/images/metallic-product/gris-desire.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                        <div class="post-item-body">
                            <div class="post-item-content">
                                <h2>MA-653</h2>
                                <h2>GRIS DESIRE</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





        </div>
    </div>
    @endsection
