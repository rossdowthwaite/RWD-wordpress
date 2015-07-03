<?php 

	// Enqueue Stylesheets

	function pd_styles() 
	{
	    wp_enqueue_style( 'main_style', get_stylesheet_uri() );
	    wp_enqueue_style( 'font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css' );
	    wp_enqueue_style( 'jquery_css', 'https://code.jquery.com/ui/1.10.4/themes/flick/jquery-ui.css' );

		// extensions - delete where applicable 
		// ====================================
	    wp_enqueue_style( 'odometer_css', get_template_directory_uri() . '/css/odometer.css' );
	    wp_enqueue_style( 'ticker_two', get_template_directory_uri() . '/css/demo.css' );
	    wp_enqueue_style( 'mapbox_css', 'https://api.tiles.mapbox.com/mapbox.js/v2.1.6/mapbox.css' );
	}
	add_action( 'wp_enqueue_scripts', 'pd_styles' ); 

	// Enqueue Scripts

	function wpb_adding_scripts() {
		wp_register_script( 'themescript', get_template_directory_uri() . '/js/themescripts.js', array('jquery'), '1', true );
		wp_register_script( 'bx_slider', get_template_directory_uri() . '/js/vendor/jquery.bxslider.min.js', array('jquery'), '1', true );
		wp_register_script( 'kinetic', get_template_directory_uri() . '/js/vendor.js', array('jquery'), '1', true );
		wp_register_script( 'googlemaps', 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false', '1', true);

  		wp_enqueue_script( 'themescript' );
  		wp_enqueue_script( 'bx_slider' );
  		wp_enqueue_script('googlemaps');
  		wp_enqueue_script('final_count');

		// extensions - delete where applicable 
		// ====================================
		wp_register_script( 'loop_filter', get_template_directory_uri() . '/js/extensions/loopFilter.js', array('jquery'), '1', true );
		wp_register_script( 'isotope', get_template_directory_uri() . '/js/vendor/isotope.min.js', array('jquery'), '1', false );
		wp_register_script( 'slider', get_template_directory_uri() . '/js/extensions/slider.js', array('jquery'), '1', false );
		wp_register_script( 'odometer', get_template_directory_uri() . '/js/vendor/odometer.js', array('jquery'), '1', false );
		wp_register_script( 'ajax-pagination', get_template_directory_uri() . '/js/extensions/ajax-pagination.js', array('jquery'), '1', false );
		wp_register_script( 'mapbox', 'https://api.tiles.mapbox.com/mapbox.js/v2.1.6/mapbox.js', '1', false);
		wp_register_script( 'omnivore', 'https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-omnivore/v0.2.0/leaflet-omnivore.min.js', '1', false);
		wp_register_script( 'easel', 'https://code.createjs.com/easeljs-0.8.0.min.js', '1', false);
		wp_register_script( 'tween', 'https://code.createjs.com/tweenjs-0.6.0.min.js', '1', false);

  		wp_enqueue_script( 'isotope' );
  		wp_enqueue_script( 'loop_filter' );
  		wp_enqueue_script( 'slider' );
  		wp_enqueue_script( 'odometer' );
  		wp_enqueue_script( 'ajax-pagination' );
  		wp_enqueue_script('fancy_one');
  		wp_enqueue_script('fancy_two');
  		wp_enqueue_script('mapbox');
  		wp_enqueue_script('omnivore');
  		wp_enqueue_script('easel');
  		wp_enqueue_script('tween');

  		wp_localize_script( 'ajax-pagination', 'ajaxpagination', array(
			'ajaxurl' => admin_url( 'admin-ajax.php' )
		));
	}

	add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );  
 
	function load_all_jquery() {
		wp_enqueue_script("jquery");
		$jquery_ui = array(
			"jquery-ui-core",			//UI Core - do not remove this one
			"jquery-ui-widget",
			"jquery-ui-mouse",
			"jquery-ui-accordion",
			"jquery-ui-autocomplete",
			"jquery-ui-slider",
			"jquery-ui-tabs",
			"jquery-ui-sortable",	
			"jquery-ui-draggable",
			"jquery-ui-droppable",
			"jquery-ui-selectable",
			"jquery-ui-position",
			"jquery-ui-datepicker",
			"jquery-ui-resizable",
			"jquery-ui-dialog",
			"jquery-ui-button"
		);
		foreach($jquery_ui as $script){
			wp_enqueue_script($script);
		}
	}
	add_action('wp_enqueue_scripts', 'load_all_jquery');

 ?>