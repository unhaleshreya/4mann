
 @extends('main-layout.app')

@section('content')<!-- Page Header Start -->
    <!-- <div class="page-header parallaxie" style=" background: url('assets/images/breadcrumb/about.jpg') no-repeat center center;"> -->
    <div class="page-header parallaxie breadcumb-area" data-desktop="{{ asset('assets/images/breadcrumb/Project.jpg') }}" data-mobile="{{ asset('assets/images/breadcrumb/Projectmobile.jpg') }}">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Our Projects </h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Our Projects</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Our Work Section Start -->
    <div class="our-work">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-12">
                    <form action="#" method="POST" class="wow fadeInUp" data-wow-delay="0.5s">
                        <div class="row">
                            <div class="form-group col-lg-3 col-md-6 mb-4">
                                <select id="sector" name="sector" class="form-select">
                                    <option value="">Select Sector</option>
                                    <option value="Hotel">Hotel</option>
                                    <option value="Hospital">Hospital</option>
                                    <option value="Interior">Interior</option>
                                    <option value="Mall">Mall</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-3 col-md-6 mb-4">
                                <select id="product" name="product" class="form-select">
                                    <option value="">Select Product</option>
                                    <option value="Metallic Flair Series">Metallic Flair Series</option>
                                    <option value="Solid Series">Solid Series</option>
                                    <option value="Sand Series">Sand Series</option>
                                    <option value="Wooden Series">Wooden Series</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-3 col-md-6 mb-4">
                                <select id="states" name="states" class="form-select">
                                    <option>Select state</option>
                                    <option value="AN">Andaman and Nicobar Islands</option>
                                    <option value="AP">Andhra Pradesh</option>
                                    <option value="AR">Arunachal Pradesh</option>
                                    <option value="AS">Assam</option>
                                    <option value="BR">Bihar</option>
                                    <option value="CH">Chandigarh</option>
                                    <option value="CT">Chhattisgarh</option>
                                    <option value="DN">Dadra and Nagar Haveli</option>
                                    <option value="DD">Daman and Diu</option>
                                    <option value="DL">Delhi</option>
                                    <option value="GA">Goa</option>
                                    <option value="GJ">Gujarat</option>
                                    <option value="HR">Haryana</option>
                                    <option value="HP">Himachal Pradesh</option>
                                    <option value="JK">Jammu and Kashmir</option>
                                    <option value="JH">Jharkhand</option>
                                    <option value="KA">Karnataka</option>
                                    <option value="KL">Kerala</option>
                                    <option value="LA">Ladakh</option>
                                    <option value="LD">Lakshadweep</option>
                                    <option value="MP">Madhya Pradesh</option>
                                    <option value="MH">Maharashtra</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-3 col-md-6 mb-4">
                                <select id="city" name="city" class="form-select">
                                    <option value="">Select City</option>
                                    <option value="Pune">Pune</option>
                                    <option value="Mumbai">Mumbai</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-12">
                    <!-- Project Item Boxes start -->
                    <div class="row project-item-boxes align-items-center">
                        <div class="col-md-6 project-item-box">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp">
                                <div class="project-image">
                                    <figure class="image-anime">
                                        <img src="{{ asset('assets/images/project/project-1.jpg') }}" alt="">
                                    </figure>
                                </div>

                                <div class="project-tag">
                                    <a href="project-showcase.php">Hotel</a>
                                </div>

                                <div class="project-content">
                                    <h3><a href="project-showcase.php">THE DELTIN - DAMAN</a></h3>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>

                        <div class="col-md-6 project-item-box">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="project-image">
                                    <figure class="image-anime">
                                        <img src="{{ asset('assets/images/project/project-2.jpg') }}" alt="">
                                    </figure>
                                </div>

                                <div class="project-tag">
                                    <a href="project-showcase.php">Corporate</a>
                                </div>

                                <div class="project-content">
                                    <h3><a href="project-showcase.php">Iscon Elegance - Ahmedabad</a></h3>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>

                        <div class="col-md-6 project-item-box ">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="project-image">
                                    <figure class="image-anime">
                                        <img src="{{ asset('assets/images/project/project-3.jpg') }}" alt="">
                                    </figure>
                                </div>

                                <div class="project-tag">
                                    <a href="project-showcase.php">Commercial</a>
                                </div>

                                <div class="project-content">
                                    <h3><a href="project-showcase.php">Arena Space Mumbai</a></h3>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>

                        <div class="col-md-6 project-item-box ">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="project-image">
                                    <figure class="image-anime">
                                        <img src="{{ asset('assets/images/project/project-4.jpg') }}" alt="">
                                    </figure>
                                </div>

                                <div class="project-tag">
                                    <a href="project-showcase.php">Hospital</a>
                                </div>

                                <div class="project-content">
                                    <h3><a href="project-showcase.php">Infosys Bangalore</a></h3>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>
                    </div>
                    <!-- Project Item Boxes End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Work Section End -->
    @endsection
