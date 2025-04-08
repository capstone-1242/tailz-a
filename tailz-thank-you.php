<?php
/*
Template Name: Tailz Thank You for Booking
*/
get_header();
?>

<section class="short-hero-banner"
    style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('<?php echo get_template_directory_uri(); ?>/images/hero/dogs-on-chair.webp') center/cover no-repeat;">
    <div class="hero-content">
        <h2>THANK YOU FOR BOOKING</h2>
        <p>Your furry friend will be pampered in no time!</p>
    </div>
</section>


<section class="thank-you-section" style="text-align: center; padding: 4rem 1rem;">
    <h2>We're so excited to see you soon!</h2>
    <p>Your appointment has been received and our team is already wagging their tails to meet your pet.</p>
    <p>If you need to make changes, feel free to <a href="<?php echo get_permalink(get_page_by_title('contact us')); ?>">contact us</a>.</p>

    <a href="<?php echo home_url(); ?>">
        <button class="blue-btn paw" style="margin-top: 2rem;">Back to Home</button>
    </a>
</section>

<?php get_footer(); ?>
