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

<div class='page-wrapper mb-5' id='full-width-page-wrapper'>
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
					<div class='row equal'>
						<div class='col-sm-12 col-md-6 col-xl-4'>
							<div class='front-blade mb-4 pb-2'>
								<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'sound-and-silence@2x.jpg'; ?>' alt='Sound and Silence Practice'>
								<div class='blade-subsection mx-4 my-3'>
									<div class='blade-title mb-3 pb-2'>
										<a href='#'>
											Sound and Silence Practice
											<span class='green-arrow ml-2'>
												<?php echo load_inline_svg('green-arrow.svg'); ?>
											</span>
										</a>
									</div>
									<div class='blade-text'>A practice to develop deeper awareness and attentiveness to a single sense, such as sound.</div>
								</div>
								<div class='bottom-line'></div>
							</div>
						</div>
						<div class='col-sm-12 col-md-6 col-xl-4'>
							<div class='front-blade mb-4 pb-2'>
								<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'contemplative-inquiry@2x.jpg'; ?>' alt='Contemplative Inquiry: Looking as Knowing'>
								<div class='blade-subsection mx-4 my-3'>
									<div class='blade-title mb-3 pb-2'>
										<a href='#'>
											Contemplative Inquiry: Looking as Knowing
											<span class='green-arrow ml-2'>
												<?php echo load_inline_svg('green-arrow.svg'); ?>
											</span>
										</a>
									</div>
									<div class='blade-text'>Participants in this exercise observe an object, image, or person three different ways and, each time, write what they “know” about the object.</div>
								</div>
								<div class='bottom-line'></div>
							</div>
						</div>
						<div class='col-sm-12 col-md-6 col-xl-4'>
							<div class='front-blade mb-4 pb-2'>
								<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'open-awareness@2x.jpg'; ?>' alt='Open Awareness Practice'>
								<div class='blade-subsection mx-4 my-3'>
									<div class='blade-title mb-3 pb-2'>
										<a href='#'>
											Open Awareness Practice
											<span class='green-arrow ml-2'>
												<?php echo load_inline_svg('green-arrow.svg'); ?>
											</span>
										</a>
									</div>
									<div class='blade-text'>Cultivation of an observer awareness that watches whatever is going and coming in the stream.</div>
								</div>
								<div class='bottom-line'></div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class='section-region'>
				<div class='region-title py-2 pl-4 mb-3'>
					<?php echo load_inline_svg('icon-community-green.svg'); ?>
					<span class='region-text mx-2'>Community for Contemplation and Flourishing</span>
					<a href='#' class='badge badge-pill badge-blue'><i class="fa fa-play"></i> Explore!</a>
				</div>
				<div class='region-blades'>
					<div class='row equal'>
						<div class='col-sm-12 col-md-6 col-xl-4'>
							<div class='front-blade mb-4 pb-2'>
								<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'monday-mindfulness@2x.jpg'; ?>' alt='Monday Mindfulness Morning'>
								<div class='blade-subsection mx-4 my-3'>
									<div class='blade-title mb-3 pb-2'>
										<a href='#'>
											Monday Mindfulness Morning
											<span class='green-arrow ml-2'>
												<?php echo load_inline_svg('green-arrow.svg'); ?>
											</span>
										</a>
									</div>
									<div class='blade-text'>Various mindfulness meditations done on a rotating basis.</div>
									<div class='blade-misc mt-3 pl-2'>
										<div class='blade-misc-list'>
											<span class='upper'>DATE/TIME</span> -
											<span class='lower'>Every Monday 8am</span>
										</div>
										<div class='blade-misc-list'>
											<span class='upper'>GUIDE</span> -
											<span class='lower'>Leslie Hubbard of the University of Virginia</span>
										</div>
									</div>
								</div>
								<div class='bottom-line'></div>
							</div>
						</div>
						<div class='col-sm-12 col-md-6 col-xl-4'>
							<div class='front-blade mb-4 pb-2'>
								<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'thoughts-on-human@2x.jpg'; ?>' alt='Thoughts on Human Flourishing and Education'>
								<div class='blade-subsection mx-4 my-3'>
									<div class='blade-title mb-3 pb-2'>
										<a href='#'>
											Thoughts on Human Flourishing and Education
											<span class='green-arrow ml-2'>
												<?php echo load_inline_svg('green-arrow.svg'); ?>
											</span>
										</a>
									</div>
									<div class='blade-text'>Thoughts on the future of education prioritizing flourishing.</div>
									<div class='blade-misc mt-3 pl-2'>
										<div class='blade-misc-list'>
											<span class='upper'>Author</span> -
											<span class='lower'>Aneel Chima of Stanford University</span>
										</div>
									</div>
								</div>
								<div class='bottom-line'></div>
							</div>
						</div>
						<div class='col-sm-12 col-md-6 col-xl-4'>
							<div class='front-blade mb-4 pb-2'>
								<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'discussing-ashtanga@2x.jpg'; ?>' alt='Discussing Ashtanga Yoga with John Bultman'>
								<div class='blade-subsection mx-4 my-3'>
									<div class='blade-title mb-3 pb-2'>
										<a href='#'>
											Discussing Ashtanga Yoga with John Bultman
											<span class='green-arrow ml-2'>
												<?php echo load_inline_svg('green-arrow.svg'); ?>
											</span>
										</a>
									</div>
									<div class='blade-text'>A presentation of advanced features of Ashtanga yoga with the chance to ask questions.</div>
									<div class='blade-misc mt-3 pl-2'>
										<div class='blade-misc-list'>
											<span class='upper'>DATE/TIME</span> -
											<span class='lower'>Wednesday August 12, 2020, 6 pm EST</span>
										</div>
										<div class='blade-misc-list'>
											<span class='upper'>PRESENTER</span> -
											<span class='lower'>John Bultman of the University of Virginia</span>
										</div>
									</div>
								</div>
								<div class='bottom-line'></div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class='section-region'>
				<div class='region-title py-2 pl-4 mb-3'>
					<?php echo load_inline_svg('icon-encyclopedia-green.svg'); ?>
					<span class='region-text mx-2'>The Encyclopedia of Contemplation</span>
					<a href='#' class='badge badge-pill badge-blue'><i class="fa fa-play"></i> Explore!</a>
				</div>
				<div class='region-blades'>
					<div class='row equal'>
						<div class='col-sm-12 col-md-6 col-xl-4'>
							<div class='front-blade mb-4 pb-2'>
								<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'differentiation-of-cyclic@2x.jpg'; ?>' alt='The Differentiation of Cyclic Existence and Transcendence (Rushan)'>
								<div class='blade-subsection mx-4 my-3'>
									<div class='blade-title mb-3 pb-2'>
										<a href='#'>
											The Differentiation of Cyclic Existence and Transcendence (Rushan)
											<span class='green-arrow ml-2'>
												<?php echo load_inline_svg('green-arrow.svg'); ?>
											</span>
										</a>
									</div>
									<div class='blade-text'>Acting out impulses until exhaustion into naturalness.</div>
								</div>
								<div class='bottom-line'></div>
							</div>
						</div>
						<div class='col-sm-12 col-md-6 col-xl-4'>
							<div class='front-blade mb-4 pb-2'>
								<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'sound-of-elements@2x.jpg'; ?>' alt='The Sound of the Elements Yoga'>
								<div class='blade-subsection mx-4 my-3'>
									<div class='blade-title mb-3 pb-2'>
										<a href='#'>
											The Sound of the Elements Yoga
											<span class='green-arrow ml-2'>
												<?php echo load_inline_svg('green-arrow.svg'); ?>
											</span>
										</a>
									</div>
									<div class='blade-text'>Immersion in the sounds of the five elements.</div>
								</div>
								<div class='bottom-line'></div>
							</div>
						</div>
						<div class='col-sm-12 col-md-6 col-xl-4'>
							<div class='front-blade mb-4 pb-2'>
								<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'direct-transcendence@2x.jpg'; ?>' alt='Direct Transcendence (Thogel)'>
								<div class='blade-subsection mx-4 my-3'>
									<div class='blade-title mb-3 pb-2'>
										<a href='#'>
											Direct Transcendence (Thogel)
											<span class='green-arrow ml-2'>
												<?php echo load_inline_svg('green-arrow.svg'); ?>
											</span>
										</a>
									</div>
									<div class='blade-text'>Cultivation of spontaneous visions of Buddhas in four visionary sequences.</div>
								</div>
								<div class='bottom-line'></div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class='section-region'>
				<div class='region-title py-2 pl-4 mb-3'>
					<?php echo load_inline_svg('icon-library-green.svg'); ?>
					<span class='region-text mx-2'>The Library for Flourishing</span>
					<a href='#' class='badge badge-pill badge-blue'><i class="fa fa-play"></i> Explore!</a>
				</div>
				<div class='region-blades'>
					<div class='row equal'>
						<div class='col-sm-12 col-md-6 col-xl-4'>
							<div class='front-blade mb-4 pb-2'>
								<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'curated-guides@2x.jpg'; ?>' alt='Curated Guides'>
								<div class='blade-subsection mx-4 my-3'>
									<div class='blade-title mb-3 pb-2'>
										<a href='#'>
											Curated Guides
											<span class='green-arrow ml-2'>
												<?php echo load_inline_svg('green-arrow.svg'); ?>
											</span>
										</a>
									</div>
									<div class='blade-text'>Guides to multimedia resources that are curated to provide a general introduction on a specific topic.</div>
								</div>
								<div class='bottom-line'></div>
							</div>
						</div>
						<div class='col-sm-12 col-md-6 col-xl-4'>
							<div class='front-blade mb-4 pb-2'>
								<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'audio-video@2x.jpg'; ?>' alt='Audio-video'>
								<div class='blade-subsection mx-4 my-3'>
									<div class='blade-title mb-3 pb-2'>
										<a href='#'>
											Audio-video
											<span class='green-arrow ml-2'>
												<?php echo load_inline_svg('green-arrow.svg'); ?>
											</span>
										</a>
									</div>
									<div class='blade-text'>Recordings of talks, interviews, instructions, practices, and other topics. </div>
								</div>
								<div class='bottom-line'></div>
							</div>
						</div>
						<div class='col-sm-12 col-md-6 col-xl-4'>
							<div class='front-blade mb-4 pb-2'>
								<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'sources@2x.jpg'; ?>' alt='Sources'>
								<div class='blade-subsection mx-4 my-3'>
									<div class='blade-title mb-3 pb-2'>
										<a href='#'>
											Sources
											<span class='green-arrow ml-2'>
												<?php echo load_inline_svg('green-arrow.svg'); ?>
											</span>
										</a>
									</div>
									<div class='blade-text'>Topical multimedia bibliographies with books, articles, videos, podcasts, and informative resources.</div>
								</div>
								<div class='bottom-line'></div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class='section-region'>
				<div class='region-title py-2 pl-4 mb-3'>
					<?php echo load_inline_svg('icon-schools-green.svg'); ?>
					<span class='region-text mx-2'>Student Flourishing in Higher Education</span>
					<a href='#' class='badge badge-pill badge-blue'><i class="fa fa-play"></i> Explore!</a>
				</div>
				<div class='region-blades'>
					<div class='row equal'>
						<div class='col-sm-12 col-md-6 col-xl-4'>
							<div class='front-blade mb-4 pb-2'>
								<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'resources-for-students@2x.jpg'; ?>' alt='Resources for Students'>
								<div class='blade-subsection mx-4 my-3'>
									<div class='blade-title mb-3 pb-2'>
										<a href='#'>
											Resources for Students
											<span class='green-arrow ml-2'>
												<?php echo load_inline_svg('green-arrow.svg'); ?>
											</span>
										</a>
									</div>
									<div class='blade-text'>Fashioning the grounds for excellence, resiliency, and care for students flourishing in all quarters of life.</div>
								</div>
								<div class='bottom-line'></div>
							</div>
						</div>
						<div class='col-sm-12 col-md-6 col-xl-4'>
							<div class='front-blade mb-4 pb-2'>
								<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'resources-for-instructors@2x.jpg'; ?>' alt='Resources for Instructors'>
								<div class='blade-subsection mx-4 my-3'>
									<div class='blade-title mb-3 pb-2'>
										<a href='#'>
											Resources for Instructors
											<span class='green-arrow ml-2'>
												<?php echo load_inline_svg('green-arrow.svg'); ?>
											</span>
										</a>
									</div>
									<div class='blade-text'>Supporting teachers own self-care as well as exploration of pedagogies of flourishing.</div>
								</div>
								<div class='bottom-line'></div>
							</div>
						</div>
						<div class='col-sm-12 col-md-6 col-xl-4'>
							<div class='front-blade mb-4 pb-2'>
								<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'resources-for-institutions@2x.jpg'; ?>' alt='Resources for Institutions'>
								<div class='blade-subsection mx-4 my-3'>
									<div class='blade-title mb-3 pb-2'>
										<a href='#'>
											Resources for Institutions
											<span class='green-arrow ml-2'>
												<?php echo load_inline_svg('green-arrow.svg'); ?>
											</span>
										</a>
									</div>
									<div class='blade-text'>Offering support and inspiration for systemic transformation of colleges and universities to better support student flourishing.</div>
								</div>
								<div class='bottom-line'></div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class='section-region'>
				<div class='region-title py-2 pl-4 mb-3'>
					<?php echo load_inline_svg('icon-kids-green.svg'); ?>
					<span class='region-text mx-2'>Flourishing Kids in K-12 Schools</span>
					<a href='#' class='badge badge-pill badge-blue'><i class="fa fa-play"></i> Explore!</a>
				</div>
				<div class='region-blades'>
					<div class='row equal'>
						<div class='col-sm-12 col-md-6 col-xl-4'>
							<div class='front-blade mb-4 pb-2'>
								<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'social-emotional-learning@2x.jpg'; ?>' alt='Social and Emotional Learning'>
								<div class='blade-subsection mx-4 my-3'>
									<div class='blade-title mb-3 pb-2'>
										<a href='#'>
											Social and Emotional Learning
											<span class='green-arrow ml-2'>
												<?php echo load_inline_svg('green-arrow.svg'); ?>
											</span>
										</a>
									</div>
									<div class='blade-text'>Cultivating students’ social and emotional well-being in PreK-12 classrooms.</div>
								</div>
								<div class='bottom-line'></div>
							</div>
						</div>
						<div class='col-sm-12 col-md-6 col-xl-4'>
							<div class='front-blade mb-4 pb-2'>
								<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'mindfulness@2x.jpg'; ?>' alt='Mindfulness'>
								<div class='blade-subsection mx-4 my-3'>
									<div class='blade-title mb-3 pb-2'>
										<a href='#'>
											Mindfulness
											<span class='green-arrow ml-2'>
												<?php echo load_inline_svg('green-arrow.svg'); ?>
											</span>
										</a>
									</div>
									<div class='blade-text'>Fostering and researching mindfulness among students to support flourishing children.</div>
								</div>
								<div class='bottom-line'></div>
							</div>
						</div>
						<div class='col-sm-12 col-md-6 col-xl-4'>
							<div class='front-blade mb-4 pb-2'>
								<img src='<?php echo get_stylesheet_directory_uri() . '/img/' . 'teacher-well-being@2x.jpg'; ?>' alt='Teacher Well-being in the Classroom'>
								<div class='blade-subsection mx-4 my-3'>
									<div class='blade-title mb-3 pb-2'>
										<a href='#'>
											Teacher Well-being in the Classroom
											<span class='green-arrow ml-2'>
												<?php echo load_inline_svg('green-arrow.svg'); ?>
											</span>
										</a>
									</div>
									<div class='blade-text'>Supporting teachers’ integrated well-being in PreK-12 schools.</div>
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
