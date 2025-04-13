<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Tailz is a pet resort that offers grooming, daycare, overnight lodging, products, and training services.">
	<meta name="keywords" content="pet resort, grooming, daycare, overnight lodging, products, training, Edmonton">
	<meta name="author" content="Tailz | Code Catalyst">

	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" media="all">

	<!-- Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-XGERCH5WEY"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());
		gtag('config', 'G-XGERCH5WEY');
	</script>

	<!-- Custom Cursors -->
	<style>
		.custom-button:hover,
		.paw:hover {
			cursor: url("<?php echo get_template_directory_uri(); ?>/images/cursor/paw-inflate-38.png"), auto !important;
		}
	</style>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to main content', 'tailz'); ?></a>

		<header id="masthead" class="site-header" role="banner">
			<?php the_custom_logo(); ?>
			<?php if (is_front_page() && is_home()) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
			<?php endif; ?>

			<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="Main site navigation">
				<a class="paw" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Go to homepage">
					<img class="header-logo" src="<?= get_template_directory_uri() ?>/images/logo/tailz-transperant-logo.png" alt="Tailz logo" loading="lazy">
				</a>

				<div class="nav-search-box">
					<a id="openSearchModal" class="search-icon-button" href="#" aria-label="Open search modal">
						<img src="<?= get_template_directory_uri() ?>/images/svg/search.svg" alt="Search icon" style="max-width:2rem;" loading="lazy">
					</a>

					<?php
					wp_nav_menu(array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'menu_class'     => 'main-menu',
						'container'      => 'ul',
						'container_aria_label' => 'Primary site menu',
					));
					?>
				</div>

				<!-- Mobile Navigation -->
				<div class="mobile-view-menu">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" aria-label="Toggle mobile menu">
						<svg class="hamburger-icon" viewBox="0 0 100 80" width="30" height="30" role="img" aria-hidden="true" focusable="false">
							<rect width="100" height="10"></rect>
							<rect y="30" width="100" height="10"></rect>
							<rect y="60" width="100" height="10"></rect>
						</svg>
					</button>

					<div class="mobile-nav-bar" aria-label="Mobile navigation links">
						<a id="mobileOpenSearchModal" class="search-icon-button" href="#" aria-label="Open search modal">
							<img src="<?= get_template_directory_uri() ?>/images/svg/search.svg" alt="Search icon" loading="lazy">
						</a>
						<a href="<?php echo get_permalink(get_page_by_title('my account')); ?>" aria-label="Go to My Account">
							<img src="<?= get_template_directory_uri() ?>/images/svg/user.svg" alt="User icon" loading="lazy">
						</a>
						<a href="<?php echo get_permalink(get_page_by_title('cart')); ?>" aria-label="View your cart">
							<img src="<?= get_template_directory_uri() ?>/images/svg/cart.svg" alt="Cart icon" loading="lazy">
						</a>
						<a href="<?php echo get_permalink(get_page_by_title('shop')); ?>" aria-label="Visit our shop">
							<img src="<?= get_template_directory_uri() ?>/images/svg/shop.svg" alt="Shop icon" loading="lazy">
						</a>
					</div>
				</div>
			</nav>
		</header>

		<!-- Search Modal -->
		<div id="searchModal" class="search-modal" role="dialog" aria-modal="true" aria-labelledby="search-modal-title" style="display:none;">
			<div class="search-modal-content">
				<h2 id="search-modal-title" class="screen-reader-text">Search this site</h2>
				<button id="closeSearchModal" class="close-search-modal" aria-label="Close search modal">×</button>
				<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
					<label for="search-input" class="screen-reader-text">Search for:</label>
					<input id="search-input" type="search" class="search-field" placeholder="Search…" value="<?php echo get_search_query(); ?>" name="s" />
					<button type="submit" class="search-submit">Search</button>
				</form>
			</div>
		</div>


		<script>
			document.addEventListener('DOMContentLoaded', function () {
				const modal = document.getElementById("searchModal");
				const openButtons = [document.getElementById("openSearchModal"), document.getElementById("mobileOpenSearchModal")];
				const closeBtn = document.getElementById("closeSearchModal");

				openButtons.forEach(btn => btn?.addEventListener("click", (e) => {
					e.preventDefault();
					modal.style.display = "block";
					document.getElementById("search-input").focus();
				}));

				closeBtn.addEventListener("click", () => {
					modal.style.display = "none";
				});

				window.addEventListener("click", (event) => {
					if (event.target === modal) modal.style.display = "none";
				});

				window.addEventListener("keydown", (event) => {
					if (event.key === "Escape") {
						modal.style.display = "none";
					}
				});
			});
		</script>
