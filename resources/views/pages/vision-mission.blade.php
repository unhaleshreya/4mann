@extends('main-layout.app')

@section('content')
	<!-- Our Mission Vision Section Start -->
	<div class="our-mission-vision" id="vision-mission">
		<div class="mission-vision-bg parallaxie">
			<div class="container">
				<div class="row section-row align-items-center">
					<div class="col-lg-6">
						<div class="section-title dark-section">
							<h3 class="wow fadeInUp">Our Vision & Mission</h3>
							<h2 class="text-anime-style-2" data-cursor="-opaque">Inspiring Our Future, <span>Defining Our Path</span></h2>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="section-title-content dark-section wow fadeInUp" data-wow-delay="0.25s">
							<p>A Vision That Shapes Our Future
								A Mission That Guides Every Step We Take</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="mission-vision-box tab-content wow fadeInUp" data-wow-delay="0.25s" id="missionvision">
						<div class="mission-vision-nav">
							<ul class="nav nav-tabs" id="mvTab" role="tablist">
								<li class="nav-item" role="presentation">
									<button class="nav-link active" id="installation-tab" data-bs-toggle="tab" data-bs-target="#vision" type="button" role="tab" aria-selected="true"><img src="{{ asset('assets/images/icon/Our Vision.png') }}" alt=""> our vision</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link " id="remodeling-tab" data-bs-toggle="tab" data-bs-target="#mission" type="button" role="tab" aria-selected="false"><img src="{{ asset('assets/images/icon/our mission.png') }}" alt=""> our mission</button>
								</li>
							</ul>
						</div>

						<div class="mission-vision-item tab-pane fade show active " id="vision" role="tabpanel">
							<div class="row align-items-center">
								<div class="col-lg-6">
									<div class="mission-vision-content">
										<div class="mission-vision-content-header">
											<p>To be India’s leading manufacturing company, recognized for deeply understanding and exceeding customer expectations through innovative products, reliable service, and sustainable practices that drive long-term value.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="mission-vision-image">
										<figure class="image-anime">
											<img src="{{ asset('assets/images/about/vision.jpg') }}" alt="">
										</figure>
									</div>
								</div>
							</div>
						</div>

						<div class="mission-vision-item tab-pane fade " id="mission" role="tabpanel">
							<div class="row align-items-center">
								<div class="col-lg-6">
									<div class="mission-vision-content">
										<div class="mission-vision-content-header">
											<p>With a mission to be India’s most trusted Façade brand, 4MANN is committed to innovation, quality, and customer satisfaction. With a growing national presence and continuous advancements, we are shaping the future—one panel at a time. Collaborating and exploring how 4MANN can add value to your projects with innovation and precision.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="mission-vision-image">
										<figure class="image-anime">
											<img src="{{ asset('assets/images/about/mission.jpg') }}" alt="">
										</figure>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Our Mission Vision Section End -->
@endsection

