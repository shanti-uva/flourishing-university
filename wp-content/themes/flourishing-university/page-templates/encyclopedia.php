<?php
/**
 * Template Name: Encyclopedia
 *
 * Template for displaying a page with a right sidebar and two columns for the main content.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class='two-three-column-wrapper'>
	<div class='container-xxl'>
		<div class='row'>
			<div class='col-sm-12 col-lg-8 content pb-5'>
				<div class='row'>
					<div class='col-sm-12'>
						<div class='title-bar my-2'>
							<div class='row align-items-center'>
								<div class='col-sm-12 col-md-5 sideOne'>
									<div class='row align-items-center'>
										<div class='col-sm-2'>
											<?php echo load_inline_svg('icon-encyclopedia-white.svg'); ?>
										</div>
										<div class='col-sm-10'>
											<span class='title-bar__title'>The Encyclopedia of Contemplation</span>
										</div>
									</div>
								</div>
								<div class='col-sm-12 col-md-7 sideTwo'>
									<span class='title-bar__text'>
										Exploring the world’s contemplative traditions across tradition, culture, and time from ancient roots to modern manifestations to unlock this archive of wisdom.
										<a href='#'>Read more...</a>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class='row'>
					<div class='col-sm-12 col-md-6'>
						<div class='section-one'>
							<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'contemplative-traditions@2x.jpg'; ?>' alt='Contemplative Traditions'>
							<div class='section__item green-bg'>
								<div class='white-bg'>
									<div class='blade-top'>
										<div class='blade-title'>
											<?php echo load_inline_svg('icon-contemplative-traditions--green.svg'); ?>
											<span class='blade-title__text mr-2'>Contemplative Traditions</span>
											<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
										</div>
										<div class='blade-top__body'>
											Presenting contemplative traditions through their individual practices and the integration of those practices into broader pathways of practice.
										</div>
										<div class='blade-top__search my-3'>
											<span class='mr-2'>Search</span>
											<div class="input-group flex-nowrap header-search mr-2">
												<input type="search" class="form-control py-2 border-right-0" placeholder="Contemplative Practices..." aria-label="Search" aria-describedby="addon-wrapping">
												<span class="input-group-append">
													<button class="btn border-left-0 border search-btn" type="button">
														<i class="fa fa-search text-black-50"></i>
													</button>
												</span>
											</div>
										</div>
									</div>
									<div class='blade-section green'>
										<div class='blade-section__body'>
											<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'tibetan-contemplative-traditions@2x.jpg'; ?>' alt='Tibetan Contemplative Traditions'>
											<div class='blade-section__body-content'>
												<div class='blade-section__body-content-title'>
													<span><?php echo load_inline_svg('icon-tibetan-contemplative-traditions-green.svg'); ?></span>
													<span class='title-span'>
														<span class='blade-title__text mr-2'>Tibetan Contemplative Traditions</span>
														<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
													</span>
												</div>
												<div class='blade-section__body-content-text'>
													Our initial focus is Tibetan Contemplative traditions - read an Introduction and also Explore our evolving map of their different forms and pathways.
												</div>
												<div class='blade-section__body-content-count'>Total - 258</div>
											</div>
										</div>
									</div> <!-- .blade-section -->
									<div class='blade-section green'>
										<div class='blade-section__body'>
											<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'great-perfection-contemplative-traditions@2x.jpg'; ?>' alt='Great Perfection Contemplative Traditions'>
											<div class='blade-section__body-content'>
												<div class='blade-section__body-content-title'>
													<span><?php echo load_inline_svg('icon-great-perfection-green.svg'); ?></span>
													<span class='title-span'>
														<span class='blade-title__text mr-2'>Great Perfection Contemplative Traditions</span>
														<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
													</span>
												</div>
												<div class='blade-section__body-content-text'>
													In particular, we are elaborating the Tibetan Great Perfection (Dzokchen) Contemplative tradition as an exemplary model.
												</div>
												<div class='blade-section__body-content-count'>Total - 1,208</div>
											</div>
										</div>
									</div> <!-- .blade-section -->
								</div>
							</div>
						</div><!--.section-one -->
						<div class='featured-section mt-5'>
							<div class='featured-top'>
								<div class='featured-top__item pl-4'>
									<?php echo load_inline_svg('icon-encyclopedia-white.svg'); ?>
									<span class="featured-top__item-title">Featured Content</span>
								</div>
							</div>
							<div class='featured-bottom green-bg'>
								<div class='white-bg'>
									<div class='featured-body'>
										<div class='featured-body__item mb-3'>
											<div class='featured-body__item-img'>
												<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'differentiation-of-cyclic-existence@2x.jpg'; ?>' alt='The Differentiation of Cyclic Existence and Transcendence (Rushan)'>
											</div>
											<div class='featured-body__item-text'>
												<div class='featured-body__item-text-title'>
													<span class='mr-2'>The Differentiation of Cyclic Existence and Transcendence (Rushan)</span>
													<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
												</div>
												<div class='featured-body__item-text-content mt-3'>
													Acting out impulses until exhaustion into naturalness.
												</div>
											</div>
										</div><!-- .featured-body__item -->
										<div class='featured-body__item mb-3'>
											<div class='featured-body__item-img'>
												<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'sound-of-the-elements-yoga@2x.jpg'; ?>' alt='The Sound of the Elements Yoga'>
											</div>
											<div class='featured-body__item-text'>
												<div class='featured-body__item-text-title'>
													<span class='mr-2'>The Sound of the Elements Yoga</span>
													<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
												</div>
												<div class='featured-body__item-text-content mt-3'>
													Immersion in the sounds of the five natural elements.
												</div>
											</div>
										</div><!-- .featured-body__item -->
										<div class='featured-body__item mb3'>
											<div class='featured-body__item-img'>
												<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'direct-transcendence-thogel@2x.jpg'; ?>' alt='Direct Transcendence (Thogel)'>
											</div>
											<div class='featured-body__item-text'>
												<div class='featured-body__item-text-title'>
													<span class='mr-2'>Direct Transcendence (Thogel)</span>
													<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
												</div>
												<div class='featured-body__item-text-content mt-3'>
													Cultivation of an observer awareness that watches whatever is coming and going in the stream.
												</div>
											</div>
										</div><!-- .featured-body__item -->
									</div>
								</div>
							</div>
						</div>
					</div><!-- .col-sm-12.col-md-6 -->
					<div class='col-sm-12 col-md-6'>
						<div class='section-one'>
							<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'generative-contemplation@2x.jpg'; ?>' alt='Generative Contemplation'>
							<div class='section__item orange-bg'>
								<div class='white-bg'>
									<div class='blade-top'>
										<div class='blade-title'>
											<?php echo load_inline_svg('icon-contemplation-generative-orange.svg'); ?>
											<span class='blade-title__text mr-2'>Generative Contemplation</span>
											<?php echo load_inline_svg('exercises-orange-arrow.svg'); ?>
										</div>
										<div class='blade-top__body'>
											Exploring how practices are created and dynamically adapted towards analyzing the generative matrix of contemplative fluency and literacy.
										</div>
										<div class='blade-top__search my-3'>
											<span class='mr-2'>Search</span>
											<div class="input-group flex-nowrap header-search mr-2">
												<input type="search" class="form-control py-2 border-right-0" placeholder="Contemplative Practices..." aria-label="Search" aria-describedby="addon-wrapping">
												<span class="input-group-append">
													<button class="btn border-left-0 border search-btn" type="button">
														<i class="fa fa-search text-black-50"></i>
													</button>
												</span>
											</div>
										</div>
									</div>
									<div class='blade-section orange'>
										<div class='blade-section__body'>
											<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'contemplative-lexicons@2x.jpg'; ?>' alt='Contemplative Lexicons'>
											<div class='blade-section__body-content'>
												<div class='blade-section__body-content-title'>
													<span><?php echo load_inline_svg('icon-contemplative-lexicons-orange.svg'); ?></span>
													<span class='title-span'>
														<span class='blade-title__text mr-2'>Contemplative Lexicons</span>
														<?php echo load_inline_svg('exercises-orange-arrow.svg'); ?>
													</span>
												</div>
												<div class='blade-section__body-content-text'>
													Analyzing the constituent building blocks or elements used to fashion contemplative practices in a tradition.
												</div>
												<div class='blade-section__body-content-count'>Total - 925</div>
											</div>
										</div>
									</div> <!-- .blade-section -->
									<div class='blade-section orange'>
										<div class='blade-section__body'>
											<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'contemplative-grammars@2x.jpg'; ?>' alt='Contemplative Grammars'>
											<div class='blade-section__body-content'>
												<div class='blade-section__body-content-title'>
													<span><?php echo load_inline_svg('icon-contemplative-grammar--orange.svg'); ?></span>
													<span class='title-span'>
														<span class='blade-title__text mr-2'>Contemplative Grammars</span>
														<?php echo load_inline_svg('exercises-orange-arrow.svg'); ?>
													</span>
												</div>
												<div class='blade-section__body-content-text'>
													Presenting the underlying structural principles and linking mechanisms through which elements are combined and integrated into individual practices.
												</div>
												<div class='blade-section__body-content-count'>Total - 1,801</div>
											</div>
										</div>
									</div> <!-- .blade-section -->
									<div class='blade-section orange'>
										<div class='blade-section__body'>
											<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'contemplative-contexts@2x.jpg'; ?>' alt='Contemplative Contexts'>
											<div class='blade-section__body-content'>
												<div class='blade-section__body-content-title'>
													<span><?php echo load_inline_svg('icon-contemplative-contexts--orange.svg'); ?></span>
													<span class='title-span'>
														<span class='blade-title__text mr-2'>Contemplative Contexts</span>
														<?php echo load_inline_svg('exercises-orange-arrow.svg'); ?>
													</span>
												</div>
												<div class='blade-section__body-content-text'>
													Examining the diverse contexts which shape and give overall meaning to practices and sequences of practices.
												</div>
												<div class='blade-section__body-content-count'>Total - 158</div>
											</div>
										</div>
									</div> <!-- .blade-section -->
								</div>
							</div>
						</div>
					</div><!-- .col-sm-12.col-md-6 -->
				</div> <!-- .row -->
			</div>
			<div class='col-sm-12 col-lg-4 right-sidebar'>Search Bar</div>
		</div>
	</div>
</div><!-- two-three-column-wrapper -->

<?php get_footer();
