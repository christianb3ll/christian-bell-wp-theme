<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Christian_Bell
 */

get_header();
?>

<?php get_template_part('template-parts/content', 'leftcolumn'); ?>

	<div class="col-right">

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'single' );

			the_post_navigation();


		endwhile; // End of the loop.
		?>
			</div><!-- container -->
		</main><!-- #main -->
	</div><!-- #primary -->

</div><!-- col-right -->

<?php
get_footer();
