<?php
/*
Template Name: Tailz Services
*/
get_header();

?>

<!-- Tailz home page content -->





<h1><?php echo 'Tailz' . Get_the_title(); ?></h1>


<!--  banner image -->




<?php
$hero_image = get_field('doggy_daycare_hero_image');
?>
<section class="short-hero-banner"
    style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0, 0, 0, 0.15)), 
           url('<?php echo esc_url($hero_image); ?>') center/cover no-repeat;">
    <div class="hero-content">
        <h2>Services</h2>
    </div>
</section>

<!-- banner image end -->

<!-- homepage content blocks -->
<div class="tailz-services-content">

    <!-- doggy daycare -->
    <section class="homepage-section">

        <div class="section-container">

            <div class="image-wrapper">
                <?php if (get_field('tailz-canine-skill-image')) : ?>
                    <div> <img src="<?php echo the_field('tailz-canine-skill-image'); ?>"></div>
                <?php else : ?>
                    <div> <img src="<?php echo get_template_directory_uri(); ?>/images/hero/puppy-programs-hero.webp" alt=""></div>
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
                    <p>Mental and physical enjoyment for social dogs, and Puppy Preschool for teaching young pups!</p>
                <?php endif; ?>

                <a href="<?php echo get_permalink(get_page_by_title('doggy daycare')); ?>" class="no-decoration">
                    <div class="custom-button-bottom yellow-colors">
                        <div class="custom-button">View Daycare</div>
                    </div>
                </a>
            </div>

        </div>

    </section>

    <!-- grooming -->

    <section class="section-secondary">

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
                    <h2>Pet Spa & Grooming</h2> <!-- Default fallback heading -->
                <?php endif; ?>

                <?php if (get_field('third_block_content')): ?>
                    <p><?php the_field('third_block_content'); ?></p>
                <?php else: ?>
                    <p>Pampering pups from head to tail with the aid of professional pet stylists and products.</p> <!-- Default fallback content -->
                <?php endif; ?>

                <a href="<?php echo get_permalink(get_page_by_title('booking')); ?>" class="no-decoration">
                    <div class="custom-button-bottom blue-colors">
                        <div class="custom-button">Book a Bath</div>
                    </div>
                </a>
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

                <a href="<?php echo get_permalink(get_page_by_title('overnight lodgings')); ?>" class="no-decoration">
                    <div class="custom-button-bottom yellow-colors">
                        <div class="custom-button">VIEW LODGINGS</div>
                    </div>
                </a>

            </div>


        </div>


    </section>

    <!-- cat services -->

    <section class="section-secondary">

        <div class="section-container">

            <div class="image-wrapper">

                <?php
                $fourth_block_image = get_field('fourth_block_image'); // Get image URL
                if ($fourth_block_image): ?>
                    <img src="<?php echo esc_url($fourth_block_image); ?>" alt="fourth_block_image">
                <?php endif; ?>

            </div>

            <div class="content-wrapper">
                <h2>Dog Training</h2>
                <p>New cat services are coming to Tailz! Bring your cat in for a spa day, or bring them in for luxury lodgings!</p>
                <a href="<?php echo get_permalink(get_page_by_title('booking')); ?>" class="no-decoration">
                    <div class="custom-button-bottom blue-colors">
                        <div class="custom-button">BOOK NOW</div>
                    </div>
                </a>
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


                <h2>Amenities</h2> <!-- Default fallback heading -->



                <p>Come visit our resort! Give your pet the luxury they deserve.</p> <!-- Default fallback content -->


                <a href="<?php echo get_permalink(get_page_by_title('contact us')); ?>" class="no-decoration">
                    <div class="custom-button-bottom yellow-colors">
                        <div class="custom-button">VISIT US</div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="section-secondary">
        <div class="section-container">
            <div class="image-wrapper">
                <?php
                $fourth_block_image = get_field('fourth_block_image'); // Get image URL
                if ($fourth_block_image): ?>
                    <img src="<?php echo esc_url($fourth_block_image); ?>" alt="fourth_block_image">
                <?php endif; ?>

            </div>

            <div class="content-wrapper">
                <h2>Pet Photography</h2>
                <p>New cat services are coming to Tailz! Bring your cat in for a spa day, or bring them in for luxury lodgings!</p>
                <a href="<?php echo get_permalink(get_page_by_title('booking')); ?>" class="no-decoration">
                    <div class="custom-button-bottom blue-colors">
                        <div class="custom-button">BOOK NOW</div>
                    </div>
                </a>
            </div>

        </div>
    </section>




</div>







<?=
get_footer();
?>