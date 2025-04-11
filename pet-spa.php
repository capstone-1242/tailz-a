<?php
/*
Template Name: Tailz Pet Spa
*/
get_header();
?>

<h1><?php echo 'Tailz ' . get_the_title(); ?></h1>

<?php
$hero_image = get_field('pet_spa_hero_image');
?>
<section class="short-hero-banner"
    style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0, 0, 0, 0.15)), 
           url('<?php echo esc_url($hero_image); ?>') center/cover no-repeat;">
    <div class="hero-content">
        <h2>Pet Spa & Grooming</h2>
    </div>
</section>

<div class="tailz-pet-spa-content">
    <!-- ACF section -->

    <div class="section-container">
        <div class="section-intro-text">
            <?php if (get_field('pet_spa_first_block_heading')) : ?>
                <h2><?php the_field('pet_spa_first_block_heading'); ?></h2>
            <?php else : ?>
                <h2>Pet Grooming</h2>
            <?php endif; ?>
        </div>

        <div class="section-container">
            <div class="content-wrapper">
                <?php if (get_field('pet_spa_first_block_content')) : ?>
                    <p><?php the_field('pet_spa_first_block_content'); ?></p>
                <?php else : ?>
                    <p>With the help of our expert pet stylists, your pets will be the cleanest they’ll ever be at our pet spa!</p>
                    <p>Proper grooming is important for pets, as it keeps their fur from accumulating too much grime which lets their skin breathe properly. Our stylists also have the know-how to recommend how you can take care of your own pet, ensuring you can keep them clean and happy.</p>
                    <p>On top of all that, our Head-To-Tailz loyalty program ensures your pet will be able to stay looking and feeling great at a more affordable price!</p>
                <?php endif; ?>
                <a href="<?php echo get_permalink(get_page_by_title('booking')); ?>" class="no-decoration">
                    <div class="custom-button-bottom yellow-colors">
                        <div class="custom-button">Book Your Dog</div>
                    </div>
                </a>
            </div>
            <div class="image-wrapper">
                <?php
                $pet_grooming_image = get_field('pet_grooming_image');
                ?>
                <img src="<?php echo esc_url($pet_grooming_image); ?>" alt="">
            </div>
        </div>


        <!-- Cat Care Section -->
        <!-- <section class="spa-block two-column-block">
            <div class="block-image">
                <img src="< ?php/*  echo get_field('cat_care_image')*/; ? >" alt="Cat care image">
            </div>

            <div class="block-text">
                <h2 style="text-align: center;">Cat Care</h2>
                <p>
                    Friendly felines can also get treated to a lion cut at Tailz by select Pet Stylists. As one of our mandates is to minimize stress on the animals in our care, we ask that an owner or guardian accompany their feline friend for the grooming.
                </p>
                <p>
                    We book them as the first appointment of the day for the Pet Stylist to ensure fewer dogs will be around or on specialized Feline Furball Days, minimizing stress on your cat.
                </p>
                <p class="fine-print">
                    *We are only taking friendly cats at this time. Please call us at 780-988-0089 to book a cat grooming appointment. Please contact your veterinarian for grooming services if you believe your cat will require more than one person to hold them. Unknown behaviour or potentially aggressive cats will be referred to their veterinarian for care. Thank you for your understanding.
                </p>
                <a href="#booking"><button class="yellow-btn">Book Your Cat</button></a>
            </div>
        </section> -->


        <section class="cat-care section-container">
            <div class="section-intro-text">
                <h2>cat care</h2>
            </div>
            <div class="section-container">
                <div class="image-wrapper">
                    <?php
                    $cat_care_image = get_field('cat_care_image');
                    ?>
                    <img src="<?php echo esc_url($cat_care_image); ?>" alt="">
                </div>
                <div class="content-wrapper">
                    <p> Friendly felines can also get treated to a lion cut at Tailz by select Pet Stylists. As one of our mandates is to minimize stress on the animals in our care, we ask that an owner or guardian accompany their feline friend for the grooming.* We book them as the first appointment of the day for the Pet Stylist to ensure as less dogs will be around or on specialized Feline Furball Days, minimizing stress on your cat.</p>
                    <p>*We are only taking friendly cats at this time. Please call us at 780-988-0089 to book a cat grooming appointment. Please contact your veterinarian for grooming services if you believe your cat will require more than one person to hold them. Unknown behaviour or potentially aggressive cats will be referred to their veterinarian for care. Thank you for your understanding.</p>
                    <a href="<?php echo get_permalink(get_page_by_title('booking')); ?>" class="no-decoration">
                        <div class="custom-button-bottom yellow-colors">
                            <div class="custom-button">Book Your Cat</div>
                        </div>
                    </a>
                </div>
            </div>
            
        </section>
    </div>
    <!-- Loyalty Program Section -->
    <div class="section-secondary">
        <section class="section-container loyalty-program">
            <div class="loyalty-program-scrim">
                <h2>Head-To-Tailz Loyalty Program</h2>
                <p> Ensure your pup gets priority booking. With our Head-To-Tailz Loyalty Program we offer the added flexibility of choosing a 4-Week or 8-Week maintenance schedule for your dog to suit your needs and lifestyle!</p>
                <a href="<?php echo get_permalink(get_page_by_title('booking')); ?>" class="no-decoration">
                    <div class="custom-button-bottom blue-colors">
                        <div class="custom-button">Book Your Pet</div>
                    </div>
                </a>
            </div>
        </section>
    </div>



    <?php get_footer(); ?>
