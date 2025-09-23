    <!-- Navbar -->
    @include('admin.header')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Home- Our Products Update Details</h1>
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
              <!-- general form elements -->
              <div class="card card-primary">
                <!-- <div class="card-header">
                  <h3 class="card-title">Update Banner Details</h3>
                </div> -->
                @if(session('status'))
                <div class="alert alert-success">
                  {{ session('status') }}
                </div>
                @endif
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{url('admin/updateHomeProducts/'.$data->id)}}" method="post" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <div class="card-body">
                    

                    <div class="form-group">
                      <label for="heading">Heading</label>
                      <input type="text" class="form-control" id="heading" name="title" placeholder="Enter heading" value="{{$data->title}}" required>
                     
                    </div>
                     <div class="form-group">
                      <label for="tagline">Tag Lines</label>
                      <input type="text" class="form-control" id="tagline" name="subtitle" placeholder="Enter heading" value="{{$data->subtitle}}" required>
                     
                    </div>
                    <div class="form-group">
                      <label for="formFile" class="form-label">Upload Image</label><span style="color : red;font-size:small;">*(Image size: 644 x 434 px to 600 x 450px)</span>
                      <input class="form-control"  id="hop" name="image" type="file" accept="image/*">
                      <img src="{{asset('public/assets/images/work/'.$data->image)}}" width="200px" height="auto">

                    </div>
                    <span id="hop_error" class="text-danger ms-3"></span>
                   

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
    <script src="{{asset('public/admin_assets/js/imageval.js')}}"></script>
    @include('admin.footer')