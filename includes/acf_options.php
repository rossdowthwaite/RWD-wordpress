<?php 

	// ACF Options page

	if(function_exists('acf_add_options_page')) { 

		acf_add_options_page(array(
			'page_title' 	=> 'Contact',
			'menu_title'		=> 'Contact',
			'capability'		=> 'publish_posts'
		));

		acf_add_options_page();
	}


	// Gravity Form - Tab through

	add_filter("gform_tabindex", create_function("", "return false;"));
	 

	// SEO fields

	if( function_exists('register_field_group') ):

	register_field_group(array (
		'key' => 'group_53bba49935955',
		'title' => 'SEO',
		'fields' => array (
			array (
				'key' => 'field_52542c9481401',
				'label' => 'Description',
				'name' => 'seo_description',
				'prefix' => '',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
				'readonly' => 0,
				'disabled' => 0,
			),
			array (
				'key' => 'field_52542c8181400',
				'label' => 'Keywords',
				'name' => 'seo_keywords',
				'prefix' => '',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
				'readonly' => 0,
				'disabled' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
				),
			),
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
				),
			),
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'work',
				),
			),
			array (
				array (
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options',
				),
			),
		),
		'menu_order' => 9999,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => array (
		),
	));

	endif;
	// custom filter to replace '=' with 'LIKE'

	function my_posts_where( $where )
	{
	  $where = str_replace("meta_key = 'properties_%_ref'", "meta_key LIKE 'properties_%_ref'", $where);

	  return $where;
	}

	add_filter('posts_where', 'my_posts_where');

 ?>