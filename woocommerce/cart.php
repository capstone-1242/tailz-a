<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Ensure that WooCommerce is loaded
if (!class_exists('WooCommerce')) {
    return;
}

do_action('woocommerce_before_cart'); // Action before cart starts

?>
<div class="custom-cart-container">
    <h1><?php esc_html_e('Your Shopping Cart', 'woocommerce'); ?></h1>

    <?php if (WC()->cart->is_empty()) : ?>
        <p class="cart-empty"><?php esc_html_e('Your cart is currently empty.', 'woocommerce'); ?></p>
    <?php else : ?>

        <form action="<?php echo esc_url(wc_get_cart_url()); ?>" method="post">
            <?php do_action('woocommerce_before_cart_table'); ?>

            <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
                <thead>
                    <tr>
                        <th class="product-remove">&nbsp;</th>
                        <th class="product-name"><?php esc_html_e('Product', 'woocommerce'); ?></th>
                        <th class="product-price"><?php esc_html_e('Price', 'woocommerce'); ?></th>
                        <th class="product-quantity"><?php esc_html_e('Quantity', 'woocommerce'); ?></th>
                        <th class="product-subtotal"><?php esc_html_e('Subtotal', 'woocommerce'); ?></th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) :
                        $_product = $cart_item['data'];
                        $product_id = $cart_item['product_id'];
                    ?>
                        <tr class="woocommerce-cart-form__cart-item cart_item">
                            <td class="product-remove">
                                <?php
                                echo apply_filters(
                                    'woocommerce_cart_item_remove_link',
                                    sprintf(
                                        '<a href="%s" class="remove" aria-label="%s" data-product_id="%d" data-product_sku="%s">&times;</a>',
                                        esc_url(WC()->cart->get_remove_url($cart_item_key)),
                                        esc_attr__('Remove this item', 'woocommerce'),
                                        esc_attr($product_id),
                                        esc_attr($_product->get_sku())
                                    ),
                                    $cart_item_key
                                );
                                ?>
                            </td>
                            <td class="product-name">
                                <?php echo $_product->get_name(); ?>
                            </td>
                            <td class="product-price">
                                <?php echo WC()->cart->get_product_subtotal($_product, $cart_item['quantity']); ?>
                            </td>
                            <td class="product-quantity">
                                <?php
                                woocommerce_quantity_input(
                                    array(
                                        'input_name'  => 'cart[' . $cart_item_key . '][qty]',
                                        'input_value' => $cart_item['quantity'],
                                        'max_value'   => $_product->get_max_purchase_quantity(),
                                        'min_value'   => '0',
                                    ),
                                    $_product,
                                    false
                                );
                                ?>
                            </td>
                            <td class="product-subtotal">
                                <?php echo WC()->cart->get_product_subtotal($_product, $cart_item['quantity']); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <?php do_action('woocommerce_after_cart_table'); ?>

            <div class="cart-collaterals">
                <?php do_action('woocommerce_cart_collaterals'); ?>
            </div>
        </form>

    <?php endif; ?>
</div>

<?php
do_action('woocommerce_after_cart'); // Action after cart ends
