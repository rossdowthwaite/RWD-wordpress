<?php 

	// Create Event post type

	add_action( 'init', 'create_event_post_type' );

	function create_event_post_type() {
		register_post_type( 'event', 
			array(
				'labels' => array(
					'name' => __( 'Events' ),
					'singular_name' => __( 'Event' ),
					'add_new' => __( 'Add Event' ),
					'add_new_item' => __( 'Add New Event' ),
					'edit' => __( 'Edit' ),
					'edit_item' => __( 'Edit Event' ),
					'new_item' => __( 'New Event' ),
					'view' => __( 'View Event' ),
					'view_item' => __( 'View Event' ),
					'search_items' => __( 'Search Events' ),
					'not_found' => __( 'No Events found' ),
					'not_found_in_trash' => __( 'No Events found in Trash' ),
					'parent' => __( 'Parent Event' ),
				),
				'public' => true,
				'supports' => array( 'custom-fields', 'title' ),
				'has_archive' => true,
				'rewrite' => array(
					'slug' => 'event',
					'hierarchical' => true
				),
			)
		);

		// Create Event Taxonomy

		register_taxonomy('event-category', 'event', array(
			'hierarchical' => true,
			'labels' => array(
				'name' => _x( 'Event Categories', 'taxonomy general name' ),
				'singular_name' => _x( 'Event Category', 'taxonomy singular name' ),
				'search_items' =>  __( 'Search Event Categories' ),
				'all_items' => __( 'All Event Categories' ),
				'parent_item' => __( 'Parent Event Category' ),
				'parent_item_colon' => __( 'Parent Event Category:' ),
				'edit_item' => __( 'Edit Event Category' ),
				'update_item' => __( 'Update Event Category' ),
				'add_new_item' => __( 'Add New Event Category' ),
				'new_item_name' => __( 'New Event Category Name' ),
				'menu_name' => __( 'Event Categories' ),
			),
			// Control the slugs used for this taxonomy
			'show_ui' => true,
			'show_admin_column' => true,
			'rewrite' => array(
				'slug' => 'event-category', // This controls the base slug that will display before each term
				'with_front' => false, // Don't display the category base before "/locations/"
				'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
			),
		));	
	}

 ?>