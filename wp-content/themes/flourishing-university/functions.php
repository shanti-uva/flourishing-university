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

/**
 * Setup Carbon fields for use in Meta field creation of templates.
 */
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
  Container::make( 'theme_options', __( 'Theme Options' ) )
    ->add_fields( array(
      Field::make( 'text', 'crb_text', 'Text Field' ),
    ) );
}

add_action('carbon_fields_register_fields', 'crb_attach_post_options');
function crb_attach_post_options() {
	Container::make('post_meta', __('Hero Section'))
		->where('post_type', '=', 'page')
		->where('post_template', '=', 'page-templates/homepage.php')
		->add_fields(array(
			Field::make('complex', 'crb_homepage_hero', __('Hero Items'))
				->add_fields(array(
					Field::make('text', 'hero_item_title', __('Title')),
					Field::make('text', 'hero_item_icon_name', __('Icon Name')),
					Field::make('textarea', 'hero_item_description', __('Description'))
						->set_rows(5),
				))
		));

	Container::make('post_meta', __('Card Sections'))
		->where('post_type', '=', 'page')
		->where('post_template', '=', 'page-templates/homepage.php')
		->add_fields(array(
			Field::make('complex', 'crb_homepage_card_section', __('Front Cards'))
				->add_fields(array(
					Field::make('text', 'title_icon', __('Icon Name')),
					Field::make('text', 'title', __('Section Title')),
					Field::make('text', 'path', __('Path')),
					Field::make('complex', 'crb_homepage_card', __('Cards'))
						->add_fields(array(
							Field::make('image', 'card_image', __('Image')),
							Field::make('text', 'card_title', __('Card Title')),
							Field::make('text', 'path', __('Path')),
							Field::make('textarea', 'card_text', __('Card Description'))
						))
				))
		));
}

/**
 * Remove Main Editor Screen from Homepage.
 */
add_action('admin_head', 'remove_content_editor');
function remove_content_editor() {
	if ((int)get_option('page_on_front') === get_the_ID()) {
		remove_post_type_support('page', 'editor');
	}
}
