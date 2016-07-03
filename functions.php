<?php
/**
 * gkysg functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package gkysg
 */

if ( ! function_exists( 'gkysg_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function gkysg_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on gkysg, use a find and replace
	 * to change 'gkysg' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'gkysg', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'gkysg' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'gkysg_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'gkysg_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gkysg_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'gkysg_content_width', 640 );
}
add_action( 'after_setup_theme', 'gkysg_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gkysg_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'gkysg' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'gkysg' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'gkysg_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function gkysg_scripts() {
	wp_enqueue_style( 'gkysg-style', get_stylesheet_uri() );

	wp_enqueue_script( 'gkysg-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'gkysg-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gkysg_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Register custom post types
 */


add_action( 'init', 'init_theme_settings_post' );
function init_theme_settings_post() {
	$labels = array(
		'name'               => __( 'Theme Settings' ),
		'singular_name'      => __( 'Theme Settings' ),
		'menu_name'          => __( 'Theme Settings' ),
		'name_admin_bar'     => __( 'Theme Settings' ),
		'add_new'            => _x( 'Add New', 'Theme Settings' ),
		'add_new_item'       => __( 'Add New Theme Settings' ),
		'new_item'           => __( 'New Theme Settings' ),
		'edit_item'          => __( 'Edit Theme Settings' ),
		'view_item'          => __( 'View Theme Settings' ),
		'all_items'          => __( 'All Theme Settings' ),
		'search_items'       => __( 'Search Theme Settings' ),
		'parent_item_colon'  => __( 'Parent Theme Settings:' ),
		'not_found'          => __( 'No Theme Settings found.' ),
		'not_found_in_trash' => __( 'No Theme Settings found in Trash.' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'theme-settings' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'author', 'thumbnail', 'revisions' )
	);

	register_post_type( 'theme-settings', $args );
}

function init_event_post() {
	$labels = array(
		'name'               => __( 'Events' ),
		'singular_name'      => __( 'Event' ),
		'menu_name'          => __( 'Events' ),
		'name_admin_bar'     => __( 'Event' ),
		'add_new'            => _x( 'Add New', 'Event' ),
		'add_new_item'       => __( 'Add New Event' ),
		'new_item'           => __( 'New Event' ),
		'edit_item'          => __( 'Edit Event' ),
		'view_item'          => __( 'View Event' ),
		'all_items'          => __( 'All Events' ),
		'search_items'       => __( 'Search Events' ),
		'parent_item_colon'  => __( 'Parent Event:' ),
		'not_found'          => __( 'No Event found.' ),
		'not_found_in_trash' => __( 'No Event found in Trash.' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'event' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'revisions' ),
		'taxonomies'         => array('event-type')
	);

	register_post_type( 'event', $args );
}
add_action( 'init', 'init_event_post' );

add_action( 'init', 'init_album_post' );
function init_album_post() {
	$labels = array(
		'name'               => __( 'Albums' ),
		'singular_name'      => __( 'Album' ),
		'menu_name'          => __( 'Albums' ),
		'name_admin_bar'     => __( 'Album' ),
		'add_new'            => _x( 'Add New', 'Album' ),
		'add_new_item'       => __( 'Add New Album' ),
		'new_item'           => __( 'New Album' ),
		'edit_item'          => __( 'Edit Album' ),
		'view_item'          => __( 'View Album' ),
		'all_items'          => __( 'All Albums' ),
		'search_items'       => __( 'Search Album' ),
		'parent_item_colon'  => __( 'Parent Albums:' ),
		'not_found'          => __( 'No Albums found.' ),
		'not_found_in_trash' => __( 'No Albums found in Trash.' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'album' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'revisions' )
	);

	register_post_type( 'album', $args );
}

add_action( 'init', 'init_song_post' );
function init_song_post() {
	$labels = array(
		'name'               => __( 'Songs' ),
		'singular_name'      => __( 'Song' ),
		'menu_name'          => __( 'Songs' ),
		'name_admin_bar'     => __( 'Song' ),
		'add_new'            => _x( 'Add New', 'Song' ),
		'add_new_item'       => __( 'Add New Song' ),
		'new_item'           => __( 'New Song' ),
		'edit_item'          => __( 'Edit Song' ),
		'view_item'          => __( 'View Song' ),
		'all_items'          => __( 'All Songs' ),
		'search_items'       => __( 'Search Song' ),
		'parent_item_colon'  => __( 'Parent Songs:' ),
		'not_found'          => __( 'No Songs found.' ),
		'not_found_in_trash' => __( 'No Songs found in Trash.' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'song' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'revisions' )
	);

	register_post_type( 'song', $args );
}

/**
 * Register custom taxonomy
 */
function init_taxonomy_event_types() {
	$labels = array(
		'name'              => _x( 'Event Types', 'taxonomy general name' ),
		'singular_name'     => _x( 'Event Type', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Event Types' ),
		'all_items'         => __( 'All Event Types' ),
		'parent_item'       => __( 'Parent Event Type' ),
		'parent_item_colon' => __( 'Parent Event Type:' ),
		'edit_item'         => __( 'Edit Event Type' ),
		'update_item'       => __( 'Update Event Type' ),
		'add_new_item'      => __( 'Add New Event Type' ),
		'new_item_name'     => __( 'New Event Type Name' ),
		'menu_name'         => __( 'Event Types' )
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => false,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'event-type' )
	);

	register_taxonomy('event-type', null, $args);

	register_taxonomy_for_object_type( 'event-type', 'event' );
}
add_action( 'init', 'init_taxonomy_event_types' );

function init_taxonomy_song_types() {
	$labels = array(
		'name'              => _x( 'Song Types', 'taxonomy general name' ),
		'singular_name'     => _x( 'Song Type', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Song Types' ),
		'all_items'         => __( 'All Song Types' ),
		'parent_item'       => __( 'Parent Song Type' ),
		'parent_item_colon' => __( 'Parent Song Type:' ),
		'edit_item'         => __( 'Edit Song Type' ),
		'update_item'       => __( 'Update Song Type' ),
		'add_new_item'      => __( 'Add New Song Type' ),
		'new_item_name'     => __( 'New Song Type Name' ),
		'menu_name'         => __( 'Song Types' )
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => false,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'song-type' )
	);

	register_taxonomy('song-type', null, $args);

	register_taxonomy_for_object_type( 'song-type', 'song' );
}
add_action( 'init', 'init_taxonomy_song_types' );

function init_taxonomy_language() {
	$labels = array(
		'name'              => _x( 'Language', 'taxonomy general name' ),
		'singular_name'     => _x( 'Language', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Language' ),
		'all_items'         => __( 'All Language' ),
		'parent_item'       => __( 'Parent Language' ),
		'parent_item_colon' => __( 'Parent Language:' ),
		'edit_item'         => __( 'Edit Language' ),
		'update_item'       => __( 'Update Language' ),
		'add_new_item'      => __( 'Add New Language' ),
		'new_item_name'     => __( 'New Language Name' ),
		'menu_name'         => __( 'Language' )
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => false,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'language' )
	);

	register_taxonomy('language', null, $args);

	register_taxonomy_for_object_type( 'language', 'song' );
}
add_action( 'init', 'init_taxonomy_language' );

/**
 * REST Services
 */

function ajax_get_song_types(){
	$res = array();

	$song_types = get_terms('song-type', array('hide_empty' => false));
	foreach($song_types as $song_type){
		$res[] = $song_type->name;
	}

	echo json_encode($res);
	die();
}
add_action('wp_ajax_get_song_types', 'ajax_get_song_types');
add_action('wp_ajax_nopriv_get_song_types', 'ajax_get_song_types' );

function ajax_get_languages(){
	$res = array();

	$song_languages = get_terms('language', array('hide_empty' => false));
	foreach($song_languages as $song_language){
		$res[] = $song_language->name;
	}

	echo json_encode($res);
	die();
}
add_action('wp_ajax_get_languages', 'ajax_get_languages');
add_action('wp_ajax_nopriv_get_languages', 'ajax_get_languages' );

function ajax_get_songs(){
	$res = array();

	$ss_song_args = array(
		'post_type'		=> 'song',
		'orderby'		=> 'title',
		'order'			=> 'ASC',
		'numberposts'	=> -1
	);

	$ss_songs = get_posts( $ss_song_args );
	foreach($ss_songs as $post){
		setup_postdata( $post );

		$types = get_the_terms( $post->ID, 'song-type' );
		$typeNames = array();
		if($types && !empty($types)){
			foreach ($types as $type) {
				$typeNames[] = $type->name;
			}
		}

		$langs = get_the_terms( $post->ID, 'language' );
		$langNames = array();
		if($langs && !empty($langs)){
			foreach ($langs as $lang) {
				$langNames[] = $lang->name;
			}
		}

		$res[] = array(
			'ID' => $post->ID,
			'url' => get_permalink($post->ID),
			'title' => get_the_title($post),
			'types' => $typeNames,
			'languages' => $langNames
		);
	}
	wp_reset_postdata();

	echo json_encode($res);
	die();
}
add_action('wp_ajax_get_songs', 'ajax_get_songs');
add_action('wp_ajax_nopriv_get_songs', 'ajax_get_songs' );

function ajax_get_song(){
	$postID = intval($_GET['postid']);
	$post = get_post($postID);

	setup_postdata( $post );

	$videos = array();
	while (have_rows("videos")) : the_row();
		if( get_row_layout() == 'youtube' ) {

			$videos[] = array(
				'youtubeID' => get_sub_field('youtube_id')
			);
		}
	endwhile;

	$types = get_the_terms( $post->ID, 'song-type' );
	$typeNames = array();
	if($types && !empty($types)){
		foreach ($types as $type) {
			$typeNames[] = $type->name;
		}
	}

	$langs = get_the_terms( $post->ID, 'language' );
	$langNames = array();
	if($langs && !empty($langs)){
		foreach ($langs as $lang) {
			$langNames[] = $lang->name;
		}
	}

	$res = array(
		'entity' => $post,
		'types' => $typeNames,
		'languages' => $langNames,
		'videos' => $videos
	);

	wp_reset_postdata();

	echo json_encode($res);
	die();
}
add_action('wp_ajax_get_song', 'ajax_get_song');
add_action('wp_ajax_nopriv_get_song', 'ajax_get_song' );


/*Theme Setting Setup*/
add_action( 'admin_menu', 'gkysg_setting_add_admin_menu' );
add_action( 'admin_init', 'gkysg_setting_init' );


function gkysg_setting_add_admin_menu(  ) {

	add_options_page( 'GKY SG Theme Setting', 'GKY SG Theme Setting', 'manage_options', 'gkysg-theme-setting', 'gkysg_theme_setting_page', null, 1 );

}


function gkysg_setting_init(  ) {

	register_setting( 'pluginPage', 'gkysg_settings' );

	add_settings_section(
		'gkysg_pluginPage_section',
		__( 'GKY Singapore Theme Setting', 'wordpress' ),
		'gkysg_settings_section_callback',
		'pluginPage'
	);

	add_settings_field(
      'web_description',
      __( 'Web Description', 'wordpress' ),
      'gkysg_web_description_render',
      'pluginPage',
      'gkysg_pluginPage_section'
   );

   add_settings_field(
      'address',
      __( 'Address', 'wordpress' ),
      'gkysg_address_render',
      'pluginPage',
      'gkysg_pluginPage_section'
   );

	add_settings_field(
		'phone',
		__( 'Phone Number', 'wordpress' ),
		'gkysg_phone_render',
		'pluginPage',
		'gkysg_pluginPage_section'
	);

	add_settings_field(
		'bank_account',
		__( 'Bank Account', 'wordpress' ),
		'gkysg_bank_account_render',
		'pluginPage',
		'gkysg_pluginPage_section'
	);

    add_settings_field(
       'email',
       __( 'e-mail', 'wordpress' ),
       'gkysg_email_render',
       'pluginPage',
       'gkysg_pluginPage_section'
    );

	add_settings_field(
		'facebook_link',
		__( 'Facebook', 'wordpress' ),
		'gkysg_facebook_link_render',
		'pluginPage',
		'gkysg_pluginPage_section'
	);

	add_settings_field(
		'twitter_link',
		__( 'Twitter', 'wordpress' ),
		'gkysg_twitter_link_render',
		'pluginPage',
		'gkysg_pluginPage_section'
	);

	add_settings_field(
		'youtube_link',
		__( 'Youtube', 'wordpress' ),
		'gkysg_youtube_link_render',
		'pluginPage',
		'gkysg_pluginPage_section'
	);

}


function gkysg_web_description_render(  ) {

	$options = get_option( 'gkysg_settings' );
	?>
	<textarea cols='40' rows='5' name='gkysg_settings[web_description]'><?php echo trim($options['web_description']); ?></textarea>
	<?php

}


function gkysg_address_render(  ) {

	$options = get_option( 'gkysg_settings' );
	?>
	<textarea cols='40' rows='4' name='gkysg_settings[address]'><?php echo trim($options['address']); ?></textarea>
	<?php

}


function gkysg_phone_render(  ) {

	$options = get_option( 'gkysg_settings' );
	?>
	<textarea cols='40' rows='3' name='gkysg_settings[phone]'><?php echo trim($options['phone']); ?></textarea>
	<?php

}


function gkysg_email_render(  ) {

	$options = get_option( 'gkysg_settings' );
	?>
	<input type='email' name='gkysg_settings[email]' value='<?php echo $options['email']; ?>' size="40">
	<?php

}


function gkysg_facebook_link_render(  ) {

	$options = get_option( 'gkysg_settings' );
	?>
	<input type='url' name='gkysg_settings[facebook_link]' value='<?php echo $options['facebook_link']; ?>' size="50">
	<?php

}


function gkysg_twitter_link_render(  ) {

	$options = get_option( 'gkysg_settings' );
	?>
	<input type='url' name='gkysg_settings[twitter_link]' value='<?php echo $options['twitter_link']; ?>' size="50">
	<?php

}


function gkysg_youtube_link_render(  ) {

	$options = get_option( 'gkysg_settings' );
	?>
	<input type='url' name='gkysg_settings[youtube_link]' value='<?php echo $options['youtube_link']; ?>' size="50">
	<?php

}


function gkysg_bank_account_render(  ) {

	$options = get_option( 'gkysg_settings' );
	?>
	<textarea cols='40' rows='3' name='gkysg_settings[bank_account]'><?php echo trim($options['bank_account']); ?></textarea>
	<?php

}


function gkysg_settings_section_callback(  ) {

	//echo __( 'This section description', 'wordpress' );

}


function gkysg_theme_setting_page(  ) {

	?>
	<form action='options.php' method='post'>

		<?php
		settings_fields( 'pluginPage' );
		do_settings_sections( 'pluginPage' );
		submit_button();
		?>

	</form>
	<?php

}
