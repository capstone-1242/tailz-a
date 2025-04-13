<?php
/*
Template Name: Tailz Overnight Lodging
*/
get_header();

?>

<!-- Tailz overnight content -->
<div class="tailz-overnight-lodging-content">

    <h1><?php echo 'Tailz' . Get_the_title(); ?></h1>

    <!--  banner image -->
    <?php
    $hero_image = get_field('services_hero_image');
    ?>
    <section class="short-hero-banner"
        style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0, 0, 0, 0.15)), 
           url('<?php echo esc_url($hero_image); ?>') center/cover no-repeat;">
        <div class="hero-content">
            <h2>Luxury Lodgings</h2>
        </div>
    </section>

    <!-- banner image end -->


    <!-- first section -->
    <section class="section-container">

        <div class="section-intro-text">
            <h2>Luxury Lodges</h2>
            <p>Off on a vacation? Business trip? Let us help take care of your pet while you’re gone with our luxury lodgings!</p>
        </div>
        <p>When it comes to overnight care, we’ve redefined the experience. Our new sleepover nights offer a resort-style stay in ample-spaced lodges that goes beyond traditional day care.</p>
        <p>Each day of restful sleep offers the benefits of Doggy Daycare, meaning your pet will never be left alone while they’re with us. You may also sign your dog up for a departure bath on their last day so they come home fresh and squeaky clean!</p>

        <div class="section-container">
        
            <?php $image = get_field('lodging_image_1'); ?>
            <div class="image-wrapper">
                <?php if ($image): ?>
                    <img src="<?php echo esc_url($image); ?>" alt="Image">
                <?php else: ?>
                    <img src="https://placehold.co/600x400" alt="Placeholder image">
                <?php endif; ?>
            </div>



            <div class="content-wrapper">
                <p>We provide all the toys, beds, blankets and love that your dog needs; all you need to do is bring some dog food! We will feed your dog two to three times a day with the provided food. Bring all items in a marked reusable shopping bag. Pre-portioned food is appreciated.</p>
            </div>
        </div>

    </section>

    <!-- second section -->

    <div class="section-secondary">
        <section class="section-container">
            <div class="section-intro-text">
                <h2>Requirements</h2>
            </div>
            <ul>
                <li>Only social, dog friendly dogs are accepted into our lodging. We do not take aggressive dogs.</li>
                <li>All dogs must pass a Meet & Greet prior to lodging.</li>
                <li>They must have attended Doggy Daycare at least once in the last 3 months. Alternatively, new pups must have passed their Meet & Greet within the last 2 months.</li>
                <li>All dogs require up-to-date vaccinations for Bordetella, Distemper/Parvovirus/Parainfluenza, and Rabies (after 6 months of age.)</li>
                <li>All current vaccination records must be received 24-hours in advance of your pet’s overnight stay.</li>
                <li>All pups are to be spayed or neutered by 7 months of age. If a medical exception has been granted, intact pups older than 10 months will not be accepted.</li>
                <li>Our Canine Care Team may change the activity level of your dog should their needs require it during their stay.</li>
                <li>Check-in time is 12:00PM or afterwards during regular business hours. Early check-in fee of $17.99 applies before 12:00PM.</li>
                <li>Checkout time is by 12:00PM during regular business hours. Late checkout fee of $17.99 applies after 12:00PM.</li>
                <li>Dogs not checked out by closing time must stay overnight, and will be surcharged for additional night's stay and can be picked up the following business day.</li>
            </ul>
        </section>
    </div>

    <!-- third section -->
    <section class="overnight-lodging-packages section-container">

        <h3>Packages</h3>

        <div class="package-card-container">

            <div class="package-card">
                <div>
                    <h2>Bronze Package</h2>
                    <p>$51.99/night</p>
                </div>
                <p>LOWEST COST</p>
                <ul>
                    <li>Morning Play Session</li>
                    <li>Bedtime Story</li>
                    <li>Extra Cuddles</li>
                    <li>Gourmet Bedtime Treat</li>
                </ul>
            </div>

            <div class="package-card">
                <div>
                    <h2>Silver Package</h2>
                    <p>$57.99/night</p>
                </div>
                <p>MOST PUP-ULAR</p>
                <ul>
                    <li>Morning Play Session</li>
                    <li>Afternoon Play Session</li>
                    <li>Bedtime Story</li>
                    <li>Extra Cuddles</li>
                    <li>Gourmet Bedtime Treat</li>
                </ul>
            </div>

            <div class="package-card">
                <div>
                    <h2>Gold Package</h2>
                    <p>$69.99/night</p>
                </div>
                <p>ULTI-MUTT VALUE</p>
                <ul>
                    <li>Morning Play Session</li>
                    <li>Afternoon Play Session</li>
                    <li>Evening Stroll</li>
                    <li>Bedtime Story</li>
                    <li>Extra Cuddles</li>
                    <li>Gourmet Bedtime Treat</li>
                </ul>
            </div>

        </div>
        <a href="<?php echo get_permalink(get_page_by_title('booking')); ?>" class="no-decoration max-margin-left">
            <div class="custom-button-bottom yellow-colors">
                <div class="custom-button">BOOK LODGINGS</div>
            </div>
        </a>
    </section>

    <div class="section-secondary">
        <section class="section-container">
            <div class="section-intro-text">
                <h2>Premium lodges</h2>
                <p>Each of our lodgings is uniquely decorated for your dogs enjoyment.</p>
            </div>
            <div class="package-card-container">
                <?php
                $image1 = get_field('lodging_image_2');
                $image2 = get_field('lodging_image_3');
                $image3 = get_field('lodging_image_4');
                ?>

                <?php if ($image1): ?>
                    <img src="<?= esc_url($image1); ?>" alt="<?= esc_attr($image1); ?>">
                <?php else: ?>
                    <img src="https://placehold.co/300x300" alt="Placeholder image 1">
                <?php endif; ?>

                <?php if ($image2): ?>
                    <img src="<?= esc_url($image2); ?>" alt="<?= esc_attr($image2); ?>">
                <?php else: ?>
                    <img src="https://placehold.co/300x300" alt="Placeholder image 2">
                <?php endif; ?>

                <?php if ($image3): ?>
                    <img src="<?= esc_url($image3); ?>" alt="<?= esc_attr($image3); ?>">
                <?php else: ?>
                    <img src="https://placehold.co/300x300" alt="Placeholder image 3">
                <?php endif; ?>

            </div>
            <a href="<?php echo get_permalink(get_page_by_title('booking')); ?>" class="no-decoration max-margin-left">
                <div class="custom-button-bottom blue-colors">
                    <div class="custom-button">BOOK LODGINGS</div>
                </div>
            </a>
        </section>
    </div>


    <section class="section-container">

        <div class="section-intro-text">
            <h2>Cat hotel</h2>
            <p>Need a safe place for your cat while you’re off on a trip?
                Our cat hotel offers a secure location for cats to stay overnight.</p>
        </div>

        <div class="package-card-container">
            <?php
            $image4 = get_field('lodging_image_5');
            $image5 = get_field('lodging_image_6');
            $image6 = get_field('lodging_image_7');
            ?>

            <?php if ($image4): ?>
                <img src="<?= esc_url($image4); ?>" alt="<?= esc_attr($image1); ?>">
            <?php else: ?>
                <img src="https://placehold.co/300x300" alt="Placeholder image 1">
            <?php endif; ?>

            <?php if ($image5): ?>
                <img src="<?= esc_url($image5); ?>" alt="<?= esc_attr($image2); ?>">
            <?php else: ?>
                <img src="https://placehold.co/300x300" alt="Placeholder image 2">
            <?php endif; ?>

            <?php if ($image3): ?>
                <img src="<?= esc_url($image6); ?>" alt="<?= esc_attr($image3); ?>">
            <?php else: ?>
                <img src="https://placehold.co/300x300" alt="Placeholder image 3">
            <?php endif; ?>

        </div>


        <a href="<?php echo get_permalink(get_page_by_title('booking')); ?>" class="no-decoration max-margin-left">
            <div class="custom-button-bottom yellow-colors">
                <div class="custom-button">BOOK YOUR CAT</div>
            </div>
        </a>


    </section>


</div>

<?=
get_footer();
?>