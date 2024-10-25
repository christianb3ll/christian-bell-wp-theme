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
 * @package Christian_Bell
 */

get_header();
?>

<?php get_template_part('template-parts/content', 'leftcolumn'); ?>

	<div class="col-right">


	<div id="banner-post-title" class="fullheight vcenterbox align-center">
		<div class ="splash-title">
			<h1 class="banner-title">Blog</h1>
		</div>


		<a class="read-more-book arrow-container animated fadeInDown" href="#main">
				<div class="arrow-2">
					<img class="icon" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/book-open-solid.svg">
				</div>
				<div class="arrow-1 animated hinge infinite zoomIn"></div>
		</a>

	</div><!-- banner-post-title -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">

		<?php
		if ( have_posts() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

				<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
			</div><!-- container -->
		</main><!-- #main -->
	</div><!-- #primary -->
	<!-- col-right -->

<?php
get_footer();
