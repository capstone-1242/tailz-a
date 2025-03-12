<?php
/*
Template Name: Tailz Dog training
*/
get_header();

?>

<!-- Tailz home page content -->
<div class="tailz-dog-training-content">




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
    <section>

        <h2>Training</h2>

        <h3>Puppy Training</h3>

        <p>The early months of a puppy are critical to them, as early socialization and care will heavily reduce fears and anxieties affecting them in the future.</p>

    </section>

    <!-- second section -->
    <section>
        <h3>Adult Training</h3>
        Dog too rowdy for your household? We can help! We use positive reinforcement to help show your dog how to behave properly and to follow commands.
    </section>


</div>

<?=
get_footer();
?>