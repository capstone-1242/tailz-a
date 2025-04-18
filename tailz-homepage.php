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


        <h2>TAILZ: Grooming to furfection</h2>

        <div>
            <p>Come visit our resort! give your pet the luxury they deserve.</p>
            <a href="<?php echo get_permalink(get_page_by_title('amenities')); ?>" class="no-decoration paw"><div class="custom-button-bottom blue-colors "><div class="custom-button">VIEW NEW AMENITIES</div></div></a>

        </div>


    </div>

</section>

<!-- banner image end -->

<!-- homepage content blocks -->
<div class="tailz-homepage-content">

    <!-- doggy daycare -->
    <section class="homepage-section">

        <div class="section-container">

            <div class="image-wrapper">
              
                <img src="<?php echo get_template_directory_uri(); ?>/images/hero/doggy-daycare-hero.webp" alt="My Image Description">

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
                    <p>Mental and physical enjoyment for social dogs, and Puppy Preschool for teaching young pups!</p>
                <?php endif; ?>

                <a href="<?php echo get_permalink(get_page_by_title('doggy daycare')); ?>" class="no-decoration"><div class="custom-button-bottom yellow-colors"><div class="custom-button">View Daycare</div></div></a>
            </div>

        </div>

    </section>

    <!-- grooming -->

    <section class="homepage-section">

        <div class="section-container">

            <div class="image-wrapper">

            <img src="<?php echo get_template_directory_uri(); ?>/images/hero/pet-spa-hero.webp" alt="My Image Description">
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
                    <p>Pampering pups from head to tail with the aid of professional pet stylists and products.</p> <!-- Default fallback content -->
                <?php endif; ?>

                <a href="<?php echo get_permalink(get_page_by_title('booking')); ?>" class="no-decoration"><div class="custom-button-bottom blue-colors"><div class="custom-button">Book a Bath</div></div></a>
                <!-- set up booking -->
            </div>

        </div>


    </section>

    <!-- overnight lodgings -->

    <section class="homepage-section">

        <div class="section-container">

            <div class="image-wrapper">

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

                    </div>
                <?php endif; ?>

            </div>

            <div class="content-wrapper">

                <h2>Overnight Lodgings</h2>

                <p>Can’t bring your pet on a trip?</p>
                <p>Treat them to a crate-less luxury overnight stay with us!</p>

                <a href="<?php echo get_permalink(get_page_by_title('overnight lodgings')); ?>" class="no-decoration"><div class="custom-button-bottom yellow-colors"><div class="custom-button">VIEW LODGINGS</div></div></a>

            </div>


        </div>


    </section>

    <!-- cat services -->

    <section class="homepage-section">
        

        <div class="section-container">

            <div class="image-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/images/hero/cat.webp" alt="My Image Description">
            </div>

            <div class="content-wrapper">
                <h2>Cat SERVICES</h2>
                <p>New cat services are coming to Tailz! Bring your cat in for a spa day, or bring them in for luxury lodgings!</p>
                <a href="<?php echo get_permalink(get_page_by_title('booking')); ?>" class="no-decoration"><div class="custom-button-bottom blue-colors"><div class="custom-button">BOOK NOW</div></div></a>
            </div>

        </div>

    </section>

    <!-- the new location -->

    <section class="homepage-section">

        <div class="section-container">

            <div class="image-wrapper">

                <?php
                $fifth_block_image = get_field('fifth_block_image'); // Get image URL
                if ($fifth_block_image): ?>
                    <img src="<?php echo esc_url($fifth_block_image); ?>" alt="fifth_block_image">
                <?php endif; ?>

            </div>

            <div class="content-wrapper">


                <h2>THE NEW LO'CAT'ION</h2> <!-- Default fallback heading -->



                <p>Come visit our resort! Give your pet the luxury they deserve.</p> <!-- Default fallback content -->


                <a href="<?php echo get_permalink(get_page_by_title('contact us')); ?>" class="no-decoration"><div class="custom-button-bottom yellow-colors"><div class="custom-button">VISIT US</div></div></a>

            </div>

        </div>

    </section>
</div>

<!--  Products -->

<section class="homepage-products">

    <div>
        <h2>Products</h2>

        <!-- <p>Check out our selection of products for your furry friend!</p> -->
    </div>

    <div class="product-cards">

        <a href="<?php echo get_term_link('dog-food', 'product_cat'); ?>">

            <div class="homepage-product-card">

                <h3>DOG FOOD</h3>

                <?php
                $first_category_image = get_field('first_category_image');
                if ($first_category_image): ?>
                    <img src="<?php echo esc_url($first_category_image); ?>" alt="first_category_image">
                <?php endif; ?>

            </div>
        </a>

        <a href="<?php echo get_term_link('dog-treats', 'product_cat'); ?>">
            
            <div class="homepage-product-card">

                <h3>DOG TREATS</h3>

                <?php
                $second_category_image = get_field('second_category_image');
                if ($second_category_image): ?>
                    <img src="<?php echo esc_url($second_category_image); ?>" alt="first_category_image">
                <?php endif; ?>

            </div>
        </a>

        <a href="<?php echo get_term_link('uncategorized', 'product_cat'); ?>">

            <div class="homepage-product-card">

                <h3>All Products</h3>

                <?php
                $third_category_image = get_field('third_category_image');
                if ($third_category_image): ?>
                    <img src="<?php echo esc_url($third_category_image); ?>" alt="third_category_image">
                <?php endif; ?>

            </div>

        </a>

        <as href="<?php echo get_term_link('bulk-treats', 'product_cat'); ?>">

            <div class="homepage-product-card">

                <h3>BULK TREATS</h3>

                <?php
                $fourth_category_image = get_field('fourth_category_image');
                if ($fourth_category_image): ?>
                    <img src="<?php echo esc_url($fourth_category_image); ?>" alt="fourth_category_image">
                <?php endif; ?>

            </div>

        </as>

        <a href="<?php echo get_term_link('cat-treats', 'product_cat'); ?>">

            <div class="homepage-product-card">

                <h3>CAT TREATS</h3>

                <?php
                $fourth_category_image = get_field('fifth_category_image');
                if ($fourth_category_image): ?>
                    <img src="<?php echo esc_url($fourth_category_image); ?>" alt="fourth_category_image">
                <?php endif; ?>

            </div>

        </a>

        <a href="<?php echo get_term_link('cat-food', 'product_cat'); ?>">

            <div class="homepage-product-card">

                <h3>CAT FOOD</h3>

                <?php
                $fourth_category_image = get_field('sixth_category_image');
                if ($fourth_category_image): ?>
                    <img src="<?php echo esc_url($fourth_category_image); ?>" alt="fourth_category_image">
                <?php endif; ?>

            </div>

        </a>

    </div>

</section>

<!--   Newsletter -->

<article class="newsletter ">
    <div class="newsletter-container">

        <div class="newsletter-image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/hero/dogs-on-chair.webp" alt="Newsletter Image">
        </div>

        <div class="newsletter-content">

            <h2>tailz newsletter</h2>

            <p>
                What’s the bark around Tailz? Find out for yourself!
                Sign up for our mailing services for updates, alerts, special offers and more!
            </p>

            <div class="sign-up">
                <input type="email" placeholder="Enter your email address">
                <button class="">Subscribe</button>
            </div>

        </div>

    </div>

</article>








<?=
get_footer();
?>