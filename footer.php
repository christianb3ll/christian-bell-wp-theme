<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Christian_Bell
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container">

			<!-- Social Icons -->
			<div class="social-footer-links">
				<a href="https://www.linkedin.com/in/christian-bell-512934195/"><img class="icon" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/linkedin-brands-solid.svg" alt="LinkedIn"></a>
				<a href="https://github.com/christianb3ll"><img class="icon" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/square-github-brands-solid.svg" alt="GitHub"></a>
				<a href="https://piiego.itch.io/"><img class="icon" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/itch-io-brands-solid.svg" alt="Itch.io"></a>
			</div><!-- social-footer-links -->

			<!-- copyright -->
			<div class="copyright">
				<small>&copy; <?php echo date('Y'); ?> </small><span class="copyright-logo">Christian Bell</span>
			</div><!-- copyright -->

		</div><!-- container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
