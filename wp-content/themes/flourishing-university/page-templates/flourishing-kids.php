<?php
/**
 * Template Name: Flourishing Kids
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
			<div class='col-sm-12 col-md-9 content pb-5'>
				<div class='row'>
					<div class='col-sm-12'>
						<div class='title-bar my-2 mb-3'>
							<div class="title-bar-deco">
							<div class='row align-items-center'>
								<div class='col-sm-12 col-md-5 sideOne'>
									<div class='row align-items-center'>
										<div class='col-sm-2'>
											<?php echo load_inline_svg('icon-kids-white.svg'); ?>
										</div>
										<div class='col-sm-10'>
											<span class='title-bar__title'>Flourishing Kids in K-12 Schools</span>
										</div>
									</div>
								</div>
								<div class='col-sm-12 col-md-7 sideTwo'>
									<span class='title-bar__text'>
										Providing diverse curated resources for educators, students, administrators, counselors, and parents involved in K-12 with a focus on the holistic flourishing of students.
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
						<div class='section-title-bar'>
							<div class='section-title-bar__left'>
								<?php echo load_inline_svg('icon-community-top.svg'); ?>
								<span class='ml-2'>Mindfulness</span>
								<a href='#' class='badge badge-pill badge-blue'><i class="fa fa-play"></i> Explore!</a>
							</div>
							<div class='section-title-bar__right'>
								
							</div>
						</div>
						<div class='section-body green'>
							<div class='section-body__title p-2'>
								√ - Fostering and researching mindfulness among students to support flourishing children.
							</div>
							<div class='section-body__content green'>
								<div class='row equal'>
									<div class='col-sm-12 col-lg-4'>
										<div class='row-card px-0 py-3'>
											<div class='row-card__title green pb-1'>
												<span class='mr-2'>Mindfulness-Based Programs for PreK-12 Stu…</span>
												<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
											</div>
											<div class='row-card__content py-2'>
												<div class='row-card__content-text'>
													A research brief on the use of mindfulness in school settings and an overview of the evidence-based programs available for PreK-12 students.
												</div>
											</div>
											<div class='row-card__image'>
												<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'kids-mindfulness-based-programs@2x.jpg'; ?>' alt='Mindfulness-Based Programs for PreK-12 Students'>
											</div>
										</div>
									</div>
									<div class='col-sm-12 col-lg-4'>
										<div class='row-card px-0 py-3'>
											<div class='row-card__title green pb-1'>
												<span class='mr-2'>Teaching Mindfulness in PreK-12 Education</span>
												<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
											</div>
											<div class='row-card__content py-2'>
												<div class='row-card__content-text'>
													A curated guide to help teachers integrate mindfulness practices into PreK-12 educational settings.
												</div>
											</div>
											<div class='row-card__image'>
												<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'kids-teaching-mindfulness@2x.jpg'; ?>' alt='Teaching Mindfulness in PreK-12 Education'>
											</div>
										</div>
									</div>
									<div class='col-sm-12 col-lg-4'>
										<div class='row-card px-0 py-3'>
											<div class='row-card__title green pb-1'>
												<span class='mr-2'>Body Scan</span>
												<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
											</div>
											<div class='row-card__content py-2'>
												<div class='row-card__content-text'>
													A practice in which students learn how to cultivate a deep sense of relaxation by systematically placing their attention on their bodily sensations.
												</div>
											</div>
											<div class='row-card__image'>
												<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'kids-body-scan@2x.jpg'; ?>' alt='Body Scan'>
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
						<div class='section-title-bar'>
							<div class='section-title-bar__left'>
								<?php echo load_inline_svg('icon-socialemotional-wellbeing-orange.svg'); ?>
								<span class='ml-2'>Social and Emotional Learning</span>
								<a href='#' class='badge badge-pill badge-blue'><i class="fa fa-play"></i> Explore!</a>
							</div>
							<div class='section-title-bar__right'>
								
							</div>
						</div>
						<div class='section-body orange'>
							<div class='section-body__title p-2'>
								√ - Cultivating students’ social and emotional well-being in PreK-12 classrooms.
							</div>
							<div class='section-body__content orange'>
								<div class='row equal'>
									<div class='col-sm-12 col-lg-4'>
										<div class='row-card px-0 py-3'>
											<div class='row-card__title orange pb-1'>
												<span class='mr-2'>Social and Emotional Learning in PreK-12</span>
												<?php echo load_inline_svg('exercises-orange-arrow.svg'); ?>
											</div>
											<div class='row-card__content py-2'>
												<div class='row-card__content-text'>
													A curated guide to the integration of social and emotional learning into PreK-12 educational settings.
												</div>
											</div>
											<div class='row-card__image'>
												<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'kids-social-emotional-learning@2x.jpg'; ?>' alt='Social and Emotional Learning in PreK-12'>
											</div>
										</div>
									</div>
									<div class='col-sm-12 col-lg-4'>
										<div class='row-card px-0 py-3'>
											<div class='row-card__title orange pb-1'>
												<span class='mr-2'>Letting Go Breath</span>
												<?php echo load_inline_svg('exercises-orange-arrow.svg'); ?>
											</div>
											<div class='row-card__content py-2'>
												<div class='row-card__content-text'>
													A practice involving students inhaling for a count of three and then exhaling for a count of five while imagining they are releasing tension with each breath.
												</div>
											</div>
											<div class='row-card__image'>
												<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'kids-letting-go-breath@2x.jpg'; ?>' alt='Letting Go Breath'>
											</div>
										</div>
									</div>
									<div class='col-sm-12 col-lg-4'>
										<div class='row-card px-0 py-3'>
											<div class='row-card__title orange pb-1'>
												<span class='mr-2'>Kind Mind</span>
												<?php echo load_inline_svg('exercises-orange-arrow.svg'); ?>
											</div>
											<div class='row-card__content py-2'>
												<div class='row-card__content-text'>
													A practice in which students connect their breathing with their movements as they evoke self-compassionate thoughts.
												</div>
											</div>
											<div class='row-card__image'>
												<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'kids-kind-mind@2x.jpg'; ?>' alt='Kind Mind'>
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
						<div class='section-title-bar'>
							<div class='section-title-bar__left'>
								<?php echo load_inline_svg('icon-k12-physical-exercises-green.svg'); ?>
								<span class='ml-2'>Physical Health and Well-being</span>
								<a href='#' class='badge badge-pill badge-blue'><i class="fa fa-play"></i> Explore!</a>
							</div>
							<div class='section-title-bar__right'>
								
							</div>
						</div>
						<div class='section-body green'>
							<div class='section-body__title p-2'>
								√ - Promoting students’ physical health and well-being to support flourishing children.
							</div>
							<div class='section-body__content green'>
								<div class='row equal'>
									<div class='col-sm-12 col-lg-4'>
										<div class='row-card px-0 py-3'>
											<div class='row-card__title green pb-1'>
												<span class='mr-2'>Butterfly</span>
												<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
											</div>
											<div class='row-card__content py-2'>
												<div class='row-card__content-text'>
													A practice in which students cultivate flexibility through a seated pose of pulling their heels toward them, pressing the soles of their feet together, and lowering their knees toward the floor.
												</div>
											</div>
											<div class='row-card__image'>
												<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'kids-butterfly@2x.jpg'; ?>' alt='Butterfly'>
											</div>
										</div>
									</div>
									<div class='col-sm-12 col-lg-4'>
										<div class='row-card px-0 py-3'>
											<div class='row-card__title green pb-1'>
												<span class='mr-2'>Physical Health and Well-being for K-12</span>
												<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
											</div>
											<div class='row-card__content py-2'>
												<div class='row-card__content-text'>
													A curated guide of key multimedia resources with descriptions for teachers and parents to guide students in their physical health and well-being.
												</div>
											</div>
											<div class='row-card__image'>
												<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'kids-physical-health@2x.jpg'; ?>' alt='Physical Health and Well-being for K-12'>
											</div>
										</div>
									</div>
									<div class='col-sm-12 col-lg-4'>
										<div class='row-card px-0 py-3'>
											<div class='row-card__title green pb-1'>
												<span class='mr-2'>Plank</span>
												<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
											</div>
											<div class='row-card__content py-2'>
												<div class='row-card__content-text'>
													A practice involving students cultivating strength and balance by first being on their hands and knees, and then stepping back and lifting up on to their toes in a push-up position.
												</div>
											</div>
											<div class='row-card__image'>
												<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'kids-plank@2x.jpg'; ?>' alt='Plank'>
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
						<div class='section-title-bar'>
							<div class='section-title-bar__left'>
								<?php echo load_inline_svg('icon-teacher-wellbeing-orange.svg'); ?>
								<span class='ml-2'>Teacher Well-being in the Classroom</span>
								<a href='#' class='badge badge-pill badge-blue'><i class="fa fa-play"></i> Explore!</a>
							</div>
							<div class='section-title-bar__right'>

							</div>
						</div>
						<div class='section-body orange'>
							<div class='section-body__title p-2'>
								√ - Supporting teachers’ integrated well-being in PreK-12 schools.
							</div>
							<div class='section-body__content orange'>
								<div class='row equal'>
									<div class='col-sm-12 col-lg-4'>
										<div class='row-card px-0 py-3'>
											<div class='row-card__title orange pb-1'>
												<span class='mr-2'>Mindfulness and Evidence-Based Teacher…</span>
												<?php echo load_inline_svg('exercises-orange-arrow.svg'); ?>
											</div>
											<div class='row-card__content py-2'>
												<div class='row-card__content-text'>
													A research brief on the impact of mindfulness training on teachers’ well-being and classroom performance as well as an overview of the evidence-based professional development programs available for PreK-12 teachers.
												</div>
											</div>
											<div class='row-card__image'>
												<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'kids-mindfulness-evidence@2x.jpg'; ?>' alt='Mindfulness and Evidence-Based Teacher'>
											</div>
										</div>
									</div>
									<div class='col-sm-12 col-lg-4'>
										<div class='row-card px-0 py-3'>
											<div class='row-card__title orange pb-1'>
												<span class='mr-2'>PreK-12 Teacher Well-being in the Class…</span>
												<?php echo load_inline_svg('exercises-orange-arrow.svg'); ?>
											</div>
											<div class='row-card__content py-2'>
												<div class='row-card__content-text'>
													Fostering integrated advising and mentorship of students as whole individuals for flourishing of self and others.
												</div>
											</div>
											<div class='row-card__image'>
												<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'kids-prek12-teacher@2x.jpg'; ?>' alt='PreK-12 Teacher Well-being in the Class'>
											</div>
										</div>
									</div>
									<div class='col-sm-12 col-lg-4'>
										<div class='row-card px-0 py-3'>
											<div class='row-card__title orange pb-1'>
												<span class='mr-2'>PreK-12 Teacher Well-being</span>
												<?php echo load_inline_svg('exercises-orange-arrow.svg'); ?>
											</div>
											<div class='row-card__content py-2'>
												<div class='row-card__content-text'>
													Caring for self in body, mind, and relationships towards self-flourishing in service of caring for others.
												</div>
											</div>
											<div class='row-card__image'>
												<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'kids-prek12-teacher-well-being@2x.jpg'; ?>' alt='PreK-12 Teacher Well-being'>
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
						<div class='section-title-bar'>
							<div class='section-title-bar__left'>
								<?php echo load_inline_svg('icon-k12exercises2.svg'); ?>
								<span class='ml-2'>K-12 Practices and Exercises</span>
								<a href='#' class='badge badge-pill badge-blue'><i class="fa fa-play"></i> Explore!</a>
							</div>
							<div class='section-title-bar__right'>
								
							</div>
						</div>
						<div class='section-body green'>
							<div class='section-body__title p-2'>
								√ - Practices and exercises to cultivate flourishing children in PreK-12 educational settings.
							</div>
							<div class='section-body__content green'>
								<div class='row equal'>
									<div class='col-sm-12 col-lg-4'>
										<div class='row-card px-0 py-3'>
											<div class='row-card__title green pb-1'>
												<span class='mr-2'>Breath of Joy</span>
												<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
											</div>
											<div class='row-card__content py-2'>
												<div class='row-card__content-text'>
													A practice in which  students use their breath to energize their bodies by inhaling three times in a row and then engaging in one long exhale.
												</div>
											</div>
											<div class='row-card__image'>
												<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'kids-breath-of-joy@2x.jpg'; ?>' alt='Breath of Joy'>
											</div>
										</div>
									</div>
									<div class='col-sm-12 col-lg-4'>
										<div class='row-card px-0 py-3'>
											<div class='row-card__title green pb-1'>
												<span class='mr-2'>Anchor Breath</span>
												<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
											</div>
											<div class='row-card__content py-2'>
												<div class='row-card__content-text'>
													A practice for students to learn to use their breath to calm their bodies and their minds by placing their right hands on their hearts and their left hands on their stomachs and taking several deep breaths.
												</div>
											</div>
											<div class='row-card__image'>
												<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'kids-anchor-breath@2x.jpg'; ?>' alt='Anchor Breath'>
											</div>
										</div>
									</div>
									<div class='col-sm-12 col-lg-4'>
										<div class='row-card px-0 py-3'>
											<div class='row-card__title green pb-1'>
												<span class='mr-2'>Half Diamond</span>
												<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
											</div>
											<div class='row-card__content py-2'>
												<div class='row-card__content-text'>
													A practice involving a seated pose through which students cultivate flexibility by spreading their legs wide in a letter V shape and gently lowering their chests down toward their mats.
												</div>
											</div>
											<div class='row-card__image'>
												<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'kids-half-diamond@2x.jpg'; ?>' alt='Half Diamond'>
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
			<div class='col-sm-12 col-md-3 right-sidebar'>Search Bar</div>
		</div>
	</div>
</div><!-- two-three-column-wrapper -->

<?php get_footer();
