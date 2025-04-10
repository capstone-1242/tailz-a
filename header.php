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

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

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

	<style>
		.paw:hover {
			cursor: url("<?php echo get_template_directory_uri(); ?>/images/cursor/paw-inflate-38.png"), auto !important;
		}
	</style>


	<?php wp_head(); ?>

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

					<a class="paw" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
						<?= the_custom_logo(); ?>
						<img class="header-logo" src="<?= get_template_directory_uri() ?>/images/logo/tailz-transperant-logo.png" alt="Logo">
					</a>

					<div>
						<?php
						wp_nav_menu(array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'menu_class'     => 'main-menu',
							'container'      => 'ul',

						));
						?>
					</div>

					<!-- Mobile View Menu -->
					<div class="mobile-view-menu">

						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
							<svg class="hamburger-icon" viewBox="0 0 100 80" width="30" height="30">
								<rect width="100" height="10"></rect>
								<rect y="30" width="100" height="10"></rect>
								<rect y="60" width="100" height="10"></rect>
							</svg>
						</button>

						<div class="mobile-nav-bar">
							
							<a href="<?php echo get_permalink(get_page_by_title('search')); ?>"><img src="<?= get_template_directory_uri() ?>/images/svg/search.svg" alt=""></a>
							<a href="<?php echo get_permalink(get_page_by_title('my account')); ?>"><img src="<?= get_template_directory_uri() ?>/images/svg/user.svg" alt=""></a>
							<a href="<?php echo get_permalink(get_page_by_title('cart')); ?>"><img src="<?= get_template_directory_uri() ?>/images/svg/cart.svg" alt=""></a>
							
						</div>

					</div>

				</nav>
			<?php endif; ?>



		</header><!-- #masthead -->