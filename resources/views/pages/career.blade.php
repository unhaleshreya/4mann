
@extends('main-layout.app')

@section('content')
    <!-- Page Header Start -->
    <!-- <div class="page-header parallaxie" style=" background: url('assets/images/breadcrumb/about.jpg') no-repeat center center;"> -->
    <div class="page-header parallaxie breadcumb-area" data-desktop="{{ asset('assets/images/breadcrumb/Career1.jpg') }}" data-mobile="{{ asset('assets/images/breadcrumb/Careermobile.jpg') }}">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Career</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Career</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->




    <!-- About Us Start -->
    <div class="pt-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="container">
                    <div class="row align-items-center">


                        <div class="col-lg-12">
                            <!-- About Content Start -->
                            <div class="about-content">
                                <!-- Section Title Start -->
                                <div class="section-title">

                                    <h5 style="text-align: -webkit-center;color: #b44880;">Join Our Team</h5>

                                    <h4 style="padding: 25px 30px;text-align: -webkit-center;">Join our team of innovators! Browse current openings and apply now!</h4>

                                </div>
                                <!-- Section Title End -->


                            </div>
                            <!-- About Content End -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- About Us Image Start -->
                    <figure class="image-anime reveal">
                        <img src="{{ asset('assets/images/car.png') }}" class="img-fluid" alt="">
                    </figure>
                    <!-- About Us Image End -->
                </div>

                <div class="col-lg-6">
                    <!-- About Content Start -->
                    <div class="about-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <!-- <h3 class="wow fadeInUp">Life at 4MANN</h3> -->
                            <h2 class="text-anime-style-2">Life at 4MANN</h2>
                            <!-- <h2 class="text-anime-style-2">4MANN Group 30+ Years of <span>Innovation in Building Materials & Design</span></h2> -->
                            <p class="wow fadeInUp" data-wow-delay="0.25s">At 4MANN, we believe work should be more than just a job—it should be a journey of growth, collaboration, and purpose.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">Our culture is built on:</p>
                        </div>
                        <!-- Section Title End -->
                        <div class="about-content-body">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <!-- About List Btn Box Start -->
                                    <div class="about-list-btn">
                                        <!-- About Content List Start -->
                                        <div class="about-content-list wow fadeInUp" data-wow-delay="0.5s">
                                            <ul>
                                                <li><b>Team Spirit:</b> We work together, celebrate together, and grow together.</li>
                                                <li><b>Innovation Everyday:</b> Every idea matters, and every voice is heard.</li>
                                                <li><b>Respect & Inclusion:</b> We value diversity and treat everyone with dignity.</li>
                                                <li><b>Work-Life Balance:</b> We believe great work comes from happy, well-balanced people.</li>
                                            </ul>
                                        </div>
                                        <!-- About Content List End -->
                                         <p class="wow fadeInUp">From brainstorming sessions to milestone celebrations, every day here is about creating impact while enjoying the process. Our open and vibrant workplace encourages learning, creativity, and camaraderie—making sure Mondays feel just as energizing as Fridays.</p>
                                         <p><b>At 4MANN, life at work means loving what you do, and doing it with people who inspire you.</b></p>
                                    </div>
                                    <!-- About List Btn Box End -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- About Content End -->


                </div>

            </div>
        </div>


    </div>
    <!-- About Us End -->

    <!-- Page Faqs Start -->
    <div class="page-faqs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Faqs Sidebar Start -->
                    <div class="faq-sidebar">


                        <!-- Sidebar CTA Box Start -->
                        <div class="sidebar-cta-box wow fadeInUp" data-wow-delay="0.25s">
                            <!-- Sidebar Image Start -->
                            <div class="sidebar-cta-logo">
                                <img src="images/footer-logo.svg" alt="">
                            </div>
                            <!-- Sidebar Image End -->

                            <!-- Sidebar CTA Body Start -->
                            <div class="sidebar-cta-Body">
                                <!-- Sidebar CTA Content Start -->
                                <div class="sidebar-cta-content">
                                    <h3>Need <span>help!</span></h3>
                                    <p>Got questions or need assistance with your Industry needs?</p>
                                </div>
                                <!-- Sidebar CTA Content End -->

                                <!-- Sidebar CTA Contact List Start -->
                                <div class="sidebar-cta-contact-list">
                                    <!-- Sidebar CTA Contact Item Start -->
                                    <div class="sidebar-cta-contact-item">
                                        <div class="icon-box">
                                            <img src="{{ asset('assets/images/icon/icon-phone.svg') }}" alt="">
                                        </div>

                                        <div class="cta-contact-item-title">
                                            <h3><a href="tel:+917506092733">+91 75060 92733</a></h3>
                                        </div>
                                    </div>
                                    <!-- Sidebar CTA Contact Item End -->

                                    <!-- Sidebar CTA Contact Item Start -->
                                    <div class="sidebar-cta-contact-item">
                                        <div class="icon-box">
                                            <img src="{{ asset('assets/images/icon/icon-mail.svg') }}" alt="">
                                        </div>
                                        <div class="cta-contact-item-title">
                                            <h3><a href="mailto:hrd.mumbai@4mannacp.com">hrd.mumbai@4mannacp.com</a></h3>
                                        </div>
                                    </div>
                                    <!-- Sidebar CTA Contact Item End -->
                                </div>
                                <!-- Sidebar CTA Contact List End -->
                            </div>
                            <!-- Sidebar CTA Body End -->
                        </div>
                        <!-- Sidebar CTA Box End -->
                    </div>
                    <!-- Faqs Sidebar End -->
                </div>

                <div class="col-lg-8">
                    <div class="page-faqs-catagery">




                        <div class="col-lg-12">
                            <!-- Page Contact Form Start -->
                            <div class="contact-us-form">
                                <div class="section-title">
                                    <h2 class="text-anime-style-2" data-cursor="-opaque">Upload <span>Your Resume</span></h2>
                                </div>

                                <div class="contact-form" id="apply-here">
                                    <!-- Contact Form Start -->
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
                                                <input type="file" name="attachment" class="form-control" id="attachment" accept=".pdf,.doc,.docx">
                                                <small class="form-text text-muted">Accepted file types: .pdf, .doc, .docx</small>
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
                                    <!-- Contact Form End -->
                                </div>
                            </div>
                            <!-- Page Contact Form End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Faq End -->
 @endsection


