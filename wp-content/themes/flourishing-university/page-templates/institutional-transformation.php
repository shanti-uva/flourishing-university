<?php
/**
 * Template Name: Institutional Transformation
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
											<span class='title-bar__title'>Higher Education and Student Flourishing</span>
										</div>
									</div>
								</div>
								<div class='col-sm-12 col-md-7 sideTwo'>
									<span class='title-bar__text'>
										A Guide to Institutional Transformation
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<section class='row equal'>
					<div class='col-sm-12 col-md-6 col-lg-4 mb-3'>
						<div class='row-card bordered white-bg px-2 py-2'>
							<div class='row-card__title orange-lite pb-1'>
								<span class='mr-2'>Models of Student Flourishing</span>
								<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
							</div>
							<div class='row-card__content py-2'>
								<div class='row-card__content-text'>
									Articulating and promoting  detailed models of flourishing as whole students.
								</div>
							</div>
							<div class='row-card__image mt-2'>
								<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'institutional-models-student-flourishing@2x.jpg'; ?>' alt='Models of Student Flourishing'>
							</div>
						</div>
					</div><!--.col-sm-12.col-lg-4 -->
					<div class='col-sm-12 col-md-6 col-lg-4 mb-3'>
						<div class='row-card bordered white-bg px-2 py-2'>
							<div class='row-card__title orange-lite pb-1'>
								<span class='mr-2'>Measures and Assessment Methods</span>
								<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
							</div>
							<div class='row-card__content py-2'>
								<div class='row-card__content-text'>
									Measuring the flourishing of students and impact of programs.
								</div>
							</div>
							<div class='row-card__image mt-2'>
								<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'institutional-measures-assessment@2x.jpg'; ?>' alt='Measures and Assessment Methods'>
							</div>
						</div>
					</div><!--.col-sm-12.col-lg-4 -->
					<div class='col-sm-12 col-md-6 col-lg-4 mb-3'>
						<div class='row-card bordered white-bg px-2 py-2'>
							<div class='row-card__title orange-lite pb-1'>
								<span class='mr-2'>Reflexive Research</span>
								<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
							</div>
							<div class='row-card__content py-2'>
								<div class='row-card__content-text'>
									Fostering virtuous cycles of knowledge as universities draw upon their own research to improve.
								</div>
							</div>
							<div class='row-card__image mt-2'>
								<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'institutional-reflexive-research@2x.jpg'; ?>' alt='Reflexive Research'>
							</div>
						</div>
					</div><!--.col-sm-12.col-lg-4 -->
					<div class='col-sm-12 col-md-6 col-lg-4 mb-3'>
						<div class='row-card bordered white-bg px-2 py-2'>
							<div class='row-card__title orange-lite pb-1'>
								<span class='mr-2'>Diversity, Equity, & Social Justice Commitment</span>
								<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
							</div>
							<div class='row-card__content py-2'>
								<div class='row-card__content-text'>
									Embedding diversity and equity into all aspects of University life, policies, and programs.
								</div>
							</div>
							<div class='row-card__image mt-2'>
								<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'institutional-diversity-equity@2x.jpg'; ?>' alt='Diversity, Equity, & Social Justice Commitment'>
							</div>
						</div>
					</div><!--.col-sm-12.col-lg-4 -->
					<div class='col-sm-12 col-md-6 col-lg-4 mb-3'>
						<div class='row-card bordered white-bg px-2 py-2'>
							<div class='row-card__title orange-lite pb-1'>
								<span class='mr-2'>Curricular</span>
								<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
							</div>
							<div class='row-card__content py-2'>
								<div class='row-card__content-text'>
									Mainstreaming pedagogies and curricular design for whole student flourishing in the classroom.
								</div>
							</div>
							<div class='row-card__image mt-2'>
								<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'institutional-curricular@2x.jpg'; ?>' alt='Curricular'>
							</div>
						</div>
					</div><!--.col-sm-12.col-lg-4 -->
					<div class='col-sm-12 col-md-6 col-lg-4 mb-3'>
						<div class='row-card bordered white-bg px-2 py-2'>
							<div class='row-card__title orange-lite pb-1'>
								<span class='mr-2'>Co-curricular</span>
								<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
							</div>
							<div class='row-card__content py-2'>
								<div class='row-card__content-text'>
									Fostering skill development, community building, and personal exploration outside of classrooms.
								</div>
							</div>
							<div class='row-card__image mt-2'>
								<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'institutional-co-curricular@2x.jpg'; ?>' alt='Co-curricular'>
							</div>
						</div>
					</div><!--.col-sm-12.col-lg-4 -->
					<div class='col-sm-12 col-md-6 col-lg-4 mb-3'>
						<div class='row-card bordered white-bg px-2 py-2'>
							<div class='row-card__title orange-lite pb-1'>
								<span class='mr-2'>Extra-curricular</span>
								<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
							</div>
							<div class='row-card__content py-2'>
								<div class='row-card__content-text'>
									Supporting student interaction and community with creativity and healthy social connections.
								</div>
							</div>
							<div class='row-card__image mt-2'>
								<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'institutional-extra-curricular@2x.jpg'; ?>' alt='Extra-curricular'>
							</div>
						</div>
					</div><!--.col-sm-12.col-lg-4 -->
					<div class='col-sm-12 col-md-6 col-lg-4 mb-3'>
						<div class='row-card bordered white-bg px-2 py-2'>
							<div class='row-card__title orange-lite pb-1'>
								<span class='mr-2'>Credentialing</span>
								<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
							</div>
							<div class='row-card__content py-2'>
								<div class='row-card__content-text'>
									Exploring supplements to the academic transcript to acknowledge the full spectrum of education.
								</div>
							</div>
							<div class='row-card__image mt-2'>
								<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'institutional-credentialing@2x.jpg'; ?>' alt='Credentialing'>
							</div>
						</div>
					</div><!--.col-sm-12.col-lg-4 -->
					<div class='col-sm-12 col-md-6 col-lg-4 mb-3'>
						<div class='row-card bordered white-bg px-2 py-2'>
							<div class='row-card__title orange-lite pb-1'>
								<span class='mr-2'>Residential Life</span>
								<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
							</div>
							<div class='row-card__content py-2'>
								<div class='row-card__content-text'>
									Living and learning in dormitories to Greek life in ways that support whole student growth and resilience.
								</div>
							</div>
							<div class='row-card__image mt-2'>
								<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'institutional-residential-life@2x.jpg'; ?>' alt='Residential Life'>
							</div>
						</div>
					</div><!--.col-sm-12.col-lg-4 -->
					<div class='col-sm-12 col-md-6 col-lg-4 mb-3'>
						<div class='row-card bordered white-bg px-2 py-2'>
							<div class='row-card__title orange-lite pb-1'>
								<span class='mr-2'>Advising</span>
								<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
							</div>
							<div class='row-card__content py-2'>
								<div class='row-card__content-text'>
									Creating optimal relationships between faculty and students to integrated mentoring for class and life.
								</div>
							</div>
							<div class='row-card__image mt-2'>
								<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'institutional-advising@2x.jpg'; ?>' alt='Advising'>
							</div>
						</div>
					</div><!--.col-sm-12.col-lg-4 -->
					<div class='col-sm-12 col-md-6 col-lg-4 mb-3'>
						<div class='row-card bordered white-bg px-2 py-2'>
							<div class='row-card__title orange-lite pb-1'>
								<span class='mr-2'>Student Health Services</span>
								<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
							</div>
							<div class='row-card__content py-2'>
								<div class='row-card__content-text'>
									Supporting students in crisis while also offering resources supporting the flourishing of all students.
								</div>
							</div>
							<div class='row-card__image mt-2'>
								<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'institutional-student-health-services@2x.jpg'; ?>' alt='Student Health Services'>
							</div>
						</div>
					</div><!--.col-sm-12.col-lg-4 -->
					<div class='col-sm-12 col-md-6 col-lg-4 mb-3'>
						<div class='row-card bordered white-bg px-2 py-2'>
							<div class='row-card__title orange-lite pb-1'>
								<span class='mr-2'>Student Organizations, Communities, and Centers</span>
								<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
							</div>
							<div class='row-card__content py-2'>
								<div class='row-card__content-text'>
									Fostering student leadership, community, and exploration.
								</div>
							</div>
							<div class='row-card__image mt-2'>
								<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'institutional-student-organizations@2x.jpg'; ?>' alt='Student Organizations, Communities, and Centers'>
							</div>
						</div>
					</div><!--.col-sm-12.col-lg-4 -->
					<div class='col-sm-12 col-md-6 col-lg-4 mb-3'>
						<div class='row-card bordered white-bg px-2 py-2'>
							<div class='row-card__title orange-lite pb-1'>
								<span class='mr-2'>Buildings and Outdoor Space</span>
								<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
							</div>
							<div class='row-card__content py-2'>
								<div class='row-card__content-text'>
									Engaging in innovation in the built environment that facilitates new approaches to student flourishing.
								</div>
							</div>
							<div class='row-card__image mt-2'>
								<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'institutional-building-outdoor-space@2x.jpg'; ?>' alt='Buildings and Outdoor Space'>
							</div>
						</div>
					</div><!--.col-sm-12.col-lg-4 -->
					<div class='col-sm-12 col-md-6 col-lg-4 mb-3'>
						<div class='row-card bordered white-bg px-2 py-2'>
							<div class='row-card__title orange-lite pb-1'>
								<span class='mr-2'>Student Data Utilization</span>
								<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
							</div>
							<div class='row-card__content py-2'>
								<div class='row-card__content-text'>
									Using student data to assess programs and understand specific groups of students.
								</div>
							</div>
							<div class='row-card__image mt-2'>
								<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'institutional-student-data-utilization@2x.jpg'; ?>' alt='Student Data Utilization'>
							</div>
						</div>
					</div><!--.col-sm-12.col-lg-4 -->
					<div class='col-sm-12 col-md-6 col-lg-4 mb-3'>
						<div class='row-card bordered white-bg px-2 py-2'>
							<div class='row-card__title orange-lite pb-1'>
								<span class='mr-2'>Digital Approaches for Precision Learning and Wellbeing</span>
								<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
							</div>
							<div class='row-card__content py-2'>
								<div class='row-card__content-text'>
									Drawing up data to customize learning experiences and skill development opportunities.
								</div>
							</div>
							<div class='row-card__image mt-2'>
								<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'institutional-digital-approaches@2x.jpg'; ?>' alt='Digital Approaches for Precision Learning and Wellbeing'>
							</div>
						</div>
					</div><!--.col-sm-12.col-lg-4 -->
					<div class='col-sm-12 col-md-6 col-lg-4 mb-3'>
						<div class='row-card bordered white-bg px-2 py-2'>
							<div class='row-card__title orange-lite pb-1'>
								<span class='mr-2'>Digital Agility Engagement</span>
								<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
							</div>
							<div class='row-card__content py-2'>
								<div class='row-card__content-text'>
									Empowering students to project against digital technologies’ negative impacts and proactively revision them for flourishing.
								</div>
							</div>
							<div class='row-card__image mt-2'>
								<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'institutional-digital-agility@2x.jpg'; ?>' alt='Digital Agility Engagement'>
							</div>
						</div>
					</div><!--.col-sm-12.col-lg-4 -->
					<div class='col-sm-12 col-md-6 col-lg-4 mb-3'>
						<div class='row-card bordered white-bg px-2 py-2'>
							<div class='row-card__title orange-lite pb-1'>
								<span class='mr-2'>Application Process</span>
								<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
							</div>
							<div class='row-card__content py-2'>
								<div class='row-card__content-text'>
									Reenvisioning the application process towards less stress and great equity.
								</div>
							</div>
							<div class='row-card__image mt-2'>
								<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'institutional-application-process@2x.jpg'; ?>' alt='Application Process'>
							</div>
						</div>
					</div><!--.col-sm-12.col-lg-4 -->
					<div class='col-sm-12 col-md-6 col-lg-4 mb-3'>
						<div class='row-card bordered white-bg px-2 py-2'>
							<div class='row-card__title orange-lite pb-1'>
								<span class='mr-2'>Financial Aid</span>
								<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
							</div>
							<div class='row-card__content py-2'>
								<div class='row-card__content-text'>
									Supporting students with significant financial barriers to educational success.
								</div>
							</div>
							<div class='row-card__image mt-2'>
								<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'instutional-financial-aid@2x.jpg'; ?>' alt='Financial Aid'>
							</div>
						</div>
					</div><!--.col-sm-12.col-lg-4 -->
					<div class='col-sm-12 col-md-6 col-lg-4 mb-3'>
						<div class='row-card bordered white-bg px-2 py-2'>
							<div class='row-card__title orange-lite pb-1'>
								<span class='mr-2'>Focused Advancement Efforts</span>
								<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
							</div>
							<div class='row-card__content py-2'>
								<div class='row-card__content-text'>
									Building a culture of philanthropy focused on financially enabling steps taken towards student flourishing.
								</div>
							</div>
							<div class='row-card__image mt-2'>
								<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'institutional-focused-advancement@2x.jpg'; ?>' alt='Focused Advancement Efforts'>
							</div>
						</div>
					</div><!--.col-sm-12.col-lg-4 -->
					<div class='col-sm-12 col-md-6 col-lg-4 mb-3'>
						<div class='row-card bordered white-bg px-2 py-2'>
							<div class='row-card__title orange-lite pb-1'>
								<span class='mr-2'>Faculty and Staff Flourishing</span>
								<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
							</div>
							<div class='row-card__content py-2'>
								<div class='row-card__content-text'>
									Promoting the flourishing of faculty and staff since flourishing must be collective for it to be effective.
								</div>
							</div>
							<div class='row-card__image mt-2'>
								<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'institutional-faculty-staff@2x.jpg'; ?>' alt='Faculty and Staff Flourishing'>
							</div>
						</div>
					</div><!--.col-sm-12.col-lg-4 -->
					<div class='col-sm-12 col-md-6 col-lg-4 mb-3'>
						<div class='row-card bordered white-bg px-2 py-2'>
							<div class='row-card__title orange-lite pb-1'>
								<span class='mr-2'>Storytelling and Culture Change</span>
								<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
							</div>
							<div class='row-card__content py-2'>
								<div class='row-card__content-text'>
									Crafting narratives and initiatives towards triggering longterm cultural change of attitudes and practices to focus more on facilitation of flourishing.
								</div>
							</div>
							<div class='row-card__image mt-2'>
								<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'institutional-storytelling-culture@2x.jpg'; ?>' alt='Storytelling and Culture Change'>
							</div>
						</div>
					</div><!--.col-sm-12.col-lg-4 -->
					<div class='col-sm-12 col-md-6 col-lg-4 mb-3'>
						<div class='row-card bordered white-bg px-2 py-2'>
							<div class='row-card__title orange-lite pb-1'>
								<span class='mr-2'>Community Engagement</span>
								<?php echo load_inline_svg('practices-green-arrow.svg'); ?>
							</div>
							<div class='row-card__content py-2'>
								<div class='row-card__content-text'>
									Enabling faculty, staff, and students to build reciprocal and caring relationships between universities and the community.
								</div>
							</div>
							<div class='row-card__image mt-2'>
								<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'institutional-community-engagement@2x.jpg'; ?>' alt='Community Engagement'>
							</div>
						</div>
					</div><!--.col-sm-12.col-lg-4 -->
				</section><!-- section.row -->
			</div><!-- Left hand side content -->
			<div class='col-sm-12 col-lg-4 right-sidebar'>Search Bar</div>
		</div>
	</div>
</div><!-- two-three-column-wrapper -->

<?php get_footer();
