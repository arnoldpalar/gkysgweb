<?php
/**
 * Template Name: Home Page Template
 * Description: Home Page Template
 *
 * @package gkysg
 */

$theme_settings_args = array(
    'posts_per_page'   => 1,
    'offset'           => 0,
    'post_type'        => 'theme-settings',
    'orderby'          => 'post_date',
    'order'            => 'DESC',
    'post_status'      => 'publish'
);

$theme_settings_post = get_posts( $theme_settings_args );

get_header();
?>

<body class="header-fixed header-fixed-space">
<div class="wrapper">
    <?php include( locate_template('template-parts/main-header.php') ); ?>

    <!--=== Slides ===-->
    <?php get_template_part('components/home', 'slides'); ?>

    <!--=== Services ===-->
    <?php get_template_part('components/home', 'services'); ?>

    <!--=== Quote ===-->
    <?php get_template_part('components/home', 'quote'); ?>

    <?php include( locate_template('template-parts/main-footer.php') ); ?>
</div><!--/wrapper-->
<?php
get_footer();
?>
