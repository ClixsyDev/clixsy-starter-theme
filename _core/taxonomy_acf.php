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


// Acf for mark page as case type
if (function_exists('acf_add_local_field_group')) :
	$key = 'page_case_type';
	acf_add_local_field_group(array(
		'key' => $key,
		'title' => 'Case Type',
		'fields' => array(
			array(
				'key' => $key . '_is_case_type',
				'label' => 'Is Case Type?',
				'name' => $key . '_is_case_type',
				'type' => 'true_false',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'message' => '',
				'default_value' => 0,
				'ui' => 0,
				'ui_on_text' => '',
				'ui_off_text' => '',
			),
			array(
				'key' => $key . '_case_title',
				'label' => 'Case Title',
				'name' => $key . '_case_title',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => array(
					array(
						array(
							'field' => $key . '_is_case_type',
							'operator' => '==',
							'value' => '1',
						),
					),
				),
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => $key . '_case_description',
				'label' => 'Case Description',
				'name' => $key . '_case_description',
				'type' => 'textarea',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => array(
					array(
						array(
							'field' => $key . '_is_case_type',
							'operator' => '==',
							'value' => '1',
						),
					),
				),
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => 3,
				'new_lines' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));

endif;
// End of ACF for mark page as case type