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

        <?php if (get_field('')) : ?>

            <div> <img src="<?php echo the_field(''); ?>"></div>

        <?php else : ?>

            <div> <img src="" alt=""></div>

        <?php endif; ?>

    </section>

    <!-- banner image end -->





    <!-- ACF section -->

    <div>

        <div>
            <?php if (get_field('pet_spa_first_block_heading')) : ?>

                <h2><?php the_field('pet_spa_first_block_heading'); ?></h2>

            <?php else : ?>

                <h2>Pet Grooming</h2>

            <?php endif; ?>


            <?php if (get_field('pet_spa_first_block_content')) : ?>

                <p><?php the_field('pet_spa_first_block_content'); ?></p>

            <?php else : ?>

                <p>With the help of our expert pet stylists, your pets will be the cleanest they’ll ever be at our pet spa!</p>

                <p>
                    Proper grooming is important for pets, as it keeps their fur from accumulating too much grime which lets their skin breathe properly. Our stylists also have the know-how to recommend how you can take care of your own pet, ensuring you can keep them clean and happy.
                    On top of all that, our Head-To-Tailz loyalty program ensures your pet will be able to stay looking and feeling great at a more affordable price!
                </p>

                <button>Book your dog</button>

            <?php endif; ?>

        </div>

        <img src="" alt="">

    </div>

    <!-- end acf section -->


    <section cclass="cat-care">

        <div>
            <h2>cat care</h2>

            <p> Friendly felines can also get treated to a lion cut at Tailz by select Pet Stylists. As one of our mandates is to minimize stress on the animals in our care, we ask that an owner or guardian accompany their feline friend for the grooming.* We book them as the first appointment of the day for the Pet Stylist to ensure as less dogs will be around or on specialized Feline Furball Days, minimizing stress on your cat.</p>

            <p>*We are only taking friendly cats at this time. Please call us at 780-988-0089 to book a cat grooming appointment. Please contact your veterinarian for grooming services if you believe your cat will require more than one person to hold them. Unknown behaviour or potentially aggressive cats will be referred to their veterinarian for care. Thank you for your understanding.</p>

            <button>Book your cat</button>
        </div>

        <img src="" alt="">

    </section>

    <section class="tail-loyalty">

        <h2>Head-To-Tailz Loyalty Program</h2>

        <p> Ensure your pup gets priority booking. With our Head-To-Tailz Loyalty Program we offer the added flexibility of choosing a 4-Week or 8-Week maintenance schedule for your dog to suit your needs and lifestyle!</p>

        <button>Book your pet</button>
 
    </section>

</div>

<?=
get_footer();
?>