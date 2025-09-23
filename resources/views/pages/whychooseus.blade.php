  @extends('main-layout.app')
@section('content')
<!-- Page Header Start -->
    <div class="page-header parallaxie" style=" background: url('{{ asset('assets/images/breadcrumb/whychoose.jpg') }}') no-repeat center center;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Why Choose Us</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Why Choose Us</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->



  <!-- Page Services Start -->
    <div class="page-services">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item1">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/icon/Dedication1.svg') }}" alt="">
                        </div>

                        <div class="service-body">
                            <h3>Dedication to delivering high quality</h3>
                        </div>

                        <div class="service-footer">
                            <a href="service-single.html" class="service-btn">
                                <img src="{{ asset('assets/images/icon/arrow-dark.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item1">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/icon/snapshot1.svg') }}" alt="">
                        </div>

                        <div class="service-body">
                            <h3>Snapshot of industry experience</h3>
                        </div>

                        <div class="service-footer">
                            <a href="service-single.html" class="service-btn">
                                <img src="{{ asset('assets/images/icon/arrow-dark.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item1">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/icon/Client1.svg') }}" alt="">
                        </div>

                        <div class="service-body">
                            <h3>Trusted by numerous clients</h3>
                        </div>

                        <div class="service-footer">
                            <a href="service-single.html" class="service-btn">
                                <img src="{{ asset('assets/images/icon/arrow-dark.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item1">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/icon/Compilance1.svg') }}" alt="">
                        </div>

                        <div class="service-body">
                            <h3>Compliance with certifications</h3>
                        </div>

                        <div class="service-footer">
                            <a href="service-single.html" class="service-btn">
                                <img src="{{ asset('assets/images/icon/arrow-dark.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item1">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/icon/modern1.svg') }}" alt="">
                        </div>

                        <div class="service-body">
                            <h3>Modern manufacturing infrastructure</h3>
                        </div>

                        <div class="service-footer">
                            <a href="service-single.html" class="service-btn">
                                <img src="{{ asset('assets/images/icon/arrow-dark.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item1">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/icon/emphasis1.svg') }}" alt="">
                        </div>

                        <div class="service-body">
                            <h3>Emphasis on innovation and sustainability</h3>
                        </div>

                        <div class="service-footer">
                            <a href="service-single.html" class="service-btn">
                                <img src="{{ asset('assets/images/icon/arrow-dark.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>


            </div>
        </div>
    </div>
    <!-- Page Services End -->
    @endsection
