<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Christian_Bell
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#b91d47">
	<meta name="theme-color" content="#ffffff">
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-159834995-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-159834995-1');
	</script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="preload">
	<img id='loading' src='<?php bloginfo('stylesheet_directory'); ?>/assets/img/loading.gif'>
</div>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'christian-bell' ); ?></a>

	<header id="masthead" class="site-header">
		
		<div class="header-container">
		
			<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a>

			<div id="nav-toggle">
				<div>
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
		</div>
		
		<!-- Navigation -->
		<?php
			wp_nav_menu( array(

				'theme_location'	=> 'menu-1',
				'container'			=> 'nav',
				'container_id'		=> 'primary-navigation',
				'container_class'	=> 'fullheight vcenterbox',
				'menu_class'		=> 'valign'
			) );
		?>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
