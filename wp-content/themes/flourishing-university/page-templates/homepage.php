<?php
/**
 * Template Name: Home Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class='page-wrapper' id='full-width-page-wrapper'>
	<section class="front-hero py-3">
		<div class='greyborder'>
			<div class='orangeborder'>
				<div class="container-xxl content py-1">
					<div class="row">
						<div class='col-sm-12 col-md-6 col-xl-4'>
							<div class='hero-item my-3'>
								<h3 class='hero-title'>Contemplative Practices and Exercises</h3>
								<div class='item-content mt-3'>
									<?php echo load_inline_svg('icon-contemplative-blue.svg'); ?>
									<div class="item-text ml-2">Offering deeply annotated contemplative practices and reflective exercises for personal use, as well as adaptation and contextualization for a broad variety of settings.</div>
								</div>
							</div>
						</div>
						<div class='col-sm-12 col-md-6 col-xl-4'>
							<div class='hero-item my-3'>
								<h3 class='hero-title'>Community for Contemplation and Flourishing</h3>
								<div class='item-content mt-3'>
									<?php echo load_inline_svg('icon-community-blue.svg'); ?>
									<div class="item-text ml-2">Presenting contemplative traditions through their individual practices and the integration of those practices into broader pathways of practice.</div>
								</div>
							</div>
						</div>
						<div class='col-sm-12 col-md-6 col-xl-4'>
							<div class='hero-item my-3'>
								<h3 class='hero-title'>The Encyclopedia of Contemplation</h3>
								<div class='item-content mt-3'>
									<?php echo load_inline_svg('icon-encyclopedia-blue.svg'); ?>
									<div class="item-text ml-2">Exploring the world’s contemplative traditions across tradition, culture, and time from ancient roots to modern manifestations in their fullest depths and widest ranges.</div>
								</div>
							</div>
						</div>
						<div class='col-sm-12 col-md-6 col-xl-4'>
							<div class='hero-item my-3'>
								<h3 class='hero-title'>Library for Flourishing</h3>
								<div class='item-content mt-3'>
									<?php echo load_inline_svg('icon-library-blue.svg'); ?>
									<div class="item-text ml-2">Searching and browsing to access all the resources of the University of Flourishing, including audio-video, research briefs, practices, images, encyclopedia entries, bibliographies, and more.</div>
								</div>
							</div>
						</div>
						<div class='col-sm-12 col-md-6 col-xl-4'>
							<div class='hero-item my-3'>
								<h3 class='hero-title'>Student Flourishing in Higher Education</h3>
								<div class='item-content mt-3'>
									<?php echo load_inline_svg('icon-schools-blue.svg'); ?>
									<div class="item-text ml-2">Exploring theory and practice involved in institutions of higher education systematically transforming to better facilitate the flourishing of students, including with contemplative approaches.</div>
								</div>
							</div>
						</div>
						<div class='col-sm-12 col-md-6 col-xl-4'>
							<div class='hero-item my-3'>
								<h3 class='hero-title'>Flourishing Kids in K-12 Schools</h3>
								<div class='item-content mt-3'>
									<?php echo load_inline_svg('icon-kids-blue.svg'); ?>
									<div class="item-text ml-2">Providing diverse curated resources for educators, students, administrators, counselors, and parents involved in K-12 with a focus on the holistic flourishing of students.</div>
								</div>
							</div>
						</div>
					</div><!-- .row end -->
				</div><!-- #container -->
			</div>
		</div>
	</section>
	<section class='front-content'>
		<div class='strips bg-white'>
			<div class='green-strips'></div>
			<div class='orange-strips'></div>
		</div>
		<div class='container-xxl bg-white'>
			<section class='section-region'>
				<div class='region-title py-2 pl-4 mb-3'>
					<?php echo load_inline_svg('icon-green-practices.svg'); ?>
					<span class='region-text mx-2'>Contemplative Practices and Exercises</span>
					<a href='#' class='badge badge-pill badge-blue'><i class="fa fa-play"></i> Explore!</a>
				</div>
				<div class='region-blades'>
					<div class='row'>
						<div class='col-sm-12 col-md-6 col-xl-4'>
							<div class='front-blade pb-4'>
								<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'magic-bowl@2x.jpg'; ?>' alt='Magic Bowl'>
								<div class='blade-subsection mx-4 my-3'>
									<div class='blade-title mb-3 pb-2'>
										Sound and Silence Practice
										<span class='green-arrow ml-2'>
											<?php echo load_inline_svg('green-arrow.svg'); ?>
										</span>
									</div>
									<div class='blade-text'>A practice to develop deeper awareness and attentiveness to a single sense, such as sound. </div>
								</div>
								<div class='bottom-line'></div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</section>
</div><!-- #full-width-page-wrapper -->

<?php get_footer();
