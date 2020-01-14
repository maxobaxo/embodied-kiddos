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

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<p class="newsletter-invite">Subscribe to get updates on news, events, and service offerings</p>
			<?php echo do_shortcode('[mc4wp_form id="8"]'); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
