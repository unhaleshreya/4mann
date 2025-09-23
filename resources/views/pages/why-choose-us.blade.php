
    @extends('main-layout.app')

@section('content')
<!-- What We Do Start -->
    <div class="what-we-do" id="why-choose-us">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <!-- What We Do Content Start -->
                    <div class="what-we-do-content">
                        <!-- Section Title Start -->
                        <div class="section-title dark-section">
                            <h3 class="wow fadeInUp">Why Choose Us</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Trusted Expertise, Quality Service, <span>Proven Results.</span></h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- What We Do List Start -->
                        <div class="what-we-do-list">
                            <div class="what-we-do-list-box-1">
                                <!-- What We Do Item Start -->
                                <div class="what-we-do-item">
                                    <div class="icon-box">
                                        <img src="{{ asset('assets/images/icon/Dedication.svg') }}"  alt="">
                                    </div>
                                    <div class="what-we-item-content">
                                        <h3>Dedication to delivering high quality</h3>
                                    </div>
                                </div>
                                <!-- What We Do Item End -->

                                <!-- What We Do Item Start -->
                                <div class="what-we-do-item">
                                    <div class="icon-box">
                                        <img src="{{ asset('assets/images/icon/Client.svg') }}" alt="">
                                    </div>
                                    <div class="what-we-item-content">
                                        <h3>Trusted by numerous clients</h3>
                                    </div>
                                </div>
                                <!-- What We Do Item End -->
                            </div>

                            <div class="what-we-do-list-box-2">
                                <!-- What We Do Item Start -->
                                <div class="what-we-do-item">
                                    <div class="icon-box">
                                        <img src="{{ asset('assets/images/icon/modern.svg') }}" alt="">
                                    </div>
                                    <div class="what-we-item-content">
                                        <h3>Modern manufacturing infrastructure</h3>
                                    </div>
                                </div>
                                <!-- What We Do Item End -->

                                <!-- What We Do Item Start -->
                                <div class="what-we-do-item">
                                    <div class="icon-box">
                                        <img src="{{ asset('assets/images/icon/emphasis.svg') }}" alt="">
                                    </div>
                                    <div class="what-we-item-content">
                                        <h3>Emphasis on innovation & sustainability</h3>
                                    </div>
                                </div>
                                <!-- What We Do Item End -->
                            </div>
                        </div>
                        <!-- What We Do List Start -->

                    </div>
                    <!-- What We Do Content End -->
                </div>

                <div class="col-lg-6">
                    <!-- What We Do Image Start -->
                    <div class="what-we-do-image">
                        <figure class="image-anime">
                            <img src="{{ asset('assets/images/what-we-do-image.jpg') }}" alt="">
                        </figure>

                        <!-- Contact Now Circle Start -->
                        <div class="contact-now-circle">
                            <img src="{{ asset('assets/images/icon/contact-now-circle.svg') }}" alt="">
                        </div>
                        <!-- Contact Now Circle End -->
                    </div>
                    <!-- What We Do Image End -->
                </div>
            </div>
        </div>
    </div>
    <!-- What We Do End -->
    @endsection
