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

<div class="shop-welcome-intro" >
	<p >Welcome to Tailz Pet Store—your go-to spot for premium pet products. From food to accessories, we have everything your furry friends need. Shop now and treat your pets to the best!</p>
	
	<h2>Products</h2>
</div>

<div class="shop-container">

	<!-- Sidebar with Filters -->
	<aside class="shop-sidebar">
		<!-- <h2>Filters</h2> -->

		<!-- Product Categories -->
		<div class="widget">
			<!-- <h3 class="widget-title">Categories</h3> -->
			<?php the_widget('WC_Widget_Product_Categories'); ?>
		</div>

		<!-- Price Filter -->
		<div class="widget">
			<!-- <h3 class="widget-title">Price</h3> -->
			<?php the_widget('WC_Widget_Price_Filter'); ?>
		</div>
	</aside>

	<!-- Main Content -->
	<main class="shop-main">
		<!-- Shop Toolbar (Sort and Results) -->
		<div class="shop-toolbar">
			<div class="results-count">
				<?php // Show result count
				woocommerce_result_count();
				?>
			</div>
			<div class="sort-dropdown">
				<?php // Show sort by dropdown
				woocommerce_catalog_ordering();
				?>
			</div>
		</div>

		<?php
if (woocommerce_product_loop()) :

    // do_action( 'woocommerce_before_shop_loop' );

    echo '<div class="products-grid">';

    while (have_posts()) :
        the_post();
        
        // Get product details
        wc_get_template_part('content', 'product');


    endwhile;

    echo '</div>';

    do_action('woocommerce_after_shop_loop');

else :
    do_action('woocommerce_no_products_found');
endif;

do_action('woocommerce_after_main_content');
?>

	</main>
</div>

<?php get_footer('shop'); ?>