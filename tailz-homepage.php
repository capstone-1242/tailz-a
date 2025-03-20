<?php
/*
Template Name: Tailz Homepage
*/
get_header();

?>

<!-- Tailz home page content -->





<h1><?php echo 'Tailz' . Get_the_title(); ?></h1>


<!--  banner image -->




<section class="hero-banner"
    style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('<?php echo the_field('home_page_banner_image'); ?>') center/cover no-repeat;">


    <div class="hero-content">

        <?php if (get_field('hero_title')): ?>

            <h2><?php the_field('hero_title'); ?></h2>

        <?php else: ?>
            
            <h2>TAILZ</h2>

        <?php endif; ?>


        <a href="<?php echo home_url('/amenities/'); ?>" class="paw"><button class="yellow-btn paw">Explore our new
                Services</button></a>

    </div>

</section>

<!-- banner image end -->

<div class="tailz-homepage-content">



    <!-- first section -->

    <section class="homepage-section">

        <div class="section-container">

            <div class="image-wrapper">

                <?php
                $welcome_image = get_field('welcome_image'); // Get image URL
                if ($welcome_image): ?>
                    <img src="<?php echo esc_url($welcome_image); ?>" alt="Welcome Image">
                <?php endif; ?>

            </div>

            <div class="content-wrapper">

                <?php if (get_field('welcome_heading')): ?>
                    <h2><?php the_field('welcome_heading'); ?></h2>
                <?php else: ?>
                    <h2>Grooming to Furfection</h2> <!-- Default fallback heading -->
                <?php endif; ?>

                <?php if (get_field('welcome_content')): ?>
                    <p><?php the_field('welcome_content'); ?></p>
                <?php else: ?>
                    <p>Come visit our resort! Give your pet the luxury they deserve.</p> <!-- Default fallback content -->
                <?php endif; ?>

                <a href="<?php echo home_url('/contact-us/'); ?>"><button class="yellow-btn">Visit Us</button></a>

            </div>

        </div>

    </section>

    <!-- second section -->

    <section class="homepage-section">

        <div class="section-container">

            <div class="image-wrapper">
                <?php
                $second_block_image = get_field('second_block_image');
                if ($second_block_image): ?>
                    <img src="<?php echo esc_url($second_block_image); ?>" alt="Second Block Image">
                <?php endif; ?>
            </div>

            <div class="content-wrapper">
                <?php if (get_field('second_block_title')): ?>
                    <h2><?php the_field('second_block_title'); ?></h2>
                <?php else: ?>
                    <h2>Doggy Daycare</h2>
                <?php endif; ?>

                <?php if (get_field('second_block_content')): ?>
                    <p><?php the_field('second_block_content'); ?></p>
                <?php else: ?>
                    <p>our doggy daycare has alot to 'Paw"fur.</p>
                <?php endif; ?>

                <a href="<?php echo home_url('/doggy-daycare/'); ?>"><button class="yellow-btn ">View
                        Daycare</button></a>
            </div>

        </div>

    </section>

    <!-- third section -->

    <section class="homepage-section">

        <div class="section-container">

            <div class="image-wrapper">

                <?php
                $third_block_image = get_field('third_block_image'); // Get image URL
                if ($third_block_image): ?>
                    <img src="<?php echo esc_url($third_block_image); ?>" alt="third block Image">
                <?php endif; ?>

            </div>


            <div class="content-wrapper">
                <?php if (get_field('third_block_title')): ?>
                    <h2><?php the_field('third_block_title'); ?></h2>
                <?php else: ?>
                    <h2>Pet Grooming</h2> <!-- Default fallback heading -->
                <?php endif; ?>

                <?php if (get_field('third_block_content')): ?>
                    <p><?php the_field('third_block_content'); ?></p>
                <?php else: ?>
                    <p>Come visit our resort! Give your pet the luxury they deserve.</p> <!-- Default fallback content -->
                <?php endif; ?>

                <a href="#services"><button class="yellow-btn">Book a Bath</button></a>
                <!-- set up booking -->
            </div>

        </div>

    </section>
    
</div>

<!--  Full width block -->
<section class="homepage-full-width-block">

    <div class="">
        <?php if (get_field('full_width_block_title')): ?>
            <h2><?php the_field('full_width_block_title'); ?></h2>
        <?php else: ?>
            <h2>Overnight Lodgings</h2> <!-- Default fallback heading -->
        <?php endif; ?>

        <?php if (get_field('full_width_block_content')): ?>
            <p><?php the_field('full_width_block_content'); ?></p>
        <?php else: ?>
            <p> Check out our overnight lodgings. your pet will find them purr'fect.</p>
        <?php endif; ?>

        <!-- --------------------image carosel-------------------------------------- -->
        <?php
        $images = array(
            get_field('carousel_1'),
            get_field('carousel_2'),
            get_field('carousel_3'),
            get_field('carousel_4'),
            get_field('carousel_5'),
        );

        $images = array_filter($images);

        if (!empty($images)): ?>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php foreach ($images as $image): ?>
                        <div class="swiper-slide">
                            <img src="<?php echo esc_url($image); ?>" alt="Carousel Image">
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div> -->
            </div>
        <?php endif; ?>

        <!-- --------------------image carosel end-------------------------------------- -->




        <a href="#services"><button class="yellow-btn">View Lodgings</button></a>
    </div>

    <!-- Set up image carusel here VVV -->

    <div class="">
        <?php
        $full_width_block_images = get_field('full_width_block_images'); // Get image URL
        if ($full_width_block_images): ?>
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

    <div class="product-cards">

        <div class="product-card">

            <?php
            $first_category_image = get_field('first_category_image'); // Get image URL
            if ($first_category_image): ?>
                <img src="<?php echo esc_url($first_category_image); ?>" alt="first_category_image">
            <?php endif; ?>

            <?php if (get_field('first_category_title')): ?>
                <h3><?php the_field('first_category_title'); ?></h3>
            <?php else: ?>
                <h3>Dog Food</h3> <!-- Default fallback heading -->
            <?php endif; ?>

            <?php if (get_field('first_category_content')): ?>
                <p><?php the_field('first_category_content'); ?></p>
            <?php else: ?>
                <p>Keep your pet healthy with our selection of dog food.</p> <!-- Default fallback -->
            <?php endif; ?>

        </div>

        <div class="product-card">

            <?php
            $second_category_image = get_field('second_category_image'); // Get image URL
            if ($second_category_image): ?>
                <img src="<?php echo esc_url($second_category_image); ?>" alt="first_category_image">
            <?php endif; ?>

            <?php if (get_field('second_category_title')): ?>
                <h3><?php the_field('second_category_title'); ?></h3>
            <?php else: ?>
                <h3>Dog Food</h3> <!-- Default fallback heading -->
            <?php endif; ?>

            <?php if (get_field('second_category_content')): ?>
                <p><?php the_field('second_category_content'); ?></p>
            <?php else: ?>
                <p>Keep your pet healthy with our selection of dog food.</p> <!-- Default fallback -->
            <?php endif; ?>

        </div>

        <div class="product-card">

            <?php
            $third_category_image = get_field('third_category_image'); // Get image URL
            if ($third_category_image): ?>
                <img src="<?php echo esc_url($third_category_image); ?>" alt="third_category_image">
            <?php endif; ?>

            <?php if (get_field('third_category_title')): ?>
                <h3><?php the_field('third_category_title'); ?></h3>
            <?php else: ?>
                <h3>Cat Food</h3> <!-- Default fallback heading -->
            <?php endif; ?>

            <?php if (get_field('third_category_content')): ?>
                <p><?php the_field('third_category_content'); ?></p>
            <?php else: ?>
                <p>Give your feline friend the best nutrition with our premium cat food.</p> <!-- Default fallback -->
            <?php endif; ?>

        </div>

        <div class="product-card">

            <?php
            $fourth_category_image = get_field('fourth_category_image'); // Get image URL
            if ($fourth_category_image): ?>
                <img src="<?php echo esc_url($fourth_category_image); ?>" alt="fourth_category_image">
            <?php endif; ?>

            <?php if (get_field('fourth_category_title')): ?>
                <h3><?php the_field('fourth_category_title'); ?></h3>
            <?php else: ?>
                <h3>Pet Accessories</h3> <!-- Default fallback heading -->
            <?php endif; ?>

            <?php if (get_field('fourth_category_content')): ?>
                <p><?php the_field('fourth_category_content'); ?></p>
            <?php else: ?>
                <p>Find the perfect accessories for your pets, from collars to beds.</p> <!-- Default fallback -->
            <?php endif; ?>

        </div>


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