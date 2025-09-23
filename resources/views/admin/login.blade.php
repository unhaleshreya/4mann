<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>4mann Industries Pvt. Ltd.</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/images/logo.png') }}">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets/admin_assets/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/admin_assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin_assets/dist/css/adminlte.min.css')}}">
    <!-- Theme style -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>
</head>
<style>
    #banner {
        background-image: url('path-to-image.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        height: 100vh;
        /* Adjust to your layout */
    }
</style>

<body id="banner" class="hold-transition login-page" style="background-image:url({{asset('assets/admin_assets/images/01.jpg')}})">
    <div class="login-box" style=" opacity:0.9;">
        @if ($errors->any())
        <div style="color:red">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <form action="{{ route('admin.login') }}" method="post">
                    @csrf
                    <div>
                        <img src="{{ asset('assets/images/logo.png') }}" alt="company log" width="250px" style="display: block;
    margin-left: auto;
    margin-right: auto;">
                    </div>
                    <!-- <div class="login-logo">
             <h4>Admin Login</h4>
         </div> -->
                    <div class="input-group mb-1 mt-5">
                        @if(session('status'))
                        <p style="color: red">
                            {{ session('status') }}
                        </p>
                        @endif
                    </div>

                    <div class="input-group mb-3 ">
                        <input type="text" class="form-control" name="username" placeholder="Username" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        <!-- @if($errors->has('username'))
                        <div class="error text-danger">{{ $errors->first('username') }}</div>
          @endif -->
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        <!-- @if($errors->has('password))
                        <div class="error text-danger">{{ $errors->first('password') }}</div>
          @endif -->
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-danger btn-block">Sign In</button>
                        </div>

                        <!-- /.col -->
                    </div>
                </form>
                <!-- /.social-auth-links -->
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{asset('assets/admin_assets/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('assets/admin_assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('assets/admin_assets/dist/js/adminlte.min.js')}}"></script>
</body>

</html>
