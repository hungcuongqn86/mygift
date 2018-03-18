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
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://i.icomoon.io/public/temp/a4741c4d86/UntitledProject/style.css">
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
    <img class="img-holder" src="http://localhost/themes/flatly/img/base2.png" alt="img">
    <img class="img-holder" src="http://localhost/themes/flatly/img/img-holder.png" alt="img">
    <div class="container">
        <div class="row mu-who-we-are-body">
            <div class="col-md-5">
                <div class="mu-who-we-are-body">
                    <div class="quotes">
                        <span class="icon-quotes-left"></span>
                    </div>
                </div>
            </div>
            <div class="col-md-7 mu-who-we-are-right">
                <p class="since">- Since 2009</p>
                <p>Established from an expert group since 2009, LeadsGen Ltd,. was founded in 2013. Our mission is to
                    help
                    our clients reaching the best of ecommerce and online marketing by providing Leads solution. We are
                    focusing on SEA and emerging market with dedicated team in Indonesia, Malaysia, Vietnam and the next
                    would be Thailand. </p>
                <p>We know our client's need is leads generating and conversion, thus our team are working hard for
                    highly
                    converted campaigns, collecting leads and help their businesses run smoothly.</p>
                <p class="text-right"><a class="contact-us">Contact us <span class="icon-arrow-right2"></span></a></p>
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
                        <h2><span class="mu-subtitle">How</span> we do?</h2>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="mu-about-us-content">
                                <div class="mu-about-us-margin">
                                    <div class="mu-about-us-head">
                                        <div class="mu-about-us-oval">
                                            <img src="http://localhost/themes/flatly/img/conference.png" alt="img">
                                        </div>
                                    </div>
                                    <h3>We control our technology with strong team and experience</h3>
                                    <p>Since our product and solutions are working based on advanced technology
                                        platform, we
                                        always stay ahead of new technology. Our system is usually checked and
                                        updated</p>
                                </div>
                                <img style="margin-top: 55px;" src="http://localhost/themes/flatly/img/macbook.png"
                                     alt="img">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mu-about-us-content">
                                <div class="mu-about-us-margin">
                                    <div class="mu-about-us-head">
                                        <div class="mu-about-us-oval">
                                            <img src="http://localhost/themes/flatly/img/debabe-841-d.png" alt="img">
                                        </div>
                                    </div>
                                    <h3>We keep in touch with you very closely</h3>
                                    <p>We work closely with you to timely update any changes made with your business.
                                        All
                                        the changes you made with your business will be reflected in our solution.
                                        Everything then will up to date always.</p>
                                </div>
                            </div>
                            <div class="mu-about-us-content">
                                <div class="mu-about-us-margin">
                                    <div class="mu-about-us-head">
                                        <div class="mu-about-us-oval">
                                            <img src="http://localhost/themes/flatly/img/accept-2056.png" alt="img">
                                        </div>
                                    </div>
                                    <h3>We track the result on the stages</h3>
                                    <p>We track all activities and result of the campaign correspond with each stage of
                                        your
                                        "shopping cart" process. We know exactly what's the problem, where does it come
                                        from
                                        and handle it completely.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mu-about-us-content">
                                <div class="mu-about-us-margin">
                                    <div class="mu-about-us-head">
                                        <div class="mu-about-us-oval">
                                            <img src="http://localhost/themes/flatly/img/link-1672.png" alt="img">
                                        </div>
                                    </div>
                                    <h3>We connect with adnetworks, publishers and control traffic quality</h3>
                                    <p>Our traffic is variety and fit with almost verticals, including yours</p>
                                </div>
                            </div>
                            <div class="mu-about-us-content">
                                <div class="mu-about-us-margin">
                                    <div class="mu-about-us-head">
                                        <div class="mu-about-us-oval">
                                            <img src="http://localhost/themes/flatly/img/lightning-bolt-1701.png"
                                                 alt="img">
                                        </div>
                                    </div>
                                    <h3>Optimize campaign based on real performance</h3>
                                    <p>All campaigns will often be optimized daily by our experienced operation team.
                                        This
                                        quick process assure we does not let any issue go without controlling it.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="mu-why-us">
    <div class="container">
        <div class="mu-why-us-area">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-8">
                    <div class="mu-title mu-why-us-margin">
                        <h2><span class="mu-subtitle">Why</span> choose us?</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mu-why-us-content">
                                <div class="mu-why-us-margin">
                                    <div class="mu-why-us-oval">
                                        <img src="http://localhost/themes/flatly/img/processor-cpu-2116-b-1-b-8-fbbb-1504-45-ac-9-ee-7-f-65-a-6-ff-1-b-8-f-1.png"
                                             srcset="http://localhost/themes/flatly/img/processor-cpu-2116-b-1-b-8-fbbb-1504-45-ac-9-ee-7-f-65-a-6-ff-1-b-8-f-1@2x.png 2x,
                                                        http://localhost/themes/flatly/img/processor-cpu-2116-b-1-b-8-fbbb-1504-45-ac-9-ee-7-f-65-a-6-ff-1-b-8-f-1@3x.png 3x"
                                             alt="img">
                                    </div>
                                    <h3>Innovative technology.</h3>
                                    <p>We stay ahead of new technology, allowing our platform compatible with all
                                        types of
                                        adnetworks and tracking platform</p>
                                </div>
                            </div>
                            <div class="mu-why-us-content">
                                <div class="mu-why-us-margin">
                                    <div class="mu-why-us-oval">
                                        <img src="http://localhost/themes/flatly/img/radar-signal-931-c-3-a-17278-a-10-f-4-bd-0-a-199-c-0961475-b-99-d.png"
                                             srcset="http://localhost/themes/flatly/img/radar-signal-931-c-3-a-17278-a-10-f-4-bd-0-a-199-c-0961475-b-99-d@2x.png 2x,
                                                        http://localhost/themes/flatly/img/radar-signal-931-c-3-a-17278-a-10-f-4-bd-0-a-199-c-0961475-b-99-d@3x.png 3x"
                                             alt="img">
                                    </div>
                                    <h3>Widely network</h3>
                                    <p>Our network is widely in terms of location and audience specification. We
                                        have
                                        traffic from Vietnam, Indonesia, Malaysia, Thailand and Vietnam. Wherever
                                        you want
                                        in SEA, we stay here to help.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mu-why-us-content">
                                <div class="mu-why-us-margin">
                                    <div class="mu-why-us-oval">
                                        <img src="http://localhost/themes/flatly/img/avatar-3016-786-da-4-fe-9361-44-a-2-9-e-46-1-fe-7-ae-7-d-292-a.png"
                                             srcset="http://localhost/themes/flatly/img/avatar-3016-786-da-4-fe-9361-44-a-2-9-e-46-1-fe-7-ae-7-d-292-a@2x.png 2x,
                                                        http://localhost/themes/flatly/img/avatar-3016-786-da-4-fe-9361-44-a-2-9-e-46-1-fe-7-ae-7-d-292-a@3x.png 3x"
                                             alt="img">
                                    </div>
                                    <h3>Variety in audiences set</h3>
                                    <p>Our regular audiences comes from mobile, desktop website, mobile
                                        application... with
                                        a wide range of age and income, allowing you to select and target to the
                                        right
                                        people.</p>
                                </div>
                            </div>
                            <div class="mu-why-us-content">
                                <div class="mu-why-us-margin">
                                    <div class="mu-why-us-oval">
                                        <img src="http://localhost/themes/flatly/img/shield-security-2062-6-afa-7973-b-602-412-a-b-27-a-b-1-cb-6-d-0-b-2548.png"
                                             srcset="http://localhost/themes/flatly/img/shield-security-2062-6-afa-7973-b-602-412-a-b-27-a-b-1-cb-6-d-0-b-2548@2x.png 2x,
                                                        http://localhost/themes/flatly/img/shield-security-2062-6-afa-7973-b-602-412-a-b-27-a-b-1-cb-6-d-0-b-2548@3x.png 3x"
                                             alt="img">
                                    </div>
                                    <h3>Transparency and precisely</h3>
                                    <p>Our platform works automatically, allowing you to changes bid, setting and
                                        watching
                                        your campaign performance any time. We show you all the campaign data we
                                        collected,
                                        helping your campaign stick with your plan very closely.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="nav-tabs">
    <div class="container">
        <ul class="nav nav-tabs mu-restaurant-menu">
            <li class="active"><a href="#breakfast" data-toggle="tab">We optimizer</a></li>
            <li><a href="#meals" data-toggle="tab">Leads solutions</a></li>
        </ul>
    </div>
</div>

<section id="mu-restaurant-menu">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-restaurant-menu-area">
                    <div class="mu-restaurant-menu-content">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="breakfast">
                                <div class="mu-tab-content-area">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mu-about-us-left">
                                                <h3>What kind of data can we show up?</h3>
                                                <p>Our team go to the deepest level of website performance analysis. We
                                                    show you all the action metrics on the website that important to
                                                    you. You will then know everything about your website, and how your
                                                    business going on this. There are just some of the statistics we can
                                                    show you:</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mu-about-us-left">
                                                <h4>Traffic sources</h4>
                                                <ul>
                                                    <li>Where visitors comes from</li>
                                                </ul>
                                            </div>
                                            <div class="mu-about-us-left">
                                                <h4>Audience analysis</h4>
                                                <ul>
                                                    <li>Gender, Ages, Interest...</li>
                                                    <li>Geographic</li>
                                                    <li>Audience engagement (New vs returning, time on site...)</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mu-about-us-right">
                                                <h4>Behavior</h4>
                                                <ul>
                                                    <li>What visitor are doing on your website</li>
                                                </ul>
                                            </div>
                                            <div class="mu-about-us-left">
                                                <h3>Ecommerce analysis</h3>
                                                <ul>
                                                    <li>How many transactions has been made</li>
                                                    <li>Where the transaction came from</li>
                                                    <li>Which product is the best sold?</li>
                                                    <li>Analyze the best place to sell each product</li>
                                                    <li>How much revenue you get from all transaction</li>
                                                    <li>Which channel is the most effective and bring you the highest
                                                        revenue
                                                    </li>
                                                    <li>Where visitor have been looking for information before they made
                                                        a purchase
                                                    </li>
                                                    <li>Which is the most effective conversion path</li>
                                                    <li>Your margin and ROI</li>
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
                                            <h3>Ready to get started ?</h3>
                                            <p>Get in touch, or email to contact@leadsgen.com.</p>
                                            <ul>
                                                <li><i class="fa fa-facebook" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-twitter" aria-hidden="true"></i></li>
                                                <li><i class="ion-social-instagram" aria-hidden="true"></i></li>
                                            </ul>
                                            <p><i class="fa fa-copyright" aria-hidden="true"></i> LeadsGen.com</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mu-contact-right">
                                        <!-- Email message div -->
                                        <div id="form-messages"></div>
                                        <!-- Start contact form -->
                                        <form id="ajax-contact" method="post" action="mailer.php"
                                              class="mu-contact-form">
                                            <div class="form-group">
                                                <label for="name">Your name <span>*</span></label>
                                                <input type="text" class="form-control" id="name" name="name"
                                                       placeholder="Your name" required>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="email">Your email address <span>*</span></label>
                                                        <input type="email" class="form-control" id="email" name="email"
                                                               placeholder="Your email address" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="phone">Mobile phone</label>
                                                        <input type="text" class="form-control" id="phone" name="phone"
                                                               placeholder="Mobile phone">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="subject">In a few words, tell us what your enquiry is about
                                                    <span>*</span></label>
                                                <input type="text" class="form-control" id="subject" name="subject"
                                                       placeholder="..." required>
                                            </div>
                                            <div class="form-group">
                                                <label for="message">Provide a detailed description
                                                    <span>*</span></label>
                                                <textarea class="form-control" id="message" name="message" cols="30"
                                                          rows="5" placeholder="..." required></textarea>
                                            </div>
                                            <button type="submit" class="mu-send-btn">Send</button>
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