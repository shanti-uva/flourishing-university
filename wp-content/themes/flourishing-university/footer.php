<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper-footer">
	<div class="decorative-footer">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<footer class="main-footer py-3">
					<div class='footer-tagline'>
						<div><?php echo load_inline_svg('flourishing-logo.svg'); ?>
						<span class='footer-tagline__text ml-2'>The University of Flourishing</span><div>
						<a class="flourishing-domain" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url">www.flourishingu.org</a>	
					</div>
					<div class='footer-menu-container'>
						<?php wp_nav_menu(
							array(
								'container_class' => 'footer-menu-wrapper',
								'menu_class'      => 'footer-menu nav',
								'fallback_cb'     => '',
								'depth'           => 2,
								'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
							)
						); ?>
					</div>
				</footer><!-- .main-footer -->
			</div><!--col end -->
		</div><!-- row end -->
	</div><!-- container end -->
	<div class="footer-byline">
		<p>Hosted by the University of Virginia’s Contemplative Sciences Center on behalf of the Flourishing Academic Network.</p>
		<span>&copy; <?php echo date ('Y'); ?> University of Flourishing</span> 
	</div>
	</div>	
</div><!-- wrapper end -->
</div><!-- #page we need this extra closing tag here -->
<?php wp_footer(); ?>
</body>
</html>

