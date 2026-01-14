<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->


<head>
    <meta charset="utf-8">

    <title>Tickyplex</title>

    <meta name="description" content="FreshUI is a Premium Web App and Admin Template created by pixelcave and published on Themeforest.">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <link rel="shortcut icon" href="{{url('/assets/img/favicon.ico')}}">

    <link rel="apple-touch-icon" href="{{url('/assets/img/icon57.png')}}" sizes="57x57">
    <link rel="apple-touch-icon" href="{{url('/assets/img/icon72.png')}}" sizes="72x72">
    <link rel="apple-touch-icon" href="{{url('/assets/img/icon76.png')}}" sizes="76x76">
    <link rel="apple-touch-icon" href="{{url('/assets/img/icon114.png')}}" sizes="114x114">
    <link rel="apple-touch-icon" href="{{url('/assets/img/icon120.png')}}" sizes="120x120">
    <link rel="apple-touch-icon" href="{{url('/assets/img/icon144.png')}}" sizes="144x144">
    <link rel="apple-touch-icon" href="{{url('/assets/img/icon152.png')}}" sizes="152x152">


    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Bootstrap is included in its original form, unaltered -->
    <link rel="stylesheet" href="{{url('/assets/css/bootstrap.css')}}">


    <!-- Related styles of various icon packs and javascript plugins -->
    <link rel="stylesheet" href="{{url('/assets/css/plugins.css')}}">


    <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
    <link rel="stylesheet" href="{{url('/assets/css/main.css')}}">


    <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

    <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
    <link rel="stylesheet" href="{{url('/assets/css/themes.css')}}">

    <!-- END Stylesheets -->

    <!-- Modernizr (Browser feature detection library) & Respond.js (Enable responsive CSS code on browsers that don't support it, eg IE8) -->
    <script src="{{url('/assets/js/vendor/modernizr-respond.min.js')}}"></script>


</head>


    <!-- In the PHP version you can set the following options from the config file -->
    <!--
        Add one of the following classes to the body element for the desirable feature:
        'sidebar-left-pinned'                         for a left pinned sidebar (always visible > 1200px)
        'sidebar-right-pinned'                        for a right pinned sidebar (always visible > 1200px)
        'sidebar-left-pinned sidebar-right-pinned'    for both sidebars pinned (always visible > 1200px)
    -->
    <body class="header-fixed-top">
        <!-- Left Sidebar -->
        <!-- In the PHP version you can set the following options from the config file -->
        <!-- If you add the class .enable-hover, then a small portion of left sidebar will be visible and it can be opened with a mouse hover (> 1200px) (may affect website performance) -->



        @include('admin.partials.left-sidebar')


        <!-- END Left Sidebar -->

        <!-- Right Sidebar -->
        <!-- In the PHP version you can set the following options from the config file -->
        <!-- If you add the class .enable-hover, then a small portion of right sidebar will be visible and it can be opened with a mouse hover (> 1200px) (may affect website performance) -->



        @include('admin.partials.right-sidebar')

        <!-- END Right Sidebar -->

        <!-- Page Container -->
        <!-- In the PHP version you can set the following options from the config file -->
        <!-- Add the class .full-width for a full width page (100%, 1920px max width) -->

        <div class="page-container">
        @include('admin.partials.header')
        @if(session('class'))
        <div class="alert alert-{{session('class')}}" style="margin-top: 55px;">{{session('message')}}</div>
        @endif
        @yield('content')
        @include('admin.partials.footer')

        </div>



        <!-- END Page Container -->

        <!-- Scroll to top link, check main.js - scrollToTop() -->
        <a href="javascript:void(0)" id="to-top"><i class="fa fa-angle-up"></i></a>

        <!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


        <!-- Bootstrap.js, Jquery plugins and custom Javascript code -->
        <script src="{{url('/assets/js/vendor/bootstrap.min.js')}}"></script>
        <script src="{{url('/assets/js/plugins.js')}}"></script>
        <script src="{{url('/assets/js/main.js')}}"></script>


        <!-- Javascript code only for this page -->

        @stack('scripts')

    </body>
</html>


