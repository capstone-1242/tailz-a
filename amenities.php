<?php
/*
Template Name: Tailz Amenities
*/
get_header();
?>

<!-- Amenities Banner Section -->
<h1><?php echo 'Tailz ' . get_the_title(); ?></h1>

<?php
$hero_image = get_field('doggy_daycare_hero_image');
?>
<section class="short-hero-banner"
    style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0, 0, 0, 0.15)), 
           url('<?php echo esc_url($hero_image); ?>') center/cover no-repeat;">
    <div class="hero-content">
        <h2>Amenities</h2>
    </div>
</section>

<!-- Amenities Content Sections ------>
<div class="tailz-homepage-content">

    <!-- Barkery -->
    <section class="homepage-section">
        <div class="section-container">
            <div class="image-wrapper">
                <?php $barkery_image = get_field('barkery_image'); ?>
                <?php if ($barkery_image): ?>
                    <img src="<?php echo esc_url($barkery_image); ?>" alt="Barkery Image">
                <?php endif; ?>
            </div>
            <div class="content-wrapper">
                <h2>The Barkery</h2>
                <p>An in-house bakery offering freshly-baked dog treats for your pups! Bring our treats to your own home through our online store as well.</p>
                <a href="<?php echo home_url('/store/'); ?>"><button class="yellow-btn paw">Purchase Now</button></a>
            </div>
        </div>
    </section>

    <!-- Sanitary -->
    <section class="homepage-section">
        <div class="section-container">
            <div class="image-wrapper">
                <?php $sanitary_image = get_field('sanitary_image'); ?>
                <?php if ($sanitary_image): ?>
                    <img src="<?php echo esc_url($sanitary_image); ?>" alt="Sanitary Area">
                <?php endif; ?>
            </div>
            <div class="content-wrapper">
                <h2>Sanitary</h2>
                <p>The new location has built-in sanitary wall paneling and specialized flooring, allowing for quick, complete cleanup and a sanitary zone for your pets.</p>
            </div>
        </div>
    </section>

    <!-- Outdoor Area -->
    <section class="homepage-section">
        <div class="section-container">
            <div class="image-wrapper">
                <?php $outdoor_image = get_field('outdoor_image'); ?>
                <?php if ($outdoor_image): ?>
                    <img src="<?php echo esc_url($outdoor_image); ?>" alt="Outdoor Area">
                <?php endif; ?>
            </div>
            <div class="content-wrapper">
                <h2>Outdoor Area</h2>
                <p>Our large fenced-off outdoor play area allows your pets to roam in the fresh air safely during their daycare experience.</p>
                <a href="<?php echo home_url('/doggy-daycare/'); ?>"><button class="blue-btn paw">View Daycare</button></a>
            </div>
        </div>
    </section>

    <!-- Indoor Pool -->
    <section class="homepage-section">
        <div class="section-container">
            <div class="image-wrapper">
                <?php $pool_image = get_field('pool_image'); ?>
                <?php if ($pool_image): ?>
                    <img src="<?php echo esc_url($pool_image); ?>" alt="Indoor Pool">
                <?php endif; ?>
            </div>
            <div class="content-wrapper">
                <h2>Indoor Pool</h2>
                <p>Imagine a safe, supervised space where your pet can cool off and enjoy a refreshing bath in a pool built just for them. Because every pet deserves a little splash of joy!</p>
                <a href="<?php echo home_url('/contact-us/'); ?>"><button class="yellow-btn paw">Daycare Bathing</button></a>
            </div>
        </div>
    </section>
</div>

<!-- Newsletter Section -->
<article class="newsletter">
    <div class="newsletter-container">

        <div class="newsletter-image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/hero/dogs-on-chair.webp" alt="Newsletter Image">
        </div>

        <div class="newsletter-content">
            <h2>tailz newsletter</h2>
            <p>What’s the bark around Tailz? Find out for yourself!<br>Sign up for updates, alerts, special offers and more!</p>
            <div class="sign-up">
                <input type="email" placeholder="Enter your email address">
                <button class="">Subscribe</button>
            </div>
        </div>

    </div>
</article>

<?php get_footer(); ?>
