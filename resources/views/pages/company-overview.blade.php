@extends('main-layout.app')

@section('content')
	<!-- About Us Start -->
	<div class="about-us" id="company-overview">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<!-- About Us Image Start -->
					<figure class="image-anime reveal">
						<img src="{{ asset('assets/images/about/about.jpg') }}" class="img-fluid" alt="">
					</figure>
					<!-- About Us Image End -->
				</div>

				<div class="col-lg-6">
					<div class="about-content">
						<div class="section-title">
							<h3 class="wow fadeInUp">about us</h3>
							<h2 class="text-anime-style-2">4MANN Group 30+ Years of <span>Innovation in Building Materials & Design</span></h2>
							<p class="wow fadeInUp" data-wow-delay="0.25s">4MANN is a leading Indian manufacturer of high-performance Aluminium Composite Panels (ACPs), Aluminium High-Pressure Laminates (AHPLs), ACP louvers and ACP 3D Panels under the brands 4MANN and ARROWBOND. With over 22 years of experience, we specialize in innovation, quality, and sustainability, delivering advanced solutions for architectural, interior, and signage applications across India. </p>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
@endsection

