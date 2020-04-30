<?php
/**
 * Template Name: Student Flourishing
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
											<?php echo load_inline_svg('icon-college-white.svg'); ?>
										</div>
										<div class='col-sm-10'>
											<span class='title-bar__title'>Student Flourishing in Higher Education</span>
										</div>
									</div>
								</div>
								<div class='col-sm-12 col-md-7 sideTwo'>
									<span class='title-bar__text'>
										Exploring theory and practice for students, teachers, and institutions to facilitate the flourishing of students through dynamic learning, contemplation, community, and self-care.
										<a href='#'>Read more...</a>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<section class='row'>
					<div class='col-sm-12 mb-3'>
						<div class='section-title-bar my-2'>
							<div class='section-title-bar__left'>
								<?php echo load_inline_svg('icon-students-green.svg'); ?>
								<span class='ml-2'>Resources for Students</span>
							</div>
							<div class='section-title-bar__right'>
								<a href='#' class='badge badge-pill badge-green'><i class="fa fa-play"></i> Explore!</a>
							</div>
						</div>
						<div class='section-body green'>
							<div class='section-body__title p-2'>
								√ - Fashioning the grounds for excellence, resiliency, and care for students flourishing in all quarters of life.
							</div>
							<div class='section-body__content green'>
								<div class='row equal'>
									<div class='col-sm-12 col-lg-4'>
										<div class='row-card px-2 py-3'>
											<div class='row-card__title green pb-1'>
												<span class='mr-2'>Contemplative Practices</span>
												<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
											</div>
											<div class='row-card__content py-2'>
												<div class='row-card__content-text'>
													Enabling intentional practices aligned with values towards resiliency, insight, and care.
												</div>
											</div>
											<div class='row-card__image'>
												<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'student-contemplative-practices@2x.jpg'; ?>' alt='Contemplative Practices'>
											</div>
										</div>
									</div>
									<div class='col-sm-12 col-lg-4'>
										<div class='row-card px-2 py-3'>
											<div class='row-card__title green pb-1'>
												<span class='mr-2'>Exercises for Flourishing</span>
												<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
											</div>
											<div class='row-card__content py-2'>
												<div class='row-card__content-text'>
													Exercises to build community, envision and enact values, and engage in deep reflection by self and with others.
												</div>
											</div>
											<div class='row-card__image'>
												<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'student-exercises-flourishing@2x.jpg'; ?>' alt='Exercises for Flourishing'>
											</div>
										</div>
									</div>
									<div class='col-sm-12 col-lg-4'>
										<div class='row-card px-2 py-3'>
											<div class='row-card__title green pb-1'>
												<span class='mr-2'>Taking Care</span>
												<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
											</div>
											<div class='row-card__content py-2'>
												<div class='row-card__content-text'>
													Caring for self in body, mind, and relationships towards self-flourishing in service of caring for others.
												</div>
											</div>
											<div class='row-card__image'>
												<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'student-taking-care@2x.jpg'; ?>' alt='Taking Care'>
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
								<?php echo load_inline_svg('icon-teacher-orange.svg'); ?>
								<span class='ml-2'>Resources for Instructors</span>
							</div>
							<div class='section-title-bar__right'>
								<a href='#' class='badge badge-pill badge-orange'><i class="fa fa-play"></i> Explore!</a>
							</div>
						</div>
						<div class='section-body orange'>
							<div class='section-body__title p-2'>
								√ - Supporting teachers own self-care as well as exploration of pedagogies of flourishing
							</div>
							<div class='section-body__content orange'>
								<div class='row equal'>
									<div class='col-sm-12 col-lg-4'>
										<div class='row-card px-2 py-3'>
											<div class='row-card__title orange pb-1'>
												<span class='mr-2'>Classrooms for Flourishing</span>
												<?php echo load_inline_svg('exercises-orange-arrow.svg'); ?>
											</div>
											<div class='row-card__content py-2'>
												<div class='row-card__content-text'>
													Supporting diverse pedagogies and curricular designs centered on the enabling of student  flourishing in the classroom and life.
												</div>
											</div>
											<div class='row-card__image'>
												<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'student-classrooms-flourishing@2x.jpg'; ?>' alt='Classrooms for Flourishing'>
											</div>
										</div>
									</div>
									<div class='col-sm-12 col-lg-4'>
										<div class='row-card px-2 py-3'>
											<div class='row-card__title orange pb-1'>
												<span class='mr-2'>Advising and Mentoring</span>
												<?php echo load_inline_svg('exercises-orange-arrow.svg'); ?>
											</div>
											<div class='row-card__content py-2'>
												<div class='row-card__content-text'>
													Fostering integrated advising and mentorship of students as whole individuals for flourishing of self and others.
												</div>
											</div>
											<div class='row-card__image'>
												<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'student-advising-mentoring@2x.jpg'; ?>' alt='Advising and Mentoring'>
											</div>
										</div>
									</div>
									<div class='col-sm-12 col-lg-4'>
										<div class='row-card px-2 py-3'>
											<div class='row-card__title orange pb-1'>
												<span class='mr-2'>Taking Care</span>
												<?php echo load_inline_svg('exercises-orange-arrow.svg'); ?>
											</div>
											<div class='row-card__content py-2'>
												<div class='row-card__content-text'>
													Caring for self in body, mind, and relationships towards self-flourishing in service of caring for others.
												</div>
											</div>
											<div class='row-card__image'>
												<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'student-taking-care-orange@2x.jpg'; ?>' alt='Taking Care'>
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
								<?php echo load_inline_svg('icon-institution-green.svg'); ?>
								<span class='ml-2'>Resources for Institutions</span>
							</div>
							<div class='section-title-bar__right'>
								<a href='#' class='badge badge-pill badge-green'><i class="fa fa-play"></i> Explore!</a>
							</div>
						</div>
						<div class='section-body green'>
							<div class='section-body__title p-2'>
								√ - Offering support and inspiration for systemic transformation of colleges and universities to better support student flourishing.
							</div>
							<div class='section-body__content green'>
								<div class='row equal'>
									<div class='col-sm-12 col-lg-4'>
										<div class='row-card px-2 py-3'>
											<div class='row-card__title green pb-1'>
												<span class='mr-2'>Flourishing as an Institutional Priority</span>
												<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
											</div>
											<div class='row-card__content py-2'>
												<div class='row-card__content-text'>
													Articulating and implementing flourishing as the central criteria of all institutional processes.
												</div>
											</div>
											<div class='row-card__image'>
												<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'student-flourishing-institutional@2x.jpg'; ?>' alt='Flourishing as an Institutional Priority'>
											</div>
										</div>
									</div>
									<div class='col-sm-12 col-lg-4'>
										<div class='row-card px-2 py-3'>
											<div class='row-card__title green pb-1'>
												<span class='mr-2'>Direct Student Engagement</span>
												<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
											</div>
											<div class='row-card__content py-2'>
												<div class='row-card__content-text'>
													Facilitating flourishing of students as whole individuals in curricular, co-curricular, and extra-curricular activities.
												</div>
											</div>
											<div class='row-card__image'>
												<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'student-direct-student-engagement@2x.jpg'; ?>' alt='Direct Student Engagement'>
											</div>
										</div>
									</div>
									<div class='col-sm-12 col-lg-4'>
										<div class='row-card px-2 py-3'>
											<div class='row-card__title green pb-1'>
												<span class='mr-2'>Transformative Technologies</span>
												<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
											</div>
											<div class='row-card__content py-2'>
												<div class='row-card__content-text'>
													Proactively reimagining the design and utilization of digital technologies and data to support connection as well as personal and collective well-being
												</div>
											</div>
											<div class='row-card__image'>
												<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'student-transformative-technologies@2x.jpg'; ?>' alt='Transformative Technologies'>
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
			<div class='col-sm-12 col-lg-4 right-sidebar'>Search Bar</div>
		</div>
	</div>
</div><!-- two-three-column-wrapper -->

<?php get_footer();
