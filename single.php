<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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

			get_template_part( 'template-parts/content', get_post_format() );

			//the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			/*if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;*/

		endwhile; // End of the loop.
		?>
	</div>

	<?php include( locate_template('template-parts/main-footer.php') ); ?>
</div>
<?php get_footer(); ?>
