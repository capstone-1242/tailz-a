<?php
/*
Template Name: Tailz Contact
*/
get_header();

?>

<!-- Tailz contact content -->
<div class="tailz-contact-content">

    <!-- hidden in styles -->
     
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

        <h2>Contact</h2>
        <ul>
            <li> wawawa@wawa.wa</li>
            <li> +1 780-988-0089</li>
            <li> 123 wawa street</li>
        </ul>


    </section>

    <!-- second section -->
    <section>

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