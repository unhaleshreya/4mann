    <!-- Navbar -->
    @include('admin.header')

    <!-- Main content -->
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

                        <div class="card card-primary">
                            <!-- <div class="card-header">
                                <h3 class="card-title">About Us</h3>
                            </div> -->
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Content</th>
                                            <th>About us - Image</th>
                                            <th>Action</th>
                                            <!-- <th>CSS grade</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($aboutdetails as $data)
                                        <tr>
                                            <td>{{$data->content}}</td>
                                            <td><img src="{{asset('public/images/about/'.$data->image)}}" alt="" width="100px"> </td>
                                            <td>
                                                <a class="btn btn-link" href="{{url('admin/updateaboutcontent/'.$data->id)}}"><i class="fa fa-edit" style="color:blue"></i></a>

                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">About Us</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Home - Image1 (Letter)</th>
                                            <th>Action</th>
                                            <!-- <th>CSS grade</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($letterimg as $data)
                                        <tr>
                                          
                                            <td><img src="{{asset('public/images/about/'.$data->image)}}" alt="" width="100px"> </td>
                                            <td>
                                                <a class="btn btn-link" href="{{url('admin/updateletterimg/'.$data->id)}}"><i class="fa fa-edit" style="color:blue"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">About Us</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Home - Image2</th>
                                            <th>Action</th>
                                            <!-- <th>CSS grade</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($normalimg as $data)
                                        <tr>
                                            <td><img src="{{asset('public/images/about/'.$data->image)}}" alt="" width="100px"> </td>
                                            <td>
                                                <a class="btn btn-link" href="{{url('admin/updatenormalimg/'.$data->id)}}"><i class="fa fa-edit" style="color:blue"></i></a>

                                            </td>
                                        </tr>
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
    <!-- /.content -->
    @include('admin.footer')