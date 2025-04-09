<?php
defined('ABSPATH') || exit;

get_header();

// do_action('woocommerce_before_main_content');

// Breadcrumb in a container
?>
<div class="breadcrumb-container" style="max-width: 1200px; margin: 0 auto; padding: 1rem;">
	<?php woocommerce_breadcrumb(); ?>
</div>

<?php
do_action('woocommerce_shop_loop_header');
?>

<section class="homepage-products" style="max-width: 1200px; margin: 0 auto; padding: 1rem;">
	<h2><?php woocommerce_page_title(); ?></h2>

	<?php
	// Category list without images
	$product_categories = get_terms([
		'taxonomy'   => 'product_cat',
		'hide_empty' => true,
	]);

	if (! empty($product_categories) && ! is_wp_error($product_categories)) : ?>
		<section class="shop-category-text-section">
			<h2 class="shop-category-title">Browse Categories</h2>
			<div class="shop-category-text-grid">
				<?php foreach ($product_categories as $category) :
					if ($category->slug === 'uncategorized') {
						continue;
					}
				?>

					<a href="<?php echo esc_url(get_term_link($category)); ?>" class="shop-category-text-card">
						<?php echo esc_html($category->name); ?>
					</a>
				<?php endforeach; ?>
			</div>
		</section>
	<?php endif; ?>


	<?php if (woocommerce_product_loop()) : ?>

		<?php do_action('woocommerce_before_shop_loop'); ?>

		<div class="product-cards">
			<?php while (have_posts()) : the_post(); ?>
				<div class="product-card">
					<?php
					do_action('woocommerce_shop_loop');
					global $product;
					?>
					<a href="<?php the_permalink(); ?>">
						<?php if (has_post_thumbnail()) : ?>
							<?php the_post_thumbnail('medium'); ?>
						<?php else : ?>
							<img src="<?php echo wc_placeholder_img_src(); ?>" alt="<?php the_title(); ?>" />
						<?php endif; ?>
						<h3><?php the_title(); ?></h3>
						<p><?php echo $product->get_price_html(); ?></p>
					</a>
				</div>
			<?php endwhile; ?>
		</div>

		<?php do_action('woocommerce_after_shop_loop'); ?>

	<?php else : ?>
		<?php do_action('woocommerce_no_products_found'); ?>
	<?php endif; ?>
</section>

<?php
do_action('woocommerce_after_main_content');
get_footer('shop');
?>