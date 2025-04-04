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

    <section class="hero-banner">

        <?php if (get_field('')) : ?>

            <div> <img src="<?php echo the_field(''); ?>"></div>

        <?php else : ?>

            <div> <img src="" alt=""></div>

        <?php endif; ?>

    </section>

    <!-- banner image end -->


    <!-- first section -->
    <section class="section-container">

        <h2>Luxury Lodges</h2>

        <p>Off on a vacation? Business trip? Let us help take care of your pet while you’re gone with our luxury lodgings!</p>
        <p>When it comes to overnight care, we’ve redefined the experience. Our new sleepover nights offer a resort-style stay in ample-spaced lodges that goes beyond traditional day care.</p>
        <p>Each day of restful sleep offers the benefits of Doggy Daycare, meaning your pet will never be left alone while they’re with us. You may also sign your dog up for a departure bath on their last day so they come home fresh and squeaky clean!</p>

        <div class="section-container">
                <div class="image-wrapper"><img src="https://placehold.co/600x400" alt=""></div>

                <div class="content-wrapper">
                    <p>We provide all the toys, beds, blankets and love that your dog needs; all you need to do is bring some dog food! We will feed your dog two to three times a day with the provided food. Bring all items in a marked reusable shopping bag. Pre-portioned food is appreciated.</p>
                </div>
        </div>

    </section>

    <!-- second section -->

    <section class="section-container">

        <h2>Requirements</h2>
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
        <button>BOOK LODGINGS</button>
    </section>

    <section class="section-container">

        <h2>Premium lodges</h2>

        <p>Each of our lodgings is uniquely decorated for your dogs enjoyment.</p>

        <img src="" alt="">
        <img src="" alt="">
        <img src="" alt="">


        <button>BOOK LODGINGS</button>

    </section>


    <section class="section-container">

        <h2>Cat hotel</h2>

        <p>Need a safe place for your cat while you’re off on a trip?
            Our cat hotel offers a secure location for cats to stay overnight.</p>

        <img src="" alt="">
        <img src="" alt="">
        <img src="" alt="">


        <button>BOOK YOUR CAT</button>

    </section>


</div>

<?=
get_footer();
?>