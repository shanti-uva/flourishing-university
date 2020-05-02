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
				<section class='row equal my-3'>
					<div class='col-sm-12 col-lg-4'>
						<div class='curated-card'>
							<div class='curated-card__top'>
								<div class='c-card__top-header'>
									<?php echo load_inline_svg('icon-collections-green.svg'); ?>
									<span class='c-card__top-header-title ml-2'>
										<span>Collections</span>
										<a href='#'>
											<span>Explore!</span>
											<?php echo load_inline_svg('icon-blue-arrow-circle.svg'); ?>
										</a>
									</span>
								</div>
								<div class='c-card__top-body my-2'>
									Thematic collections of diverse types of resources such as terms, texts, audio-video, sources, and so forth.
								</div>
								<div class='c-card__top-search'>
									<div class="input-group flex-nowrap header-search my-2">
										<input type="search" class="form-control py-2 border-right-0" placeholder="Contemplative Practices..." aria-label="Search" aria-describedby="addon-wrapping">
										<span class="input-group-append">
											<button class="btn border-left-0 border search-btn" type="button">
												<i class="fa fa-search text-black-50"></i>
											</button>
										</span>
									</div>
								</div>
							</div>
							<div class='curated-card__btm p-2 pt-3 mt-3'>
								<div class='c-card__btm-feat'>Featured Collection</div>
								<div class='c-card__btm-header pb-1'>
									<span class='mr-2'>Contemplative Traditions</span>
									<?php echo load_inline_svg('exercises-orange-arrow.svg'); ?>
								</div>
								<div class='c-card__btm-body my-2'>
									Presenting contemplative traditions through their individual practices and the integration of those practices into broader pathways of practice.
								</div>
								<div class='c-card__btm-img'>
									<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'library-contemplative-traditions@2x.jpg'; ?>' alt='Contemplative Traditions'>
								</div>
							</div>
						</div>
					</div><!-- .col-sm-12.col-lg-4 -->
					<div class='col-sm-12 col-lg-4'>
						<div class='curated-card'>
							<div class='curated-card__top'>
								<div class='c-card__top-header'>
									<?php echo load_inline_svg('icon-practices-green-treepose-sized.svg'); ?>
									<span class='c-card__top-header-title ml-2'>
										<span>Practices</span>
										<a href='#'>
											<span>Explore!</span>
											<?php echo load_inline_svg('icon-blue-arrow-circle.svg'); ?>
										</a>
									</span>
								</div>
								<div class='c-card__top-body my-2'>
									Formal contemplative practices done on a regular basis with dedicated attention; Informal practices integrated with other activities.
								</div>
								<div class='c-card__top-search'>
									<div class="input-group flex-nowrap header-search my-2">
										<input type="search" class="form-control py-2 border-right-0" placeholder="Search Practices..." aria-label="Search" aria-describedby="addon-wrapping">
										<span class="input-group-append">
											<button class="btn border-left-0 border search-btn" type="button">
												<i class="fa fa-search text-black-50"></i>
											</button>
										</span>
									</div>
								</div>
							</div>
							<div class='curated-card__btm p-2 pt-3 mt-3'>
								<div class='c-card__btm-feat'>Featured Practice</div>
								<div class='c-card__btm-header pb-1'>
									<span class='mr-2'>A Practice of Fellowship</span>
									<?php echo load_inline_svg('exercises-orange-arrow.svg'); ?>
								</div>
								<div class='c-card__btm-body my-2'>
									A practice that directly works with an ability to strengthen compassion towards people beyond an “in group” such as family, friends, and people who we perceive to be similar to us.
								</div>
								<div class='c-card__btm-img'>
									<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'library-practice-fellowship@2x.jpg'; ?>' alt='A Practice of Fellowship'>
								</div>
							</div>
						</div>
					</div><!-- .col-sm-12.col-lg-4 -->
					<div class='col-sm-12 col-lg-4'>
						<div class='curated-card'>
							<div class='curated-card__top'>
								<div class='c-card__top-header'>
									<?php echo load_inline_svg('icon-library-exercise-green.svg'); ?>
									<span class='c-card__top-header-title ml-2'>
										<span>Exercises</span>
										<a href='#'>
											<span>Explore!</span>
											<?php echo load_inline_svg('icon-blue-arrow-circle.svg'); ?>
										</a>
									</span>
								</div>
								<div class='c-card__top-body my-2'>
									Informal one-time activities on a given theme or topic that support reflection, analysis, inquiry, and exchange.
								</div>
								<div class='c-card__top-search'>
									<div class="input-group flex-nowrap header-search my-2">
										<input type="search" class="form-control py-2 border-right-0" placeholder="Search Exercises..." aria-label="Search" aria-describedby="addon-wrapping">
										<span class="input-group-append">
											<button class="btn border-left-0 border search-btn" type="button">
												<i class="fa fa-search text-black-50"></i>
											</button>
										</span>
									</div>
								</div>
							</div>
							<div class='curated-card__btm p-2 pt-3 mt-3'>
								<div class='c-card__btm-feat'>Featured Exercise</div>
								<div class='c-card__btm-header pb-1'>
									<span class='mr-2'>Contemplative Inquiry Exercises</span>
									<?php echo load_inline_svg('exercises-orange-arrow.svg'); ?>
								</div>
								<div class='c-card__btm-body my-2'>
									Participants observe an object, image, or person three different ways and, each time, write what they “know” about the object.
								</div>
								<div class='c-card__btm-img'>
									<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'library-contemplative-inquiry-exercise@2x.jpg'; ?>' alt='Contemplative Inquiry Exercises'>
								</div>
							</div>
						</div>
					</div><!-- .col-sm-12.col-lg-4 -->
				</section><!-- section.row.equal.my-3 -->
			</div>
			<div class='col-sm-12 col-lg-4 right-sidebar'>Search Bar</div>
		</div>
	</div>
</div><!-- two-three-column-wrapper -->

<?php get_footer();
