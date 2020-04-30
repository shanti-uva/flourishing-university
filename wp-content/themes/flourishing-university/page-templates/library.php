<?php
/**
 * Template Name: Library
 *
 * Template for displaying a page with a right sidebar and two columns for the main content. This is used for the community page.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class='two-three-rows-wrapper'>
	<div class='container-xxl'>
		<div class='row'>
			<div class='col-sm-12 col-lg-8 content pb-5'>
				<div class='row'>
					<div class='col-sm-12 mb-3'>
						<div class='title-bar my-2'>
							<div class='row align-items-center'>
								<div class='col-sm-12 col-md-5 sideOne'>
									<div class='row align-items-center'>
										<div class='col-sm-2'>
											<?php echo load_inline_svg('icon-community-white.svg'); ?>
										</div>
										<div class='col-sm-10'>
											<span class='title-bar__title'>Library of Flourishing</span>
										</div>
									</div>
								</div>
								<div class='col-sm-12 col-md-7 sideTwo'>
									<span class='title-bar__text'>
										Searching and browsing to access all the  resources of the University of Flourishing, including audio-video, research briefs, practices, images, encyclopedia entries, bibliographies, and more.
										<a href='#'>Read more...</a>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<section class='row my-3'>
					<div class='col-sm-12 col-lg-4'>
						<div class='curated-card'>
							<div class='curated-card__top'>
								<div class='c-card__top-header'>
									<?php echo load_inline_svg(''); ?>
								</div>
							</div>
							<div class='curated-card__bottom'></div>
						</div>
					</div><!-- .col-sm-12.col-lg-4 -->
				</section><!-- section.row -->
			</div>
			<div class='col-sm-12 col-lg-4 right-sidebar'>Search Bar</div>
		</div>
	</div>
</div><!-- two-three-column-wrapper -->

<?php get_footer();
