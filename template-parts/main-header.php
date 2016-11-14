<!--=== Header v6 ===-->
<div class="header-v6 header-classic-white header-sticky">
    <!-- Navbar -->
    <div class="navbar mega-menu" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="menu-container">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Navbar Brand -->
                <div class="navbar-brand" style="font-family: 'Roboto Slab', 'Open Sans', Arial, sans-serif;">
                    <a id="main-title" href="/" class="color-green"">
                        GKY Singapore
                    </a>
                </div>
                <!-- ENd Navbar Brand -->

<?php
if(isset($theme_settings_post) && count($theme_settings_post) > 0) {
    $notifications = array();
    foreach ($theme_settings_post as $post) {
        setup_postdata($post);

        while ( have_rows('notifications') ) : the_row();
            if( get_row_layout() == 'notification_item' ) {
                $notifications[] = array(
                    'title' => get_sub_field('title'),
                    'link' => get_sub_field('link')
                );
            }
        endwhile;

        break;
    }
    wp_reset_postdata();
}
?>

                <!-- Header Inner Right -->
                <div class="header-inner-right">
                    <ul class="menu-icons-list">
                        <li class="menu-icons shopping-cart">
                            <i class="menu-icons-style radius-x fa fa-info-circle"></i>
                            <span class="badge"><?php echo (isset($notifications) ? count($notifications) : '0') ?></span>
                            <div class="shopping-cart-open">
                                <span class="shc-title" style="padding-bottom: 5px; margin-bottom: 10px;"><strong>Notifications</strong></span>
                                <?php
                                    if(isset($notifications) && count($notifications) > 0){
                                        foreach ($notifications as $notification) {
                                ?>
                                            <span class="shc-title"><a href="<?php echo $notification['link'] ?>"><?php echo $notification['title'] ?></a></span>
                                <?php
                                        }
                                    } else {
                                        echo '<span class="shc-title">There\'s no notification yet</span>';
                                    }
                                ?>
                                <!--<button type="button" class="btn-u" style="margin-top: 10px;">More</button>--><!--TODO TBI-->
                            </div>
                        </li>
                        <!--TODO TBI-->
                        <!--<li class="menu-icons">
                            <i class="menu-icons-style search search-close search-btn fa fa-search"></i>
                            <div class="search-open">
                                <input type="text" class="animated fadeIn form-control" placeholder="Start searching ...">
                            </div>
                        </li>-->
                    </ul>
                </div>
                <!-- End Header Inner Right -->
            </div>

            <?php get_template_part('components/main', 'menu'); ?>
        </div>
    </div>
    <!-- End Navbar -->
</div>
<!--=== End Header v6 ===-->