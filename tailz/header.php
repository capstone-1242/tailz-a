<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tailz
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta name="description" content="Tailz is a pet resort that offers
	grooming, daycare, overnight lodging, products, and training services.">
	<meta name="keywords" content="pet resort, grooming, daycare, overnight lodging, products, training, Edmonton">
	<meta name="author" content="Tailz | Code catalyst">
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-XGERCH5WEY"></script>
	
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'G-XGERCH5WEY');
	</script>

</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'tailz'); ?></a>


		<header id="masthead" class="site-header">



			<?php
			the_custom_logo();
			if (is_front_page() && is_home()) :
			?>
				<h1 class="site-title">
					<a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
				</h1>

			<?php else : ?>

				<p class="site-title	">
					<a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?>
					</a>
				</p>





				<nav id="site-navigation" class="main-navigation">

					<p><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></p></a>

					<?php
					wp_nav_menu(array(
						'theme_location' => 'menu-1',  // This should match the key used in the register_nav_menus() function
						'menu_id'        => 'primary-menu',
					));

					?>

				</nav><!-- #site-navigation -->

			<?php endif; ?>



		</header><!-- #masthead -->