<?php
/*
Template Name: Tailz Contact
*/
get_header();
?>

<!-- Tailz contact page -->
<div class="tailz-contact-content">

    <!-- Page Banner -->
    <section class="hero-banner"
        style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('<?php echo get_template_directory_uri(); ?>/images/hero/contact-banner.webp') center/cover no-repeat;">
        <div class="hero-content">
            <h1>Contact</h1>
        </div>
    </section>

    <!-- Contact Info + Form + Map -->
    <div class="contact-wrapper container">

        <div class="contact-boxes">

            <!-- Contact Info -->
            <div class="contact-details">
                <div class="contact-info-group">
                    <h3>Email</h3>
                    <p>wags@tailz.ca</p>
                </div>

                <div class="contact-info-group">
                    <h3>Phone</h3>
                    <p>+1 (780) 988-0089</p>
                </div>

                <div class="contact-info-group">
                    <h3>Location</h3>
                    <p>11204 119 Street</p>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form">
                <h3>Contact Form</h3>
                <form action="#" method="post">
                    <div class="form-group-inline">
                        <input type="text" name="name" placeholder="Name" required>
                        <input type="email" name="email" placeholder="Email" required>
                        <input type="tel" name="phone" placeholder="Phone Number">
                    </div>
                    <textarea name="message" rows="5" placeholder="Message" required></textarea>
                    <button type="submit" class="btn-yellow">Send Message</button>
                </form>
            </div>
        </div>

        <!-- Google Map -->
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4551.5048087315!2d-113.53400336517271!3d53.55817760064151!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53a02104f5a431ad%3A0x234839d237861610!2sTailz!5e1!3m2!1sen!2sca!4v1741969737509!5m2!1sen!2sca"
                width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
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