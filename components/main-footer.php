<?php
$options = get_option( 'gkysg_settings' )
?>
<!--=== Footer v6 ===-->
<div id="footer-v6" class="footer-v6">
    <div class="footer" style="padding: 20px 0;">
        <div class="container">
            <div class="row">
                <!-- About Us -->
                <div class="col-md-3 sm-margin-bottom-40">
                    <div style="text-align: center; width: 100%;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/GKYSingapore.png" width="200px"/>
                    </div>
                    <p><?php echo trim($options['web_description']) ?></p>
                </div>
                <!-- End About Us -->

                <!-- Recent -->
                <div class="col-md-3 sm-margin-bottom-40">
                    <div class="heading-footer"><h2>Recent</h2></div>
                    <ul class="list-unstyled link-news">
                        <li>
                            <a href="#">Apple Conference</a>
                            <small>12 July, 2014</small>
                        </li>
                        <li>
                            <a href="#">Bootstrap Update</a>
                            <small>12 July, 2014</small>
                        </li>
                        <li>
                            <a href="#">Themeforest Templates</a>
                            <small>12 July, 2014</small>
                        </li>
                    </ul>
                </div>
                <!-- End Recent -->

                <!-- Links -->
                <div class="col-md-3 sm-margin-bottom-40">
                    <div class="heading-footer"><h2>Links</h2></div>
                    <ul class="list-unstyled footer-link-list">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">Latest jobs</a></li>
                        <li><a href="#">Community</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <!-- End Links -->

                <!-- Contacts -->
                <div class="col-md-3">
                    <div class="heading-footer"><h2>Contacts</h2></div>
                    <ul class="list-unstyled contacts">
                        <li>
                            <i class="radius-3x fa fa-map-marker"></i>
                            <?php echo str_replace("\n", "<br>", trim($options['address'])) ?>
                        </li>
                        <li>
                            <i class="radius-3x fa fa-phone"></i>
                            <?php echo str_replace("\n", "<br>", trim($options['phone'])) ?>
                        </li>
                        <li>
                            <i class="radius-3x fa fa-globe"></i>
                            <a href="/">www.gkysingapore.org</a>
                            <?php echo str_replace("\n", "<br>", trim($options['email'])) ?>
                        </li>
                    </ul>
                </div>
                <!-- End Contacts -->
            </div>
        </div><!--/container -->
    </div>

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-8 sm-margon-bottom-10">
                    <ul class="list-inline terms-menu">
                        <li class="silver">Copyright © 2016 - GKY Singapore - All Rights Reserved</li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy and Policy</a></li>
                        <li><a href="#">Support</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline dark-social pull-right space-bottom-0">
                        <li>
                            <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Facebook" href="<?php echo $options['facebook_link'] ?>">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Twitter" href="<?php echo $options['twitter_link'] ?>">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="YouTube" href="<?php echo $options['youtube_link'] ?>">
                                <i class="fa fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=== End Footer v6 ===-->