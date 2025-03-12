<?php
/*
Template Name: Tailz Photograpy
*/
get_header();

?>

<!-- Tailz home page content -->
<div class="tailz-photograpy-content">




    <h1><?php echo 'Tailz' . Get_the_title(); ?></h1>


    <!--  banner image -->

    <section class="hero-banner">

        <?php if (get_field('h')) : ?>

            <div> <img src="<?php echo the_field(''); ?>"></div>

        <?php else : ?>

            <div> <img src="" alt=""></div>

        <?php endif; ?>

    </section>

    <!-- banner image end -->


    <!-- first section -->
    <section>

        <?php if (get_field('photography_heading')) : ?>
            <h2><?php the_field('photography_heading'); ?></h2>
        <?php else : ?>
            <h2>Seasonal Photographs</h2> <!-- Default fallback heading -->
        <?php endif; ?>

        <?php if (get_field('photography_content')) : ?>
            <p><?php the_field('photography_content'); ?></p>
        <?php else : ?>
            <p>Professional Pet Photography
                We offer seasonal props for seasonal photos to capture your pet enjoying the current festivities!</p> <!-- Default fallback content -->
        <?php endif; ?>


    </section>

    <!-- second section -->
    <section>

        <h2> Pet Photography</h2>

        <p>Photography</p>
        <p>Professional photos for your pets.</p>
        <p>Seasonal Photography</p>
        <p>On holidays and special events, we transform one of our rooms into a themed photo studio! We offer festive holiday</p>

    </section>

    <!-- third section -->
    <section>

    </section>

    <!-- fourth section -->
    <section>

    </section>


</div>

<?=
get_footer();
?>