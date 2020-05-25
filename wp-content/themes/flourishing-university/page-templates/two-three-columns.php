<?php
/**
 * Template Name: Two Three Columns
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
			<div class='col-sm-12 col-md-8 col-lg-9 content pb-5'>
				<div class='row'>
					<div class='col-sm-12'>
						<div class='title-bar my-2'>
							<div class='row align-items-center'>
								<div class='col-sm-12 col-md-5 sideOne'>
									<div class='row align-items-center'>
										<div class='col-sm-2'>
											<?php echo load_inline_svg('icon-white-practices.svg'); ?>
										</div>
										<div class='col-sm-10'>
											<span class='title-bar__title'>Contemplative Practices and Exercises</span>
										</div>
									</div>
								</div>
								<div class='col-sm-12 col-md-7 sideTwo'>
									<span class='title-bar__text'>
										Making available a repository of contemplative practices and reflective exercises for personal use,  as well as adaptation and contextualization for a broad variety of settings.
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
							<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'sun-salutation@2x.jpg'; ?>' alt='Practices'>
							<div class='section__item green-bg'>
								<div class='white-bg'>
									<div class='blade-top'>
										<div class='blade-title'>
											<?php echo load_inline_svg('icon-practices-green-treepose.svg'); ?>
											<span class='blade-title__text mr-2'>Practices</span>
											<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
										</div>
										<div class='blade-top__body'>
											Formal secular contemplative practices involve activities intended to be done on a regular basis with one’s dedicated attention during a set aside time; informal practices are also done in a repeated fashion, but are integrated along with other ordinary activity in one’s life.
										</div>
										<div class='blade-top__search my-2'>
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
										<div class='blade-section__title'>
											<div class='blade-section__title-1'>Collections of Practices</div>
											<div class='blade-section__title-2'>Explore collections of thematically or institutionally affiliated practices.</div>
										</div>
										<div class='blade-section__body'>
											<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'student-flourishing-k12@2x.jpg'; ?>' alt='Student flourishing in K-12 schools'>
											<div class='blade-section__body-content'>
												<div class='blade-section__body-content-title'>
													<span><?php echo load_inline_svg('icon-practices-green-treepose.svg'); ?></span>
													<span class='title-span'>
														<span class='blade-title__text mr-2'>Student Flourishing in K-12 Schools</span>
														<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
													</span>
												</div>
												<div class='blade-section__body-content-text'>
													Practices designed for K-12 school classrooms.
												</div>
												<div class='blade-section__body-content-count'>Total - 258</div>
											</div>
										</div>
									</div> <!-- .blade-section -->
									<div class='blade-section green'>
										<div class='blade-section__body'>
											<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'student-flourishing-higher-ed@2x.jpg'; ?>' alt='Student flourishing in higher education'>
											<div class='blade-section__body-content'>
												<div class='blade-section__body-content-title'>
													<span><?php echo load_inline_svg('icon-practices-green-treepose.svg'); ?></span>
													<span class='title-span'>
														<span class='blade-title__text mr-2'>Student Flourishing in Higher Education</span>
														<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
													</span>
												</div>
												<div class='blade-section__body-content-text'>
													Practices customized for higher education contexts.
												</div>
												<div class='blade-section__body-content-count'>Total - 1,208</div>
											</div>
										</div>
									</div> <!-- .blade-section -->
									<div class='blade-section green'>
										<div class='blade-section__body'>
											<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'adult-contemplative-exploration@2x.jpg'; ?>' alt='Adult Contemplative Exploration'>
											<div class='blade-section__body-content'>
												<div class='blade-section__body-content-title'>
													<span><?php echo load_inline_svg('icon-practices-green-treepose.svg'); ?></span>
													<span class='title-span'>
														<span class='blade-title__text mr-2'>Adult Contemplative Exploration</span>
														<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
													</span>
												</div>
												<div class='blade-section__body-content-text'>
													Practices well suited for adult personal development & restoration.
												</div>
												<div class='blade-section__body-content-count'>Total - 1,502</div>
											</div>
											<div class='blade-section__body-footer'>
												<a href='#'><i class='fa fa-play mr-2'></i> Collections of Practices</a>
											</div>
										</div>
									</div> <!-- .blade-section -->
								</div>
							</div>
						</div>

						<div class='featured-section'>
										<div class='featured-top'>
											<div class='featured-top__item pl-4'>
												<?php echo load_inline_svg('icon-practices-white-treepose.svg'); ?>
												<span class="featured-top__item-title">Featured Practices</span>
											</div>
										</div>
										<div class='featured-bottom green-bg'>
											<div class='white-bg'>
												<div class='featured-body'>
													<div class='featured-body__item mb-3'>
														<div class='featured-body__item-img'>
															<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'sound-silence-practice-square@3x.jpg'; ?>' alt='Sound and Silence Practice'>
														</div>
														<div class='featured-body__item-text'>
															<div class='featured-body__item-text-title'>
																<span class='mr-2'>Sound and Silence Practice</span>
																<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
															</div>
															<div class='featured-body__item-text-content mt-3'>
																A practice to cultivate deeper awareness and attentiveness to a single sense, such as sound.
															</div>
														</div>
													</div><!-- .featured-body__item -->
													<div class='featured-body__item mb-3'>
														<div class='featured-body__item-img'>
															<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'progressive-muscle-relaxation@3x.jpg'; ?>' alt='Progressive Muscle Relaxation'>
														</div>
														<div class='featured-body__item-text'>
															<div class='featured-body__item-text-title'>
																<span class='mr-2'>Progressive Muscle Relaxation</span>
																<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
															</div>
															<div class='featured-body__item-text-content mt-3'>
																Progressive muscle relaxation is a practice of tensing and relaxing muscles one group at a time as a way of relaxing the mind and relieving stress.
															</div>
														</div>
													</div><!-- .featured-body__item -->
													<div class='featured-body__item mb3'>
														<div class='featured-body__item-img'>
															<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'open-awareness-practice@3x.jpg'; ?>' alt='Open Awareness Practice'>
														</div>
														<div class='featured-body__item-text'>
															<div class='featured-body__item-text-title'>
																<span class='mr-2'>Open Awareness Practice</span>
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
							<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'exercise-by-beach@2x.jpg'; ?>' alt='Exercises'>
							<div class='section__item orange-bg'>
								<div class='white-bg'>
									<div class='blade-top'>
										<div class='blade-title'>
											<?php echo load_inline_svg('icon-exercise-orange2.svg'); ?>
											<span class='blade-title__text mr-2'>Exercises</span>
											<?php echo load_inline_svg('exercises-orange-arrow.svg'); ?>
										</div>
										<div class='blade-top__body'>
											Exercises are informal one-time activities on a given theme or topic that support reflection, analysis, inquiry, and exchange. They may be ways to make classes more experiential and engaged, or be solitary reflective exercises.
										</div>
										<div class='blade-top__search my-2'>
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
										<div class='blade-section__title'>
											<div class='blade-section__title-1'>Collections of Exercises</div>
											<div class='blade-section__title-2'>Explore collections of thematically or institutionally affiliated exercises.</div>
										</div>
										<div class='blade-section__body'>
											<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'student-flourishing-k12-orange@2x.jpg'; ?>' alt='Student flourishing in K-12 schools'>
											<div class='blade-section__body-content'>
												<div class='blade-section__body-content-title'>
													<span><?php echo load_inline_svg('icon-exercise-orange2.svg'); ?></span>
													<span class='title-span'>
														<span class='blade-title__text mr-2'>Student Flourishing in K-12 Schools</span>
														<?php echo load_inline_svg('exercises-orange-arrow.svg'); ?>
													</span>
												</div>
												<div class='blade-section__body-content-text'>
													Exercises designed for K-12 school classrooms.
												</div>
												<div class='blade-section__body-content-count'>Total - 925</div>
											</div>
										</div>
									</div> <!-- .blade-section -->
									<div class='blade-section orange'>
										<div class='blade-section__body'>
											<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'student-flourishing-higher-ed-orange@2x.jpg'; ?>' alt='Student flourishing in higher education'>
											<div class='blade-section__body-content'>
												<div class='blade-section__body-content-title'>
													<span><?php echo load_inline_svg('icon-exercise-orange2.svg'); ?></span>
													<span class='title-span'>
														<span class='blade-title__text mr-2'>Student Flourishing in Higher Education</span>
														<?php echo load_inline_svg('exercises-orange-arrow.svg'); ?>
													</span>
												</div>
												<div class='blade-section__body-content-text'>
													Exercises customized for higher education contexts.
												</div>
												<div class='blade-section__body-content-count'>Total - 1,801</div>
											</div>
										</div>
									</div> <!-- .blade-section -->
									<div class='blade-section orange'>
										<div class='blade-section__body'>
											<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'adult-contemplative-exploration-orange@2x.jpg'; ?>' alt='Adult Contemplative Exploration'>
											<div class='blade-section__body-content'>
												<div class='blade-section__body-content-title'>
													<span><?php echo load_inline_svg('icon-exercise-orange2.svg'); ?></span>
													<span class='title-span'>
														<span class='blade-title__text mr-2'>Adult Contemplative Exploration</span>
														<?php echo load_inline_svg('exercises-orange-arrow.svg'); ?>
													</span>
												</div>
												<div class='blade-section__body-content-text'>
													Exercises well suited for adult personal development & restoration.
												</div>
												<div class='blade-section__body-content-count'>Total - 158</div>
											</div>
											<div class='blade-section__body-footer'>
												<a href='#'><i class='fa fa-play mr-2'></i> All Collections of Exercises</a>
											</div>
										</div>
									</div> <!-- .blade-section -->

									

								</div>
							</div>
						</div>

						<div class='featured-section'>
							<div class='featured-top'>
								<div class='featured-top__item pl-4'>
									<?php echo load_inline_svg('icon-exercise-white2.svg'); ?>
									<span class="featured-top__item-title">Featured Exercises</span>
								</div>
							</div>
							<div class='featured-bottom orange-bg'>
								<div class='white-bg'>
									<div class='featured-body'>
										<div class='featured-body__item mb-3'>
											<div class='featured-body__item-img'>
												<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'social-connection-exercise@3x.jpg'; ?>' alt='A Social Connection Exercise'>
											</div>
											<div class='featured-body__item-text'>
												<div class='featured-body__item-text-title'>
													<span class='mr-2'>A Social Connection Exercise</span>
													<?php echo load_inline_svg('exercises-orange-arrow.svg'); ?>
												</div>
												<div class='featured-body__item-text-content mt-3'>
													An exercise to focus on making one new social connection per day.
												</div>
											</div>
										</div><!-- .featured-body__item -->
										<div class='featured-body__item mb-3'>
											<div class='featured-body__item-img'>
												<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'descriptive-writing-exercise@3x.jpg'; ?>' alt='Descriptive Writing Exercise'>
											</div>
											<div class='featured-body__item-text'>
												<div class='featured-body__item-text-title'>
													<span class='mr-2'>Descriptive Writing Exercise</span>
													<?php echo load_inline_svg('exercises-orange-arrow.svg'); ?>
												</div>
												<div class='featured-body__item-text-content mt-3'>
													Writing descriptively about a familiar experience or scene with as much cinematic detail as possible and then, at a later date, rereading the descriptive writing from an outside perspective, looking for subtexts in the language used.
												</div>
											</div>
										</div><!-- .featured-body__item -->
										<div class='featured-body__item mb3'>
											<div class='featured-body__item-img'>
												<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'contemplative-inquiry@3x.jpg'; ?>' alt='Contemplative Inquiry: Looking as Knowing'>
											</div>
											<div class='featured-body__item-text'>
												<div class='featured-body__item-text-title'>
													<span class='mr-2'>Contemplative Inquiry: Looking as Knowing</span>
													<?php echo load_inline_svg('exercises-orange-arrow.svg'); ?>
												</div>
												<div class='featured-body__item-text-content mt-3'>
													Participants in this exercise observe an object, image, or person three different ways and, each time, write what they “know” about the object.
												</div>
											</div>
										</div><!-- .featured-body__item -->
									</div>
								</div>
							</div>
						</div>

					</div><!-- .col-sm-12.col-md-6 -->
				</div> <!-- .row -->

			</div>
			<div class='col-sm-12 col-md-4 col-lg-3 right-sidebar'>Search Bar</div>
		</div>
	</div>
</div><!-- two-three-column-wrapper -->

<?php get_footer();
