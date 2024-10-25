<?php
/**
 * Template part for the left featured image column
 *
 *
 * @package Christian_Bell
 */

?>

<div id="splash-background" class="col-left fullheight" style="background-image: url('<?php

	$cb_backgroound = '/assets/img/christian-bell.webp';
	$cb_overlay = '/assets/img/christian-bell-overlay.gif';
	$blog_background = '/assets/img/vhs-tape.webp';
	$blog_overlay = '/assets/img/vhs-tape-overlay.gif';
	$film_background = '/assets/img/camera.webp';
	$film_overlay = '/assets/img/camera-overlay.gif';
	$writing_background = '/assets/img/writing.webp';
	$writing_overlay = '/assets/img/writing-overlay.gif';
	$design_background = '/assets/img/model.webp';
	$design_overlay = '/assets/img/model-overlay.gif';
	$code_background = '/assets/img/web-code.webp';
	$code_overlay = '/assets/img/web-code-overlay.gif';
	$construction_background = '/assets/img/construction.webp';
	$construction_overlay = '/assets/img/construction-overlay.gif';

	if (is_front_page() ) :
			bloginfo('stylesheet_directory'); echo $cb_overlay ?>'), url('<?php bloginfo('stylesheet_directory'); echo $cb_backgroound ;
		elseif (is_home() && !is_front_page()):
			bloginfo('stylesheet_directory'); echo $blog_overlay ?>'), url('<?php bloginfo('stylesheet_directory'); echo $blog_background ;
		elseif ( is_category( $category ='film') ):
			bloginfo('stylesheet_directory'); echo $film_overlay ?>'), url('<?php bloginfo('stylesheet_directory'); echo $film_background ;
		elseif ( is_category( $category ='writing') ):
			bloginfo('stylesheet_directory'); echo $writing_overlay ?>'), url('<?php bloginfo('stylesheet_directory'); echo $writing_background ;
		elseif ( is_category( $category ='design') ):
			bloginfo('stylesheet_directory'); echo $design_overlay ?>'), url('<?php bloginfo('stylesheet_directory'); echo $design_background ;
		elseif ( is_category( $category ='web') or is_category( $category ='games') ):
			bloginfo('stylesheet_directory'); echo $code_overlay ?>'), url('<?php bloginfo('stylesheet_directory'); echo $code_background ;
		elseif ( in_category( $category ='film') ):
			bloginfo('stylesheet_directory'); echo $film_overlay ?>'), url('<?php bloginfo('stylesheet_directory'); echo $film_background ;
		elseif ( in_category( $category ='writing') ):
			bloginfo('stylesheet_directory'); echo $writing_overlay ?>'), url('<?php bloginfo('stylesheet_directory'); echo $writing_background ;
		elseif ( in_category( $category ='design') ):
			bloginfo('stylesheet_directory'); echo $design_overlay ?>'), url('<?php bloginfo('stylesheet_directory'); echo $design_background ;
		elseif ( in_category( $category ='web') or in_category( $category ='games')):
			bloginfo('stylesheet_directory'); echo $code_overlay ?>'), url('<?php bloginfo('stylesheet_directory'); echo $code_background ;
		elseif ( is_404() ):
			bloginfo('stylesheet_directory'); echo $construction_overlay ?>'), url('<?php bloginfo('stylesheet_directory'); echo $construction_background ;
		else :
			bloginfo('stylesheet_directory'); echo $cb_overlay ?>'), url('<?php bloginfo('stylesheet_directory'); echo $cb_backgroound ;
	endif; ?>');">
			
</div><!-- col-left -->

