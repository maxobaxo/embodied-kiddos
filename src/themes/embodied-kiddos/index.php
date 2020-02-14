<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package embodied-kiddos
 */

get_header();
?>

	<div class="ek-divider container my-5"></div>
	<div id="primary" class="content-area container">
		<main id="main" class="site-main">
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<div class="card m-3">
						<div class="card-header">
							<img src="https://benourished.org/wp-content/uploads/2019/12/BodyTrust_summit_800px.jpg" alt="" class="card-img-top p-2">
						</div>
						<div class="card-body">
							<p class="card-text">
								Hi, Everybody! I hosted a panel on eating disorder prevention and body liberation for the Body Trust Summit, a free online conference about divesting from diet culture. Get your ticket now!
							</p>
							<div class="d-flex justify-content-center w-100 mb-4">
								<a href="https://benourished.org/summit/friend/Klrscher/" target="_blank" rel="noopener noreferrer" class="is-button">Free Ticket</a>
							</div>
							<iframe width="560" height="315" src="https://www.youtube.com/embed/Zrdsx_Qy0V0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6 offset-md-3">

				</div>
			</div>

			<div class="m-3">
				<p class="newsletter-invite">Subscribe to my newsletter!</p>
				<?php echo do_shortcode('[mc4wp_form id="8"]'); ?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
