<?php

/**
 * Register support for Gutenberg wide images
 * Adds support for editor color palette.
 */
function jeffrey_theme_color_setup()
{
	add_theme_support('align-wide');

	add_theme_support(
		'editor-color-palette',
		apply_filters('villen_gutenberg_palette', array(
			array(
				'name'  => 'White',
				'slug'  => 'white',
				'color'	=> '#fff',
			),
			array(
				'name'  => 'Light gray',
				'slug'  => 'light-gray',
				'color'	=> '#F4F4F4',
			),
			array(
				'name'  => 'Light blue',
				'slug'  => 'light-blue',
				'color'	=> '#CEDBEF',
			),
			array(
				'name'  => 'Blue',
				'slug'  => 'blue',
				'color'	=> '#1B4D9B',
			),
			array(
				'name'  => 'Dark gray',
				'slug'  => 'dark-gray',
				'color'	=> '#232E3F',
			),
		))
	);
}
add_action('after_setup_theme', 'jeffrey_theme_color_setup');

/**
 * Include all widgets
 */
$files = glob(get_template_directory() . '/_inc/blocks/*.php');
foreach ($files as $file) {
	if (file_exists($file)) {
		require_once $file;
	}
}
