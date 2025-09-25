  @extends('main-layout.app')

@section('content')
<!-- Page Header Start -->
     <div class="page-header parallaxie breadcumb-area" data-desktop="{{ asset('assets/images/breadcrumb/blog.jpg') }}" data-mobile="{{ asset('assets/images/breadcrumb/blogmobile.jpg') }}">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque"> Media & News</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Media & News</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Page Single Post Start -->
    <div class="page-single-post">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Post Featured Image Start -->
                    <div class="post-image">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('assets/images/blog/blog-1.jpg') }}" alt="">
                        </figure>
                    </div>
                    <!-- Post Featured Image Start -->

                    <!-- Post Single Content Start -->
                    <div class="post-content">
                        <!-- Post Entry Start -->
                        <div class="post-entry">
                            <span style="font-weight: normal;color: #b44880;">20 May , 2025</span>
                            <h4 style="margin-top: 10px;">Building the Future: 4MANN’s Journey of Design, Durability & Innovation </h4>
                            <p class="wow fadeInUp">Few companies can match 4MANN's niche in the rapidly changing fields of design and construction, where innovation and sustainability collide. This indigenous Indian business has been at the forefront of architectural change for more than 22 years, creating innovative Aluminium Composite Panels (ACPs), Aluminium High-Pressure Laminates (AHPLs), ACP Louvers, and ACP 3D Panels that are revolutionizing the way structures are constructed and used.</p>

                            <p class="wow fadeInUp" data-wow-delay="0.2s">4MANN's panels have subtly established themselves as a standard feature in some of the most identifiable structures in the nation, from the imposing exteriors of contemporary offices to the elaborate interiors of commercial spaces.</p>



                            <h4 class="wow fadeInUp" data-wow-delay="0.8s">A Heritage Based on Accuracy and Performance</h4>

                            <p class="wow fadeInUp" data-wow-delay="0.6s">4MANN was founded in 2002 with the specific goal of providing Indian designers and builders with top-notch surface solutions. It is now a brand that is associated with quality, dependability, and technological innovation, in addition to being one of India's most reputable ACP manufacturers.</p>

                            <p class="wow fadeInUp" data-wow-delay="0.6s">This dedication is demonstrated by its 25,000 square meter flagship manufacturing facility in Jammu. The plant has strict quality control procedures and fast production lines, and it is fully accredited under the Green Category and ISO 9001:2015 certified. The company has already supplied more than 50+ million square meters of panels to customers across the country, with an annual production capacity of 2.4 million square meters.</p>

                            <h4 class="wow fadeInUp" data-wow-delay="0.8s">Where Durability and Design Collide</h4>

                            <p class="wow fadeInUp" data-wow-delay="1s">The technical prowess and design versatility of 4MANN's product line are what make it so appealing. The brand offers a wide range of colours, textures, and finishes to satisfy the needs of creative professionals who want both form and function.</p>

                            <p class="wow fadeInUp" data-wow-delay="1s">4MANN's panels combine the strength of metal with the elegance of luxury design to create resilient and elegant spaces, whether you're cladding a commercial high-rise or designing a chic interior.</p>
                            <h4 class="wow fadeInUp" data-wow-delay="0.8s">A Partner in Progress, Not Just a Manufacturer</h4>


                            <p class="wow fadeInUp" data-wow-delay="1.4s">4MANN's customer-centric approach is what makes it unique. The company provides more than just materials, supported by a network of more than 2,000 business partners and a staff of more than 300 professionals. It is a preferred partner in major infrastructure and architectural projects because of its technical know-how, prompt delivery, and on-site support.</p>
                            <h4 class="wow fadeInUp" data-wow-delay="0.8s">Built-In Safety with 4MANN FR</h4>


                            <p class="wow fadeInUp" data-wow-delay="1.4s">Safety is paramount in modern construction, and 4MANN addresses this with its specialized 4MANN FR - Fire-Retardant ACPs that meet high thermal resistance standards and are ideal for fire-sensitive applications. These panels are engineered to slow flame spread and reduce smoke generation, offering added protection without compromising on aesthetics or performance.</p>



                            <h4 class="wow fadeInUp" data-wow-delay="0.8s">Greener Decisions for a Greener Future</h4>


                            <p class="wow fadeInUp" data-wow-delay="1.4s">4MANN has adopted a proactive approach in a time when environmentally conscious building is no longer an option. The business supports energy-efficient and recyclable products as a member of the Indian Green Building Council (IGBC). Beyond production, its sustainable practices are becoming a part of a broader trend toward responsible urban development.</p>
                            <p class="wow fadeInUp" data-wow-delay="1.4s">Architects and developers who are dedicated to environmental stewardship are responding favorably to 4MANN's emphasis on green building materials, which turns them from a supplier into an ally in sustainability.</p>

                            <h4 class="wow fadeInUp" data-wow-delay="0.8s">Developing India's Infrastructure for the Future</h4>


                            <p class="wow fadeInUp" data-wow-delay="1.4s">There has never been a greater need for premium, versatile building materials as India enters a massive urbanization wave that will see smart cities, commercial centres, and infrastructure mega-projects take centre stage.</p>

                            <p class="wow fadeInUp" data-wow-delay="1.4s">By continuously modifying its product lines and investigating innovations that combine technology and design intelligence, 4MANN is stepping up to meet this demand.</p>
                            <p class="wow fadeInUp" data-wow-delay="1.4s">One environmentally friendly, fashionable panel at a time, 4MANN is ready to guide India into its next era of construction excellence thanks to its audacious vision and unwavering dedication to quality.</p>
                        </div>
                        <!-- Post Entry End -->


                    </div>
                    <!-- Post Single Content End -->
                </div>

                <div class="col-lg-4">
                      @include('pages.blog-menu2')

                </div>
            </div>
        </div>
    </div>
    <!-- Page Single Post End -->
    @endsection
