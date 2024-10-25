<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Christian_Bell
 */

get_header();
?>

<?php get_template_part('template-parts/content', 'leftcolumn'); ?>

	<div class="col-right">

		

	<section id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">

				<div id="banner-post-title" class="fullheight vcenterbox align-center">
					<div class ="splash-title">
						<h1 class="banner-title"><?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search: %s', 'christian-bell' ), '<span>' . get_search_query() . '</span>' );
					?></h1>
					</div>


					<a class="read-more-book arrow-container animated fadeInDown" href="#main">
	  					<div class="arrow-2">
						  <img class="icon" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/magnifying-glass-solid.svg">
	  					</div>
	  					<div class="arrow-1 animated hinge infinite zoomIn"></div>
					</a>

				</div><!-- banner-post-title -->

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h3 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'christian-bell' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h3>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
			</div><!-- container -->
		</main><!-- #main -->
	</section><!-- #primary -->
</div><!-- col-right -->

<?php
get_footer();
