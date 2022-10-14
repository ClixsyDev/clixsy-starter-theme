<?php 
// ACF for reviews
	if (function_exists('acf_add_local_field_group')) {
		acf_add_local_field_group(array(
			'key'            => 'reviews_design_one',
			'title'          => 'Reviews design one',
			'location' => array(
				array(
					array(
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'reviews',
					),
				),
			),
			'fields'         => array(
				array(
					'key' => 'revies_design_one_logo',
					'name' => 'revies_design_one_logo',
					'type' => 'image',
					'label' => 'Logo',
					'instructions' => 'Logotype for review. For example: google logo',
					'return_format' => 'id',
					'preview_size' => 'thumbnail',
				),
				array(
					'key' => 'reviews_design_one_stars',
					'name' => 'reviews_design_one_stars',
					'label' => 'Amount of stars under review',
					'type' => 'range',
					'default_value' => '5',
					'min' => 0,
					'max' => 5,
				),
			)
		));
	}
	
	// End of ACF for reviews