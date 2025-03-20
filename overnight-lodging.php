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

        <h2>Overnight Lodging</h2>

        <h3>Luxury Lodges</h3>

        <p>Off on a vacation? Business trip? Let us help take care of your pet while you’re gone with our luxury lodgings!</p>
        <p>When it comes to overnight care, we’ve redefined the experience. Our new sleepover nights offer a resort-style stay that goes beyond traditional day care.</p>
        <p>Each day of restful sleep offers the benefits of Doggy Daycare, meaning your pet will never be left alone while they’re with us. You may also sign your dog up for a departure bath on their last day so they come home fresh and squeaky clean!</p>

        <p>We provide all the toys, beds, blankets and love that your dog needs; all you need to do is bring some dog food! We will feed your dog two to three times a day with the provided food. Bring all items in a marked reusable shopping bag. Pre-portioned food is appreciated.</p>


    </section>

    <!-- second section -->
    <section>
        <p><span>Bronze Package:</span> $1.99/night</p>
        <p>
            LOWEST COST Morning Play Session, Bedtime Story, Extra Cuddles, Gourmet Bedtime Treat
            Silver Package: $7.99/night
        </p>
        <p>
            MOST POPULAR Morning Play Session, Afternoon Play Session, Bedtime Story, Extra Cuddles, Gourmet Bedtime Treat
            Bronze Package: $69.99/night
        </p>
        <p>ULTIMUTT VALUE Morning Play Session, Afternoon Play Session, Evening Stroll, Bedtime Story, Extra Cuddles, Gourmet Bedtime Treat</p>
    </section>

    <!-- third section -->
    <section>
        <h3>Cat Hotel</h3>
        <p>Need a safe place for your cat while you’re off on a trip? Our cat hotel offers a secure location for cats to stay overnight.</p>
    </section>


</div>

<?=
get_footer();
?>