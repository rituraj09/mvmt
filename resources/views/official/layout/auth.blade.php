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
        <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/back.css') }}" rel="stylesheet">
    @show

</head>
<body class="app flex-row align-items-center">
<div class="container context">

    <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
{{--    @if(Auth::guest())--}}

                @yield('content')

{{--    @endif--}}
</div>
@section('scripts')
    <script src="{{ asset('assets/js/app.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('assets/js/additional-methods.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/custom.js')}}"></script>

@show
</body>
</html>
