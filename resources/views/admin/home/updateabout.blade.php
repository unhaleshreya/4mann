    <!-- Navbar -->
    @include('admin.header')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>About Us-Home Page</h1>
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
             
                <form action="{{url('admin/updateHomeAbout')}}" method="post" enctype="multipart/form-data">
                  @csrf
                 
                  <div class="card-body">
                    
                    <div class="form-group">
                      <label for="abouthome" class="form-label">Upload Image</label><span style="color : red;font-size:medium; ">*(Image size: 624x512px to 650x512px)</span>
                      <input class="form-control" name="abouthome" type="file" id="abouthome">
                   
                      <img src="{{asset('public/assets/img/about/'.$data[0]->image)}}" width="400px" height="auto">
                    </div>
                    <span id="abouthome_error" class="text-danger ms-3"></span>

             

                    <div class="form-group">
                      <label for="title">Content(*)</label>
                      <textarea id="summernote" name="content"> {!!$data[0]->content!!} </textarea>
                   
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