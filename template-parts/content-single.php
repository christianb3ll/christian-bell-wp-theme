<?php
/**
 * Template part for displaying posts
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


					<a id="scroll-link" class="read-more-book arrow-container animated fadeInDown" href="#main">
	  					<div class="arrow-2">
	    					<?php if ( in_category( 'film') ) : ?>
								<img class="icon" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/film-solid.svg">
	  						<?php elseif ( in_category( 'writing') ) : ?>
								<img class="icon" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/pen-nib-solid.svg">
	  						<?php elseif ( in_category( 'design') ) : ?>
								<img class="icon" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/compass-drafting-solid.svg">
							<?php elseif ( in_category( 'games') ) : ?>
								<img class="icon" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/gamepad-solid.svg">
	  						<?php elseif ( in_category( 'web') || is_category( 'apps')) : ?>
								<img class="icon" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/code-solid.svg">
	  						<?php else : ?>
	    						<img class="icon" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/book-open-solid.svg">
	    					<?php endif; ?>
	  					</div>
	  					<div class="arrow-1 animated hinge infinite zoomIn"></div>
					</a>

				</div><!-- banner-post-title -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if (has_post_thumbnail() ) { ?>
		<div class="post-image">
			<?php the_post_thumbnail(); ?>
		</div><!-- post-image -->
	<?php } ?>

	<header class="entry-header">
		<div class="entry-meta">
			<img class="calendar-icon" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/calendar-days-solid.svg"><time><?php the_time('F j, Y'); ?></time><img class="folder-icon" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/folder-open-solid.svg"><?php the_category( ', '); ?>
		</div><!-- .entry-meta -->
		<?php
			the_title( '<h2 class="entry-title">', '</h2>' );

		if ( 'post' === get_post_type() ) :
			?>
			
		<?php endif; ?>
	</header><!-- .entry-header -->


	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'christian-bell' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">

	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

