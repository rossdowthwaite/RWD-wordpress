<?php

/** Tell WordPress to run pixeldot_setup() when the 'after_setup_theme' hook is run. */
add_action( 'after_setup_theme', 'pixeldot_setup' );

if ( ! function_exists( 'pixeldot_setup' ) ):

	remove_action('wp_head', 'wp_generator');

	function pixeldot_setup() {

		// This theme uses post thumbnails
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 770, 500, true );
		add_image_size( 'home-page-thumbnail', 960, 275 );
		add_image_size( 'main-thumbnail', 770, 500, true );
		add_image_size( 'square', 400, 400, true );
		add_image_size( 'carousel', 9999, 700, true );
		add_image_size( 'actual', 9999, 9999 );

		// Register Navigation Menus
		register_nav_menus( array(
			'primary' => 'Primary Navigation',
			'footer_menu' => 'Footer Menu',
		) );
		
	}

	// Remove emoji 
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	
	require_once('includes/theme_functions.php');

	require_once('includes/login_functions.php');

	require_once('includes/enqueue_styles.php');

	require_once('includes/custom_posts.php');

	require_once('includes/acf_options.php');

	require_once('includes/ajax_functions.php');

	require_once('includes/my_functions.php');

endif; ?>