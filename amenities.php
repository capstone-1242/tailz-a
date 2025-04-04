<?php
/*
Template Name: Tailz amenities
*/
get_header();

?>

<!-- Tailz amenities content -->
<div class="tailz-amenities-content">

    <h1><?php echo 'Tailz' . Get_the_title(); ?></h1>

    <!--  banner image -->

    <section class="hero-banner">

        <?php if (get_field('')) : ?>

            <div> <img src="<?php echo the_field(''); ?>"></div>

        <?php else : ?>

            <div> <img src="" alt=""></div>

        <?php endif; ?>

    </section>

    <!-- banner image end -->


    <!-- first section -->
    <h2>Amenities</h2>
    <!-- <p>Barkery > sanitary > outdoor > pool</p> -->
    <section class="section-container">
        <div>
            <h3>The Barkery</h3>
            <p>
                An in-house bakery offering freshly-baked dog treats for your pups! You can bring our treats to your own home through our online store as well.
            </p>
            <a href="#" class="no-decoration"><div class="custom-button-bottom blue-colors"><div class="custom-button">PURCHASE NOW</div></div></a>
        </div>
        <img src="">
    </section>
    <!-- second section -->
    <section class="section-container">
        <img src="">
        <div>
            <h3>Sanitary</h3>
            <p>The new location has built-in sanitary wall paneling and specialized flooring, allowing for ‘accidents’ caused by pets to be cleaned up quickly and completely, maintaining a sanitary zone for your pets.</p>
        </div>
    </section>
    <!-- third section -->
    <section class="section-container">
        <div>
            <h3>Outdoor Area</h3>
            <p>The new location has a large fenced off outdoor play area, allowing for your pets to roam in the fresh air safely during their daycare experience!</p>
        </div>
        <img src="">
    </section>

    <!-- fourth section -->
    <section class="section-container">
        <img src="">
        <div>
            <h3> Indoor Pool</h3>
            <p>Imagine a safe, supervised space where your pet can cool off and enjoy a refreshing bath in a pool built just for them. Our newly added pool isn’t just for splashing around, it’s designed to make bath time fun!</p>
            <p>Give your pet a taste of luxury, because every pet deserves a little splash of joy!</p>
        </div>
    </section>








</div>

<?=
get_footer();
?>