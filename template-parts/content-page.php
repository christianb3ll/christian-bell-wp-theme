<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Christian_Bell
 */

?>

<div id="banner-post-title" class="fullheight vcenterbox align-center">
					<div class ="splash-title">
						<?php the_title( '<h1 class="banner-title">', '</h1>' ); ?>
					</div>


					<a class="read-more-book arrow-container animated fadeInDown" href="#main">
	  					<div class="arrow-2">
						  <img class="icon" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/book-open-solid.svg">
	  					</div>
	  					<div class="arrow-1 animated hinge infinite zoomIn"></div>
					</a>

				</div><!-- banner-post-title -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header id="page-header" class="entry-header">
			<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>

	</header><!-- .entry-header -->

	<div id="content" class="entry-content">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'christian-bell' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'christian-bell' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
