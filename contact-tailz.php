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
  <div class="contact-page">


        <section class="contact-info">

    
            <h2>Email</h2>
            <p>wags@tailz.ca</p>

            <h2>Phone</h2>
            <p>+1 780-988-0089</p>

            <h2>Location</h2>
            <p>11204 119 Street</p>
    
        </section>
    
      
        <section class="google-map-container">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4551.5048087315!2d-113.53400336517271!3d53.55817760064151!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53a02104f5a431ad%3A0x234839d237861610!2sTailz!5e1!3m2!1sen!2sca!4v1741969737509!5m2!1sen!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </section>

  </div>

 
</div>

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