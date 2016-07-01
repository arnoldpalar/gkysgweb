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

    <!--=== Slides ===-->
    <?php get_template_part('components/home', 'slides'); ?>

    <!--=== Services ===-->
    <?php get_template_part('components/home', 'services'); ?>

    <!--=== Quote ===-->
    <?php get_template_part('components/home', 'quote'); ?>

    <?php get_template_part('components/main', 'footer'); ?>
</div><!--/wrapper-->
<?php
get_footer();
?>
