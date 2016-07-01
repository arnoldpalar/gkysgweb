<!-- JS Global Compulsory -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/plugins/jquery/jquery-migrate.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/plugins/back-to-top.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/plugins/smoothScroll.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/plugins/jquery.parallax.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/master-slider/masterslider/masterslider.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/master-slider/masterslider/jquery.easing.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/plugins/counter/waypoints.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/plugins/counter/jquery.counterup.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<!-- JS Customization -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/app.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins/fancy-box.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins/owl-carousel.js"></script>

<!--<script type="text/javascript" src="--><?php //echo get_template_directory_uri(); ?><!--/assets/js/plugins/master-slider-fw.js"></script>-->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins/revolution-slider.js"></script>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins/style-switcher.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        App.initCounter();
        App.initParallaxBg();
        FancyBox.initFancybox();
        
        //MSfullWidth.initMSfullWidth();
        OwlCarousel.initOwlCarousel();
        RevolutionSlider.initRSfullWidth();
        
        StyleSwitcher.initStyleSwitcher();
    });
</script>

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/respond.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/html5shiv.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->

</body>
</html>