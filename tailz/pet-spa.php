<?php
/*
Template Name: Tailz Pet Spa
*/
get_header();

?>

<!-- Tailz spa content -->
<div class="tailz-pet-spa-content">




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





    <!-- ACF section -->


    <?php if (get_field('pet_spa_first_block_heading')) : ?>

        <h2><?php the_field('pet_spa_first_block_heading'); ?></h2>

    <?php else : ?>

        <h2>Pet Spa & Grooming</h2> <!-- Default fallback heading -->

    <?php endif; ?>


    <?php if (get_field('pet_spa_first_block_content')) : ?>

        <p><?php the_field('pet_spa_first_block_content'); ?></p>

    <?php else : ?>

        <p>Welcome to edmontons first and only pet resort</p> <!-- Default fallback content -->

    <?php endif; ?>


    <!-- end acf section -->



    <!-- first section -->
    <section>

        <h2>Pet Spa</h2>

        <p>Policies</p>
        <!-- need info -->
        <p>What does grooming involve</p>
        <!-- need info -->
        <a><button>Book Now button</button></a>

        <h3>Pet Grooming</h3>

        <p>
            With the help of our expert pet stylists, your pets will be the cleanest they’ll ever be at our pet spa!
            Proper grooming is important for pets, as it keeps their fur from accumulating too much grime which lets them and their skin breathe properly.
        </p>

        <h3>Pool</h3>

        <p>A room-sized indoor-pool for your pets to swim in! We bathe cats and dogs separately in order to prevent any altercations between the two.</p>


</div>

<?=
get_footer();
?>