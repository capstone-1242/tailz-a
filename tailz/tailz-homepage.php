<?php
/*
Template Name: Tailz Homepage
*/
get_header();

?>

<!-- Tailz home page content -->





<h1><?php echo 'Tailz' . Get_the_title(); ?></h1>


<!--  banner image -->




<section class="hero-banner" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('<?php echo the_field('home_page_banner_image'); ?>') center/cover no-repeat;">


    <div class="hero-content">

        <?php if (get_field('hero_title')) : ?>
            <h2><?php the_field('hero_title'); ?></h2>
        <?php else : ?>
            <!-- this is the fall back if there is no client input -->
            <h2>TAILZ</h2>
        <?php endif; ?>


        <a href="#services"><button class="yellow-btn">Explore our new Services</button></a>

    </div>

</section>

<!-- banner image end -->

<div class="tailz-homepage-content">



    <!-- first section -->

    <section class="homepage-section">

        <div class="image-wrapper">
            <?php
            $welcome_image = get_field('welcome_image'); // Get image URL
            if ($welcome_image) : ?>
                <img src="<?php echo esc_url($welcome_image); ?>" alt="Welcome Image">
            <?php endif; ?>
        </div>

        <div class="content-wrapper">
            <?php if (get_field('welcome_heading')) : ?>
                <h2><?php the_field('welcome_heading'); ?></h2>
            <?php else : ?>
                <h2>Grooming to Furfection</h2> <!-- Default fallback heading -->
            <?php endif; ?>

            <?php if (get_field('welcome_content')) : ?>
                <p><?php the_field('welcome_content'); ?></p>
            <?php else : ?>
                <p>Come visit our resort! Give your pet the luxury they deserve.</p> <!-- Default fallback content -->
            <?php endif; ?>

            <a href="#services"><button class="yellow-btn">Visit Us</button></a>
        </div>

    </section>



    <!-- second section -->
    <section class="homepage-section">

        <div class="image-wrapper">
            <?php
            $second_block_image = get_field('second_block_image'); // Get image URL
            if ($second_block_image) : ?>
                <img src="<?php echo esc_url($second_block_image); ?>" alt="Second Block Image">
            <?php endif; ?>
        </div>

        <div class="content-wrapper">
            <?php if (get_field('second_block_title')) : ?>
                <h2><?php the_field('second_block_title'); ?></h2>
            <?php else : ?>
                <h2>Doggy Daycare</h2> <!-- Default fallback heading -->
            <?php endif; ?>

            <?php if (get_field('second_block_content')) : ?>
                <p><?php the_field('second_block_content'); ?></p>
            <?php else : ?>
                <p>our doggy daycare has alot to 'Paw"fur.</p> <!-- Default fallback content -->
            <?php endif; ?>

            <a href="#services"><button class="yellow-btn">View Daycare</button></a>
        </div>

    </section>

    <!-- third section -->

    <section class="homepage-section">

        <div class="image-wrapper">
            <?php
            $third_block_image = get_field('third_block_image'); // Get image URL
            if ($third_block_image) : ?>
                <img src="<?php echo esc_url($third_block_image); ?>" alt="third block Image">
            <?php endif; ?>

        </div>


        <div class="content-wrapper">
            <?php if (get_field('third_block_title')) : ?>
                <h2><?php the_field('third_block_title'); ?></h2>
            <?php else : ?>
                <h2>Pet Grooming</h2> <!-- Default fallback heading -->
            <?php endif; ?>

            <?php if (get_field('third_block_content')) : ?>
                <p><?php the_field('third_block_content'); ?></p>
            <?php else : ?>
                <p>Come visit our resort! Give your pet the luxury they deserve.</p> <!-- Default fallback content -->
            <?php endif; ?>

            <a href="#services"><button class="yellow-btn">Book a Bath</button></a>
        </div>

    </section>
</div>

<!--  Full width block -->
<section class="homepage-full-width-block">

    <div class="">
        <?php if (get_field('full_width_block_title')) : ?>
            <h2><?php the_field('full_width_block_title'); ?></h2>
        <?php else : ?>
            <h2>Overnight Lodgings</h2> <!-- Default fallback heading -->
        <?php endif; ?>

        <?php if (get_field('full_width_block_content')) : ?>
            <p><?php the_field('full_width_block_content'); ?></p>
        <?php else : ?>
            <p> Check out our overnight lodgings. your pet will find them purr'fect.</p>
        <?php endif; ?>

        <a href="#services"><button class="yellow-btn">View Lodgings</button></a>
    </div>

<!-- Set up image carusel here VVV -->

    <div class="">
        <?php
        $full_width_block_images = get_field('full_width_block_images'); // Get image URL
        if ($full_width_block_images) : ?>
            <img src="<?php echo esc_url($full_width_block_images); ?>" alt="Welcome Image">
        <?php endif; ?>
    </div>

</section>

<!--  Products -->
<section class="homepage-products">

    <div>
        <h2>Products</h2>
        <p>Check out our selection of products for your furry friend!</p>
    </div>



</section>



<!--   Newsletter -->
<article class="newsletter">

    <div class="newsletter-content">

        <h2>Newsletter</h2>

        <p>
            What’s the bark around Tailz? Find out for yourself!
            Sign up for our mailing services for updates, alerts, special offers and more!
        </p>



        <div class="sign-up">
            <input type="email" placeholder="Enter your email address">
            <button class="">Subscribe</button>
        </div>




    </div>

</article>








<?=
get_footer();
?>