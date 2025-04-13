<?php

/**
 * The Template for displaying product archives (shop page)
 *
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;

get_header('shop');
?>

<section class="short-hero-banner"
	style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.15)), 
           url('<?php echo get_template_directory_uri(); ?>/images/hero/dogs-on-chair.webp') center/cover no-repeat;">
	<div class="hero-content">
		<h2>Shop Tailz</h2>
	</div>
</section>

<div class="shop-welcome-intro">
	<p>Welcome to Tailz Pet Store—your go-to spot for premium pet products. From food to accessories, we have everything your furry friends need. Shop now and treat your pets to the best!</p>

	<h2>Categories</h2>
</div>

<!-- Sidebar with Filters -->

<aside class="shop-sidebar">
	<!-- Product Categories -->
	<div class="widget">
		<?php
		$terms = get_terms(array(
			'taxonomy'   => 'product_cat',
			'hide_empty' => false,
			'parent'     => 0,
		));

		if (!empty($terms) && !is_wp_error($terms)) : ?>
			<div class="category-thumbnails-grid">
				<?php foreach ($terms as $term) :
					$thumbnail_id = get_term_meta($term->term_id, 'thumbnail_id', true);
					$image_url = wp_get_attachment_url($thumbnail_id);
					$image_url = $image_url ? $image_url : wc_placeholder_img_src();
					$term_link = get_term_link($term);
				?>
					<a href="<?php echo esc_url($term_link); ?>" class="category-card">
						<img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($term->name); ?>" />
						<span><?php echo esc_html($term->name); ?></span>
					</a>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>

	<!-- Price Filter -->
</aside>

<div class="shop-container">
	<!-- Main Content -->
	<main class="shop-main">
		<!-- Shop Toolbar (Sort and Results) -->
		<div class="shop-toolbar">

			<!-- Results Count and Sort Dropdown -->
			<div class="results-count">
				<?php woocommerce_result_count(); ?>
			</div>

			<div class="sort-dropdown">
				<?php woocommerce_catalog_ordering(); ?>
			</div>

			

		</div>

		<?php
		if (woocommerce_product_loop()) :
			echo '<div class="products-grid">';
			while (have_posts()) :
				the_post();
				
				wc_get_template_part('content', 'product');
			endwhile;
			echo '</div>';
			do_action('woocommerce_after_shop_loop');
		else :
			do_action('woocommerce_no_products_found');
		endif;
		?>

	</main>
</div>

<script>
	document.addEventListener('DOMContentLoaded', function() {
		const toggleButton = document.querySelector('.filter-toggle-button');
		const dropdown = document.querySelector('.filter-dropdown');

		toggleButton.addEventListener('click', () => {
			dropdown.style.display = dropdown.style.display === 'none' ? 'block' : 'none';
		});
	});
</script>

<?php get_footer('shop'); ?>