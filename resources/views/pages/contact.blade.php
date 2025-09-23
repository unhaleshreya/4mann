@extends('main-layout.app')

@section('content')
	<!-- Page Header Start -->
	<div class="page-header parallaxie breadcumb-area" data-desktop="{{ asset('assets/images/breadcrumb/contact.jpg') }}" data-mobile="{{ asset('assets/images/breadcrumb/contactmobile.jpg') }}">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<div class="page-header-box">
						<h1 class="text-anime-style-2" data-cursor="-opaque">Contact Us</h1>
						<nav class="wow fadeInUp">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->

	<!-- Page Contact Us Start -->
	<div class="page-contact-us">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5">
					<div class="contact-information">
						<div class="section-title">
							<h3 class="wow fadeInUp">contact us</h3>
							<h2 class="text-anime-style-3" data-cursor="-opaque">Get in touch <span>with us</span></h2>
							<p class="wow fadeInUp" data-wow-delay="0.2s">Reach out for any inquiries, support, or to discuss how we can meet your industrial needs.</p>
						</div>
						<div class="contact-info-box">
							<div class="contact-info-item wow fadeInUp">
								<div class="icon-box">
									<a href="tel:+918097400448">
										<img src="{{ asset('assets/images/icon/icon-phone.svg') }}" alt="">
									</a>
								</div>
								<div class="contact-info-content">
									<h3>contact</h3>
									<p><a href="tel:+918097400448">+91 80974 00448</a></p>
								</div>
							</div>
							<div class="contact-info-item wow fadeInUp" data-wow-delay="0.25s">
								<div class="icon-box">
									<a href="mailto:sales@4mannacp.com">
										<img src="{{ asset('assets/images/icon/icon-mail.svg') }}" alt="">
									</a>
								</div>
								<div class="contact-info-content">
									<h3>Email</h3>
									<p><a href="mailto:sales@4mannacp.com">sales@4mannacp.com </a></p>
								</div>
							</div>
							<div class="contact-info-item wow fadeInUp" data-wow-delay="0.5s">
								<div class="icon-box">
									<img src="{{ asset('assets/images/icon/icon-location.svg') }}" alt="">
								</div>
								<div class="contact-info-content">
									<h3>Head Office</h3>
									<p>404 / 405, Ashok Premises, Old Nagardas Cross Road, Mogra Village, Opp. Saraswati Towers, Andheri (East), Mumbai, Maharashtra- 400069</p>
								</div>
							</div>
							<div class="contact-info-item wow fadeInUp" data-wow-delay="0.75s">
								<div class="icon-box">
									<img src="{{ asset('assets/images/icon/icon-location.svg') }}" alt="">
								</div>
								<div class="contact-info-content">
									<h3>ACP Factory </h3>
									<p>Epip, Kartholi, Bari brahmana, Jammu, Jammu and Kashmir - 181 133</p>
								</div>
							</div>
							<div class="contact-info-item wow fadeInUp" data-wow-delay="0.75s">
								<div class="icon-box">
									<img src="{{ asset('assets/images/icon/icon-location.svg') }}" alt="">
								</div>
								<div class="contact-info-content">
									<h3>IOB Factory</h3>
									<p>Plot no. 18~28, Hargarh Industrial Area, Village - Hargarh, Tehsil - Sihora, Jabalpur, Madhya Pradesh - 483225</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-7">
					<div class="contact-us-form">
						<div class="section-title">
							<h2 class="text-anime-style-2" data-cursor="-opaque">Contact <span>me</span></h2>
						</div>
						<div class="contact-form">
							<form id="contactForm" action="#" method="POST" data-toggle="validator" class="wow fadeInUp" data-wow-delay="0.5s">
								<div class="row">
									<div class="form-group col-md-6 mb-4">
										<input type="text" name="fname" class="form-control" id="fname" placeholder="Enter first name" required>
										<div class="help-block with-errors"></div>
									</div>
									<div class="form-group col-md-6 mb-4">
										<input type="text" name="lname" class="form-control" id="lname" placeholder="Enter last name" required>
										<div class="help-block with-errors"></div>
									</div>
									<div class="form-group col-md-12 mb-4">
										<input type="email" name="email" class="form-control" id="email" placeholder="Enter your e-mail" required>
										<div class="help-block with-errors"></div>
									</div>
									<div class="form-group col-md-12 mb-4">
										<input type="text" name="phone" class="form-control" id="phone" placeholder="Enter your phone no." required>
										<div class="help-block with-errors"></div>
									</div>
									<div class="form-group col-md-12 mb-4">
										<input type="text" name="company-name" class="form-control" id="company-name" placeholder="Enter company name" required>
										<div class="help-block with-errors"></div>
									</div>
									<div class="form-group col-md-12 mb-4">
										<select name="who-we-serve" class="form-control form-select" id="who-we-serve">
											<option value="" disabled selected>Customer type </option>
											<option value="Architects">Architects</option>
											<option value="Interior Designers">Interior Designers</option>
											<option value="Signage Experts">Signage Experts</option>
											<option value="Corporate Clients">Corporate Clients </option>
											<option value="Fabricators/ Contractors">Fabricators/ Contractors </option>
										</select>
										<div class="help-block with-errors"></div>
									</div>
									<div class="form-group col-md-12 mb-5">
										<textarea name="message" class="form-control" id="message" rows="4" placeholder="Write Message"></textarea>
										<div class="help-block with-errors"></div>
									</div>
									<div class="col-md-12">
										<button type="submit" class="btn-default"><span>submit message</span></button>
										<div id="msgSubmit" class="h3 hidden"></div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--  Page Contact Us End -->

	<!-- Google Map Start -->
	<div class="google-map">
		<div class="container-flude">
			<div class="row">
				<div class="col-lg-12">
					<div class="google-map-iframe">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.634088543843!2d72.85211521041559!3d19.12370188201598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c83db1c843f3%3A0x8d6127a3225ce790!2s4Mann%20Industries%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1747986027290!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Google Map End -->
@endsection

