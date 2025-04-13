<?php

/**
 * My Account page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/my-account.php.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

defined('ABSPATH') || exit;
?>

<div class="woocommerce-account-wrapper" style="max-width: 1200px; margin:  auto ; padding: 3rem 20px; display: flex; flex-wrap: wrap; gap: 30px; box-sizing: border-box;">

    <!-- <aside class="woocommerce-account-nav">

    </aside> -->
    <main class="woocommerce-MyAccount-content">
        <?php
        /**
         * My Account content.
         *
         * @since 2.6.0
         */
        do_action('woocommerce_account_content');
        ?>

        
    </main>


</div>