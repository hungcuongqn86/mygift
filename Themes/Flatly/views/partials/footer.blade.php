<!-- Start Footer -->
<footer id="mu-footer">
    <!-- Start Contact section -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 brand">
                <ul>
                    <li>
                        <img style="max-height: 20px;" src="{{ Theme::url('img/brand/kickstarter.png') }}"
                             alt="img"></li>
                    <li><i class="ion-social-twitter" aria-hidden="true"></i></li>
                    <li><img style="max-height: 28px;" src="{{ Theme::url('img/brand/instacart.png') }}"
                             alt="img"></li>
                    <li><i class="ion-social-pinterest" aria-hidden="true"></i></li>
                    <li><img style="max-height: 28px;" src="{{ Theme::url('img/brand/lya.png') }}"
                             alt="img"></li>
                    <li><img style="max-height: 30px;" src="{{ Theme::url('img/brand/shopify.png') }}"
                             alt="img"></li>
                    <li><img style="max-height: 30px;" src="{{ Theme::url('img/brand/opentable.png') }}"
                             alt="img"></li>
                    <li><img style="max-height: 30px;" src="{{ Theme::url('img/brand/slack.png') }}"
                             alt="img"></li>
                </ul>
            </div>
            <div class="col-md-12">
                <div id="mu-contact-area" class="mu-contact-area">
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
                                    {!! Form::open(['route' => 'public.contact.submit', 'method' => 'post', 'id'=>'ajax-contact', 'class' => 'mu-contact-form']) !!}
                                    {{--<form id="ajax-contact" method="post" action="contact"
                                          class="mu-contact-form">--}}
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
                                    {{--</form>--}}
                                    {!! Form::close() !!}
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