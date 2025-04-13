<?php
/**
 * My Account Dashboard
 * 
 * Shows the first section when a user visits the My Account page.
 * 
 * @version 3.5.0
 */

defined('ABSPATH') || exit;

?>

<div class="my-account-custom-dashboard">

    <h2>Welcome back, <?php echo esc_html( wp_get_current_user()->display_name ); ?>! 🐾</h2>

    <p class="account-intro">
        From here, you can manage your account, view your orders, and edit your details.
    </p>

    <div class="account-actions">
        <a class="button" href="<?php echo esc_url( wc_get_account_endpoint_url( 'orders' ) ); ?>">View Orders</a>
        <a class="button" href="<?php echo esc_url( wc_get_account_endpoint_url( 'edit-account' ) ); ?>">Edit Account</a>
        <a class="button" href="<?php echo esc_url( wc_get_account_endpoint_url( 'edit-address' ) ); ?>">Addresses</a>
        <a class="button" href="<?php echo wp_logout_url( get_permalink() ); ?>">Logout</a>

    </div>

</div>

