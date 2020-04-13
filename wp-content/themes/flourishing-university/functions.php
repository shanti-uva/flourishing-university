<?php
/**
 * UnderStrap functions and definitions
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

foreach ( $understrap_includes as $file ) {
	require_once get_template_directory() . '/inc' . $file;
}

/**
* Load an inline SVG.
* @param string $filename The filename of the SVG you want to load.
* @return string The content of the SVG you want to load.
*/
function load_inline_svg( $filename ) {
	// Add the path to your SVG directory inside your theme.
	$svg_path = '/img/';

	// Check the SVG file exists
	if ( file_exists( get_stylesheet_directory() . $svg_path . $filename ) ) {
		// Load and return the contents of the file
		return file_get_contents( get_stylesheet_directory_uri() . $svg_path . $filename );
	}

	// Return a blank string if we can't find the file.
	return '';
}
