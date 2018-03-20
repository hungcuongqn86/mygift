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
                <a class="navbar-brand" href="#"><img src="{{ Theme::url('img/logo.png') }}" alt="Logo img">
                    <span style="margin: 0 15px;">LeadsGen</span><span
                            style="font-size: 16px;;color: #cfcfcf">|</span><span
                            class="slogan">Generate Leads for you</span></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <div class="out-menu">
                    <span>|</span>
                    <select name="" id="sllang">
                        <option value="EN">EN</option>
                        <option value="VN">VN</option>
                    </select>
                    <div class="social-top">
                        <ul>
                            <li class="social-link" style="margin-right: 15px"><a><i class="ion-social-facebook"
                                                                                     aria-hidden="true"></i></a></li>
                            <li class="social-link"><a><i class="ion-social-twitter"
                                                          aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
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
                <img class="mu-who-we-are-bg" src="http://localhost/themes/flatly/img/base.png" alt="img">
                <div class="mu-who-we-are-right-ins"><img class="mu-who-we-are-bg"
                                                          src="http://localhost/themes/flatly/img/img-holder-right.png"
                                                          srcset="http://localhost/themes/flatly/img/img-holder-right@2x.png 2x,
                                                        http://localhost/themes/flatly/img/img-holder-right@3x.png 3x"
                                                          alt="img"></div>
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

<div>
    <section id="mu-why-us-menu">
        <div id="nav-tabs">
            <div class="container">
                <ul class="nav nav-tabs">
                    <li class="col-md-6 active">
                        <div class="mu-why-us-oval"><a></a></div>
                        <a href="#we-optimizer" data-toggle="tab">We optimizer</a>
                    </li>
                    <li class="col-md-6">
                        <div class="mu-why-us-oval"><a></a></div>
                        <a href="#leads-solutions" data-toggle="tab">Leads solutions</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <div class="tab-content">
        <section class="tab-pane fade in active" id="we-optimizer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="we-optimizer-left">
                            <h3>What kind of data can we show up?</h3>
                            <p>Our team go to the deepest level of website performance analysis. We
                                show you all the action metrics on the website that important to
                                you. You will then know everything about your website, and how your
                                business going on this. There are just some of the statistics we can
                                show you:</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row we-optimizer-sub">
                            <div class="col-md-6">
                                <div class="we-optimizer-right">
                                    <div class="mu-why-us-oval">
                                        <img src="http://localhost/themes/flatly/img/statistic-2692-4-d-8-b-07-c-6-aa-3-e-4772-8-c-2-b-9-f-3-faa-4191-e-5.png"
                                             srcset="http://localhost/themes/flatly/img/statistic-2692-4-d-8-b-07-c-6-aa-3-e-4772-8-c-2-b-9-f-3-faa-4191-e-5@2x.png 2x,
                                                        http://localhost/themes/flatly/img/statistic-2692-4-d-8-b-07-c-6-aa-3-e-4772-8-c-2-b-9-f-3-faa-4191-e-5@3x.png 3x"
                                             alt="img">
                                    </div>
                                    <h4>Traffic sources</h4>
                                    <ul>
                                        <li>Where visitors comes from</li>
                                    </ul>
                                </div>
                                <div class="we-optimizer-right">
                                    <div class="mu-why-us-oval">
                                        <img src="http://localhost/themes/flatly/img/profile-3091-b-2591-e-91-2-e-00-4469-acbf-0-ccf-64-a-8-dac-8.png"
                                             srcset="http://localhost/themes/flatly/img/profile-3091-b-2591-e-91-2-e-00-4469-acbf-0-ccf-64-a-8-dac-8@2x.png 2x,
                                                        http://localhost/themes/flatly/img/profile-3091-b-2591-e-91-2-e-00-4469-acbf-0-ccf-64-a-8-dac-8@3x.png 3x"
                                             alt="img">
                                    </div>
                                    <h4>Audience analysis</h4>
                                    <ul>
                                        <li>Gender, Ages, Interest...</li>
                                        <li>Geographic</li>
                                        <li>Audience engagement (New vs returning, time on site...)</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="we-optimizer-right">
                                    <div class="mu-why-us-oval">
                                        <img src="http://localhost/themes/flatly/img/camera-phone-5384-208581-b-2-44-ec-48-a-8-97-c-2-5-f-62-a-9786-a-4-e.png"
                                             srcset="http://localhost/themes/flatly/img/camera-phone-5384-208581-b-2-44-ec-48-a-8-97-c-2-5-f-62-a-9786-a-4-e@2x.png 2x,
                                                        http://localhost/themes/flatly/img/camera-phone-5384-208581-b-2-44-ec-48-a-8-97-c-2-5-f-62-a-9786-a-4-e@3x.png 3x"
                                             alt="img">
                                    </div>
                                    <h4>Behavior</h4>
                                    <ul>
                                        <li>What visitor are doing on your website</li>
                                    </ul>
                                </div>
                                <div class="we-optimizer-right">
                                    <div class="mu-why-us-oval">
                                        <img src="http://localhost/themes/flatly/img/store-sale-2548-28377100-8-dda-4108-b-45-e-bcfc-63-a-2-b-371.png"
                                             srcset="http://localhost/themes/flatly/img/store-sale-2548-28377100-8-dda-4108-b-45-e-bcfc-63-a-2-b-371@2x.png 2x,
                                                        http://localhost/themes/flatly/img/store-sale-2548-28377100-8-dda-4108-b-45-e-bcfc-63-a-2-b-371@3x.png 3x"
                                             alt="img">
                                    </div>
                                    <h4>Ecommerce analysis</h4>
                                    <ul>
                                        <li>How many transactions has been made</li>
                                        <li>Where the transaction came from</li>
                                        <li>Which product is the best sold?</li>
                                        {{--<li>Analyze the best place to sell each product</li>
                                        <li>How much revenue you get from all transaction</li>
                                        <li>Which channel is the most effective and bring you the highest
                                            revenue
                                        </li>
                                        <li>Where visitor have been looking for information before they made
                                            a purchase
                                        </li>
                                        <li>Which is the most effective conversion path</li>
                                        <li>Your margin and ROI</li>--}}
                                    </ul>
                                    <p class="and-more"><a>And more <span class="icon-arrow-right2"></span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr style="box-shadow: inset 0 1px 0 0 #eef1f7, inset 0 -1px 0 0 #eef1f7;">
            <div class="container" id="how-we-make">
                <div class="row">
                    <div class="col-md-12">
                        <div class="how-we-make-header">
                            <h3>How we make it?</h3>
                            <p>We use Google Analytics and other analysis software (if needed - Such as Adobe
                                catalyst) to investigate your website. Below are our working process:</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="how-we-make">
                            <h4>You can collect the data by yourself as our team does. <span
                                        class="sub">But why us?</span>
                            </h4>
                            <ul>
                                <li>Our expertise and experience assuring the data is precise.</li>
                                <li>Our experience with our large customer database make us strong in</li>
                                <li>Implementation process. Whatever your website model, we can make it done.</li>
                                <li>Statistic is important, but analysis is a lots more: Each number has its own
                                    meaning.
                                </li>
                                <li>We compile the report with full of numbers to a friendly and easy reading report.
                                </li>
                                <li>You will completely understand what the numbers are telling you.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <img src="http://localhost/themes/flatly/img/sd1.png"
                             alt="img">
                    </div>
                </div>
            </div>
            <div style="background-color: #fff;box-shadow: inset 0 1px 0 0 #eef1f7, inset 0 -1px 0 0 #eef1f7;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="how-we-make-header">
                                <h3>How you get benefit from it?</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mu-why-us-content">
                                <div class="mu-why-us-oval">
                                    <img src="http://localhost/themes/flatly/img/idea-3125-08322-e-54-d-278-4453-a-0-e-4-8-fc-62-f-4-b-501-e.png"
                                         srcset="http://localhost/themes/flatly/img/idea-3125-08322-e-54-d-278-4453-a-0-e-4-8-fc-62-f-4-b-501-e@2x.png 2x,
                                                        http://localhost/themes/flatly/img/idea-3125-08322-e-54-d-278-4453-a-0-e-4-8-fc-62-f-4-b-501-e@3x.png 3x"
                                         alt="img">
                                </div>
                                <h3>Understand how visitor behaviour leads to sales and conversions</h3>
                                <p>Your site is dynamic, and your conversion goals should be too. With Our solution you
                                    can track sales, downloads, video plays, conversions, site engagement or define your
                                    own metrics. You can also tailor your reporting based on what you want to achieve
                                    and identify what visitor actions are most likely to help you meet your business
                                    objectives.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mu-why-us-content">
                                <div class="mu-why-us-oval">
                                    <img src="http://localhost/themes/flatly/img/statistics-2050-a-8-d-68351-72-f-6-407-c-9-e-67-0187-e-3389397.png"
                                         srcset="http://localhost/themes/flatly/img/statistics-2050-a-8-d-68351-72-f-6-407-c-9-e-67-0187-e-3389397@2x.png 2x,
                                                        http://localhost/themes/flatly/img/statistics-2050-a-8-d-68351-72-f-6-407-c-9-e-67-0187-e-3389397@3x.png 3x"
                                         alt="img">
                                </div>
                                <h3>Improve your online sales with E-commerce Reporting</h3>
                                <p>Identify your best-selling products and most valuable promotions. For complex
                                    transactions or simple one-click purchases, E-commerce Reporting helps you
                                    understand why customers purchase and the types of purchases that they make. You can
                                    trace transactions to campaigns and keywords, understand shoppers' on-site behaviour
                                    and adjust your shopping basket to increase sales and win customer loyalty.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mu-why-us-content">
                                <div class="mu-why-us-oval">
                                    <img src="http://localhost/themes/flatly/img/layers-1687-367-f-10-c-0-4-e-39-42-b-3-9-e-55-c-9-f-9205-c-6175.png"
                                         srcset="http://localhost/themes/flatly/img/layers-1687-367-f-10-c-0-4-e-39-42-b-3-9-e-55-c-9-f-9205-c-6175@2x.png 2x,
                                                        http://localhost/themes/flatly/img/layers-1687-367-f-10-c-0-4-e-39-42-b-3-9-e-55-c-9-f-9205-c-6175@3x.png 3x"
                                         alt="img">
                                </div>
                                <h3>See the complete picture of campaign performance with Multi-Channel Funnels</h3>
                                <p>Don't limit your campaign measurement to the last click before a sale. With
                                    Multi-Channel Funnels, you'll see the impact of all your digital marketing
                                    activities, including search, display, social, affiliates, email and more. Learn
                                    which channels introduce visitors to your products and which win sales, so that you
                                    can better balance your marketing programmes.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mu-why-us-content">
                                <div class="mu-why-us-oval">
                                    <img src="http://localhost/themes/flatly/img/visible-1646-575-f-69-ae-f-2-dd-43-c-2-b-00-f-9-b-65-c-116-deef.png"
                                         srcset="http://localhost/themes/flatly/img/visible-1646-575-f-69-ae-f-2-dd-43-c-2-b-00-f-9-b-65-c-116-deef@2x.png 2x,
                                                        http://localhost/themes/flatly/img/visible-1646-575-f-69-ae-f-2-dd-43-c-2-b-00-f-9-b-65-c-116-deef@3x.png 3x"
                                         alt="img">
                                </div>
                                <h3>Follow the different paths that visitors take on your site</h3>
                                <p>See why visitors love your site... or why they don't. Using Google Analytics Flow
                                    Visualisation and Goal Funnels, you can follow your visitors' conversion paths and
                                    see where they enter, where they get stuck and where they leave. Discover strengths
                                    and weaknesses in your site navigation, and learn which areas of your website and
                                    your marketing programme need adjustment.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mu-why-us-content">
                                <div class="mu-why-us-oval">
                                    <img src="http://localhost/themes/flatly/img/business-report-2684-4-fa-7-fcfd-0-c-83-47-d-5-88-ca-8291-e-198-b-6-ed.png"
                                         srcset="http://localhost/themes/flatly/img/business-report-2684-4-fa-7-fcfd-0-c-83-47-d-5-88-ca-8291-e-198-b-6-ed@2x.png 2x,
                                                        http://localhost/themes/flatly/img/business-report-2684-4-fa-7-fcfd-0-c-83-47-d-5-88-ca-8291-e-198-b-6-ed@3x.png 3x"
                                         alt="img">
                                </div>
                                <h3>Make better marketing decisions with Attribution Modelling</h3>
                                <p>With Attribution Modelling, you can rapidly build and customise marketing attribution
                                    models. Give credit to all of the digital marketing interactions that affected sales
                                    or conversions. Gauge the impact of different channels, referral sources, campaigns
                                    and keywords - so that you can improve your future marketing activities.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="tab-pane fade" id="leads-solutions">
            <div class="container">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-5 col-xs-12 mu-leads-solutions-left">
                        <h3>What is leads generation <br> and why it matters?</h3>
                        <p>Leads generation is a series of work, including advertising,
                            optimizing, tracking, reporting until a leads is captured.</p>
                    </div>
                    <div class="col-md-5 col-xs-12 mu-leads-solutions-right">
                        <p style="margin: 15px;">In comparison with native online advertising, leads generation
                            is
                            differ mainly in the result. Leads generation help you to reach the
                            last stage of the cycle (conversion) while online advertising help
                            you reach the first step of the cycle (clicks). It means with leads
                            generation, you will be able to minimize the risk of ineffective
                            campaign.</p>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12"><img class="mu-who-we-are-bg"
                                                src="http://localhost/themes/flatly/img/expland.png"
                                                srcset="http://localhost/themes/flatly/img/expland@2x.png 2x,
                                                        http://localhost/themes/flatly/img/expland@3x.png 3x"
                                                alt="img"></div>
                </div>
            </div>
            <div class="container how-we-collecting-leads">
                <div class="row">
                    <div class="col-md-5 how-we-collecting-leads-left">
                        <h3>How we collecting leads?</h3>
                        <p>Leads generation is a series of work, including advertising, optimizing, tracking, reporting
                            until a leads is captured.</p>
                        <div class="row">
                            <div class="col-md-6 content">
                                <span class="ion-ios-checkmark"></span>
                                People visit your landing page then finish a conversion here.
                            </div>
                            <div class="col-md-6 content">
                                <span class="ion-ios-checkmark"></span>
                                We put your product, services onto our networks
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 content">
                                <span class="ion-ios-checkmark"></span>
                                LeadsGen platform captures the conversion and you pay for conversions you get. We go
                                with you through the last step of selling process.
                            </div>
                            <div class="col-md-6 content">
                                <span class="ion-ios-checkmark"></span>
                                We build our own inventory, connect publishers and other adnetworks to build up multiple
                                audiences network.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <img class="mu-who-we-are-bg"
                             src="http://localhost/themes/flatly/img/flow1.png"
                             alt="img">
                    </div>
                </div>
            </div>

            <div class="container how-we-track-leads">
                <div class="row">
                    <div class="col-md-12 col-xs-12 text-center">
                        <h3>How we track leads?</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <h4>Web-base conversion</h4>
                                <p>Just add our conversion tag onto your converted page and then our system will do the
                                    rest. It
                                    shows you how many conversion have been made, where it came from and how much
                                    revenue you
                                    get from it.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <img class="mu-who-we-are-bg"
                                     src="http://localhost/themes/flatly/img/flow2.png"
                                     alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <h4>Mobile application base conversion</h4>
                                <p>With Mobile Application and games, we can connect with almost mobile tracking tool to
                                    get the
                                    installation data and show up for you on the reports.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <img class="mu-who-we-are-bg"
                                     src="http://localhost/themes/flatly/img/flow3.png"
                                     alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<!-- Start Footer -->
<footer id="mu-footer">
    <!-- Start Contact section -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 brand">
                <ul>
                    <li>
                        <img style="max-height: 20px;" src="http://localhost/themes/flatly/img/brand/kickstarter.png"
                             alt="img"></li>
                    <li><i class="ion-social-twitter" aria-hidden="true"></i></li>
                    <li><img style="max-height: 28px;" src="http://localhost/themes/flatly/img/brand/instacart.png"
                             alt="img"></li>
                    <li><i class="ion-social-pinterest" aria-hidden="true"></i></li>
                    <li><img style="max-height: 28px;" src="http://localhost/themes/flatly/img/brand/lya.png"
                             alt="img"></li>
                    <li><img style="max-height: 30px;" src="http://localhost/themes/flatly/img/brand/shopify.png"
                             alt="img"></li>
                    <li><img style="max-height: 30px;" src="http://localhost/themes/flatly/img/brand/opentable.png"
                             alt="img"></li>
                    <li><img style="max-height: 30px;" src="http://localhost/themes/flatly/img/brand/slack.png"
                             alt="img"></li>
                </ul>
            </div>
            <div class="col-md-12">
                <div class="mu-contact-area">
                    <div class="mu-contact-content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mu-contact-left">
                                    <div class="mu-title">
                                        <h2>Ready to <span class="mu-subtitle">get started ?</span></h2>
                                        <p>Get in touch, or email to<span
                                                    class="email"> contact@leadsgen.com.</span></p>
                                        <ul style="margin: 24px 0;">
                                            <li class="social-link"><i class="ion-social-facebook"
                                                                       aria-hidden="true"></i></li>
                                            <li class="social-link"><i class="ion-social-twitter"
                                                                       aria-hidden="true"></i></li>
                                            <li class="social-link"><i class="ion-social-instagram"
                                                                       aria-hidden="true"></i></li>
                                        </ul>
                                        <p style="font-size: 14px; color: #9ba9bb;"><i class="fa fa-copyright"
                                                                                       aria-hidden="true"></i>
                                            LeadsGen.com</p>
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
                                                    <input type="email" class="form-control" id="email"
                                                           name="email"
                                                           placeholder="Your email address" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="phone">Mobile phone</label>
                                                    <input type="text" class="form-control" id="phone"
                                                           name="phone"
                                                           placeholder="Mobile phone">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="subject">In a few words, tell us what your enquiry is
                                                about
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
</footer>
<!-- End Footer -->

<!-- jQuery library -->
{!! Theme::script('js/jquery.min.js') !!}
<!-- Include all compiled plugins (below), or include individual files as needed -->
{!! Theme::script('js/bootstrap.js') !!}
<!-- Sticky  -->
{!! Theme::script('js/jquery.sticky-kit.min.js') !!}
<!-- Ajax contact form  -->
{!! Theme::script('js/app.js') !!}
<!-- Custom js -->
{!! Theme::script('js/custom.js') !!}

</body>
</html>