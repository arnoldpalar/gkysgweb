<?php
/**
 * Template Name: Home Page Template
 * Description: Home Page Template
 *
 * @package gkysg
 */

get_header();
?>

<body class="header-fixed header-fixed-space">
<div class="wrapper">
    <?php get_template_part('components/main', 'header'); ?>

    <!--=== Slider ===-->
    <div class="ms-layers-template">
        <!-- masterslider -->
        <div class="master-slider ms-skin-black-2 round-skin" id="masterslider">
            <div class="ms-slide" style="z-index: 10">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/plugins/master-slider/masterslider/style/blank.gif" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/bg/img2.jpg" alt="">
                <div class="ms-layer ms-promo-info color-light" style="left:15px; top:160px"
                     data-effect="bottom(40)"
                     data-duration="2000"
                     data-delay="700"
                     data-ease="easeOutExpo"
                >Introducing</div>

                <div class="ms-layer ms-promo-info ms-promo-info-in color-light" style="left:15px; top:210px"
                     data-effect="bottom(40)"
                     data-duration="2000"
                     data-delay="1000"
                     data-ease="easeOutExpo"
                ><span class="color-green">Unify</span> Template</div>

                <div class="ms-layer ms-promo-sub color-light" style="left:15px; top:310px"
                     data-effect="bottom(40)"
                     data-duration="2000"
                     data-delay="1300"
                     data-ease="easeOutExpo"
                >We are creative technology company providing <br> key digital services on web and mobile.</div>


                <a class="ms-layer btn-u" style="left:15px; top:390px" href="#"
                   data-effect="bottom(40)"
                   data-duration="2000"
                   data-delay="1300"
                   data-ease="easeOutExpo"
                >LEARN MORE</a>

                <a class="ms-layer btn-u btn-u-dark" style="left:150px; top:390px" href="#"
                   data-effect="bottom(40)"
                   data-duration="2000"
                   data-delay="1300"
                   data-ease="easeOutExpo"
                >ABOUT US</a>
            </div>

            <div class="ms-slide" style="z-index: 13">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/plugins/master-slider/masterslider/style/blank.gif" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/bg/img4.jpg" alt="">

                <img class="ms-layer" src="<?php echo get_template_directory_uri(); ?>/assets/plugins/master-slider/masterslider/style/blank.gif" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/mockup/hand-black-iphone-l.png" alt=""
                     style="bottom:-10px; left:15px; width:400px; height: auto;"
                     data-effect="bottom(100)"
                     data-duration="2000"
                     data-ease="easeOutExpo"
                     data-type="image"
                />

                <h3 class="ms-layer ms-promo-info-in color-light"  style="left:450px; top:170px;"
                    data-effect="right(40)"
                    data-duration="2300"
                    data-delay="1300"
                    data-ease="easeOutExpo"
                >MOST</h3>

                <h3 class="ms-layer ms-promo-info-in color-darker"  style="left:450px; top:230px"
                    data-effect="left(40)"
                    data-duration="2300"
                    data-delay="1400"
                    data-ease="easeOutBack"
                >INCREDIBLE</h3>

                <h3 class="ms-layer ms-promo-info-in color-darker"  style="left:450px; top:290px"
                    data-effect="left(40)"
                    data-duration="2300"
                    data-delay="1400"
                    data-ease="easeOutBack"
                >NEW <span class="color-light">FEATURES</span></h3>

                <a class="ms-layer btn-u" style="left:450px; top:370px" href="#"
                   data-effect="bottom(40)"
                   data-duration="2000"
                   data-delay="1300"
                   data-ease="easeOutExpo"
                >LEARN MORE</a>

                <a class="ms-layer btn-u btn-u-dark" style="left:580px; top:370px" href="#"
                   data-effect="bottom(40)"
                   data-duration="2000"
                   data-delay="1300"
                   data-ease="easeOutExpo"
                >DOWNLOAD NOW</a>
            </div>

            <div class="ms-slide" style="z-index: 12">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/plugins/master-slider/masterslider/style/blank.gif" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/bg/img3.jpg" alt="">

                <div class="ms-layer video-box" style="bottom:125px; right:15px; width:650px; height:370px;"
                     data-type="video"
                     data-effect="rotate3dright(0,30,0,100,r)"
                     data-duration="1500"
                     data-ease="easeOutQuad"
                >
                    <img class="ms-img-bordered" src="<?php echo get_template_directory_uri(); ?>/assets/plugins/master-slider/masterslider/style/blank.gif" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/main/img20.jpg" alt="">
                    <iframe src="http://player.vimeo.com/video/70528799" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen> </iframe>
                </div>

                <h3 class="ms-layer ms-promo-info color-light"  style="left:10px; top:170px"
                    data-effect="bottom(20)"
                    data-duration="2300"
                    data-delay="2300"
                    data-ease="easeOutExpo"
                >AMAZING</h3>

                <h3 class="ms-layer ms-promo-info-in color-light"  style="left:10px; top:245px"
                    data-effect="left(100)"
                    data-duration="3300"
                    data-delay="1900"
                    data-ease="easeOutExpo"
                ><span class="color-green">FEATURES</span></h3>

                <h3 class="ms-layer normal-title color-light"  style="left:10px; top:312px"
                    data-effect="bottom(20)"
                    data-duration="2300"
                    data-delay="2000"
                    data-ease="easeOutExpo"
                >UNIFY BOOTSTRAP TEMPLATE</h3>

                <p class="ms-layer ms-promo-sub ms-promo-sub-in color-light"  style="left:10px; top:360px"
                   data-effect="right(40)"
                   data-duration="2300"
                   data-delay="2300"
                   data-ease="easeOutExpo"
                >YOUTUBE, VIMEO AND CUSTOM <br> IFRAME SUPPORTED</p>
            </div>
        </div>
        <!-- end of masterslider -->
    </div>
    <!--=== End Slider ===-->

    <!--=== Call To Action ===-->
    <div class="call-action-v1 bg-color-light">
        <div class="container">
            <div class="call-action-v1-box">
                <div class="call-action-v1-in">
                    <p>Unify creative technology company providing key digital services and focused on helping our clients to build a successful business on web and mobile.</p>
                </div>
                <div class="call-action-v1-in inner-btn page-scroll">
                    <a href="#portfolio" class="btn-u btn-brd btn-brd-hover btn-u-dark btn-u-block">REGISTER TODAY</a>
                </div>
            </div>
        </div>
    </div>
    <!--=== End Call To Action ===-->

    <!-- About Info -->
    <div class="container content-md">
        <div class="row">
            <div class="col-md-6">
                <h2 class="title-v2">WE ARE UNIFY</h2>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures.</p><br>
                <a href="#" class="btn-u btn-brd btn-brd-hover btn-u-dark">Read More</a>
                <a href="#" class="btn-u">View Our Work</a>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/mockup/mockup1.png" alt="">
            </div>
        </div>
    </div>
    <!-- End About Info -->

    <!--=== Parallax Quote ===-->
    <div class="parallax-quote parallaxBg">
        <div class="container">
            <div class="parallax-quote-in">
                <p>If you can design one thing <span class="color-green">you can design</span> everything. <br> Just Believe It.</p>
                <small>- HtmlStream -</small>
            </div>
        </div>
    </div>
    <!--=== End Parallax Quote ===-->

    <!--=== Service Blcoks ===-->
    <div class="container content-md">
        <div class="text-center margin-bottom-50">
            <h2 class="title-v2 title-center">OUR SERVICES</h2>
            <p class="space-lg-hor">If you are going to use a <span class="color-green">passage of Lorem Ipsum</span>, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making <span class="color-green">this the first</span> true generator on the Internet.</p>
        </div>

        <!-- Service Blcoks -->
        <div class="row service-box-v1">
            <div class="col-md-4 col-sm-6 md-margin-bottom-40">
                <div class="service-block service-block-default no-margin-bottom">
                    <i class="icon-lg rounded-x icon icon-badge"></i>
                    <h2 class="heading-sm">Web Design &amp; Development</h2>
                    <p>Donec id elit non mi porta gravida at eget metus id elit mi egetine. Fusce dapibus</p>
                    <ul class="list-unstyled">
                        <li>Responsive Web Desgin</li>
                        <li>E-commerce</li>
                        <li>App &amp; Icon Design</li>
                        <li>Logo &amp; Brand Design</li>
                        <li>Mobile Development</li>
                        <li>UI/UX Design</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 md-margin-bottom-40">
                <div class="service-block service-block-default no-margin-bottom">
                    <i class="icon-lg rounded-x icon-line icon-trophy"></i>
                    <h2 class="heading-sm">Marketing &amp; Cunsulting</h2>
                    <p>Donec id elit non mi porta gravida at eget metus id elit mi egetine usce dapibus elit nondapibus</p>
                    <ul class="list-unstyled">
                        <li>Analysis &amp; Consulting</li>
                        <li>Email Marketing</li>
                        <li>App &amp; Icon Design</li>
                        <li>Responsive Web Desgin</li>
                        <li>Social Networking</li>
                        <li>Documentation</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="service-block service-block-default no-margin-bottom">
                    <i class="icon-lg rounded-x icon-line icon-layers"></i>
                    <h2 class="heading-sm">SEO &amp; Advertising</h2>
                    <p>Donec id elit non mi porta gravida at eget metus id elit mi egetine. Fusce dapibus</p>
                    <ul class="list-unstyled">
                        <li>Display Advertising</li>
                        <li>App &amp; Icon Design</li>
                        <li>Analysis &amp; Consulting</li>
                        <li>Google AdSense</li>
                        <li>Social Media</li>
                        <li>Google/Bing Analysis</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Service Blcoks -->
    </div>
    <!--=== End Service Blcoks ===-->

    <!--=== Carallax Counter v1 ===-->
    <div class="parallax-counter-v1 parallaxBg" style="background-position: 50% 20px;">
        <div class="container">
            <h2 class="title-v2 title-light title-center">SOME FACTS AND SERVICES</h2>
            <p class="space-xlg-hor text-center color-light">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.</p>

            <div class="margin-bottom-40"></div>

            <div class="row margin-bottom-10">
                <div class="col-sm-3 col-xs-6">
                    <div class="counters">
                        <span class="counter">10629</span>
                        <h4>Users</h4>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="counters">
                        <span class="counter">277</span>
                        <h4>Projects</h4>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="counters">
                        <span class="counter">78</span>
                        <h4>Team Members</h4>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="counters">
                        <span class="counter">109</span>
                        <h4>Awards</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=== End Carallax Counter v1 ===-->

    <!--=== Team v4 ===-->
    <div class="container content-sm">
        <div class="headline-center margin-bottom-60">
            <h2>MEET OUR TEAM</h2>
            <p>Phasellus vitae ipsum ex. Etiam eu vestibulum ante. <br>
                Lorem ipsum <strong>dolor</strong> sit amet, consectetur adipiscing elit. Morbi libero libero, imperdiet fringilla </p>
        </div>

        <div class="row team-v4">
            <div class="col-md-3 col-sm-6 md-margin-bottom-50">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/team/img15-md.jpg" alt="">
                <span>Daniel Wearne</span>
                <small>- Technica Director -</small>
                <p>Lorem ipsum dolor sit amet, consect etur adipiscing elit, sed a nulla non</p>
                <ul class="list-inline team-social-v4">
                    <li><a href="#"><i class="rounded-x fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="rounded-x fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="rounded-x fa fa-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 md-margin-bottom-50">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/team/img31-md.jpg" alt="">
                <span>Sara Lisbon</span>
                <small>- UI Designer -</small>
                <p>Lorem ipsum dolor sit amet, consect etur adipiscing elit, sed a nulla non</p>
                <ul class="list-inline team-social-v4">
                    <li><a href="#"><i class="rounded-x fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="rounded-x fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="rounded-x fa fa-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 sm-margin-bottom-50">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/team/img18-md.jpg" alt="">
                <span>John Doe</span>
                <small>- Backend Developer -</small>
                <p>Lorem ipsum dolor sit amet, consect etur adipiscing elit, sed a nulla non</p>
                <ul class="list-inline team-social-v4">
                    <li><a href="#"><i class="rounded-x fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="rounded-x fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="rounded-x fa fa-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/team/img37-md.jpg" alt="">
                <span>Alice Williams</span>
                <small>- Customer Support -</small>
                <p>Lorem ipsum dolor sit amet, consect etur adipiscing elit, sed a nulla non</p>
                <ul class="list-inline team-social-v4">
                    <li><a href="#"><i class="rounded-x fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="rounded-x fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="rounded-x fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div><!--/end row-->
    </div>
    <!--=== End Team v4 ===-->

    <!--=== Testimonials v6 ===-->
    <div class="bg-color-light">
        <div class="container content-sm">
            <div class="headline-center margin-bottom-60">
                <h2>WHAT PEOPLE SAY</h2>
                <p>Phasellus vitae ipsum ex. Etiam eu vestibulum ante. <br>
                    Lorem ipsum <strong>dolor</strong> sit amet, consectetur adipiscing elit. Morbi libero libero, imperdiet fringilla </p>
            </div>

            <!-- Testimonials Wrap -->
            <div class="testimonials-v6 testimonials-wrap">
                <div class="row margin-bottom-50">
                    <div class="col-md-6 md-margin-bottom-50">
                        <div class="testimonials-info rounded-bottom">
                            <img class="rounded-x" src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonials/img5.jpg" alt="">
                            <div class="testimonials-desc">
                                <p>Donec quis lorem sit amet nibh tempor porttitor non eu justo. Fusce iaculis scelerisque nibh at rhoncus. Aliquam blandit.</p>
                                <strong>Evan Bohringer</strong>
                                <span>Web Developer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="testimonials-info rounded-bottom">
                            <img class="rounded-x" src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonials/img6.jpg" alt="">
                            <div class="testimonials-desc">
                                <p>Donec quis lorem sit amet nibh tempor porttitor non eu justo. Fusce iaculis scelerisque nibh at rhoncus. Aliquam blandit.</p>
                                <strong>Sara Lisbon</strong>
                                <span>Designer</span>
                            </div>
                        </div>
                    </div>
                </div><!--/end row-->

                <div class="row margin-bottom-20">
                    <div class="col-md-6 md-margin-bottom-50">
                        <div class="testimonials-info rounded-bottom">
                            <img class="rounded-x" src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonials/img3.jpg" alt="">
                            <div class="testimonials-desc">
                                <p>Donec quis lorem sit amet nibh tempor porttitor non eu justo. Fusce iaculis scelerisque nibh at rhoncus. Aliquam blandit.</p>
                                <strong>Alice Williams</strong>
                                <span>Web Developer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="testimonials-info rounded-bottom">
                            <img class="rounded-x" src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonials/img2.jpg" alt="">
                            <div class="testimonials-desc">
                                <p>Donec quis lorem sit amet nibh tempor porttitor non eu justo. Fusce iaculis scelerisque nibh at rhoncus. Aliquam blandit.</p>
                                <strong>Jane Wearne</strong>
                                <span>Technical Direector</span>
                            </div>
                        </div>
                    </div>
                </div><!--/end row-->
            </div>
            <!-- End Testimonials Wrap -->
        </div><!--/end container-->
    </div>
    <!--=== End Testimonials v6 ===-->

    <!--=== Owl Clients v1 ===-->
    <div class="container content-sm">
        <div class="owl-clients-v1">
            <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients4/1.png" alt="">
            </div>
            <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients4/2.png" alt="">
            </div>
            <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients4/3.png" alt="">
            </div>
            <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients4/4.png" alt="">
            </div>
            <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients4/5.png" alt="">
            </div>
            <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients4/6.png" alt="">
            </div>
            <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients4/7.png" alt="">
            </div>
            <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients4/8.png" alt="">
            </div>
            <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients4/9.png" alt="">
            </div>
        </div>
    </div>
    <!--=== End Owl Clients v1 ===-->

    <?php get_template_part('components/main', 'footer'); ?>

</div><!--/wrapper-->
<?php
get_footer();
?>