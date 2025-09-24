
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
                                    @foreach($products as $product)
                    <option value="{{ $product->id }}">{{ $product->product_title }}</option>
                @endforeach
                                </select>
                            </div>
                            <div class="form-group col-lg-3 col-md-6 mb-4">
                                <select id="states" name="states" class="form-select">
                                    <option  value="">Select state</option>
                                    
        <option value="Andhra Pradesh">Andhra Pradesh</option>
        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
        <option value="Assam">Assam</option>
        <option value="Bihar">Bihar</option>
        <option value="Chhattisgarh">Chhattisgarh</option>
        <option value="Goa">Goa</option>
        <option value="Gujarat">Gujarat</option>
        <option value="Haryana">Haryana</option>
        <option value="Himachal Pradesh">Himachal Pradesh</option>
        <option value="Jharkhand">Jharkhand</option>
        <option value="Karnataka">Karnataka</option>
        <option value="Kerala">Kerala</option>
        <option value="Madhya Pradesh">Madhya Pradesh</option>
        <option value="Maharashtra">Maharashtra</option>
        <option value="Manipur">Manipur</option>
        <option value="Meghalaya">Meghalaya</option>
        <option value="Mizoram">Mizoram</option>
        <option value="Nagaland">Nagaland</option>
        <option value="Odisha">Odisha</option>
        <option value="Punjab">Punjab</option>
        <option value="Rajasthan">Rajasthan</option>
        <option value="Sikkim">Sikkim</option>
        <option value="Tamil Nadu">Tamil Nadu</option>
        <option value="Telangana">Telangana</option>
        <option value="Tripura">Tripura</option>
        <option value="Uttar Pradesh">Uttar Pradesh</option>
        <option value="Uttarakhand">Uttarakhand</option>
        <option value="West Bengal">West Bengal</option>
        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
        <option value="Chandigarh">Chandigarh</option>
        <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and Daman and Diu</option>
        <option value="Delhi">Delhi</option>
        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
        <option value="Ladakh">Ladakh</option>
        <option value="Lakshadweep">Lakshadweep</option>
        <option value="Puducherry">Puducherry</option>
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
                    @if($projects->count() > 0)
                    <div class="row project-item-boxes align-items-center" id="projectsContainer">
                        @foreach($projects as $project)
                        <div class="col-md-6 project-item-box">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp">
                                <div class="project-image">
                                    <figure class="image-anime">
                                        <img src="{{ asset('storage/' . $project->project_image) }}" alt="">
                                    </figure>
                                </div>

                                <div class="project-tag">
                                    <a href="project-showcase.php">{{ $project->project_sector }}</a>
                                </div>

                                <div class="project-content">
                                    <h3><a href="{{ route('project-showcase.slug', $project->project_slug) }}">{{ $project->project_title }}</a></h3>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>
                        @endforeach

                    </div>
                    @else
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
                    @endif
                    <!-- Project Item Boxes End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Work Section End -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

$(document).ready(function () {

    // 🔹 State -> City Dropdown
    $('#states').on('change', function () {
        let state = $(this).val();

        if (state) {
            $.ajax({
                url: '/get-cities/' + state, // backend route
                type: 'GET',
                success: function (data) {
                    let $city = $('#city');
                    $city.empty();
                    $city.append('<option value="">Select City</option>');
                    $.each(data, function (id, name) {
                        $city.append('<option value="' + name + '">' + name + '</option>');
                    });
                }
            });
        } else {
            $('#city').empty().append('<option value="">Select City</option>');
        }
    });

    // 🔹 Filter Projects dynamically
    $('#sector, #product, #states, #city').on('change', function () {
        let filters = {
            sector: $('#sector').val(),
            product: $('#product').val(),
            state: $('#states').val(),
            city: $('#city').val()
        };

        $.ajax({
            url: '/projects/filter',   // backend route
            type: 'GET',
            data: filters,
            success: function (response) {
                // Replace with your container ID where projects are displayed
                $('#projectsContainer').html(response);
            }
        });
    });

});
</script>



    @endsection
