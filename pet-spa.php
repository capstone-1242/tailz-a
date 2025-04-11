<?php
/*
Template Name: Tailz Pet Spa
*/
get_header();
?>

<h1><?php echo 'Tailz ' . get_the_title(); ?></h1>

<?php
$hero_image = get_field('doggy_daycare_hero_image');
?>
<section class="short-hero-banner"
    style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0, 0, 0, 0.15)), 
           url('<?php echo esc_url($hero_image); ?>') center/cover no-repeat;">
    <div class="hero-content">
        <h2>Pet Spa & Grooming</h2>
    </div>
</section>

<div class="tailz-pet-spa-content container">

    <!-- Pet Grooming Section -->
    <section class="spa-block two-column-block">
        <div class="block-text">
            <h2 style="text-align: center;">Pet Grooming</h2>
            <p>
                With the help of our expert pet stylists, your pets will be the cleanest they’ll ever be at our pet spa!
            </p>
            <p>
                Proper grooming is important for pets, as it keeps their fur from accumulating too much grime which lets their skin breathe properly. Our stylists also have the know-how to recommend how you can take care of your own pet, ensuring you can keep them clean and happy.
            </p>
            <p>
                On top of all that, our Head-To-Tailz loyalty program ensures your pet will be able to stay looking and feeling great at a more affordable price!
            </p>
            <div style="text-align: right;">
                <a href="#booking"><button class="yellow-btn">Book Your Dog</button></a>
            </div>

        </div>

        <div class="block-image">
            <img src="<?php echo get_field('pet_spa_first_block_image'); ?>" alt="Pet grooming image">
        </div>
    </section>

    <!-- Cat Care Section -->
<section class="spa-block two-column-block">
    <div class="block-image">
        <img src="<?php echo get_field('cat_care_image'); ?>" alt="Cat care image">
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
</section>



</div>

<!-- Loyalty Program Section -->
<section class="tail-loyalty">
        <h2>Head-To-Tailz Loyalty Program</h2>
        <p>
            Ensure your pup gets priority booking. With our Head-To-Tailz Loyalty Program we offer the added flexibility of choosing a 4-Week or 8-Week maintenance schedule for your dog to suit your needs and lifestyle!
        </p>
        <a href="#booking"><button class="blue-btn">Book Your Pet</button></a>
    </section>


<?php get_footer(); ?>
