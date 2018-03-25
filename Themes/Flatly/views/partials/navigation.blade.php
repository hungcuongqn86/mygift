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
                    <span style="margin: 0 15px;">LeadsGen</span><span class="hidden-xs"
                                                                       style="font-size: 16px;;color: #cfcfcf">|</span><span
                            class="slogan hidden-xs">Generate Leads for you</span></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <div class="out-menu hidden-xs">
                    <span>|</span>
                    <select name="" id="sllang">
                        <option value="EN">EN</option>
                        <option value="ZH">ZH</option>
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
                @menu('main')
            </div>
        </div>
    </nav>
</header>