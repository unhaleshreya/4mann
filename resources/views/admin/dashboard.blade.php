@include('admin.header')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Home Page</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Home Page</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    {{-- <section class="content">
        <div class="container-fluid">

            <!-- Add Banner Section -->
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title">Add Banner</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('banners.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Upload image for Website View
                                <small class="text-danger">(image size must be or greater than 1920x750px)</small>
                            </label>
                            <input type="file" name="web_image" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Upload image for Mobile View
                                <small class="text-danger">(image size must be or greater than 834x1194px)</small>
                            </label>
                            <input type="file" name="mobile_image" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

            <!-- About Us Section -->


        </div><!-- /.container-fluid -->
    </section> --}}
    <!-- /.content -->

@include('admin.footer')
