<?php
/* Template Name: Contact */

get_header();
?>

<?php get_template_part('template-parts/content', 'leftcolumn'); ?>

	<div class="col-right">

	<div id="primary" class="content-area">
		<main id="main" class="site-main fullheight">
			<div class="container">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.

		// Display the contact form
		get_template_part('template-parts/content', 'contactform');
		?>

	</div><!-- container -->

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- col-right -->

<?php
get_footer();
