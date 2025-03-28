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
    <section>

        <h2>Luxury Lodges</h2>

        <p>Off on a vacation? Business trip? Let us help take care of your pet while you’re gone with our luxury lodgings!</p>
        <p>When it comes to overnight care, we’ve redefined the experience. Our new sleepover nights offer a resort-style stay in ample-spaced lodges that goes beyond traditional day care.</p>
        <p>Each day of restful sleep offers the benefits of Doggy Daycare, meaning your pet will never be left alone while they’re with us. You may also sign your dog up for a departure bath on their last day so they come home fresh and squeaky clean!</p>

        <div>

            <div>

                <img src="" alt="">

                <p>We provide all the toys, beds, blankets and love that your dog needs; all you need to do is bring some dog food! We will feed your dog two to three times a day with the provided food. Bring all items in a marked reusable shopping bag. Pre-portioned food is appreciated.</p>

            </div>

        </div>

    </section>

    <!-- second section -->

    <section>

        <h2>Requirements</h2>
        <p>Only social, dog friendly dogs are accepted into our lodging. We do not take aggressive dogs.</p>
        <p>All dogs must pass a Meet & Greet prior to lodging.</p>
        <p>They must have attended Doggy Daycare at least once in the last 3 months. Alternatively, new pups must have passed their Meet & Greet within the last 2 months</p>.
        <p>All dogs require up-to-date vaccinations for Bordetella, Distemper/Parvovirus/Parainfluenza, and Rabies (after 6 months of age.)</p>
        <p>All current vaccination records must be received 24-hours in advance of your pet’s overnight stay.</p>
        <p>All pups are to be spayed or neutered by 7 months of age. If a medical exception has been granted, intact pups older than 10 months will not be accepted.</p>
        <p>Our Canine Care Team may change the activity level of your dog should their needs require it during their stay.
        </p>Check-in time is 12:00PM or afterwards during regular business hours. Early check-in fee of $17.99 applies before 12:00PM.
        <p>Checkout time is by 12:00PM during regular business hours. Late checkout fee of $17.99 applies after 12:00PM.
        </p>
        <p>Dogs not checked out by closing time must stay overnight, and will be surcharged for additional night's stay and can be picked up the following business day.</p>

    </section>

    <!-- third section -->
    <section class="overnight-lodging-packages">

        <h3>Packages</h3>

        <div class="package-card-container">

            <div class="package-card">
                <h2></h2>
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>

            <div class="package-card">
                <h2></h2>
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>

            <div class="package-card">
                <h2></h2>
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>

        </div>

    </section>

    <section>

        <h2>Premium lodges</h2>

        <p>Each of our lodgings is uniquely decorated for your dogs enjoyment.</p>

        <img src="" alt="">
        <img src="" alt="">
        <img src="" alt="">


        <button></button>

    </section>


    <section>

        <h2>Cat hotel</h2>

        <p>Need a safe place for your cat while you’re off on a trip? 
        Our cat hotel offers a secure location for cats to stay overnight.</p>

        <img src="" alt="">
        <img src="" alt="">
        <img src="" alt="">


        <button></button>

    </section>


</div>

<?=
get_footer();
?>