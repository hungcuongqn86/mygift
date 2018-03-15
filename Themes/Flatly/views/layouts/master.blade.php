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

    <!-- Poppins for body  -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:500" rel="stylesheet" type="text/css">
    <!-- Montserrat for body  -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:800" rel="stylesheet" type="text/css">
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
                    <li><a href="#">Home</a></li>
                    <li><a href="#mu-about-us">Who we are</a></li>
                    <li><a href="#mu-restaurant-menu">What we do</a></li>
                    <li><a href="#mu-reservation">How we do </a></li>
                    <li><a href="#mu-gallery">Why us</a></li>
                    <li><a href="#mu-chef">Solution</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
</header>
<!-- End header section -->

<section id="mu-who-we-are">
    <div class="container">
        <div class="row mu-who-we-are-body">
            <div class="col-md-6 mu-who-we-are-left">
                <h1 class="mu-who-we-are-title">Hello, we’re LeadsGen - generate leads for you </h1>
            </div>
            <div class="col-md-6 mu-who-we-are-right">
                <img src="http://localhost/themes/flatly/img/base.png" alt="img">
            </div>
        </div>
    </div>
    <div class="row mu-who-we-are-body">
        <div class="col-md-5 mu-who-we-are-left">
            <img src="http://localhost/themes/flatly/img/base2.png" alt="img">
            <img class="img-holder" src="http://localhost/themes/flatly/img/img-holder.png" alt="img">
        </div>
        <div class="col-md-7 mu-who-we-are-right">
            <p>- Since 2009</p>
            <p>Established from an expert group since 2009, LeadsGen Ltd,. was founded in 2013. Our mission is to help
                our clients reaching the best of ecommerce and online marketing by providing Leads solution. We are
                focusing on SEA and emerging market with dedicated team in Indonesia, Malaysia, Vietnam and the next
                would be Thailand. </p>
            <p>We know our client's need is leads generating and conversion, thus our team are working hard for highly
                converted campaigns, collecting leads and help their businesses run smoothly.</p>
        </div>
    </div>
</section>

<section id="mu-about-us">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-about-us-area">
                    <div class="mu-title">
                        <h2><span class="mu-subtitle">How</span> we do?</h2>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="mu-about-us-left">
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
                        <div class="col-md-4">
                            <div class="mu-about-us-left">
                                <img src="{{ Theme::url('img/about-us.png') }}" alt="img">
                            </div>
                            <div class="mu-about-us-left">
                                <img src="{{ Theme::url('img/about-us.png') }}" alt="img">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mu-about-us-right">
                                <img src="{{ Theme::url('img/about-us.png') }}" alt="img">
                            </div>
                            <div class="mu-about-us-left">
                                <img src="{{ Theme::url('img/about-us.png') }}" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="mu-about-us">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-about-us-area">
                    <div class="mu-title">
                        <h2 class="text-center"><span class="mu-subtitle">Why</span> choose us?</h2>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="mu-about-us-left">
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
                        <div class="col-md-4">
                            <div class="mu-about-us-left">
                                <img src="{{ Theme::url('img/about-us.png') }}" alt="img">
                            </div>
                            <div class="mu-about-us-left">
                                <img src="{{ Theme::url('img/about-us.png') }}" alt="img">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mu-about-us-right">
                                <img src="{{ Theme::url('img/about-us.png') }}" alt="img">
                            </div>
                            <div class="mu-about-us-left">
                                <img src="{{ Theme::url('img/about-us.png') }}" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Start Restaurant Menu -->
<section id="mu-restaurant-menu">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-restaurant-menu-area">
                    <div class="mu-restaurant-menu-content">
                        <ul class="nav nav-tabs mu-restaurant-menu">
                            <li class="active"><a href="#breakfast" data-toggle="tab">We optimizer</a></li>
                            <li><a href="#meals" data-toggle="tab">Leads solutions</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="breakfast">
                                <div class="mu-tab-content-area">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mu-about-us-left">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam
                                                    minus aliquid,
                                                    itaque illum assumenda repellendus dolorem, dolore numquam totam
                                                    saepe, porro
                                                    delectus, libero enim odio quo. Explicabo ex sapiente sit eligendi,
                                                    facere
                                                    voluptatum! Quia vero rerum sunt porro architecto corrupti eaque
                                                    corporis eum, enim
                                                    soluta, perferendis dignissimos, repellendus, beatae laboriosam.</p>
                                                <ul>
                                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                        Quia.
                                                    </li>
                                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                        Quia.
                                                    </li>
                                                </ul>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque
                                                    similique molestias
                                                    est quod reprehenderit, quibusdam nam qui, quam magnam.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mu-about-us-left">
                                                <img src="{{ Theme::url('img/about-us.png') }}" alt="img">
                                            </div>
                                            <div class="mu-about-us-left">
                                                <img src="{{ Theme::url('img/about-us.png') }}" alt="img">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mu-about-us-right">
                                                <img src="{{ Theme::url('img/about-us.png') }}" alt="img">
                                            </div>
                                            <div class="mu-about-us-left">
                                                <img src="{{ Theme::url('img/about-us.png') }}" alt="img">
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
                                                <p>What is leads generation and why it matters?</p>
                                                <p>Leads generation is a series of work, including advertising,
                                                    optimizing, tracking, reporting until a leads is captured.</p>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mu-tab-content-right">
                                                <p>In comparison with native online advertising, leads generation is
                                                    differ mainly in the result. Leads generation help you to reach the
                                                    last stage of the cycle (conversion) while online advertising help
                                                    you reach the first step of the cycle (clicks). It means with leads
                                                    generation, you will be able to minimize the risk of ineffective
                                                    campaign.</p>
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

<!-- Start Footer -->
<footer id="mu-footer">

    <!-- Start Contact section -->
    <section id="mu-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-contact-area">
                        <div class="mu-contact-content">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="mu-contact-left">
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

                                <div class="col-md-6">
                                    <div class="mu-contact-right">
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

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>
<!-- End Footer -->

<!-- jQuery library -->
{!! Theme::script('js/jquery.min.js') !!}
<!-- Include all compiled plugins (below), or include individual files as needed -->
{!! Theme::script('js/bootstrap.js') !!}
<!-- Slick slider -->
{!! Theme::script('js/slick.js') !!}
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