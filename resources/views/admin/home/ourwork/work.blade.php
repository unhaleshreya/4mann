    <!-- Navbar -->
    @include('admin.header')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Home Page Our Recent Work</h1>
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
                        <!-- general form elements -->
                        @if(session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif

                        <div class="card card-primary">

                            <form action="{{url('admin/add-our-work')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('post')
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="heading">Heading</label>
                                        <input type="text" class="form-control" id="heading" name="heading" placeholder="Enter heading" value="" required>

                                    </div>
                                    <div class="form-group">
                                        <label for="caption">Captions</label>
                                        <input type="text" class="form-control" id="caption" name="caption" placeholder="Enter short lines" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="formFile" class="form-label">Upload Image</label><span style="color : red;font-size:small;">*(Image size: 644 x 434 px to 600 x 450px)</span>
                                        <input class="form-control" required id="hop" name="image" type="file">

                                    </div>
                                    <span id="hop_error" class="text-danger ms-3"></span>



                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                            </form>
                        </div>
                        <div class="card card-primary">
                            <!-- /.card-header -->
                            <!-- <div class="card-header">
                                    <h3 class="card-title">Edit Banner</h3>
                                </div> -->
                            <!-- @if(session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                            @endif -->
                            <div class="card-body">

                                <table id="example11" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Heading</th>

                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $i=1;@endphp
                                        @foreach($details as $data)
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td>{{$data->title}}</td>

                                            <td><img src="{{asset('public/assets/images/work/'.$data->image)}}" width="100px"></td>
                                            <td>
                                                <a class="btn btn-link" href="{{url('admin/edit-our-work/'.$data->id)}}"><i class="fa fa-edit" style="color:blue"></i></a>
                                                <a href="javascript:void(0)" id="delete-user" data-url="{{ url('admin/deleteHomeProducts/'.$data->id) }}" class="btn btn-link"><i class="fa fa-trash" style="color:red"></i></a>
                                            </td>
                                        </tr>
                                        @php $i++;@endphp
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
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

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });
        /*------------------------------------------
                             delete
        --------------------------------------------*/
        $('body').on('click', '#delete-user', function() {

            var userURL = $(this).data('url');
            var trObj = $(this);

            if (confirm("Are you sure you want to remove this Product?") == true) {
                $.ajax({
                    url: userURL,
                    type: 'DELETE',
                    dataType: 'json',
                    success: function(data) {
                        alert(data.success);
                        trObj.parents("tr").remove();
                        location.reload();
                    }
                });
            }

        });
    </script>