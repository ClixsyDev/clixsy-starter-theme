<?php

/**
 * Taxonomy functions
 */
if (!defined('ABSPATH')) exit; // Exit if accessed directly

//Register Taxonomy and Post types
function phillips_law_attorneys_cpt() {
	register_post_type('attorneys', array(
		'labels'             => array('name' => __('Attorneys', 'law')),
		'hierarchical'       => true,
		'menu_icon'          => 'dashicons-businessperson',
		'public'             => true,
		'has_archive'        => true,
		'show_ui'            => true,
		'show_admin_column'  => true,
		'show_in_nav_menus'  => true,
		'query_var'          => true,
		'publicly_queryable' => true,
		'supports'           => array('title', 'excerpt', 'thumbnail', 'editor'),
		'rewrite'            => array('slug' => 'attorneys', 'with_front' => true, 'hierarchical' => false),
	));

	register_post_type('reviews', array(
		'labels'             => array('name' => __('Reviews', 'law')),
		'hierarchical'       => false,
		'menu_icon'          => 'dashicons-testimonial',
		'public'             => true,
		'has_archive'        => true,
		'show_ui'            => true,
		'show_admin_column'  => true,
		'show_in_nav_menus'  => true,
		'query_var'          => true,
		'publicly_queryable' => true,
		'supports'           => array('title', 'excerpt', 'thumbnail', 'editor'),
		'rewrite' => array('slug' => 'reviews'),
	));

	register_post_type('videos', array(
		'labels'             => array('name' => __('Videos', 'law')),
		'hierarchical'       => false,
		'public'             => true,
		'has_archive'        => true,
		'show_ui'            => true,
		'show_admin_column'  => true,
		'show_in_nav_menus'  => true,
		'query_var'          => true,
		'publicly_queryable' => true,
		'supports'           => array('title', 'excerpt', 'thumbnail', 'editor'),
		'rewrite' => array('slug' => 'videos'),
	));




	register_taxonomy('video_categories', 'videos', array(
		"hierarchical" => true,
		'menu_icon'          => 'dashicons-editor-video',
		"label" => "Video Categories",
		"singular_label" => "Video Categories",
		'query_var' => true,
		'rewrite' => array('slug' => 'video-category', 'with_front' => false),
		'public' => true,
		'show_ui' => true,
		'show_tagcloud' => true,
		'_builtin' => false,
		'show_in_nav_menus' => false
	));


	register_post_type('results', array(
		'labels'             => array('name' => __('Case Results', 'law')),
		'hierarchical'       => false,
		'menu_icon'          => 'dashicons-welcome-write-blog',
		'public'             => true,
		'has_archive'        => true,
		'show_ui'            => true,
		'show_admin_column'  => true,
		'show_in_nav_menus'  => true,
		'query_var'          => true,
		'publicly_queryable' => true,
		'supports'           => array('title', 'excerpt', 'thumbnail', 'editor'),
		'rewrite' => array('slug' => 'results'),
		'taxonomies'          => array('category'),
	));

	register_post_type('form-entry', array(
		'labels'             => array('name' => __('Form entry', 'law')),
		'menu_icon'          => 'dashicons-email-alt',
		'hierarchical'       => false,
		'public'             => false,
		'has_archive'        => false,
		'show_ui'            => true,
		'show_admin_column'  => true,
		'show_in_nav_menus'  => true,
		'query_var'          => true,
		'publicly_queryable' => false,
		'supports'           => array('title', 'excerpt', 'thumbnail', 'editor'),
		'rewrite' => array('slug' => 'results'),
		'taxonomies'          => array('category'),
	));
}

add_action('init', 'phillips_law_attorneys_cpt');
