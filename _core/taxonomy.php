<?php

/**
 * Taxonomy functions
 */
if (!defined('ABSPATH')) exit; // Exit if accessed directly

//Register Taxonomy and Post types
function bigauto_attorneys_cpt()
{
	register_post_type('attorneys', array(
		'labels'             => array('name' => __('Attorneys', 'law')),
		'hierarchical'       => true,
		'menu_icon'          => 'dashicons-businessperson',
		'public'             => true,
		'show_in_rest'       => true,
		'has_archive'        => true,
		'show_ui'            => true,
		'show_admin_column'  => true,
		'show_in_nav_menus'  => true,
		'query_var'          => true,
		'publicly_queryable' => true,
		'supports'           => array('title', 'excerpt', 'thumbnail', 'editor'),
		'rewrite'            => array('slug' => 'attorneys', 'with_front' => true, 'hierarchical' => false),
		'template' => array(
			array('acf/welcome-banner-single-team-member'),
			array('acf/text-form-design-two'),
			array('acf/articles'),
		),

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
		'publicly_queryable' => false,
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
		'publicly_queryable' => false,
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
		'publicly_queryable' => false,
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
		'publicly_queryable' => false,
		'supports'           => array('title', 'excerpt', 'thumbnail', 'editor'),
		'rewrite' => array('slug' => 'results'),
		'taxonomies'          => array('category'),
	));

	register_post_type('form-entry', array(
		'labels'             => array('name' => __('Form Entries', 'law')),
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

	register_post_type('faq', array(
		'labels'             => array('name' => __('FAQ', 'law')),
		'menu_icon' 				 => 'dashicons-welcome-learn-more',
		'hierarchical'       => false,
		'public'             => true,
		'has_archive'        => true,
		'show_ui'            => true,
		'show_admin_column'  => true,
		'show_in_nav_menus'  => true,
		'query_var'          => true,
		'publicly_queryable' => false,
		'supports'           => array('title', 'excerpt', 'thumbnail', 'editor'),
		// 'slug' 							 => '/%faq%/%faq-categories%/%postname%/',
		'with_front' 				 => true,
		// 'walk_dirs' 				 => false
	));

	register_taxonomy('faq-categories', 'faq', array(
		'hierarchical' => true,
		'menu_icon'          => 'dashicons-welcome-learn-more',
		'label' => 'FAQ Categories',
		'singular_label' => 'FAQ Categories',
		'query_var' => true,
		'public' => true,
		'publicly_queryable' => false,
		'show_ui' => true,
		'show_tagcloud' => true,
		'_builtin' => false,
		'show_in_nav_menus' => false,
	));
}

add_action('init', 'bigauto_attorneys_cpt');
