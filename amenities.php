<?php
/*
Template Name: Tailz Amenities
*/
get_header();
?>

<h1><?php echo 'Tailz ' . get_the_title(); ?></h1>

<!-- Hero Banner -->
<section class="hero-banner"
    style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0, 0, 0, 0.15)), 
           url('<?php echo esc_url(get_field('amenities_hero_image')); ?>') center/cover no-repeat;">
    <div class="hero-content">
        <h2>AMENITIES</h2>
    </div>
</section>

<!-- Main Amenities Sections -->
<div class="tailz-homepage-content">

    <!-- The Barkery -->
    <section class="homepage-section">
        <div class="section-container">
            <div class="image-wrapper">
                <img src="<?php echo esc_url(get_field('barkery_image')); ?>" alt="The Barkery">
            </div>
            <div class="content-wrapper">
                <h2>The Barkery</h2>
                <p>An in-house bakery offering freshly-baked dog treats for your pups! You can bring our treats to your own home through our online store as well.</p>
                <a href="<?php echo home_url('/store/'); ?>" class="no-decoration">
                    <div class="custom-button-bottom yellow-colors">
                        <div class="custom-button">Purchase Now</div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Sanitary -->
    <section class="homepage-section reverse">
        <div class="section-container">
            <div class="image-wrapper">
                <img src="<?php echo esc_url(get_field('sanitary_image')); ?>" alt="Sanitary Area">
            </div>
            <div class="content-wrapper beige">
                <h2>Sanitary</h2>
                <p>The new location has built-in sanitary wall paneling and specialized flooring, allowing for accidents caused by pets to be cleaned up quickly and completely, maintaining a sanitary zone for your pets.</p>
            </div>
        </div>
    </section>

    <!-- Outdoor Area -->
    <section class="homepage-section">
        <div class="section-container">
            <div class="image-wrapper">
                <img src="<?php echo esc_url(get_field('outdoor_image')); ?>" alt="Outdoor Area">
            </div>
            <div class="content-wrapper">
                <h2>Outdoor Area</h2>
                <p>The new location has a large fenced-off outdoor play area, allowing your pets to roam in the fresh air safely during their daycare experience!</p>
                <a href="<?php echo home_url('/doggy-daycare/'); ?>" class="no-decoration">
                    <div class="custom-button-bottom blue-colors">
                        <div class="custom-button">View Daycare</div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Indoor Pool -->
    <section class="homepage-section reverse">
        <div class="section-container">
            <div class="image-wrapper">
                <img src="<?php echo esc_url(get_field('pool_image')); ?>" alt="Indoor Pool">
            </div>
            <div class="content-wrapper beige">
                <h2>Indoor Pool</h2>
                <p>Imagine a safe, supervised space where your pet can cool off and enjoy a refreshing bath in a pool built just for them. Give your pet a taste of luxury, because every pet deserves a little splash of joy!</p>
                <a href="<?php echo home_url('/contact-us/'); ?>" class="no-decoration">
                    <div class="custom-button-bottom purple-colors">
                        <div class="custom-button">Daycare Bathing</div>
                    </div>
                </a>
            </div>
        </div>
    </section>

</div>

<?php get_footer(); ?>
