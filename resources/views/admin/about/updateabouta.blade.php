    <!-- Navbar -->
    @include('admin.header')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>About Us</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Banner</li> -->
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-xl-12 col-md-12 col-sm-12">
              @if(session('status'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('status') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Update About Details</h3>
                </div>

                <!-- /.card-header -->
                <!-- form start -->

                <form action="{{url('admin/updateAboutA')}}" method="post" enctype="multipart/form-data">
                  @csrf

                  <div class="card-body">

                    <div class="form-group mb-3">
                      <label for="aboutimage1" class="form-label">Upload Image 1</label>
                      <span class="text-danger small">*(Image size: 522 x 595 to 550 x 600 px)</span>
                      <input class="form-control" name="image1" type="file" id="aboutimage1" accept="image/*">
                      @if(!empty($data[0]->image1))
                      <img src="{{ asset('public/assets/images/about/'.$data[0]->image1) }}" width="200px" height="auto">
                      @endif
                    </div>
                    <span id="aboutimage1_error" class="text-danger ms-3"></span>

                    <div class="form-group mb-3">
                      <label for="aboutimage2" class="form-label">Upload Image 2</label>
                      <span class="text-danger small">*(Image size: 228 x 274 to 250 x 300 px)</span>
                      <input class="form-control" name="image2" type="file" id="aboutimage2" accept="image/*">
                      @if(!empty($data[0]->image2))
                      <img src="{{ asset('public/assets/images/about/'.$data[0]->image2) }}" width="200px" height="auto">
                      @endif
                    </div>
                    <span id="aboutimage2_error" class="text-danger ms-3"></span>


                    <div class="form-group">
                      <label for="content1">Content-1(*)</label>
                      <textarea id="summernote" name="content1"> {!!$data[0]->content1!!} </textarea>

                    </div>
                    <div class="form-group">
                      <label for="content2">Content-2(*)</label>
                      <textarea id="summernote" name="content2"> {!!$data[0]->content2!!} </textarea>

                    </div>
                    <div class="form-group">
                      <label for="content3">Content-3(*)</label>
                      <textarea id="summernote" name="content3"> {!!$data[0]->content3!!} </textarea>

                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->


            </div>
            <!--/.col (left) -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('admin.footer')