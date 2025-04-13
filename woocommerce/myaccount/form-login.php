<?php

/**
 * Login Form Template
 *
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

defined('ABSPATH') || exit;

do_action('woocommerce_before_customer_login_form');

if (is_user_logged_in()) {
    return;
}
?>

<div class="woocommerce-login-wrapper">
    <h2>🔐 Login to Your Account</h2>

    <form method="post" class="woocommerce-form woocommerce-form-login login">
        <?php do_action('woocommerce_login_form_start'); ?>

        <p class="form-row form-row-wide">
            <label for="username">Username or email&nbsp;<span class="required">*</span></label>
            <input type="text" class="input-text" name="username" id="username" autocomplete="username" />
        </p>

        <p class="form-row form-row-wide">
            <label for="password">Password&nbsp;<span class="required">*</span></label>
            <input class="input-text" type="password" name="password" id="password" autocomplete="current-password" />
        </p>

        <?php do_action('woocommerce_login_form'); ?>

        <p class="form-row">
            <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span>Remember me</span>
            </label>
            <input type="hidden" name="redirect" value="<?php echo esc_url(wc_get_page_permalink('myaccount')); ?>" />
            <button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="Login">Log in</button>
        </p>

        <p class="woocommerce-LostPassword lost_password">
            <a href="<?php echo esc_url(wp_lostpassword_url()); ?>">Lost your password?</a>
        </p>
        <p class="woocommerce-signup-link" style="text-align: center; margin-top: 1rem;">
            Don't have an account?
            <a href="<?php echo esc_url(wc_get_page_permalink('myaccount')); ?>#customer_login">Sign up here</a>.
        </p>

    </form>
</div>

<style>
    .woocommerce-login-wrapper {
        max-width: 400px;
        margin: 0 auto;
        padding: 2rem;
        background: #fff;
        border: 1px solid #eee;
        border-radius: 8px;
    }

    .woocommerce-login-wrapper h2 {
        text-align: center;
        margin-bottom: 1.5rem;
    }

    .woocommerce-form .form-row {
        margin-bottom: 1.25rem;
    }

    .woocommerce-form label {
        display: block;
        margin-bottom: 0.5rem;
    }

    .woocommerce-form input[type="text"],
    .woocommerce-form input[type="password"] {
        width: 100%;
        padding: 0.6rem;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .woocommerce-form .button {
        background: #0073aa;
        color: #fff;
        padding: 0.7rem 1.2rem;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .woocommerce-form .button:hover {
        background: #005d88;
    }
</style>