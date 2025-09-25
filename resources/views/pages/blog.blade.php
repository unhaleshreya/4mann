@extends('main-layout.app')

@section('content')
	<!-- Page Header Start -->
	<div class="page-header parallaxie breadcumb-area" data-desktop="{{ asset('assets/images/breadcrumb/blog.jpg') }}" data-mobile="{{ asset('assets/images/breadcrumb/blogmobile.jpg') }}">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<div class="page-header-box">
						<h1 class="text-anime-style-2" data-cursor="-opaque"> Media & News</h1>
						<nav class="wow fadeInUp">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Media & News</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->

	<!-- Page Blog Start -->
	<div class="page-blog">
		<div class="container">
			<div class="row">
				@if($mediaBlogs->isNotEmpty())
				@foreach($mediaBlogs as $blog)
				<div class="col-lg-4 col-md-6">
					<div class="post-item wow fadeInUp">
						<div class="post-featured-image">
							<figure>
								<a href="{{ route('blog.details', $blog->slug) }}" class="image-anime" data-cursor-text="View">
									<img src="{{ asset('storage/' . $blog->image) }}" alt="">
								</a>
							</figure>
						</div>
						<div class="post-item-body">
							<div class="post-item-content">
								<span style="font-weight: normal;">{{ $blog->created_at->format('d M, Y') }}</span>
								<h2><a href="{{ route('blog.details', $blog->slug) }}">{{ $blog->title }}</a></h2>
							</div>
							<div class="post-readmore-btn mt40">
								<a href="{{ route('blog.details', $blog->slug) }}">Read more</a>
							</div>
						</div>
					</div>
				</div>
				@endforeach
				@else
                <div class="col-lg-12">
                    <div class="post-item wow fadeInUp">
                        <div class="post-item-body">
                            <div class="post-item-content">
                                <h2>No blogs found</h2>
                            </div>
                        </div>
                    </div>
                </div>
				@endif
                </div>
		</div>
	</div>
	<!-- Page Blog End -->
@endsection

