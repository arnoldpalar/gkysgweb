<?php
//$options = get_option( 'gkysg_settings' );

$theme_settings_args = array(
    'posts_per_page'   => 1,
    'offset'           => 0,
    'post_type'        => 'theme-settings',
    'orderby'          => 'post_date',
    'order'            => 'DESC',
    'post_status'      => 'publish'
);

$theme_settings_post = get_posts( $theme_settings_args );
if(count($theme_settings_post) > 0) {
    $theme_settings = array();
    foreach ($theme_settings_post as $post) {
        setup_postdata($post);

        $theme_settings['web_introduction'] = get_field('web_introduction');

        if( have_rows('addresses') ):
            $addresses = array();

            while ( have_rows('addresses') ) : the_row();
                $addresses[] = array(
                    'name' => get_sub_field('name'),
                    'map' => get_sub_field('map'),
                );
            endwhile;

            $theme_settings['addresses'] = $addresses;
        endif;

        if( have_rows('phone_numbers') ):
            $phone_numbers = array();

            while ( have_rows('phone_numbers') ) : the_row();
                $phone_numbers[] = get_sub_field('number');
            endwhile;

            $theme_settings['phone_numbers'] = $phone_numbers;
        endif;

        if( have_rows('social_links') ):
            $social_links = array();

            while ( have_rows('social_links') ) : the_row();
                $social_links[] = array(
                    'type' => get_sub_field('type'),
                    'url' => get_sub_field('url'),
                );
            endwhile;

            $theme_settings['social_links'] = $social_links;
        endif;

        $theme_settings['email'] = get_field('email');

        if( have_rows('links') ):
            $links = array();

            while ( have_rows('links') ) : the_row();
                $links[] = array(
                    'label' => get_sub_field('label'),
                    'url' => get_sub_field('url'),
                );
            endwhile;

            $theme_settings['links'] = $links;
        endif;

        break;
    }
    wp_reset_postdata();
}

$ss_event_args = array(
    'posts_per_page'   => 4,
    'offset'           => 0,
    'post_type'        => 'event',
    'tax_query' => array(
        array(
            'taxonomy' => 'event-type',
            'field' => 'slug',
            'terms' => array('sunday-service'))
    ),
    //'orderby'          => 'post_date',
    'meta_key'		        => 'date',
    'orderby'               => 'meta_value_num',
    'order'            => 'DESC',
    'post_status'      => 'publish'
);

$ss_events = get_posts( $ss_event_args );

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
                        <?php if(count($ss_events) >= 2){
                            $post = $ss_events[1];
                            setup_postdata($post);
                            ?>
                        <li>
                            <a href="<?php echo get_permalink() ?>"><?php the_field('sub_title') ?></a>
                            <small><?php the_field('sermon') ?></small>
                            <small>Sunday Service <?php echo DateTime::createFromFormat('Ymd', get_field('date'))->format('d M, Y'); ?></small>
                        </li>
                        <?php
                            wp_reset_postdata();
                        } ?>
                    </ul>
                </div>
                <!-- End Recent -->

                <!-- Links -->
                <div class="col-md-3 sm-margin-bottom-40">
                    <div class="heading-footer"><h2>Links</h2></div>
                    <ul class="list-unstyled footer-link-list">
                        <?php if(isset($theme_settings) && isset($theme_settings['links'])) {
                            foreach ($theme_settings['links'] as $link) {
                                ?>
                                <li><a href="<?php echo $link['url'] ?>"><?php echo $link['label'] ?></a></li>
                                <?php
                            }
                        } ?>
                    </ul>
                </div>
                <!-- End Links -->

                <!-- Contacts -->
                <div class="col-md-3">
                    <div class="heading-footer"><h2>Contacts</h2></div>
                    <ul class="list-unstyled contacts">
                        <li>
                            <i class="radius-3x fa fa-map-marker"></i>
                            <?php if(isset($theme_settings) && isset($theme_settings['addresses'])) {
                            foreach ($theme_settings['addresses'] as $address) {
                                ?>
                                <a href="https://www.google.com/maps/place/<?php echo str_replace(' ', '+', $address['map']['address']); ?>/@<?php echo $address['map']['lat']; ?>,<?php echo $address['map']['lng']; ?>,15z" target="_blank">
                                    <?php echo $address['name']; ?>
                                </a><br>
                                <?php
                                }
                            } ?>
                        </li>
                        <li>
                            <i class="radius-3x fa fa-phone"></i>
                            <?php if(isset($theme_settings) && isset($theme_settings['phone_numbers'])) {
                                foreach ($theme_settings['phone_numbers'] as $number) {
                                    echo $number . '<br>';
                                }
                            } ?>
                        </li>
                        <li>
                            <i class="radius-3x fa fa-globe"></i>
                            <a href="/">www.gkysingapore.org</a>
                            <?php if(isset($theme_settings) && isset($theme_settings['email'])) {
                                echo '<a href="mailto:'.$theme_settings['email'].'">'.$theme_settings['email'].'</a>';
                            } ?>
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
                        <?php if(isset($theme_settings) && isset($theme_settings['social_links'])) {
                            foreach ($theme_settings['social_links'] as $link) {
                                ?>
                                <li>
                                    <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="<?php echo $link['type'] ?>" href="<?php echo $link['url'] ?>">
                                        <i class="fa fa-<?php echo $link['type'] ?>"></i>
                                    </a>
                                </li>
                                <?php
                            }
                        } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=== End Footer v6 ===-->