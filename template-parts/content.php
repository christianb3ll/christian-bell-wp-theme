<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Christian_Bell
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if (has_post_thumbnail() ) { ?>
		<div class="post-image">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
		</div><!-- post-image -->
	<?php } ?>


	<header class="entry-header">

		<div class="entry-meta">
			<img class="calendar-icon" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/calendar-days-solid.svg"><time><?php the_time('F j, Y'); ?></time><img class="folder-icon" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/folder-open-solid.svg"><?php the_category( ', '); ?>
		</div><!-- .entry-meta -->
		<?php
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		
		if ( 'post' === get_post_type() ) :
			?>

		<?php endif; ?>
	</header><!-- .entry-header -->


	<div class="entry-content">
		<?php
		the_excerpt();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'christian-bell' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">

	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
<hr>

