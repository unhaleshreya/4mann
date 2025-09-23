@extends('main-layout.app')

@section('content')
<!-- Page Header Start -->
<div class="page-header parallaxie breadcumb-area" data-desktop="{{ asset($subcategory->sub_category_img) }}" data-mobile="{{ asset($subcategory->sub_category_img) }}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">{{ $subcategory->name }}</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">{{ $subcategory->category->name }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $subcategory->name }}</li>
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
            <h2 class="text-anime-style-2"><span>{{ $subcategory->name }}</span></h2>
            <p class="wow fadeInUp">Explore our premium collection of {{ $subcategory->name }} products. High quality materials with exceptional design and durability.</p>
        </div>
        <!-- Section Title End -->

        @if($products->count() > 0)
        <div class="row">
            @foreach($products as $product)
            <div class="col-lg-4 col-md-6">
                <div class="post-item wow fadeInUp">
                    <div class="post-featured-image">
                        <figure>
                            <a href="{{ route('product.details', $product->slug ?? $product->id) }}" class="image-anime">
                                @if($product->product_image)
                                    <img src="{{ asset('storage/' . $product->product_image) }}" alt="{{ $product->product_title }}">
                                @else
                                    <img src="assets/images/metallic-product/cosmic-chill.jpg" alt="{{ $product->product_title }}">
                                @endif
                            </a>
                        </figure>
                    </div>
                    <div class="post-item-body">
                        <div class="post-item-content">
                            <h2>{{ $product->product_code }}</h2>
                            <h2><a href="{{ route('product.details', $product->slug ?? $product->id) }}">{{ $product->product_title }}</a></h2>
                            @if($product->product_desc)
                            <p>{{ Str::limit($product->product_desc, 100) }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <!-- No Products Found -->
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <div class="alert alert-info">
                        <h4>No products found in this subcategory</h4>
                        <p>We're working on adding products to this subcategory. Please check back later.</p>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection
