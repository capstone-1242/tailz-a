<?php
/*
Template Name: Tailz Amenities
*/
get_header();
?>


<h1><?php echo 'Tailz' . Get_the_title(); ?></h1>

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

<!-- Amenities Blocks -->
<div class="amenities-wrapper">

  <!-- The Barkery -->
  <section class="amenity-block">
    <div class="amenity-image">
      <img src="<?php echo esc_url(get_field('barkery_image')); ?>" alt="The Barkery">
    </div>
    <div class="amenity-text">
      <h2>The Barkery</h2>
      <p>An in-house bakery offering freshly-baked dog treats for your pups! You can bring our treats to your own home through our online store as well.</p>
      <div class="button-right"><a href="<?php echo home_url('/store/'); ?>" class="btn-yellow">Purchase Now</a></div>
    </div>
  </section>

  <!-- Sanitary -->
  <section class="amenity-block reverse beige-bg">
    <div class="amenity-image">
      <img src="<?php echo esc_url(get_field('sanitary_image')); ?>" alt="Sanitary Zone">
    </div>
    <div class="amenity-text">
      <h2>Sanitary</h2>
      <p>The new location has built-in sanitary wall paneling and specialized flooring, allowing for accidents caused by pets to be cleaned up quickly and completely, maintaining a sanitary zone for your pets.</p>
    </div>
  </section>

  <!-- Outdoor Area -->
  <section class="amenity-block">
    <div class="amenity-image">
      <img src="<?php echo esc_url(get_field('outdoor_image')); ?>" alt="Outdoor Area">
    </div>
    <div class="amenity-text">
      <h2>Outdoor Area</h2>
      <p>The new location has a large fenced-off outdoor play area, allowing for your pets to roam in the fresh air safely during their daycare experience!</p>
      <div class="button-right"><a href="<?php echo home_url('/doggy-daycare/'); ?>" class="btn-yellow">View Daycare</a></div>
    </div>
  </section>

  <!-- Indoor Pool -->
  <section class="amenity-block reverse beige-bg">
    <div class="amenity-image">
      <img src="<?php echo esc_url(get_field('pool_image')); ?>" alt="Indoor Pool">
    </div>
    <div class="amenity-text">
      <h2>Indoor Pool</h2>
      <p>Imagine a safe, supervised space where your pet can cool off and enjoy a refreshing bath in a pool built just for them. Give your pet a taste of luxury, because every pet deserves a little splash of joy!</p>
      <div class="button-right"><a href="<?php echo home_url('/contact-us/'); ?>" class="btn-purple">Daycare Bathing</a></div>
    </div>
  </section>

</div>

<?php get_footer(); ?>
