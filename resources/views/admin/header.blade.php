<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>4mann Industries Pvt. Ltd.</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/logo.png') }}">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/admin_assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('assets/admin_assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/admin_assets/dist/css/adminlte.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('assets/admin_assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/admin_assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/admin_assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
<!-- ✅ jQuery CDN (include this before your script) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/admin_assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- AdminLTE App -->
<script src="{{ asset('assets/admin_assets/dist/js/adminlte.min.js') }}"></script>


  <link rel="stylesheet" href="{{asset('assets/admin_assets/plugins/summernote/summernote-bs4.min.css')}}">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">


    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" href="{{url('/admin/logout')}}" role="button">
            <i class="fas fa-sign-out-alt"></i>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.navbar #dee2e6;-->
    <style>
      .elevation-4 {
        box-shadow: 0 14px 28px rgba(0, 0, 0, .25), 0 10px 10px rgba(0, 0, 0, .22) !important;
        background-color: #f5f7f8;
      }

      .nav-pills .nav-link.active,
      .nav-pills .show>.nav-link {
        color: #fff;
        background-color: #2b629e;
      }
    </style>
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar  elevation-4">
      <!-- Brand Logo -->

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="info">
            <center><img src="{{ asset('assets/images/logo.png') }}" style="width: 100%;" alt="company log"></center>

          </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            {{-- <li class="nav-item">
              <a href="{{url('admin/dashboard')}}" class="nav-link ">
                <i class="fa fa-home" aria-hidden="true"></i>
                <p>
                  Home Page
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              {{-- <ul class="nav nav-treeview">
             <li class="nav-item">
                 <a href="{{url('admin/banners')}}" class="nav-link">
                 <i class="fa  fa-circle"></i>
                <p>Update Banner</p>
                 </a>
             </li>
                <li class="nav-item">
                  <a href="{{url('admin/Home/About-us')}}" class="nav-link">
                    <i class="fa  fa-circle"></i>
                    <p>About Us</p>
                  </a>
                </li>
            <li class="nav-item">
              <a href="{{url('admin/ourwork')}}" class="nav-link">
                <p>Our Works</p>
               </a>
                </li>

              </ul> --}}
            {{-- </li> --}}

            <li class="nav-item">
              <a href="{{route('banners.index')}}" class="nav-link ">
                <i class="fa fa-calendar"></i>
                <p>
                Home Banners

                </p>
              </a>


            </li>
            <li class="nav-item">
                <a href="{{route('categories.index')}}" class="nav-link ">
                  <i class="fa fa-calendar"></i>
                  <p>
                  Add/Edit Subcategories

                  </p>
                </a>


              </li>
            <li class="nav-item">
           <a href="{{ route('products.index') }}" class="nav-link ">
             <i class="fa fa-bullseye"></i>
               <p>
                 Product Page

             </p>
             </a>


           </li>
           <li class="nav-item">
           <a href="{{ route('projects.index') }}" class="nav-link ">
             <i class="fa fa-bullseye"></i>
               <p>
                 Add Projects

             </p>
             </a>


           </li>
             <a href="{{ route('testimony.index') }}" class="nav-link ">
             <i class="fa fa-bullseye"></i>
               <p>
                 Add Testimony

             </p>
             </a>


           </li>
           <li class="nav-item">
           <a href="{{ route('media-blog.index') }}" class="nav-link ">
             <i class="fa fa-bullseye"></i>
               <p>
                 Add Media Blog

             </p>
             </a>

           </li>
            <!--<li class="nav-item">-->
            <!--  <a href="{{ url('admin/testimonials') }}" class="nav-link ">-->
            <!--    <i class="fa fa-bullseye"></i>-->
            <!--    <p>-->
            <!--     testimonials-->

            <!--    </p>-->
            <!--  </a>-->


            <!--</li>-->


            <!--<li class="nav-item">-->
            <!--  <a href="{{url('admin/contact')}}" class="nav-link ">-->
            <!--    <i class="fa fa-phone-square"></i>-->
            <!--    <p>-->
            <!--      Contact Form-Data-->
                  <!-- <i class="right fas fa-angle-left"></i> -->
            <!--    </p>-->
            <!--  </a>-->
              <!-- <ul class="nav nav-treeview">
            <!--    <li class="nav-item">-->
            <!--      <a href="{{url('admin/contact')}}" class="nav-link">-->
            <!--        <i class="fa  fa-circle"></i>-->
            <!--        <p>Contact Form</p>-->
            <!--      </a>-->
            <!--    </li>-->
            <!--    <li class="nav-item">-->
            <!--      <a href="{{url('admin/ContactSection')}}" class="nav-link">-->
            <!--        <i class="fa  fa-circle"></i>-->
            <!--        <p>Contact Section</p>-->
            <!--      </a>-->
            <!--    </li>-->

            <!--  </ul> -->

            <!--</li>-->
            {{-- <li class="nav-item">
             <a href="{{url('admin/coupons')}}" class="nav-link ">
               <i class="fa fa-cog"></i>
               <p>
                Coupons

               </p>
             </a>
            </li> --}}
            <li class="nav-item">
              <a href="{{url('admin/logout')}}" class="nav-link">
                <i class="fas fa-sign-out-alt"></i>
                <p>
                  Logout
                </p>
              </a>
            </li>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <script>
      document.addEventListener("DOMContentLoaded", function() {
        let currentUrl = window.location.href;
        document.querySelectorAll(".nav-link").forEach(link => {
          if (link.href === currentUrl) {
            link.classList.add("active");
          }
        });
      });
    </script>
