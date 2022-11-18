<?php

// Setup Composer Autoload
require_once('vendor/autoload.php');

// Inlude taxonomy
require_once('_core/taxonomy.php');

// Include acf for taxonomy
require_once('_core/taxonomy_acf.php');

// Include form entry
require_once('_core/cf7_form_entry/form_entry.php');
require_once('_core/cf7_form_entry/export_entry.php');

// Advanced Custom Fields Plugin
// require_once ( '_inc/acf-include/acf-include.php' );

// Helper Functions
require_once('_core/helpers/helper-functions.php');

// Theme settings from ACF
require_once('_core/helpers/theme-options-acf.php');

// Single post additional acf
require_once('_core/helpers/single-acf.php');

// Template Functions
require_once('_core/helpers/template-functions.php');

// Admin
require_once('_core/admin/_init.php');

// Setup
require_once('_core/setup.php');

// Enqueue
require_once('_core/enqueue.php');

// breadcrumbs
require_once('_core/breadcrumbs.php');

// Pagination
require_once('_core/pagination.php');

// Actions
require_once('_core/hooks/actions.php');

// Filters
require_once('_core/hooks/filters.php');

// Menus
require_once('_core/menus.php');

// Sidebars
require_once('_core/sidebars.php');

// Image Sizes
require_once('_core/image-sizes.php');

// Widgets
require_once('_core/widgets/_init.php');

// Shortcodes
require_once('_core/shortcodes/_init.php');

// Plugins
require_once('_core/plugins/_init.php');

// AJAX
require_once('_core/ajax/_init.php');

require_once('_core/guttenberg-extend.php');

require_once('_inc/guttenberg-blocks.php');

//Litify api integration
require_once('_core/litify_integration/litify_integration.php');