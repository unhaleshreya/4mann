@extends('main-layout.app')
@section('content')
<div class="page-blog">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6">
                    <div class="product-detail-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="product-detail-img">
                                        <figure>
                                            <a href="assets/images/metallic-product/cosmic-chill.jpg" class="image-anime" data-fancybox="gallery" data-caption="COSMIC CHILL 1">
                                                <img src="assets/images/metallic-product/cosmic-chill.jpg" alt="Image Gallery">
                                            </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-detail-img">
                                        <figure>
                                            <a href="assets/images/metallic-product/cosmic-chill.jpg" class="image-anime" data-fancybox="gallery" data-caption="COSMIC CHILL 2">
                                                <img src="assets/images/metallic-product/cosmic-chill.jpg" alt="Image Gallery">
                                            </a>
                                        </figure>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-detail-img">
                                        <figure>
                                            <a href="assets/images/metallic-product/cosmic-chill.jpg" class="image-anime" data-fancybox="gallery" data-caption="COSMIC CHILL 3">
                                                <img src="assets/images/metallic-product/cosmic-chill.jpg" alt="Image Gallery">
                                            </a>
                                        </figure>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6">

                    <div class="topbar-qoute-btn d-flex justify-content-end">
                        <a href="contact.php" class="btn-default"><span>Enquiry Now</span></a>
                    </div>
                    <p class="text-black mb-0">MA-651</p>
                    <h2 class="text-anime-style-2 pb-3"><span>COSMIC CHILL</span></h2>
                    <p class="wow fadeInUp">Eye-catchy and Stylish Effects, metallic textures and beautiful visuals provide a rich look and feel. It enhances your own vision and aesthetics.</p>

                </div>
            </div>
 @include('includes.downloadbroacer')
            <div class="col-lg-12">
                <div class="page-faqs-catagery">
                    <!-- FAQs section start -->
                    <div class="our-faq-section page-faq-accordion" id="general_information">
                        <div class="section-title">
                            <h2 class="text-anime-style-2" data-cursor="-opaque"><span>FAQs</span></h2>
                        </div>
                        <!-- FAQ Accordion Start -->
                        <div class="faq-accordion" id="accordion">
                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp">
                                <h2 class="accordion-header" id="heading1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                        What industries do you serve?
                                    </button>
                                </h2>
                                <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                <h2 class="accordion-header" id="heading2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                        How do you ensure product quality?
                                    </button>
                                </h2>
                                <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500ss</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->

                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                <h2 class="accordion-header" id="heading3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                        What sustainability practices do you follow?
                                    </button>
                                </h2>
                                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                                <h2 class="accordion-header" id="heading4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                        Do you offer customized solutions?
                                    </button>
                                </h2>
                                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                                <h2 class="accordion-header" id="heading5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                        How do you handle safety in the workplace?
                                    </button>
                                </h2>
                                <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                        </div>
                        <!-- FAQ Accordion End -->
                    </div>
                    <!-- FAQs section End -->


                </div>
            </div>




        </div>
    </div>
    @endsection
