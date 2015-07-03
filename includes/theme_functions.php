<?php 

	// set image link to none
	function wpb_imagelink_setup() {
		$image_set = get_option( 'image_default_link_type' );
		
		if ($image_set !== 'none') {
			update_option('image_default_link_type', 'none');
		}
	}
	add_action('admin_init', 'wpb_imagelink_setup', 10);

	// execerpt length
	function new_excerpt_length($length) {
	    return 50;
	}
	add_filter('excerpt_length', 'new_excerpt_length');

 ?>