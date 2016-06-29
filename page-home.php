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
                     data-duration="1500"
                     data-delay="700"
                     data-ease="easeOutExpo"
                >PDT. TOMMY ELIM</div>

                <div class="ms-layer ms-promo-info ms-promo-info-in color-light" style="left:15px; top:215px; line-height: 60px;"
                     data-effect="bottom(40)"
                     data-duration="1500"
                     data-delay="1000"
                     data-ease="easeOutExpo">
                    <span class="color-green">MAGNIFICAT</span>: MY SOUL GLORIFIES THE LORD
                </div>

                <div class="ms-layer ms-promo-sub color-light" style="left:15px; top:350px"
                     data-effect="bottom(40)"
                     data-duration="1500"
                     data-delay="1300"
                     data-ease="easeOutExpo">
                    Kebaktian Umum I Pk. 10.00 <a href="">The Cathay Cineplex Hall 3 Level 6</a>
                    <br>
                    Kebaktian Umum II Pk. 14.30 <a href="">Grace Church  key digital services on web and mobile</a>
                </div>

                <div class="ms-layer" style="left:15px; top:420px"
                     data-effect="bottom(40)"
                     data-duration="1500"
                     data-delay="1300"
                     data-ease="easeOutExpo">
                    <a class="btn-u" href="#">LEARN MORE</a>

                    <a class="btn-u btn-u-dark" href="#">ABOUT US</a>
                </div>
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

    <!--=== Services ===-->
    <?php get_template_part('components/home', 'services'); ?>

    <!--=== Quote ===-->
    <?php get_template_part('components/home', 'quote'); ?>

    <?php get_template_part('components/main', 'footer'); ?>
</div><!--/wrapper-->
<?php
get_footer();
?>
