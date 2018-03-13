<!DOCTYPE html>
<html>
<head lang="{{ LaravelLocalization::setLocale() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @section('meta')
        <meta name="description" content="@setting('core::site-description')" />
    @show
    <title>
        @section('title')@setting('core::site-name')@show
    </title>
    <link rel="shortcut icon" href="{{ Theme::url('favicon.ico') }}">

    <!-- Font awesome -->
    {!! Theme::style('css/font-awesome.css') !!}
    <!-- Bootstrap -->
    {!! Theme::style('css/bootstrap.css') !!}
    <!-- Slick slider -->
    {!! Theme::style('css/slick.css') !!}
    <!-- Date Picker -->
    {!! Theme::style('css/bootstrap-datepicker.css') !!}
    <!-- Gallery Lightbox -->
    {!! Theme::style('css/magnific-popup.css') !!}
    <!-- Theme color -->
    {!! Theme::style('css/theme-color/default-theme.css') !!}

    <!-- Main style sheet -->
    {!! Theme::style('css/style.css') !!}

    <!-- Google Fonts -->

    <!-- Prata for body  -->
    <link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'>
    <!-- Tangerine for small title -->
    <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>
    <!-- Open Sans for title -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

</head>
<body>

<!--START SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#">
    <i class="fa fa-angle-up"></i>
</a>
<!-- END SCROLL TOP BUTTON -->

<!-- Start header section -->
<header id="mu-header">
    <nav class="navbar navbar-default mu-main-navbar" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- LOGO -->
                <!--  Image based logo  -->
                <a class="navbar-brand" href="#"><img src="{{ Theme::url('img/logo.png') }}" alt="Logo img"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul id="top-menu" class="nav navbar-nav navbar-right mu-main-nav">
                    <li><a href="#">HOME</a></li>
                    <li><a href="#mu-about-us">ABOUT US</a></li>
                    <li><a href="#mu-restaurant-menu">MENU</a></li>
                    <li><a href="#mu-reservation">RESERVATION</a></li>
                    <li><a href="#mu-gallery">GALLERY</a></li>
                    <li><a href="#mu-chef">OUR CHEFS</a></li>
                    <li><a href="#mu-contact">CONTACT</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
</header>
<!-- End header section -->


<!-- Start slider  -->
<section id="mu-slider">
    <div class="mu-slider-area">

        <!-- Top slider -->
        <div class="mu-top-slider">

            <!-- Top slider single slide -->
            <div class="mu-top-slider-single">
                <img src="{{ Theme::url('img/slider/1.jpeg') }}" alt="img">
                <!-- Top slider content -->
                <div class="mu-top-slider-content">
                    <span class="mu-slider-small-title">Welcome</span>
                    <h2 class="mu-slider-title">To The OsteriaX</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque voluptatem accusamus non quidem,
                        deleniti optio.</p>
                    <a href="#mu-reservation" class="mu-readmore-btn mu-reservation-btn">BOOK A TABLE</a>
                </div>
                <!-- / Top slider content -->
            </div>
            <!-- / Top slider single slide -->

            <!-- Top slider single slide -->
            <div class="mu-top-slider-single">
                <img src="{{ Theme::url('img/slider/2.jpeg') }}" alt="img">
                <!-- Top slider content -->
                <div class="mu-top-slider-content">
                    <span class="mu-slider-small-title">The Elegant</span>
                    <h2 class="mu-slider-title">Italian Restaurant</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque voluptatem accusamus non quidem,
                        deleniti optio.</p>
                    <a href="#mu-reservation" class="mu-readmore-btn mu-reservation-btn">BOOK A TABLE</a>
                </div>
                <!-- / Top slider content -->
            </div>
            <!-- / Top slider single slide -->

            <!-- Top slider single slide -->
            <div class="mu-top-slider-single">
                <img src="{{ Theme::url('img/slider/3.jpeg') }}" alt="img">
                <!-- Top slider content -->
                <div class="mu-top-slider-content">
                    <span class="mu-slider-small-title">Delicious</span>
                    <h2 class="mu-slider-title">Spicy Masalas</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque voluptatem accusamus non quidem,
                        deleniti optio.</p>
                    <a href="#mu-reservation" class="mu-readmore-btn mu-reservation-btn">BOOK A TABLE</a>
                </div>
                <!-- / Top slider content -->
            </div>
            <!-- / Top slider single slide -->

        </div>
    </div>
</section>
<!-- End slider  -->

<!-- Start About us -->
<section id="mu-about-us">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-about-us-area">

                    <div class="mu-title">
                        <span class="mu-subtitle">Discover</span>
                        <h2>ABOUT US</h2>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mu-about-us-left">
                                <img src="{{ Theme::url('img/about-us.png') }}" alt="img">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mu-about-us-right">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam minus aliquid,
                                    itaque illum assumenda repellendus dolorem, dolore numquam totam saepe, porro
                                    delectus, libero enim odio quo. Explicabo ex sapiente sit eligendi, facere
                                    voluptatum! Quia vero rerum sunt porro architecto corrupti eaque corporis eum, enim
                                    soluta, perferendis dignissimos, repellendus, beatae laboriosam.</p>
                                <ul>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia.</li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque similique molestias
                                    est quod reprehenderit, quibusdam nam qui, quam magnam.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About us -->

<!-- Start Counter Section -->
<section id="mu-counter">
    <div class="mu-counter-overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-counter-area">

                        <ul class="mu-counter-nav">

                            <li class="col-md-3 col-sm-3 col-xs-12">
                                <div class="mu-single-counter">
                                    <span>Fresh</span>
                                    <h3><span class="counter-value" data-count="150">0</span><sup>+</sup></h3>
                                    <p>Breakfast Items</p>
                                </div>
                            </li>

                            <li class="col-md-3 col-sm-3 col-xs-12">
                                <div class="mu-single-counter">
                                    <span>Delicious</span>
                                    <h3><span class="counter-value" data-count="60">0</span><sup>+</sup></h3>
                                    <p>Lunch Items</p>
                                </div>
                            </li>

                            <li class="col-md-3 col-sm-3 col-xs-12">
                                <div class="mu-single-counter">
                                    <span>Hot</span>
                                    <h3><span class="counter-value" data-count="45">0</span><sup>+</sup></h3>
                                    <p>Coffee Items</p>
                                </div>
                            </li>

                            <li class="col-md-3 col-sm-3 col-xs-12">
                                <div class="mu-single-counter">
                                    <span>Satisfied</span>
                                    <h3><span class="counter-value" data-count="6560">0</span><sup>+</sup></h3>
                                    <p>Customers</p>
                                </div>
                            </li>

                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Counter Section -->

<!-- Start Restaurant Menu -->
<section id="mu-restaurant-menu">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-restaurant-menu-area">

                    <div class="mu-title">
                        <span class="mu-subtitle">Discover</span>
                        <h2>OUR MENU</h2>
                    </div>

                    <div class="mu-restaurant-menu-content">
                        <ul class="nav nav-tabs mu-restaurant-menu">
                            <li class="active"><a href="#breakfast" data-toggle="tab">Breakfast</a></li>
                            <li><a href="#meals" data-toggle="tab">Meals</a></li>
                            <li><a href="#snacks" data-toggle="tab">Snacks</a></li>
                            <li><a href="#desserts" data-toggle="tab">Desserts</a></li>
                            <li><a href="#drinks" data-toggle="tab">Drinks</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="breakfast">
                                <div class="mu-tab-content-area">
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="mu-tab-content-left">
                                                <ul class="mu-menu-item-nav">
                                                    <li>
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <a href="#">
                                                                    <img class="media-object"
                                                                         src="{{ Theme::url('img/menu/item-1.jpg') }}" alt="img">
                                                                </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <h4 class="media-heading"><a href="#">English
                                                                        Breakfast</a></h4>
                                                                <span class="mu-menu-price">$15.85</span>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit. Facere nulla aliquid praesentium dolorem
                                                                    commodi illo.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <a href="#">
                                                                    <img class="media-object"
                                                                         src="{{ Theme::url('img/menu/item-2.jpg') }}" alt="img">
                                                                </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <h4 class="media-heading"><a href="#">Chines
                                                                        Breakfast</a></h4>
                                                                <span class="mu-menu-price">$11.95</span>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit. Facere nulla aliquid praesentium dolorem
                                                                    commodi illo.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <a href="#">
                                                                    <img class="media-object"
                                                                         src="{{ Theme::url('img/menu/item-1.jpg') }}" alt="img">
                                                                </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <h4 class="media-heading"><a href="#">Indian
                                                                        Breakfast</a></h4>
                                                                <span class="mu-menu-price">$15.85</span>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit. Facere nulla aliquid praesentium dolorem
                                                                    commodi illo.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mu-tab-content-right">
                                                <ul class="mu-menu-item-nav">
                                                    <li>
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <a href="#">
                                                                    <img class="media-object"
                                                                         src="{{ Theme::url('img/menu/item-1.jpg') }}" alt="img">
                                                                </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <h4 class="media-heading"><a href="#">English
                                                                        Breakfast</a></h4>
                                                                <span class="mu-menu-price">$15.85</span>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit. Facere nulla aliquid praesentium dolorem
                                                                    commodi illo.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <a href="#">
                                                                    <img class="media-object"
                                                                         src="{{ Theme::url('img/menu/item-2.jpg') }}" alt="img">
                                                                </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <h4 class="media-heading"><a href="#">Chines
                                                                        Breakfast</a></h4>
                                                                <span class="mu-menu-price">$11.95</span>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit. Facere nulla aliquid praesentium dolorem
                                                                    commodi illo.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <a href="#">
                                                                    <img class="media-object"
                                                                         src="{{ Theme::url('img/menu/item-1.jpg') }}" alt="img">
                                                                </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <h4 class="media-heading"><a href="#">Indian
                                                                        Breakfast</a></h4>
                                                                <span class="mu-menu-price">$15.85</span>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit. Facere nulla aliquid praesentium dolorem
                                                                    commodi illo.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="meals">
                                <div class="mu-tab-content-area">
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="mu-tab-content-left">
                                                <ul class="mu-menu-item-nav">
                                                    <li>
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <a href="#">
                                                                    <img class="media-object"
                                                                         src="{{ Theme::url('img/menu/item-3.jpg') }}" alt="img">
                                                                </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <h4 class="media-heading"><a href="#">English
                                                                        Breakfast</a></h4>
                                                                <span class="mu-menu-price">$15.85</span>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit. Facere nulla aliquid praesentium dolorem
                                                                    commodi illo.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <a href="#">
                                                                    <img class="media-object"
                                                                         src="{{ Theme::url('img/menu/item-4.jpg') }}" alt="img">
                                                                </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <h4 class="media-heading"><a href="#">Chines
                                                                        Breakfast</a></h4>
                                                                <span class="mu-menu-price">$11.95</span>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit. Facere nulla aliquid praesentium dolorem
                                                                    commodi illo.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <a href="#">
                                                                    <img class="media-object"
                                                                         src="{{ Theme::url('img/menu/item-3.jpg') }}" alt="img">
                                                                </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <h4 class="media-heading"><a href="#">Indian
                                                                        Breakfast</a></h4>
                                                                <span class="mu-menu-price">$15.85</span>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit. Facere nulla aliquid praesentium dolorem
                                                                    commodi illo.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mu-tab-content-right">
                                                <ul class="mu-menu-item-nav">
                                                    <li>
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <a href="#">
                                                                    <img class="media-object"
                                                                         src="{{ Theme::url('img/menu/item-4.jpg') }}" alt="img">
                                                                </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <h4 class="media-heading"><a href="#">English
                                                                        Breakfast</a></h4>
                                                                <span class="mu-menu-price">$15.85</span>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit. Facere nulla aliquid praesentium dolorem
                                                                    commodi illo.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <a href="#">
                                                                    <img class="media-object"
                                                                         src="{{ Theme::url('img/menu/item-3.jpg') }}" alt="img">
                                                                </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <h4 class="media-heading"><a href="#">Chines
                                                                        Breakfast</a></h4>
                                                                <span class="mu-menu-price">$11.95</span>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit. Facere nulla aliquid praesentium dolorem
                                                                    commodi illo.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <a href="#">
                                                                    <img class="media-object"
                                                                         src="{{ Theme::url('img/menu/item-4.jpg') }}" alt="img">
                                                                </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <h4 class="media-heading"><a href="#">Indian
                                                                        Breakfast</a></h4>
                                                                <span class="mu-menu-price">$15.85</span>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit. Facere nulla aliquid praesentium dolorem
                                                                    commodi illo.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="snacks">
                                <div class="mu-tab-content-area">
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="mu-tab-content-left">
                                                <ul class="mu-menu-item-nav">
                                                    <li>
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <a href="#">
                                                                    <img class="media-object"
                                                                         src="{{ Theme::url('img/menu/item-5.jpg') }}" alt="img">
                                                                </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <h4 class="media-heading"><a href="#">English
                                                                        Breakfast</a></h4>
                                                                <span class="mu-menu-price">$15.85</span>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit. Facere nulla aliquid praesentium dolorem
                                                                    commodi illo.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <a href="#">
                                                                    <img class="media-object"
                                                                         src="{{ Theme::url('img/menu/item-6.jpg') }}" alt="img">
                                                                </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <h4 class="media-heading"><a href="#">Chines
                                                                        Breakfast</a></h4>
                                                                <span class="mu-menu-price">$11.95</span>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit. Facere nulla aliquid praesentium dolorem
                                                                    commodi illo.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <a href="#">
                                                                    <img class="media-object"
                                                                         src="{{ Theme::url('img/menu/item-5.jpg') }}" alt="img">
                                                                </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <h4 class="media-heading"><a href="#">Indian
                                                                        Breakfast</a></h4>
                                                                <span class="mu-menu-price">$15.85</span>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit. Facere nulla aliquid praesentium dolorem
                                                                    commodi illo.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mu-tab-content-right">
                                                <ul class="mu-menu-item-nav">
                                                    <li>
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <a href="#">
                                                                    <img class="media-object"
                                                                         src="{{ Theme::url('img/menu/item-5.jpg') }}" alt="img">
                                                                </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <h4 class="media-heading"><a href="#">English
                                                                        Breakfast</a></h4>
                                                                <span class="mu-menu-price">$15.85</span>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit. Facere nulla aliquid praesentium dolorem
                                                                    commodi illo.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <a href="#">
                                                                    <img class="media-object"
                                                                         src="{{ Theme::url('img/menu/item-6.jpg') }}" alt="img">
                                                                </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <h4 class="media-heading"><a href="#">Chines
                                                                        Breakfast</a></h4>
                                                                <span class="mu-menu-price">$11.95</span>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit. Facere nulla aliquid praesentium dolorem
                                                                    commodi illo.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <a href="#">
                                                                    <img class="media-object"
                                                                         src="{{ Theme::url('img/menu/item-5.jpg') }}" alt="img">
                                                                </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <h4 class="media-heading"><a href="#">Indian
                                                                        Breakfast</a></h4>
                                                                <span class="mu-menu-price">$15.85</span>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit. Facere nulla aliquid praesentium dolorem
                                                                    commodi illo.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="desserts">
                                <div class="mu-tab-content-area">
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="mu-tab-content-left">
                                                <ul class="mu-menu-item-nav">
                                                    <li>
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <a href="#">
                                                                    <img class="media-object"
                                                                         src="{{ Theme::url('img/menu/item-7.jpg') }}" alt="img">
                                                                </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <h4 class="media-heading"><a href="#">English
                                                                        Breakfast</a></h4>
                                                                <span class="mu-menu-price">$15.85</span>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit. Facere nulla aliquid praesentium dolorem
                                                                    commodi illo.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <a href="#">
                                                                    <img class="media-object"
                                                                         src="{{ Theme::url('img/menu/item-8.jpg') }}" alt="img">
                                                                </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <h4 class="media-heading"><a href="#">Chines
                                                                        Breakfast</a></h4>
                                                                <span class="mu-menu-price">$11.95</span>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit. Facere nulla aliquid praesentium dolorem
                                                                    commodi illo.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <a href="#">
                                                                    <img class="media-object"
                                                                         src="{{ Theme::url('img/menu/item-7.jpg') }}" alt="img">
                                                                </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <h4 class="media-heading"><a href="#">Indian
                                                                        Breakfast</a></h4>
                                                                <span class="mu-menu-price">$15.85</span>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit. Facere nulla aliquid praesentium dolorem
                                                                    commodi illo.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mu-tab-content-right">
                                                <ul class="mu-menu-item-nav">
                                                    <li>
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <a href="#">
                                                                    <img class="media-object"
                                                                         src="{{ Theme::url('img/menu/item-8.jpg') }}" alt="img">
                                                                </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <h4 class="media-heading"><a href="#">English
                                                                        Breakfast</a></h4>
                                                                <span class="mu-menu-price">$15.85</span>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit. Facere nulla aliquid praesentium dolorem
                                                                    commodi illo.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <a href="#">
                                                                    <img class="media-object"
                                                                         src="{{ Theme::url('img/menu/item-7.jpg') }}" alt="img">
                                                                </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <h4 class="media-heading"><a href="#">Chines
                                                                        Breakfast</a></h4>
                                                                <span class="mu-menu-price">$11.95</span>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit. Facere nulla aliquid praesentium dolorem
                                                                    commodi illo.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <a href="#">
                                                                    <img class="media-object"
                                                                         src="{{ Theme::url('img/menu/item-8.jpg') }}" alt="img">
                                                                </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <h4 class="media-heading"><a href="#">Indian
                                                                        Breakfast</a></h4>
                                                                <span class="mu-menu-price">$15.85</span>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit. Facere nulla aliquid praesentium dolorem
                                                                    commodi illo.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="drinks">
                                <div class="mu-tab-content-area">
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="mu-tab-content-left">
                                                <ul class="mu-menu-item-nav">
                                                    <li>
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <a href="#">
                                                                    <img class="media-object"
                                                                         src="{{ Theme::url('img/menu/item-9.jpg') }}" alt="img">
                                                                </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <h4 class="media-heading"><a href="#">English
                                                                        Breakfast</a></h4>
                                                                <span class="mu-menu-price">$15.85</span>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit. Facere nulla aliquid praesentium dolorem
                                                                    commodi illo.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <a href="#">
                                                                    <img class="media-object"
                                                                         src="{{ Theme::url('img/menu/item-10.jpg') }}" alt="img">
                                                                </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <h4 class="media-heading"><a href="#">Chines
                                                                        Breakfast</a></h4>
                                                                <span class="mu-menu-price">$11.95</span>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit. Facere nulla aliquid praesentium dolorem
                                                                    commodi illo.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <a href="#">
                                                                    <img class="media-object"
                                                                         src="{{ Theme::url('img/menu/item-9.jpg') }}" alt="img">
                                                                </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <h4 class="media-heading"><a href="#">Indian
                                                                        Breakfast</a></h4>
                                                                <span class="mu-menu-price">$15.85</span>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit. Facere nulla aliquid praesentium dolorem
                                                                    commodi illo.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mu-tab-content-right">
                                                <ul class="mu-menu-item-nav">
                                                    <li>
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <a href="#">
                                                                    <img class="media-object"
                                                                         src="{{ Theme::url('img/menu/item-9.jpg') }}" alt="img">
                                                                </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <h4 class="media-heading"><a href="#">English
                                                                        Breakfast</a></h4>
                                                                <span class="mu-menu-price">$15.85</span>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit. Facere nulla aliquid praesentium dolorem
                                                                    commodi illo.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <a href="#">
                                                                    <img class="media-object"
                                                                         src="{{ Theme::url('img/menu/item-10.jpg') }}" alt="img">
                                                                </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <h4 class="media-heading"><a href="#">Chines
                                                                        Breakfast</a></h4>
                                                                <span class="mu-menu-price">$11.95</span>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit. Facere nulla aliquid praesentium dolorem
                                                                    commodi illo.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <a href="#">
                                                                    <img class="media-object"
                                                                         src="{{ Theme::url('img/menu/item-9.jpg') }}" alt="img">
                                                                </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <h4 class="media-heading"><a href="#">Indian
                                                                        Breakfast</a></h4>
                                                                <span class="mu-menu-price">$15.85</span>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit. Facere nulla aliquid praesentium dolorem
                                                                    commodi illo.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Restaurant Menu -->

<!-- Start Reservation section -->
<section id="mu-reservation">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-reservation-area">

                    <div class="mu-title">
                        <span class="mu-subtitle">Make A</span>
                        <h2>Reservation</h2>
                    </div>

                    <div class="mu-reservation-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quidem autem iusto,
                            perspiciatis, amet, quaerat blanditiis ducimus eius recusandae nisi aut totam alias
                            consectetur et.</p>

                        <div class="col-md-6">
                            <div class="mu-reservation-left">
                                <form class="mu-reservation-form">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Full Name">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Phone Number">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <select class="form-control">
                                                    <option value="0">How Many?</option>
                                                    <option value="1 Person">1 Person</option>
                                                    <option value="2 People">2 People</option>
                                                    <option value="3 People">3 People</option>
                                                    <option value="4 People">4 People</option>
                                                    <option value="5 People">5 People</option>
                                                    <option value="6 People">6 People</option>
                                                    <option value="7 People">7 People</option>
                                                    <option value="8 People">8 People</option>
                                                    <option value="9 People">9 People</option>
                                                    <option value="10 People">10 People</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="datepicker"
                                                       placeholder="Date">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea class="form-control" cols="30" rows="10"
                                                          placeholder="Your Message"></textarea>
                                            </div>
                                        </div>
                                        <button type="submit" class="mu-readmore-btn">Make Reservation</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-md-5 col-md-offset-1">
                            <div class="mu-reservation-right">
                                <div class="mu-opening-hour">
                                    <h2>Opening Hours</h2>
                                    <ul class="list-unstyled">
                                        <li>
                                            <p>Monday &amp; Tuesday</p>
                                            <p>9:00 AM - 4:00 PM</p>
                                        </li>
                                        <li>
                                            <p>Wednesday &amp; Thursday</p>
                                            <p>9:00 AM - Midnight</p>
                                        </li>
                                        <li>
                                            <p>Friday &amp; Saturday</p>
                                            <p>9:00 AM - Midnight</p>
                                        </li>
                                        <li>
                                            <p>Sunday</p>
                                            <p>9:00 AM - 11:00 PM</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Reservation section -->

<!-- Start Gallery -->
<section id="mu-gallery">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-gallery-area">

                    <div class="mu-title">
                        <span class="mu-subtitle">Discover</span>
                        <h2>Our Gallery</h2>
                    </div>

                    <div class="mu-gallery-content">

                        <!-- Start gallery image -->
                        <div class="mu-gallery-body">
                            <!-- start single gallery image -->
                            <div class="mu-single-gallery col-md-4">
                                <div class="mu-single-gallery-item">
                                    <figure class="mu-single-gallery-img">
                                        <a class="mu-imglink" href="{{ Theme::url('img/gallery/1.jpg') }}">
                                            <img alt="img" src="{{ Theme::url('img/gallery/1.jpg') }}">
                                            <div class="mu-single-gallery-info">
                                                <img class="mu-view-btn" src="{{ Theme::url('img/plus.png') }}" alt="plus icon img">
                                            </div>
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <!-- End single gallery image -->

                            <!-- start single gallery image -->
                            <div class="mu-single-gallery col-md-4">
                                <div class="mu-single-gallery-item">
                                    <figure class="mu-single-gallery-img">
                                        <a class="mu-imglink" href="{{ Theme::url('img/gallery/2.jpg') }}">
                                            <img alt="img" src="{{ Theme::url('img/gallery/2.jpg') }}">
                                            <div class="mu-single-gallery-info">
                                                <img class="mu-view-btn" src="{{ Theme::url('img/plus.png') }}" alt="plus icon img">
                                            </div>
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <!-- End single gallery image -->

                            <!-- start single gallery image -->
                            <div class="mu-single-gallery col-md-4">
                                <div class="mu-single-gallery-item">
                                    <figure class="mu-single-gallery-img">
                                        <a class="mu-imglink" href="{{ Theme::url('img/gallery/3.jpg') }}">
                                            <img alt="img" src="{{ Theme::url('img/gallery/3.jpg') }}">
                                            <div class="mu-single-gallery-info">
                                                <img class="mu-view-btn" src="{{ Theme::url('img/plus.png') }}" alt="plus icon img">
                                            </div>
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <!-- End single gallery image -->

                            <!-- start single gallery image -->
                            <div class="mu-single-gallery col-md-4">
                                <div class="mu-single-gallery-item">
                                    <figure class="mu-single-gallery-img">
                                        <a class="mu-imglink" href="{{ Theme::url('img/gallery/4.jpg') }}">
                                            <img alt="img" src="{{ Theme::url('img/gallery/4.jpg') }}">
                                            <div class="mu-single-gallery-info">
                                                <img class="mu-view-btn" src="{{ Theme::url('img/plus.png') }}" alt="plus icon img">
                                            </div>
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <!-- End single gallery image -->

                            <!-- start single gallery image -->
                            <div class="mu-single-gallery col-md-4">
                                <div class="mu-single-gallery-item">
                                    <figure class="mu-single-gallery-img">
                                        <a class="mu-imglink" href="{{ Theme::url('img/gallery/5.jpg') }}">
                                            <img alt="img" src="{{ Theme::url('img/gallery/5.jpg') }}">
                                            <div class="mu-single-gallery-info">
                                                <img class="mu-view-btn" src="{{ Theme::url('img/plus.png') }}" alt="plus icon img">
                                            </div>
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <!-- End single gallery image -->

                            <!-- start single gallery image -->
                            <div class="mu-single-gallery col-md-4">
                                <div class="mu-single-gallery-item">
                                    <figure class="mu-single-gallery-img">
                                        <a class="mu-imglink" href="{{ Theme::url('img/gallery/6.jpg') }}">
                                            <img alt="img" src="{{ Theme::url('img/gallery/6.jpg') }}">
                                            <div class="mu-single-gallery-info">
                                                <img class="mu-view-btn" src="{{ Theme::url('img/plus.png') }}" alt="plus icon img">
                                            </div>
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <!-- End single gallery image -->

                            <!-- start single gallery image -->
                            <div class="mu-single-gallery col-md-4">
                                <div class="mu-single-gallery-item">
                                    <figure class="mu-single-gallery-img">
                                        <a class="mu-imglink" href="{{ Theme::url('img/gallery/7.jpg') }}">
                                            <img alt="img" src="{{ Theme::url('img/gallery/7.jpg') }}">
                                            <div class="mu-single-gallery-info">
                                                <img class="mu-view-btn" src="{{ Theme::url('img/plus.png') }}" alt="plus icon img">
                                            </div>
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <!-- End single gallery image -->

                            <!-- start single gallery image -->
                            <div class="mu-single-gallery col-md-4">
                                <div class="mu-single-gallery-item">
                                    <figure class="mu-single-gallery-img">
                                        <a class="mu-imglink" href="{{ Theme::url('img/gallery/8.jpg') }}">
                                            <img alt="img" src="{{ Theme::url('img/gallery/8.jpg') }}">
                                            <div class="mu-single-gallery-info">
                                                <img class="mu-view-btn" src="{{ Theme::url('img/plus.png') }}" alt="plus icon img">
                                            </div>
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <!-- End single gallery image -->

                            <!-- start single gallery image -->
                            <div class="mu-single-gallery col-md-4">
                                <div class="mu-single-gallery-item">
                                    <figure class="mu-single-gallery-img">
                                        <a class="mu-imglink" href="{{ Theme::url('img/gallery/9.jpg') }}">
                                            <img alt="img" src="{{ Theme::url('img/gallery/9.jpg') }}">
                                            <div class="mu-single-gallery-info">
                                                <img class="mu-view-btn" src="{{ Theme::url('img/plus.png') }}" alt="plus icon img">
                                            </div>
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <!-- End single gallery image -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Gallery -->

<!-- Start Client Testimonial section -->
<section id="mu-client-testimonial">
    <div class="mu-overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-client-testimonial-area">

                        <div class="mu-title">
                            <span class="mu-subtitle">Testimonials</span>
                            <h2>What Customers Say</h2>
                        </div>

                        <!-- testimonial content -->
                        <div class="mu-testimonial-content">
                            <!-- testimonial slider -->
                            <ul class="mu-testimonial-slider">
                                <li>
                                    <div class="mu-testimonial-single">
                                        <div class="mu-testimonial-info">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate
                                                consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae
                                                voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum
                                                nesciunt fuga ab natus, dolorem?</p>
                                        </div>
                                        <div class="mu-testimonial-bio">
                                            <p>- David Muller</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="mu-testimonial-single">
                                        <div class="mu-testimonial-info">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate
                                                consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae
                                                voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum
                                                nesciunt fuga ab natus, dolorem?</p>
                                        </div>
                                        <div class="mu-testimonial-bio">
                                            <p>- David Muller</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="mu-testimonial-single">
                                        <div class="mu-testimonial-info">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate
                                                consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae
                                                voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum
                                                nesciunt fuga ab natus, dolorem?</p>
                                        </div>
                                        <div class="mu-testimonial-bio">
                                            <p>- David Muller</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Client Testimonial section -->

<!-- Start Chef Section -->
<section id="mu-chef">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-chef-area">

                    <div class="mu-title">
                        <span class="mu-subtitle">Our Professionals</span>
                        <h2>MASTER CHEFS</h2>
                    </div>

                    <div class="mu-chef-content">
                        <ul class="mu-chef-nav">
                            <li>
                                <div class="mu-single-chef">
                                    <figure class="mu-single-chef-img">
                                        <img src="{{ Theme::url('img/chef/chef-1.jpg') }}" alt="chef img">
                                    </figure>
                                    <div class="mu-single-chef-info">
                                        <h4>Simon Jonson</h4>
                                        <span>Head Chef</span>
                                    </div>
                                    <div class="mu-single-chef-social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="mu-single-chef">
                                    <figure class="mu-single-chef-img">
                                        <img src="{{ Theme::url('img/chef/chef-2.jpg') }}" alt="chef img">
                                    </figure>
                                    <div class="mu-single-chef-info">
                                        <h4>Kelly Wenzel</h4>
                                        <span>Pizza Chef</span>
                                    </div>
                                    <div class="mu-single-chef-social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="mu-single-chef">
                                    <figure class="mu-single-chef-img">
                                        <img src="{{ Theme::url('img/chef/chef-3.jpg') }}" alt="chef img">
                                    </figure>
                                    <div class="mu-single-chef-info">
                                        <h4>Greg Hong</h4>
                                        <span>Grill Chef</span>
                                    </div>
                                    <div class="mu-single-chef-social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="mu-single-chef">
                                    <figure class="mu-single-chef-img">
                                        <img src="{{ Theme::url('img/chef/chef-4.jpg') }}" alt="chef img">
                                    </figure>
                                    <div class="mu-single-chef-info">
                                        <h4>Marty Fukuda</h4>
                                        <span>Burger Chef</span>
                                    </div>
                                    <div class="mu-single-chef-social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="mu-single-chef">
                                    <figure class="mu-single-chef-img">
                                        <img src="{{ Theme::url('img/chef/chef-5.jpg') }}" alt="chef img">
                                    </figure>
                                    <div class="mu-single-chef-info">
                                        <h4>Simon Jonson</h4>
                                        <span>Head Chef</span>
                                    </div>
                                    <div class="mu-single-chef-social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="mu-single-chef">
                                    <figure class="mu-single-chef-img">
                                        <img src="{{ Theme::url('img/chef/chef-1.jpg') }}" alt="chef img">
                                    </figure>
                                    <div class="mu-single-chef-info">
                                        <h4>Kelly Wenzel</h4>
                                        <span>Pizza Chef</span>
                                    </div>
                                    <div class="mu-single-chef-social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="mu-single-chef">
                                    <figure class="mu-single-chef-img">
                                        <img src="{{ Theme::url('img/chef/chef-2.jpg') }}" alt="chef img">
                                    </figure>
                                    <div class="mu-single-chef-info">
                                        <h4>Greg Hong</h4>
                                        <span>Grill Chef</span>
                                    </div>
                                    <div class="mu-single-chef-social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="mu-single-chef">
                                    <figure class="mu-single-chef-img">
                                        <img src="{{ Theme::url('img/chef/chef-3.jpg') }}" alt="chef img">
                                    </figure>
                                    <div class="mu-single-chef-info">
                                        <h4>Marty Fukuda</h4>
                                        <span>Burger Chef</span>
                                    </div>
                                    <div class="mu-single-chef-social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Chef Section -->


<!-- Start Contact section -->
<section id="mu-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-contact-area">

                    <div class="mu-title">
                        <span class="mu-subtitle">Get In Touch</span>
                        <h2>Contact Us</h2>
                    </div>

                    <div class="mu-contact-content">
                        <div class="row">

                            <div class="col-md-6">
                                <div class="mu-contact-left">
                                    <!-- Email message div -->
                                    <div id="form-messages"></div>
                                    <!-- Start contact form -->
                                    <form id="ajax-contact" method="post" action="mailer.php" class="mu-contact-form">
                                        <div class="form-group">
                                            <label for="name">Your Name</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                   placeholder="Name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email address</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                   placeholder="Email" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="subject">Subject</label>
                                            <input type="text" class="form-control" id="subject" name="subject"
                                                   placeholder="Subject" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="message">Message</label>
                                            <textarea class="form-control" id="message" name="message" cols="30"
                                                      rows="10" placeholder="Type Your Message" required></textarea>
                                        </div>
                                        <button type="submit" class="mu-send-btn">Send Message</button>
                                    </form>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mu-contact-right">
                                    <div class="mu-contact-widget">
                                        <h3>Office Address</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia temporibus
                                            corporis ea non consequatur porro corrupti hic voluptatibus assumenda,
                                            doloribus.</p>
                                        <address>
                                            <p><i class="fa fa-phone"></i> (850) 457 6688</p>
                                            <p><i class="fa fa-envelope-o"></i>contact@markups.io</p>
                                            <p><i class="fa fa-map-marker"></i>368 St. Panama City, Florida, USA</p>
                                        </address>
                                    </div>
                                    <div class="mu-contact-widget">
                                        <h3>Open Hours</h3>
                                        <address>
                                            <p><span>Monday - Friday</span> 9.00 am to 12 pm</p>
                                            <p><span>Saturday</span> 9.00 am to 10 pm</p>
                                            <p><span>Sunday</span> 10.00 am to 12 pm</p>
                                        </address>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact section -->

<!-- Start Map section -->
<section id="mu-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9207.358598888495!2d-85.64847801496286!3d30.183918972289003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x2320479d70eb6202!2sDillard&#39;s!5e0!3m2!1sbn!2sbd!4v1462359735720"
            width="100%" height="100%" frameborder="0" allowfullscreen></iframe>
</section>
<!-- End Map section -->

<!-- Start Footer -->
<footer id="mu-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-footer-area">
                    <div class="mu-footer-social">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                        <a href="#"><span class="fa fa-linkedin"></span></a>
                        <a href="#"><span class="fa fa-youtube"></span></a>
                    </div>
                    <div class="mu-footer-copyright">
                        <p>&copy; Copyright <a rel="nofollow" href="http://markups.io">markups.io</a>. All right
                            reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->

<!-- jQuery library -->
{!! Theme::script('js/jquery.min.js') !!}
<!-- Include all compiled plugins (below), or include individual files as needed -->
{!! Theme::script('js/bootstrap.js') !!}
<!-- Slick slider -->
{!! Theme::script('js/slick.js') !!}
<!-- Counter -->
{!! Theme::script('js/simple-animated-counter.js') !!}
<!-- Gallery Lightbox -->
{!! Theme::script('js/jquery.magnific-popup.min.js') !!}
<!-- Date Picker -->
{!! Theme::script('js/bootstrap-datepicker.js') !!}
<!-- Ajax contact form  -->
{!! Theme::script('js/app.js') !!}

<!-- Custom js -->
{!! Theme::script('js/custom.js') !!}

</body>
</html>