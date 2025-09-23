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
				<div class="col-lg-4 col-md-6">
					<div class="post-item wow fadeInUp">
						<div class="post-featured-image">
							<figure>
								<a href="{{ url('4man’s-journey21may') }}" class="image-anime" data-cursor-text="View">
									<img src="{{ asset('assets/images/blog/blog-1.jpg') }}" alt="">
								</a>
							</figure>
						</div>
						<div class="post-item-body">
							<div class="post-item-content">
								<span style="font-weight: normal;">21 May , 2025</span>
								<h2><a href="{{ url('4man’s-journey21may') }}">4MANN’s Journey Of Design, Durability & Innovation</a></h2>
							</div>
							<div class="post-readmore-btn mt40">
								<a href="{{ url('4man’s-journey21may') }}">Read more</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="post-item wow fadeInUp" data-wow-delay="0.2s">
						<div class="post-featured-image">
							<figure>
								<a href="{{ url('4man’s-journey20may') }}" class="image-anime" data-cursor-text="View">
									<img src="{{ asset('assets/images/blog/blog-1.jpg') }}" alt="">
								</a>
							</figure>
						</div>
						<div class="post-item-body">
							<div class="post-item-content">
								<span style="font-weight: normal;">20 May , 2025</span>
								<h2><a href="{{ url('4man’s-journey20may') }}">4MANN’s Journey of Design, Durability & Innovation</a></h2>
							</div>
							<div class="post-readmore-btn mt40">
								<a href="{{ url('4man’s-journey20may') }}">Read more</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="post-item wow fadeInUp" data-wow-delay="0.4s">
						<div class="post-featured-image">
							<figure>
								<a href="{{ url('4man’s-journey19may') }}" class="image-anime" data-cursor-text="View">
									<img src="{{ asset('assets/images/blog/blog-1.jpg') }}" alt="">
								</a>
							</figure>
						</div>
						<div class="post-item-body">
							<div class="post-item-content">
								<span style="font-weight: normal;">19 May , 2025</span>
								<h2><a href="{{ url('4man’s-journey19may') }}">4MANN’s Journey of Design, Durability and Innovation</a></h2>
							</div>
							<div class="post-readmore-btn mt40">
								<a href="{{ url('4man’s-journey19may') }}">Read more</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Page Blog End -->
@endsection

