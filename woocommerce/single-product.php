<?php

/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if (! defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

get_header('shop'); ?>

<div class="single-product-container">

	<?php
	/**
	 * woocommerce_before_main_content hook.
	 *
	 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
	 * @hooked woocommerce_breadcrumb - 20
	 */
	do_action('woocommerce_before_main_content');
	?>


	<?php while (have_posts()) : ?>
		<?php the_post(); ?>

		<!-- Start of Product Details -->
		<div class="product-details">

			<div class="product-image-gallery">
				<!-- Product Main Image -->
				<div class="main-image">
					<?php
					global $product; // Ensure that the global product object is properly set
					// Display the main product image
					echo woocommerce_get_product_thumbnail();
					?>
				</div>

				<!-- Product Gallery -->
				<div class="product-gallery">
					<?php
					// Display product gallery images
					$attachment_ids = $product->get_gallery_image_ids();
					if ($attachment_ids) {
						foreach ($attachment_ids as $attachment_id) {
							echo wp_get_attachment_image($attachment_id, 'medium');
						}
					}
					?>
				</div>
			</div>

			<!-- Product Info -->
			<div class="product-info">

				<!-- Product Title -->
				<h2 class="product_title entry-title"><?php the_title(); ?></h2>


				<!-- Add to Cart Button and Quantity Input -->
				<div class="add-to-cart">
					<?php
					// Default action for adding to cart
					do_action('woocommerce_single_product_summary');
					?>
				</div>
			</div>

		</div>
		<!-- End of Product Details -->



	<?php endwhile; // end of the loop. 
	?>

</div>




<?php
/**
 * woocommerce_after_main_content hook.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action('woocommerce_after_main_content');
?>

<?php
/**
 * woocommerce_sidebar hook.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
// do_action( 'woocommerce_sidebar' );
?>

<div class="product-description">
	<div class="single-product-container">
		<?php the_content(); ?>
	</div>
</div>

<div class="related-products">
    <?php
    woocommerce_output_related_products();
    ?>
</div>


<?php
get_footer('shop'); ?>