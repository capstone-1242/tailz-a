<?php
/**
 * Template for displaying product content in the loop
 *
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

defined( 'ABSPATH' ) || exit;

global $product;
?>

<li <?php wc_product_class( '', $product ); ?>>
    <div class="product-card">
        <!-- Product Image -->
        <?php
        do_action( 'woocommerce_before_shop_loop_item' );
        ?>
        <a href="<?php the_permalink(); ?>">
            <?php
            /**
             * Hook: woocommerce_before_shop_loop_item_title.
             *
             * @hooked woocommerce_show_product_loop_sale_flash - 10
             * @hooked woocommerce_template_loop_product_thumbnail - 10
             */
            do_action( 'woocommerce_before_shop_loop_item_title' );
            ?>
        </a>

        <!-- Product Title -->
        <?php 
$title = get_the_title();
$max_length = 12;

if (strlen($title) > $max_length) {
    $title = substr($title, 0, $max_length) . '...';
}
?>
<h2 class="woocommerce-loop-product__title"><?php echo $title; ?></h2>


        <!-- Product Rating -->
        <div class="product-rating">
            <?php echo wc_get_rating_html( $product->get_average_rating() ); ?>
        </div>

        <!-- Product Price -->
        <span class="price"><?php echo $product->get_price_html(); ?></span>

        <!-- Add to Cart Button -->
        <?php
        // do_action( 'woocommerce_after_shop_loop_item' );
        ?>
    </div>
</li>
