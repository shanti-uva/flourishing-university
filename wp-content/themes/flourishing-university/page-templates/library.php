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
			<div class='col-sm-12 col-md-8 col-lg-9 content pb-5'>
				<div class='row'>
					<div class='col-sm-12'>
						<div class='title-bar my-2'>
							<div class="title-bar-deco">
							<div class='row align-items-center'>
								<div class='col-sm-12 col-md-4 sideOne'>
									<div class='row align-items-center'>
										<div class='col-sm-2'>
											<?php echo load_inline_svg('icon-community-white.svg'); ?>
										</div>
										<div class='col-sm-10'>
											<span class='title-bar__title'>Library of Flourishing</span>
										</div>
									</div>
								</div>
								<div class='col-sm-12 col-md-8 sideTwo'>
									<span class='title-bar__text'>
										Searching and browsing to access all the  resources of the University of Flourishing, including audio-video, research briefs, practices, images, encyclopedia entries, bibliographies, and more.
										<a href='#'>Read more...</a>
									</span>
								</div>
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
									<span class='c-card__top-header-title ml-2 pl-1'>
										<span>Collections</span>
										<a href='#'>
											<span>Explore!</span>
											<?php echo load_inline_svg('icon-blue-arrow-circle.svg'); ?>
										</a>
									</span>
								</div>
								<div class='c-card__top-body my-2 pl-2'>
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
							<div class='curated-card__btm p-3 pt-3 mt-4'>
								<div class='c-card__btm-feat'>Featured Collection</div>
								<div class='c-card__btm-header pb-1 pl-1'>
									<span class='mr-2'>Contemplative Traditions</span>
									<?php echo load_inline_svg('exercises-orange-arrow.svg'); ?>
								</div>
								<div class='c-card__btm-body my-2 pl-1'>
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
									<span class='c-card__top-header-title ml-2 pl-1'>
										<span>Practices</span>
										<a href='#'>
											<span>Explore!</span>
											<?php echo load_inline_svg('icon-blue-arrow-circle.svg'); ?>
										</a>
									</span>
								</div>
								<div class='c-card__top-body my-2 pl-2'>
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
							<div class='curated-card__btm p-3 pt-3 mt-4'>
								<div class='c-card__btm-feat'>Featured Practice</div>
								<div class='c-card__btm-header pb-1 pl-1'>
									<span class='mr-2'>A Practice of Fellowship</span>
									<?php echo load_inline_svg('exercises-orange-arrow.svg'); ?>
								</div>
								<div class='c-card__btm-body my-2 pl-1'>
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
									<span class='c-card__top-header-title ml-2 pl-1'>
										<span>Exercises</span>
										<a href='#'>
											<span>Explore!</span>
											<?php echo load_inline_svg('icon-blue-arrow-circle.svg'); ?>
										</a>
									</span>
								</div>
								<div class='c-card__top-body my-2 pl-2'>
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
							<div class='curated-card__btm p-3 pt-3 mt-4'>
								<div class='c-card__btm-feat'>Featured Exercise</div>
								<div class='c-card__btm-header pb-1 pl-1'>
									<span class='mr-2'>Contemplative Inquiry Exercises</span>
									<?php echo load_inline_svg('exercises-orange-arrow.svg'); ?>
								</div>
								<div class='c-card__btm-body my-2 pl-1'>
									Participants observe an object, image, or person three different ways and, each time, write what they “know” about the object.
								</div>
								<div class='c-card__btm-img'>
									<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'library-contemplative-inquiry-exercise@2x.jpg'; ?>' alt='Contemplative Inquiry Exercises'>
								</div>
							</div>
						</div>
					</div><!-- .col-sm-12.col-lg-4 -->
				</section><!-- section.row.equal.my-3 -->

				<section class='row equal my-3'>
					<div class='col-sm-12 col-lg-4'>
						<div class='curated-card'>
							<div class='curated-card__top'>
								<div class='c-card__top-header'>
									<?php echo load_inline_svg('icon-curated-guide-green.svg'); ?>
									<span class='c-card__top-header-title ml-2 pl-1'>
										<span>Curated Guides</span>
										<a href='#'>
											<span>Explore!</span>
											<?php echo load_inline_svg('icon-blue-arrow-circle.svg'); ?>
										</a>
									</span>
								</div>
								<div class='c-card__top-body my-2 pl-2'>
									Guides to multimedia resources that are curated to provide a general introduction on a specific topic.
								</div>
								<div class='c-card__top-search'>
									<div class="input-group flex-nowrap header-search my-2">
										<input type="search" class="form-control py-2 border-right-0" placeholder="Search Guides..." aria-label="Search" aria-describedby="addon-wrapping">
										<span class="input-group-append">
											<button class="btn border-left-0 border search-btn" type="button">
												<i class="fa fa-search text-black-50"></i>
											</button>
										</span>
									</div>
								</div>
							</div>
							<div class='curated-card__btm p-3 pt-3 mt-4'>
								<div class='c-card__btm-feat'>Featured Guide</div>
								<div class='c-card__btm-header pb-1 pl-1'>
									<span class='mr-2'>Contemplation and Ecology</span>
									<?php echo load_inline_svg('exercises-orange-arrow.svg'); ?>
								</div>
								<div class='c-card__btm-body my-2 pl-1'>
									A curated guide on the intersections of contemplation and ecology, providing multi-media resources that study and describe how contemplative practice traditions have been found to strengthen the relationship between humans and nature.
								</div>
								<div class='c-card__btm-img'>
									<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'library-curated-guides@2x.jpg'; ?>' alt='Contemplation and Ecology'>
								</div>
							</div>
						</div>
					</div><!-- .col-sm-12.col-lg-4 -->
					<div class='col-sm-12 col-lg-4'>
						<div class='curated-card'>
							<div class='curated-card__top'>
								<div class='c-card__top-header'>
									<?php echo load_inline_svg('icon-research-beliefs-green.svg'); ?>
									<span class='c-card__top-header-title ml-2 pl-1'>
										<span>Research Briefs</span>
										<a href='#'>
											<span>Explore!</span>
											<?php echo load_inline_svg('icon-blue-arrow-circle.svg'); ?>
										</a>
									</span>
								</div>
								<div class='c-card__top-body my-2 pl-2'>
									Analytical summaries of current research on a specific topic.
								</div>
								<div class='c-card__top-search'>
									<div class="input-group flex-nowrap header-search my-2">
										<input type="search" class="form-control py-2 border-right-0" placeholder="Search Briefs..." aria-label="Search" aria-describedby="addon-wrapping">
										<span class="input-group-append">
											<button class="btn border-left-0 border search-btn" type="button">
												<i class="fa fa-search text-black-50"></i>
											</button>
										</span>
									</div>
								</div>
							</div>
							<div class='curated-card__btm p-3 pt-3 mt-4'>
								<div class='c-card__btm-feat'>Featured Brief</div>
								<div class='c-card__btm-header pb-1 pl-1'>
									<span class='mr-2'>Compassion Science</span>
									<?php echo load_inline_svg('exercises-orange-arrow.svg'); ?>
								</div>
								<div class='c-card__btm-body my-2 pl-1'>
									An overview of compassion science, including the latest findings on how compassion can be cultivated for purposes of physical and mental health and healing.
								</div>
								<div class='c-card__btm-img'>
									<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'library-research-beliefs@2x.jpg'; ?>' alt='Compassion Science'>
								</div>
							</div>
						</div>
					</div><!-- .col-sm-12.col-lg-4 -->
					<div class='col-sm-12 col-lg-4'>
						<div class='curated-card'>
							<div class='curated-card__top'>
								<div class='c-card__top-header'>
									<?php echo load_inline_svg('icon-syllabi-green.svg'); ?>
									<span class='c-card__top-header-title ml-2 pl-1'>
										<span>Syllabi</span>
										<a href='#'>
											<span>Explore!</span>
											<?php echo load_inline_svg('icon-blue-arrow-circle.svg'); ?>
										</a>
									</span>
								</div>
								<div class='c-card__top-body my-2 pl-2'>
									Syllabi for courses that exemplify pedagogies of flourishing.
								</div>
								<div class='c-card__top-search'>
									<div class="input-group flex-nowrap header-search my-2">
										<input type="search" class="form-control py-2 border-right-0" placeholder="Search Syllabi..." aria-label="Search" aria-describedby="addon-wrapping">
										<span class="input-group-append">
											<button class="btn border-left-0 border search-btn" type="button">
												<i class="fa fa-search text-black-50"></i>
											</button>
										</span>
									</div>
								</div>
							</div>
							<div class='curated-card__btm p-3 pt-3 mt-4'>
								<div class='c-card__btm-feat'>Featured Syllabi</div>
								<div class='c-card__btm-header pb-1 pl-1'>
									<span class='mr-2'>Contemplative Approaches to Communication</span>
									<?php echo load_inline_svg('exercises-orange-arrow.svg'); ?>
								</div>
								<div class='c-card__btm-body my-2 pl-1'>
									Syllabi for course that explores contemplative approaches to learning and knowing in communication and media studies taught at the University of Virginia.
								</div>
								<div class='c-card__btm-img'>
									<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'library-syllabi@2x.jpg'; ?>' alt='Contemplative Approaches to Communication'>
								</div>
							</div>
						</div>
					</div><!-- .col-sm-12.col-lg-4 -->
				</section><!-- section.row.equal.my-3 -->

				<section class='row equal my-3'>
					<div class='col-sm-12 col-lg-4'>
						<div class='curated-card'>
							<div class='curated-card__top'>
								<div class='c-card__top-header'>
									<?php echo load_inline_svg('icon-texts-green.svg'); ?>
									<span class='c-card__top-header-title ml-2 pl-1'>
										<span>Texts</span>
										<a href='#'>
											<span>Explore!</span>
											<?php echo load_inline_svg('icon-blue-arrow-circle.svg'); ?>
										</a>
									</span>
								</div>
								<div class='c-card__top-body my-2 pl-2'>
									Texts, including essays, briefs, and guides on a diverse variety of topics.
								</div>
								<div class='c-card__top-search'>
									<div class="input-group flex-nowrap header-search my-2">
										<input type="search" class="form-control py-2 border-right-0" placeholder="Search Texts..." aria-label="Search" aria-describedby="addon-wrapping">
										<span class="input-group-append">
											<button class="btn border-left-0 border search-btn" type="button">
												<i class="fa fa-search text-black-50"></i>
											</button>
										</span>
									</div>
								</div>
							</div>
							<div class='curated-card__btm p-3 pt-3 mt-4'>
								<div class='c-card__btm-feat'>Featured Text</div>
								<div class='c-card__btm-header pb-1 pl-1'>
									<span class='mr-2'>Generation Phase Practice</span>
									<?php echo load_inline_svg('exercises-orange-arrow.svg'); ?>
								</div>
								<div class='c-card__btm-body my-2 pl-1'>
									The generation phase practice of deity yoga entails taking on the subjectivity of a buddha through visualizing oneself as an enlightened deity in the pure environment of a maṇḍala.
								</div>
								<div class='c-card__btm-img'>
									<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'library-texts@2x.jpg'; ?>' alt='Generation Phase Practice'>
								</div>
							</div>
						</div>
					</div><!-- .col-sm-12.col-lg-4 -->
					<div class='col-sm-12 col-lg-4'>
						<div class='curated-card'>
							<div class='curated-card__top'>
								<div class='c-card__top-header'>
									<?php echo load_inline_svg('icon-audio-video-green.svg'); ?>
									<span class='c-card__top-header-title ml-2 pl-1'>
										<span>Audio-Video</span>
										<a href='#'>
											<span>Explore!</span>
											<?php echo load_inline_svg('icon-blue-arrow-circle.svg'); ?>
										</a>
									</span>
								</div>
								<div class='c-card__top-body my-2 pl-2'>
									Recordings of talks, interviews, instructions, practices, and other topics.
								</div>
								<div class='c-card__top-search'>
									<div class="input-group flex-nowrap header-search my-2">
										<input type="search" class="form-control py-2 border-right-0" placeholder="Search Audio-Video..." aria-label="Search" aria-describedby="addon-wrapping">
										<span class="input-group-append">
											<button class="btn border-left-0 border search-btn" type="button">
												<i class="fa fa-search text-black-50"></i>
											</button>
										</span>
									</div>
								</div>
							</div>
							<div class='curated-card__btm p-3 pt-3 mt-4'>
								<div class='c-card__btm-feat'>Featured Audio-Video</div>
								<div class='c-card__btm-header pb-1 pl-1'>
									<span class='mr-2'>Deep Breathing</span>
									<?php echo load_inline_svg('exercises-orange-arrow.svg'); ?>
								</div>
								<div class='c-card__btm-body my-2 pl-1'>
									Listen to a guided meditation instruction on a deep breathing practice to relieve stress and anxiety.
								</div>
								<div class='c-card__btm-img'>
									<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'library-audio-video@2x.jpg'; ?>' alt='Deep Breathing'>
								</div>
							</div>
						</div>
					</div><!-- .col-sm-12.col-lg-4 -->
					<div class='col-sm-12 col-lg-4'>
						<div class='curated-card'>
							<div class='curated-card__top'>
								<div class='c-card__top-header'>
									<?php echo load_inline_svg('icon-sources-green.svg'); ?>
									<span class='c-card__top-header-title ml-2 pl-1'>
										<span>Sources</span>
										<a href='#'>
											<span>Explore!</span>
											<?php echo load_inline_svg('icon-blue-arrow-circle.svg'); ?>
										</a>
									</span>
								</div>
								<div class='c-card__top-body my-2 pl-2'>
									Topical multimedia bibliographies with books, articles, videos, podcasts, and informative resources.
								</div>
								<div class='c-card__top-search'>
									<div class="input-group flex-nowrap header-search my-2">
										<input type="search" class="form-control py-2 border-right-0" placeholder="Search Sources..." aria-label="Search" aria-describedby="addon-wrapping">
										<span class="input-group-append">
											<button class="btn border-left-0 border search-btn" type="button">
												<i class="fa fa-search text-black-50"></i>
											</button>
										</span>
									</div>
								</div>
							</div>
							<div class='curated-card__btm p-3 pt-3 mt-4'>
								<div class='c-card__btm-feat'>Featured Source</div>
								<div class='c-card__btm-header pb-1 pl-1'>
									<span class='mr-2'>Technology and Attention</span>
									<?php echo load_inline_svg('exercises-orange-arrow.svg'); ?>
								</div>
								<div class='c-card__btm-body my-2 pl-1'>
									A multimedia bibliography of resources on the intersection of human attention and technology.
								</div>
								<div class='c-card__btm-img'>
									<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'library-sources@2x.jpg'; ?>' alt='Technology and Attention'>
								</div>
							</div>
						</div>
					</div><!-- .col-sm-12.col-lg-4 -->
				</section><!-- section.row.equal.my-3 -->

				<section class='row equal my-3'>
					<div class='col-sm-12 col-lg-4'>
						<div class='curated-card'>
							<div class='curated-card__top'>
								<div class='c-card__top-header'>
									<?php echo load_inline_svg('icon-images-green.svg'); ?>
									<span class='c-card__top-header-title ml-2 pl-1'>
										<span>Images</span>
										<a href='#'>
											<span>Explore!</span>
											<?php echo load_inline_svg('icon-blue-arrow-circle.svg'); ?>
										</a>
									</span>
								</div>
								<div class='c-card__top-body my-2 pl-2'>
									A repository of diverse photographs and visual images.
								</div>
								<div class='c-card__top-search'>
									<div class="input-group flex-nowrap header-search my-2">
										<input type="search" class="form-control py-2 border-right-0" placeholder="Search Images..." aria-label="Search" aria-describedby="addon-wrapping">
										<span class="input-group-append">
											<button class="btn border-left-0 border search-btn" type="button">
												<i class="fa fa-search text-black-50"></i>
											</button>
										</span>
									</div>
								</div>
							</div>
							<div class='curated-card__btm p-3 pt-3 mt-4'>
								<div class='c-card__btm-feat'>Featured Image</div>
								<div class='c-card__btm-header pb-1 pl-1'>
									<span class='mr-2'>Whirling Dervish</span>
									<?php echo load_inline_svg('exercises-orange-arrow.svg'); ?>
								</div>
								<div class='c-card__btm-body my-2 pl-1'>
									Image of a Sufi Dervish practicing a whirling active meditation.
								</div>
								<div class='c-card__btm-img'>
									<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'library-images@2x.jpg'; ?>' alt='Whirling Dervish'>
								</div>
							</div>
						</div>
					</div><!-- .col-sm-12.col-lg-4 -->
					<div class='col-sm-12 col-lg-4'>
						<div class='curated-card'>
							<div class='curated-card__top'>
								<div class='c-card__top-header'>
									<?php echo load_inline_svg('icon-visuals-green.svg'); ?>
									<span class='c-card__top-header-title ml-2 pl-1'>
										<span>Visuals</span>
										<a href='#'>
											<span>Explore!</span>
											<?php echo load_inline_svg('icon-blue-arrow-circle.svg'); ?>
										</a>
									</span>
								</div>
								<div class='c-card__top-body my-2 pl-2'>
									Dynamic and interactive visualizations of diverse types.
								</div>
								<div class='c-card__top-search'>
									<div class="input-group flex-nowrap header-search my-2">
										<input type="search" class="form-control py-2 border-right-0" placeholder="Search Visuals..." aria-label="Search" aria-describedby="addon-wrapping">
										<span class="input-group-append">
											<button class="btn border-left-0 border search-btn" type="button">
												<i class="fa fa-search text-black-50"></i>
											</button>
										</span>
									</div>
								</div>
							</div>
							<div class='curated-card__btm p-3 pt-3 mt-4'>
								<div class='c-card__btm-feat'>Featured Visual</div>
								<div class='c-card__btm-header pb-1 pl-1'>
									<span class='mr-2'>Impact of Mindfulness on K-12 Teacher's Mental Health</span>
									<?php echo load_inline_svg('exercises-orange-arrow.svg'); ?>
								</div>
								<div class='c-card__btm-body my-2 pl-1'>
									Graphic that summarizes research studies on the effects of mindfulness practice on K-12 teachers, measured by factors of stress, burnout, depression, etc.
								</div>
								<div class='c-card__btm-img'>
									<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'library-visuals@2x.jpg'; ?>' alt='Impact of Mindfulness on K-12 Teachers Mental Health'>
								</div>
							</div>
						</div>
					</div><!-- .col-sm-12.col-lg-4 -->
					<div class='col-sm-12 col-lg-4'>
						<div class='curated-card'>
							<div class='curated-card__top'>
								<div class='c-card__top-header'>
									<?php echo load_inline_svg('icon-places-green.svg'); ?>
									<span class='c-card__top-header-title ml-2 pl-1'>
										<span>Places</span>
										<a href='#'>
											<span>Explore!</span>
											<?php echo load_inline_svg('icon-blue-arrow-circle.svg'); ?>
										</a>
									</span>
								</div>
								<div class='c-card__top-body my-2 pl-2'>
									Studies and mapping of places around the world related to the study and practice of contemplation and flourishing.
								</div>
								<div class='c-card__top-search'>
									<div class="input-group flex-nowrap header-search my-2">
										<input type="search" class="form-control py-2 border-right-0" placeholder="Search Places..." aria-label="Search" aria-describedby="addon-wrapping">
										<span class="input-group-append">
											<button class="btn border-left-0 border search-btn" type="button">
												<i class="fa fa-search text-black-50"></i>
											</button>
										</span>
									</div>
								</div>
							</div>
							<div class='curated-card__btm p-3 pt-3 mt-4'>
								<div class='c-card__btm-feat'>Featured Place</div>
								<div class='c-card__btm-header pb-1 pl-1'>
									<span class='mr-2'>Contemplative Sciences Center</span>
									<?php echo load_inline_svg('exercises-orange-arrow.svg'); ?>
								</div>
								<div class='c-card__btm-body my-2 pl-1'>
									The Contemplative Commons is home to the Contemplative Sciences Center, an innovative building on the grounds of the University of Virginia designed to bring students and faculty from different schools and disciplines together.
								</div>
								<div class='c-card__btm-img'>
									<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'library-places@2x.jpg'; ?>' alt='Contemplative Sciences Center'>
								</div>
							</div>
						</div>
					</div><!-- .col-sm-12.col-lg-4 -->
				</section><!-- section.row.equal.my-3 -->

				<section class='row equal my-3'>
					<div class='col-sm-12 col-lg-4'>
						<div class='curated-card'>
							<div class='curated-card__top'>
								<div class='c-card__top-header'>
									<?php echo load_inline_svg('icon-subjects-green.svg'); ?>
									<span class='c-card__top-header-title ml-2 pl-1'>
										<span>Subjects</span>
										<a href='#'>
											<span>Explore!</span>
											<?php echo load_inline_svg('icon-blue-arrow-circle.svg'); ?>
										</a>
									</span>
								</div>
								<div class='c-card__top-body my-2 pl-2'>
									Knowledge maps of diverse subjects such as typologies of contemplation or models of flourishing.
								</div>
								<div class='c-card__top-search'>
									<div class="input-group flex-nowrap header-search my-2">
										<input type="search" class="form-control py-2 border-right-0" placeholder="Search Subjects..." aria-label="Search" aria-describedby="addon-wrapping">
										<span class="input-group-append">
											<button class="btn border-left-0 border search-btn" type="button">
												<i class="fa fa-search text-black-50"></i>
											</button>
										</span>
									</div>
								</div>
							</div>
							<div class='curated-card__btm p-3 pt-3 mt-4'>
								<div class='c-card__btm-feat'>Featured Subject</div>
								<div class='c-card__btm-header pb-1 pl-1'>
									<span class='mr-2'>Tibetan Contemplative Traditions</span>
									<?php echo load_inline_svg('exercises-orange-arrow.svg'); ?>
								</div>
								<div class='c-card__btm-body my-2 pl-1'>
									A knowledge map of the contemplative practice traditions of Tibet.
								</div>
								<div class='c-card__btm-img'>
									<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'library-subjects@2x.jpg'; ?>' alt='Tibetan Contemplative Traditions'>
								</div>
							</div>
						</div>
					</div><!-- .col-sm-12.col-lg-4 -->
					<div class='col-sm-12 col-lg-4'>
						<div class='curated-card'>
							<div class='curated-card__top'>
								<div class='c-card__top-header'>
									<?php echo load_inline_svg('icon-terms-green.svg'); ?>
									<span class='c-card__top-header-title ml-2 pl-1'>
										<span>Terms</span>
										<a href='#'>
											<span>Explore!</span>
											<?php echo load_inline_svg('icon-blue-arrow-circle.svg'); ?>
										</a>
									</span>
								</div>
								<div class='c-card__top-body my-2 pl-2'>
									Studies of key vocabulary items and topical dictionaries.
								</div>
								<div class='c-card__top-search'>
									<div class="input-group flex-nowrap header-search my-2">
										<input type="search" class="form-control py-2 border-right-0" placeholder="Search Terms..." aria-label="Search" aria-describedby="addon-wrapping">
										<span class="input-group-append">
											<button class="btn border-left-0 border search-btn" type="button">
												<i class="fa fa-search text-black-50"></i>
											</button>
										</span>
									</div>
								</div>
							</div>
							<div class='curated-card__btm p-3 pt-3 mt-4'>
								<div class='c-card__btm-feat'>Featured Term</div>
								<div class='c-card__btm-header pb-1 pl-1'>
									<span class='mr-2'>Meta-cognition</span>
									<?php echo load_inline_svg('exercises-orange-arrow.svg'); ?>
								</div>
								<div class='c-card__btm-body my-2 pl-1'>
									The most common definition of metacognition is that metacognition is individuals’ having information about their cognitive structure and being able to organize this structure (Flavell, 1979).
								</div>
								<div class='c-card__btm-img'>
									<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'library-terms@2x.jpg'; ?>' alt='Meta-cognition'>
								</div>
							</div>
						</div>
					</div><!-- .col-sm-12.col-lg-4 -->
					<div class='col-sm-12 col-lg-4'>
						<div class='curated-card'>
							<div class='curated-card__top'>
								<div class='c-card__top-header'>
									<?php echo load_inline_svg('icon-blogs-green-2.svg'); ?>
									<span class='c-card__top-header-title ml-2 pl-1'>
										<span>Blogs</span>
										<a href='#'>
											<span>Explore!</span>
											<?php echo load_inline_svg('icon-blue-arrow-circle.svg'); ?>
										</a>
									</span>
								</div>
								<div class='c-card__top-body my-2 pl-2'>
									Blog posts on various topics pertinent to education, contemplation, and flourishing.
								</div>
								<div class='c-card__top-search'>
									<div class="input-group flex-nowrap header-search my-2">
										<input type="search" class="form-control py-2 border-right-0" placeholder="Search Blogs..." aria-label="Search" aria-describedby="addon-wrapping">
										<span class="input-group-append">
											<button class="btn border-left-0 border search-btn" type="button">
												<i class="fa fa-search text-black-50"></i>
											</button>
										</span>
									</div>
								</div>
							</div>
							<div class='curated-card__btm p-3 pt-3 mt-4'>
								<div class='c-card__btm-feat'>Featured Blog</div>
								<div class='c-card__btm-header pb-1 pl-1'>
									<span class='mr-2'>Kids Learning in Nature</span>
									<?php echo load_inline_svg('exercises-orange-arrow.svg'); ?>
								</div>
								<div class='c-card__btm-body my-2 pl-1'>
									Blog post on recent studies on K-5 children spending part of their day outdoors in nature.
								</div>
								<div class='c-card__btm-img'>
									<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'library-blogs@2x.jpg'; ?>' alt='Blogs'>
								</div>
							</div>
						</div>
					</div><!-- .col-sm-12.col-lg-4 -->
				</section><!-- section.row.equal.my-3 -->

				<section class='row equal my-3'>
					<div class='col-sm-12 col-lg-4'>
						<div class='curated-card'>
							<div class='curated-card__top'>
								<div class='c-card__top-header'>
									<?php echo load_inline_svg('icon-events-green.svg'); ?>
									<span class='c-card__top-header-title ml-2 pl-1'>
										<span>Events</span>
										<a href='#'>
											<span>Explore!</span>
											<?php echo load_inline_svg('icon-blue-arrow-circle.svg'); ?>
										</a>
									</span>
								</div>
								<div class='c-card__top-body my-2 pl-2'>
									Contemplative sessions, classes, workshops, and dialogs hosted in real time.
								</div>
								<div class='c-card__top-search'>
									<div class="input-group flex-nowrap header-search my-2">
										<input type="search" class="form-control py-2 border-right-0" placeholder="Search Events..." aria-label="Search" aria-describedby="addon-wrapping">
										<span class="input-group-append">
											<button class="btn border-left-0 border search-btn" type="button">
												<i class="fa fa-search text-black-50"></i>
											</button>
										</span>
									</div>
								</div>
							</div>
							<div class='curated-card__btm p-3 pt-3 mt-4'>
								<div class='c-card__btm-feat'>Featured Event</div>
								<div class='c-card__btm-header pb-1 pl-1'>
									<span class='mr-2'>Tuesday Morning Mysore</span>
									<?php echo load_inline_svg('exercises-orange-arrow.svg'); ?>
								</div>
								<div class='c-card__btm-body my-2 pl-1'>
									First Series of Ashtanga Yoga.
								</div>
								<div class='c-card__btm-img'>
									<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'library-events@2x.jpg'; ?>' alt='Tibetan Contemplative Traditions'>
								</div>
							</div>
						</div>
					</div><!-- .col-sm-12.col-lg-4 -->
				</section><!-- section.row.equal.my-3 -->
			</div>
			<div class='col-sm-12 col-md-4 col-lg-3 right-sidebar'>Search Bar</div>
		</div>
	</div>
</div><!-- two-three-column-wrapper -->

<?php get_footer();
