@extends('main-layout.app')

@section('content')
<!-- Page Header Start -->
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-header-content">
                    <h1>{{ $category->name }}</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $category->name }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Page Header End -->

<!-- Category Content Start -->
<section class="category-content py-5">
    <div class="container">
        <div class="row">
            <!-- Subcategories Section -->
            @if($category->subCategories->count() > 0)
            <div class="col-12 mb-5">
                <h2>Subcategories</h2>
                <div class="row">
                    @foreach($category->subCategories as $subcategory)
                    <div class="col-md-4 col-lg-3 mb-4">
                        <div class="card h-100">
                            @if($subcategory->sub_category_img)
                            <img src="{{ asset('storage/' . $subcategory->sub_category_img) }}" class="card-img-top" alt="{{ $subcategory->name }}" style="height: 200px; object-fit: cover;">
                            @endif
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $subcategory->name }}</h5>
                                <div class="mt-auto">
                                    <a href="{{ route('subcategory.page', $subcategory->slug ?? $subcategory->id) }}" class="btn btn-primary">View Products</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif

            <!-- Products Section -->
            @if($products->count() > 0)
            <div class="col-12">
                <h2>Products in {{ $category->name }}</h2>
                <div class="row">
                    @foreach($products as $product)
                    <div class="col-md-4 col-lg-3 mb-4">
                        <div class="card h-100">
                            @if($product->product_image)
                            <img src="{{ asset('storage/' . $product->product_image) }}" class="card-img-top" alt="{{ $product->product_title }}" style="height: 200px; object-fit: cover;">
                            @endif
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $product->product_title }}</h5>
                                <p class="card-text">{{ Str::limit($product->product_desc, 100) }}</p>
                                <div class="mt-auto">
                                    <small class="text-muted">Code: {{ $product->product_code }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @else
            <div class="col-12">
                <div class="alert alert-info">
                    <h4>No products found in this category</h4>
                    <p>We're working on adding products to this category. Please check back later.</p>
                </div>
            </div>
            @endif
        </div>
    </div>
</section>
<!-- Category Content End -->
@endsection
