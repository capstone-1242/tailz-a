<?php
defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form();
	return;
}
?>

<div id="product-<?php the_ID(); ?>" <?php wc_product_class( 'single-product-wrapper', $product ); ?>>

    <div class="product-grid">
        <div class="product-image">
            <?php
            /**
             * Hook: woocommerce_before_single_product_summary.
             *
             * This usually displays the sale badge and product images.
             */
            do_action( 'woocommerce_before_single_product_summary' );
            ?>
        </div>

        <div class="product-summary">
            <?php
            /**
             * Hook: woocommerce_single_product_summary.
             *
             * This displays title, rating, price, excerpt, add-to-cart button, meta, sharing, etc.
             */
            do_action( 'woocommerce_single_product_summary' );
            ?>
        </div>
    </div>

    <div class="product-tabs">
        <?php
        /**
         * Hook: woocommerce_after_single_product_summary.
         *
         * This usually shows tabs, upsells, and related products.
         */
        do_action( 'woocommerce_after_single_product_summary' );
        ?>
    </div>

</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
