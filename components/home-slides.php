<?php
$main_image_url = get_field('main_image');
$ss_event_args = array(
    'posts_per_page'   => 1,
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
<div class="tp-banner-container">
    <div class="tp-banner">
        <ul>
            <?php
                foreach($ss_events as $post) {
                    setup_postdata($post);
            ?>
            <!-- SS SLIDE -->
            <li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="<?php the_field('sub_title') ?>">
                <!-- MAIN IMAGE -->
                <img src="<?php echo $main_image_url ?>"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

                <div class="tp-caption revolution-ch1 sft start"
                     data-x="center"
                     data-hoffset="0"
                     data-y="80"
                     data-speed="1500"
                     data-start="500"
                     data-easing="Back.easeInOut"
                     data-endeasing="Power1.easeIn"
                     data-endspeed="300"
                     style="white-space: normal; max-width: 800px; text-align: center">
                    <strong><?php the_field('sub_title') ?></strong>
                    <br>
                    <span class="slide-sub-title" style="text-transform: none;"><?php the_field('sermon') ?></span>
                </div>

                <div class="tp-caption slide-2nd-content revolution-ch2 sft"
                     data-x="center"
                     data-hoffset="0"
                     data-y="310"
                     data-speed="1400"
                     data-start="1000"
                     data-easing="Back.easeInOut"
                     data-endeasing="Power1.easeIn"
                     data-endspeed="300"
                     style="line-height: 22px;">
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
                            <span style="font-size: 1.1em;">
                                <?php echo $session['name']; ?> <?php echo $session['time']; ?>
                                <br>
                                <a href="https://www.google.com/maps/place/<?php echo str_replace(' ', '+', $session['map']['address']); ?>/@<?php echo $session['map']['lat']; ?>,<?php echo $session['map']['lng']; ?>,15z" target="_blank">
                                 <strong><?php echo $session['venue']; ?></strong>
                                </a>
                            </span>
                            <br><br>
                            <?php
                        }
                    }
                    ?>
                </div>
            </li>
            <!-- END SLIDE -->
            <?php
                    break;
                }
                wp_reset_postdata();
            ?>

<?php
$carousels_arr = array();
while ( have_rows('main_carousel') ) : the_row();
    if( get_row_layout() == 'carousel_item' ) {
        ?>
            <li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="<?php the_sub_field('title') ?>">
                <!-- MAIN IMAGE -->
                <img src="<?php the_sub_field('image') ?>"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

                <div class="tp-caption revolution-ch1 sft start"
                     data-x="center"
                     data-hoffset="0"
                     data-y="130"
                     data-speed="1500"
                     data-start="500"
                     data-easing="Back.easeInOut"
                     data-endeasing="Power1.easeIn"
                     data-endspeed="300">
                     <?php the_sub_field('title') ?>
                </div>

                <!-- LAYER -->
                <div class="tp-caption revolution-ch2 sft"
                     data-x="center"
                     data-hoffset="0"
                     data-y="190"
                     data-speed="1400"
                     data-start="2000"
                     data-easing="Power4.easeOut"
                     data-endspeed="300"
                     data-endeasing="Power1.easeIn"
                     data-captionhidden="off"
                     style="z-index: 6; width: 100%; white-space: nowrap; max-width: 1000px;">
                    <?php the_sub_field('sub_title') ?>
                </div>

                <?php if(get_sub_field('link')){ ?>
                <div class="tp-caption sft"
                     data-x="center"
                     data-hoffset="0"
                     data-y="300"
                     data-speed="1600"
                     data-start="2800"
                     data-easing="Power4.easeOut"
                     data-endspeed="300"
                     data-endeasing="Power1.easeIn"
                     data-captionhidden="off"
                     style="z-index: 6">
                    <a style="text-transform: uppercase;" href="<?php the_sub_field('link') ?>" class="btn-u btn-brd btn-brd-hover btn-u-light"><?php echo get_sub_field('link_label') ? get_sub_field('link_label') : 'More' ?></a>
                </div>
                <?php } ?>
            </li>
        <?php
    }
endwhile;
?>
            
        </ul>
        <div class="tp-bannertimer tp-bottom"></div>
    </div>
</div>