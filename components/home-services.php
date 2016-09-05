<?php
$ss_event_args = array(
    'posts_per_page'   => 3,
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
<div class="services container content-md" style="padding-top: 40px; padding-bottom: 50px;">
    <div class="text-center margin-bottom-50">
        <h2 class="title-v2 title-center">SUNDAY SERVICES</h2>
    </div>

    <!-- Service Blcoks -->
    <div class="row service-box-v1">
        <?php
        foreach($ss_events as $post) {
            setup_postdata($post);
            ?>
            <div class="col-md-4 col-sm-6 md-margin-bottom-40">
                <div class="service-block service-block-default no-margin-bottom">
                    <h2 class="service-title heading-sm"><a href="<?php echo get_permalink() ?>"><?php the_field('sub_title') ?></a></h2>
                    <p><?php the_field('sermon') ?></p>
                    <ul class="list-unstyled">
                        <!--<li><strong>--><?php //the_title() ?><!--</strong></li>-->
                        <?php
                        $sessions = array();
                        while ( have_rows('service_sessions') ) : the_row();

                            if( get_row_layout() == 'session' ) {
                                $sessions[] = array(
                                    'name' => get_sub_field('name'),
                                    'time' => get_sub_field('time'),
                                    'venue' => get_sub_field('venue'),
                                    'map' => get_sub_field('map')
                                );
                            }

                        endwhile;

                        if(count($sessions) > 0) {
                            foreach($sessions as $session) {
                                ?>
                                <li>
                                    <?php echo $session['name']; ?> <?php echo $session['time']; ?>
                                    <a href="https://www.google.com/maps/place/<?php echo str_replace(' ', '+', $session['map']['address']); ?>/@<?php echo $session['map']['lat']; ?>,<?php echo $session['map']['lng']; ?>,15z" target="_blank">
                                        <?php echo $session['venue']; ?>
                                    </a>
                                </li>
                                <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <?php
        }
        wp_reset_postdata();
        ?>
    </div>
    <!-- End Service Blcoks -->

    <div class="margin-bottom-40"></div>

    <div class="text-center margin-bottom-50">
        <h2 class="title-v2 title-center">EVENTS</h2>
    </div>

<?php
$event_args = array(
    'posts_per_page'   => 4,
    'offset'           => 0,
    'post_type'        => 'event',
    'tax_query' => array(
        array(
            'taxonomy'  => 'event-type',
            'field'     => 'slug',
            'terms'     => array('ministries'))
    ),
    'meta_key'		        => 'date',
    'orderby'               => 'meta_value_num',
    'order'                 => 'DESC',
    'post_status'           => 'publish'
);

$events = get_posts( $event_args );
?>

    <!-- Service Blcoks -->
    <div class="row service-box-v1">
        <?php
        foreach($events as $post) {
            setup_postdata($post);
        ?>
        <div class="col-md-3 col-sm-6 md-margin-bottom-40">
            <div class="service-block service-block-default no-margin-bottom">
                <h2 class="heading-sm"><a href="<?php echo get_permalink() ?>"><?php the_title() ?></a></h2>
                <p><?php the_field('sub_title') ?></p>
                <ul class="list-unstyled">
                    <li><?php echo date('d M Y', strtotime(get_field('date'))); ?> <?php the_field('time'); ?></li>
                    <?php if(get_field('info')){ ?><li><?php the_field('info'); ?></li><?php } ?>
                    <?php
                    $map = get_field('map');
                    if(isset($map)) { ?>
                    <li>
                        <a href="https://www.google.com/maps/place/<?php echo str_replace(' ', '+', $map['address']); ?>/@<?php echo $map['lat']; ?>,<?php echo $map['lng']; ?>,15z" target="_blank">
                            <?php the_field('venue'); ?>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <?php
        }
        wp_reset_postdata();
        ?>
    </div>
    <!-- End Service Blcoks -->
</div>