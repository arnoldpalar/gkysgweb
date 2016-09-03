<?php
/**
 * The template for displaying all single event posts.
 *
 * @package gkysg
 */

get_header();
?>
<body class="header-fixed header-fixed-space">
<div class="wrapper">
    <?php get_template_part('components/main', 'header'); ?>

    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left"><?php the_title() ?></h1>
            <ul class="pull-right breadcrumb">
                <li><a href="/">Home</a></li>
                <li>Pages</li>
                <li class="active"><?php the_title() ?></li>
            </ul>
        </div><!--/container-->
    </div>

    <div class="container content height-500">
        <?php
        while ( have_posts() ) : the_post();

            get_template_part( 'template-parts/content', 'event');

            //the_post_navigation();

            // If comments are open or we have at least one comment, load up the comment template.
            /*if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;*/

        endwhile; // End of the loop.
        ?>
    </div>

    <?php get_template_part('components/main', 'footer'); ?>
</div>
<?php get_footer(); ?>
