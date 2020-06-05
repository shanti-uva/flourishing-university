<?php
/**
 * Template Name: Two Three Rows
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
					<div class='col-sm-12 mb-3'>
						<div class='title-bar my-2'>
							<div class="title-bar-deco">
							<div class='row align-items-center'>
								<div class='col-sm-12 col-lg-6 sideOne'>
									<div class='row align-items-center'>
										<div class='col-sm-2'>
											<?php echo load_inline_svg('icon-community-white.svg'); ?>
										</div>
										<div class='col-sm-10'>
											<span class='title-bar__title'>Community for Contemplation and Flourishing</span>
										</div>
									</div>
								</div>
								<div class='col-sm-12 col-lg-6 sideTwo'>
									<span class='title-bar__text'>
										Offering virtual contemplative sessions in real time, hosting special events with experts in contemplation and flourishing, publishing blogs, and documenting community networks.
										<a href='#'>Read more...</a>
									</span>
								</div>
							</div>
							</div>
						</div>
					</div>
				</div>
				<section class='row'>
					<div class='col-sm-12 mb-3'>
						<div class='section-title-bar my-2'>
							<div class='section-title-bar__left'>
								<?php echo load_inline_svg('icon-community-top.svg'); ?>
								<span class='ml-2'>Contemplative Sessions</span>
							</div>
							<div class='section-title-bar__right'>
								<a href='#' class='badge badge-pill badge-green'><i class="fa fa-play"></i> See all Past Events</a>
								<a href='#' class='badge badge-pill badge-green'><i class="fa fa-play"></i> See all Upcoming Events</a>
							</div>
						</div>
						<div class='section-body green'>
							<div class='section-body__title p-2'>Offering contemplative instruction and community online.</div>
							<div class='section-body__content green'>
								<div class='row equal'>
									<div class='col-sm-12 col-lg-4'>
										<div class='row-card px-2 py-3'>
											<div class='row-card__title green pb-1'>
												<span class='mr-2'>Monday Mindfulness Morning</span>
												<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
											</div>
											<div class='row-card__content py-2'>
												<div class='row-card__content-text'>
													Various mindfulness meditations done on a rotating basis.
												</div>
												<div class='row-card__content-date-time green mt-3 pl-2'>
													<div class='card-misc-list'>
														<span class='upper'>DATE/TIME</span> -
														<span class='lower'>Every Monday 8am</span>
													</div>
													<div class='card-misc-list'>
														<span class='upper'>GUIDE</span> -
														<span class='lower'>Leslie Hubbard of the University of Virginia</span>
													</div>
												</div>
											</div>
											<div class='row-card__image'>
												<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'monday-mindfulness-morning@2x.jpg'; ?>' alt='Monday Morning Mindfulness'>
											</div>
										</div>
									</div>
									<div class='col-sm-12 col-lg-4'>
										<div class='row-card px-2 py-3'>
											<div class='row-card__title green pb-1'>
												<span class='mr-2'>Tuesday Morning Mysore</span>
												<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
											</div>
											<div class='row-card__content py-2'>
												<div class='row-card__content-text'>
													First Series of Ashtanga Yoga.
												</div>
												<div class='row-card__content-date-time green mt-3 pl-2'>
													<div class='card-misc-list'>
														<span class='upper'>DATE/TIME</span> -
														<span class='lower'>Every Tuesday 6am</span>
													</div>
													<div class='card-misc-list'>
														<span class='upper'>GUIDE</span> -
														<span class='lower'>John Bultman</span>
													</div>
												</div>
											</div>
											<div class='row-card__image'>
												<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'tuesday-morning-mysore@2x.jpg'; ?>' alt='Tuesday Morning Mysore'>
											</div>
										</div>
									</div>
									<div class='col-sm-12 col-lg-4'>
										<div class='row-card px-2 py-3'>
											<div class='row-card__title green pb-1'>
												<span class='mr-2'>Contemplative Explorations</span>
												<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
											</div>
											<div class='row-card__content py-2'>
												<div class='row-card__content-text'>
													Introduction to a variety of basic contemplative practices with the chance to ask questions.
												</div>
												<div class='row-card__content-date-time green mt-3 pl-2'>
													<div class='card-misc-list'>
														<span class='upper'>DATE/TIME</span> -
														<span class='lower'>Saturday, August 8, 2020, 10am-12 noon, 2-4pm</span>
													</div>
													<div class='card-misc-list'>
														<span class='upper'>GUIDE</span> -
														<span class='lower'>Various Teachers</span>
													</div>
												</div>
											</div>
											<div class='row-card__image'>
												<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'contemplative-explorations@2x.jpg'; ?>' alt='Contemplative Explorations'>
											</div>
										</div>
									</div>
								</div><!-- .row.equal -->
							</div><!-- .section-body__content -->
							<span class='white-line'></span>
						</div>
					</div><!-- .col-sm-12 -->
				</section><!-- section.row -->
				<section class='row'>
					<div class='col-sm-12'>
						<div class='section-title-bar my-2'>
							<div class='section-title-bar__left'>
								<?php echo load_inline_svg('icon-community-middle-orange.svg'); ?>
								<span class='ml-2'>Conversations with Experts</span>
							</div>
							<div class='section-title-bar__right'>
								<a href='#' class='badge badge-pill badge-orange'><i class="fa fa-play"></i> See all Past Events</a>
								<a href='#' class='badge badge-pill badge-orange'><i class="fa fa-play"></i> See all Upcoming Events</a>
							</div>
						</div>
						<div class='section-body orange'>
							<div class='section-body__title p-2'>
								Opportunities to interact with leading scholars, teachers, and practitioners of contemplation, and/or flourishing and education.
							</div>
							<div class='section-body__content orange'>
								<div class='row equal'>
									<div class='col-sm-12 col-lg-4'>
										<div class='row-card px-2 py-3'>
											<div class='row-card__title orange pb-1'>
												<span class='mr-2'>Questions on the Great Perfection with David Germano</span>
												<?php echo load_inline_svg('exercises-orange-arrow.svg'); ?>
											</div>
											<div class='row-card__content py-2'>
												<div class='row-card__content-text'>
												Responses to questions on the Great Perfection (Dzokchen) contemplative tradition.
												</div>
												<div class='row-card__content-date-time orange mt-3 pl-2'>
													<div class='card-misc-list'>
														<span class='upper'>TIME</span> -
														<span class='lower'>Sunday July 12, 2020, 9am EST</span>
													</div>
													<div class='card-misc-list'>
														<span class='upper'>PRESENTER</span> -
														<span class='lower'>David Germano from the University of Virginia</span>
													</div>
												</div>
											</div>
											<div class='row-card__image'>
												<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'questions-great-perfection@2x.jpg'; ?>' alt='Questions on the great perfection'>
											</div>
										</div>
									</div>
									<div class='col-sm-12 col-lg-4'>
										<div class='row-card px-2 py-3'>
											<div class='row-card__title orange pb-1'>
												<span class='mr-2'>Contemplative Pedagogy Seminar with Karolyn Kinane</span>
												<?php echo load_inline_svg('exercises-orange-arrow.svg'); ?>
											</div>
											<div class='row-card__content py-2'>
												<div class='row-card__content-text'>
													A small scale discussion on contemplative pedagogy with a leading expert.
												</div>
												<div class='row-card__content-date-time orange mt-3 pl-2'>
													<div class='card-misc-list'>
														<span class='upper'>TIME</span> -
														<span class='lower'>Monday July 27, 2020, 3 pm EST</span>
													</div>
													<div class='card-misc-list'>
														<span class='upper'>PRESENTER</span> -
														<span class='lower'>Karolyn Kinane of the University of Virginia</span>
													</div>
												</div>
											</div>
											<div class='row-card__image'>
												<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'contemplative-pedagogy-seminar@2x.jpg'; ?>' alt='Contemplative Pedagogy Seminar'>
											</div>
										</div>
									</div>
									<div class='col-sm-12 col-lg-4'>
										<div class='row-card px-2 py-3'>
											<div class='row-card__title orange pb-1'>
												<span class='mr-2'>Discussing Ashtanga Yoga with John Bultman</span>
												<?php echo load_inline_svg('exercises-orange-arrow.svg'); ?>
											</div>
											<div class='row-card__content py-2'>
												<div class='row-card__content-text'>
													A presentation of advanced features of Ashtanga yoga with the chance to ask questions.
												</div>
												<div class='row-card__content-date-time orange mt-3 pl-2'>
													<div class='card-misc-list'>
														<span class='upper'>TIME</span> -
														<span class='lower'>Wednesday August 12, 2020, 6 pm EST</span>
													</div>
													<div class='card-misc-list'>
														<span class='upper'>PRESENTER</span> -
														<span class='lower'>John Bultman of the University of Virginia</span>
													</div>
												</div>
											</div>
											<div class='row-card__image'>
												<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'discussing-ashtanga-yoga@2x.jpg'; ?>' alt='Discussing Ashtanga Yoga'>
											</div>
										</div>
									</div>
								</div><!-- .row.equal -->
							</div><!-- .section-body__content -->
							<span class='white-line'></span>
						</div>
					</div><!-- .col-sm-12 -->
				</section><!-- section.row -->
				<section class='row'>
					<div class='col-sm-12 mb-3'>
						<div class='section-title-bar my-2'>
							<div class='section-title-bar__left'>
								<?php echo load_inline_svg('icon-blogs-green.svg'); ?>
								<span class='ml-2'>Blogs on Contemplation and Flourishing</span>
							</div>
							<div class='section-title-bar__right'>
							</div>
						</div>
						<div class='section-body green'>
							<div class='section-body__title p-2'>Periodic reflections on specific subjects by various scholars, teachers, and practitioners.</div>
							<div class='section-body__content green'>
								<div class='row equal'>
									<div class='col-sm-12 col-lg-6'>
										<div class='row-card px-2 py-3'>
											<div class='row-card__title green pb-1'>
												<span class='mr-2'>Reflections on the Great Perfection (Dzokchen)</span>
												<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
											</div>
											<div class='row-card__content py-2'>
												<div class='row-card__content-text'>
													Meandering thoughts on the Tibetan contemplative tradition known as the Great Perfection.
												</div>
												<div class='row-card__content-date-time green mt-3 pl-2'>
													<div class='card-misc-list'>
														<span class='upper'>AUTHOR</span>:
														<span class='lower'>David Germano of the University of Virginia</span>
													</div>
												</div>
											</div>
											<div class='row-card__image'>
												<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'reflections-on-great-perfection@2x.jpg'; ?>' alt='Reflections on the great perfection'>
											</div>
										</div>
									</div>
									<div class='col-sm-12 col-lg-6'>
										<div class='row-card px-2 py-3'>
											<div class='row-card__title green pb-1'>
												<span class='mr-2'>Thoughts on Human Flourishing and Education</span>
												<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
											</div>
											<div class='row-card__content py-2'>
												<div class='row-card__content-text'>
													Thoughts on the future of education prioritizing flourishing.
												</div>
												<div class='row-card__content-date-time green mt-3 pl-2'>
													<div class='card-misc-list'>
														<span class='upper'>AUTHOR</span>:
														<span class='lower'>Aneel Chima of Stanford University</span>
													</div>
												</div>
											</div>
											<div class='row-card__image'>
												<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'thoughts-on-human-flourishing@2x.jpg'; ?>' alt='Thoughts on human flourishing and education'>
											</div>
										</div>
									</div>
								</div><!-- .row.equal -->
							</div><!-- .section-body__content -->
							<span class='white-line'></span>
						</div>
					</div><!-- .col-sm-12 -->
				</section><!-- section.row -->
				<section class='row'>
					<div class='col-sm-12'>
						<div class='section-title-bar my-2'>
							<div class='section-title-bar__left'>
								<?php echo load_inline_svg('icon-community-networks-orange.svg'); ?>
								<span class='ml-2'>Community Networks</span>
							</div>
							<div class='section-title-bar__right'>
							</div>
						</div>
						<div class='section-body orange'>
							<div class='section-body__title p-2'>
								Building communities small and large to facilitate transformative innovations in knowledge pertinent to student flourishing and contemplation.
							</div>
							<div class='section-body__content orange'>
								<div class='row'>
									<div class='col-sm-12 col-lg-6'>
										<div class='row-card px-2 py-3'>
											<div class='row-card__title orange pb-1'>
												<span class='mr-2'>The Flourishing Academic Network</span>
												<?php echo load_inline_svg('exercises-orange-arrow.svg'); ?>
											</div>
											<div class='row-card__content py-2'>
												<div class='row-card__content-text'>
													Networking major universities to collaborate on building resources and momentum to re-envision and refashion higher education to focus centrally on the flourishing of students as whole individuals embedded in diverse communities.
												</div>
											</div>
											<div class='row-card__image'>
												<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'flourishing-academic-network@2x.jpg'; ?>' alt='The flourishing academic network'>
											</div>
										</div>
									</div>
									<div class='col-sm-12 col-lg-6 flex-column'>
										<div class='row-card px-2 py-3'>
											<div class='row-card__title orange pb-1'>
												<span class='mr-2'>Wellbeing and Social Innovation Educational Network</span>
												<?php echo load_inline_svg('exercises-orange-arrow.svg'); ?>
											</div>
											<div class='row-card__content py-2'>
												<div class='row-card__content-text'>
													An evolving network of institutions of higher education around the world focused on how to integrate frameworks and practices of wellbeing into programs focused on social innovation.
												</div>
											</div>
											<div class='row-card__image'>
												<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'wellbeing-social-innovation@2x.jpg'; ?>' alt='Wellbeing and Social Innovation Educational Network'>
											</div>
										</div>
										<div class='row-card px-2 py-3'>
											<div class='row-card__title orange pb-1'>
												<span class='mr-2'>The Great Perfection Initiative</span>
												<?php echo load_inline_svg('exercises-orange-arrow.svg'); ?>
											</div>
											<div class='row-card__content py-2'>
												<div class='row-card__content-text'>
													A community of scholars, teachers, and practitioners collaboratively building new resources to support understanding the legacy of the Great Perfection (Dzokchen) contemplative tradition, as well as towards exploring a creative renewal in the future.
												</div>
											</div>
											<div class='row-card__image'>
												<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'great-perfection-initiative@2x.jpg'; ?>' alt='The Great Perfection Initiative'>
											</div>
										</div>
									</div>
								</div><!-- .row.equal -->
							</div><!-- .section-body__content -->
							<span class='white-line'></span>
						</div>
					</div><!-- .col-sm-12 -->
				</section><!-- section.row -->
			</div>
			<div class='col-sm-12 col-md-4 col-lg-3 right-sidebar'>Search Bar</div>
		</div>
	</div>
</div><!-- two-three-column-wrapper -->

<?php get_footer();
