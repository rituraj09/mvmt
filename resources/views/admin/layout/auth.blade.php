<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="ROW Portal for applying applications for telegraph infrastructure in Assam. A Govt. of Assam property">
    <meta name="author" content="DITEC">
    <meta name="keyword" content="ROW, mobile Tower, telegraph infrastructure, application, apply, right of way assam">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
    <title>{{config('app.name')}}  - @yield('title', 'Govt of Assam')</title>
    @section('styles')

    <title>Star Admin Premium Bootstrap Admin Dashboard Template</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/ionicons/css/ionicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/typicons/src/font/typicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.addons.css') }}">
 
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/css/shared/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
 
    @show

</head>
<body>
<div class="container-scroller">

    
{{--    @if(Auth::guest())--}}

                @yield('content')

{{--    @endif--}}
</div>
@section('scripts')


        <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{ asset('assets/vendors/js/vendor.bundle.addons.js')}}"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="{{ asset('assets/js/shared/off-canvas.js')}}"></script>
    <script src="{{ asset('assets/js/shared/misc.js')}}"></script>
    <!-- endinject -->
 

@show
</body>
</html>