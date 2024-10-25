<?php
/* Template Name: Homepage */

get_header();
?>

	<div id="primary" class="content-area">

			<?php get_template_part('template-parts/content', 'leftcolumn'); ?>

			<div class="col-right">

				<section id="hero" class="fullheight vcenterbox align-center">
					<div class ="splash-title">
						<h1 class="banner-title"><?php bloginfo('name'); ?></h1>

						<p class="lead-text"><?php bloginfo('description'); ?></p>
					</div>


					<!--<a class="arrow-container animated fadeInDown" href="#about">
	  					<div class="arrow-2">
	    					<img class="icon" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/angle-down-solid.svg">
	  					</div>
	  					<div class="arrow-1 animated hinge infinite zoomIn"></div>
					</a>-->

				</section><!-- hero -->
			</div><!-- col-right -->
	</div><!-- #primary -->

<?php
get_footer();
