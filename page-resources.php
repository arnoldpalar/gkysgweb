<?php
/**
 * Template Name: Sermon Page Template
 * Description: Sermon Page Template
 *
 * @package gkysg
 */

get_header();
?>

<body class="header-fixed header-fixed-space">
<div class="wrapper">
    <?php get_template_part('components/main', 'header'); ?>

    <!--=== Table ===-->
    <?php get_template_part('components/sermon', 'table'); ?>

    <?php get_template_part('components/main', 'footer'); ?>
</div><!--/wrapper-->
<?php
get_footer();
?>
