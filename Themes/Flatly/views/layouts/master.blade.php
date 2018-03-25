<!DOCTYPE html>
<html>
<head lang="{{ LaravelLocalization::setLocale() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @section('meta')
        <meta name="description" content="@setting('core::site-description')"/>
    @show
    <title>
        @section('title')@setting('core::site-name')@show
    </title>
    <link rel="shortcut icon" href="{{ Theme::url('favicon.ico') }}">

    <!-- Font awesome -->
{!! Theme::style('css/font-awesome.css') !!}
<!-- Bootstrap -->
{!! Theme::style('css/bootstrap.css') !!}
<!-- Theme color -->
{!! Theme::style('css/theme-color/default-theme.css') !!}
<!-- IIcon -->
{!! Theme::style('ionicons-2.0.1/css/ionicons.min.css') !!}
<!-- Icomoon -->
{!! Theme::style('icomoon/style.css') !!}
<!-- Main style sheet -->
{!! Theme::style('css/style.css') !!}

<!-- Google Fonts -->
    <!-- Poppins for body  -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:500" rel="stylesheet" type="text/css">
    <!-- Montserrat for body  -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:800" rel="stylesheet" type="text/css">
    <!-- Prata for body  -->
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    <!-- Roboto for Logo  -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:700" rel="stylesheet">
</head>
<body>

<!--START SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#">
    <i class="fa fa-angle-up"></i>
</a>
<!-- END SCROLL TOP BUTTON -->
@include('partials.navigation')
@yield('content')
@include('partials.footer')

<!-- jQuery library -->
{!! Theme::script('js/jquery.min.js') !!}
<!-- Include all compiled plugins (below), or include individual files as needed -->
{!! Theme::script('js/bootstrap.js') !!}
<!-- Sticky  -->
{!! Theme::script('js/jquery.sticky-kit.min.js') !!}

{!! Theme::script('js/jquery.easeScroll.js') !!}
<!--SVG-->
{!! Theme::script('js/svg.min.js') !!}
<!-- Ajax contact form  -->
{!! Theme::script('js/app.js') !!}
<!-- Custom js -->
{!! Theme::script('js/custom.js') !!}

</body>
</html>