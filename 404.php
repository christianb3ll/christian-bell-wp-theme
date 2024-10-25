<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
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

				<div id="banner-post-title" class="fullheight vcenterbox align-center">
					<div class ="splash-title">
						<h1 class="banner-title">? 404 ?</h1>
					</div>


					<a class="read-more-book arrow-container animated fadeInDown" href="#main">
	  					<div class="arrow-2">
							<img class="icon" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/question-solid.svg">
	  					</div>
	  					<div class="arrow-1 animated hinge infinite zoomIn"></div>
					</a>

				</div><!-- banner-post-title -->

			<section class="error-404 not-found fullheight">
				<header class="page-header">
					<h3 class="page-title"><?php esc_html_e( 'Oops!', 'christian-bell' ); ?></h3>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'There\'s nothing here... Did you take a wrong turn?', 'christian-bell' ); ?></p>

					<?php
					get_search_form();
					?>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</div><!-- container -->

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- col-left -->

<?php
get_footer();
