<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{config('app.name')}}  - @yield('title', 'Govt of Assam || Admin ')</title>
    @section('styles')
 
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/ionicons/css/ionicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/typicons/src/font/typicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.addons.css') }}">
 
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/font-awesome/css/font-awesome.min.css') }}" />
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/css/shared/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo_black.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/icheck/skins/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/demo_1/style.css') }}">
    <style>
      .navbar.default-layout .navbar-brand-wrapper 
      {
        background:#191919 !important;
      }
      .sidebar
      {
        background:-webkit-gradient(linear, left bottom, left top, from(#1f1f1f), to(#191919)) !important;
      }
      .sidebar > .nav:not(.sub-menu) > .nav-item:hover:not(.nav-profile):not(.hover-open) > .nav-link:not([aria-expanded="true"]) {
          background: #111 !important; 
      }
            
      .sidebar > .nav .nav-item:not(.hover-open) .collapse .sub-menu .nav-item .nav-link:hover, .sidebar > .nav .nav-item:not(.hover-open) .collapsing .sub-menu .nav-item .nav-link:hover {
          color: #fff !important;
      }
      .sidebar > .nav .nav-item:not(.hover-open) .collapse .sub-menu .nav-item .nav-link:hover:before, .sidebar > .nav .nav-item:not(.hover-open) .collapsing .sub-menu .nav-item .nav-link:hover:before {
        background: #fff !important;
      }
       
    .sidebar > .nav .nav-item:not(.hover-open) .collapse .sub-menu .nav-item .nav-link:before, .sidebar > .nav .nav-item:not(.hover-open) .collapsing .sub-menu .nav-item .nav-link:before 
    {
      background: #111;
    }
    </style>
    @show 
  </head>
  <body>
    <div class="container-scroller">
        @include('admin.layout.header')
        <div class="container-fluid page-body-wrapper">
        @include('admin.layout.sidebar')

 <!-- partial -->
          <div class="main-panel">
          <div class="content-wrapper">
          @yield('content')
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">All right reserved by Directorate of Information Technology, ELectronics & Communication, Govt. of Assam.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Developed by DITEC, Assam</i>
              </span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
     
    </div>
        
    @section('scripts')
    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{ asset('assets/vendors/js/vendor.bundle.addons.js')}}"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="{{ asset('assets/js/shared/off-canvas.js')}}"></script>
    <script src="{{ asset('assets/js/shared/misc.js')}}"></script>
    @show
  </body>
</html>