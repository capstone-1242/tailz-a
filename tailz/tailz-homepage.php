<?php
/*
Template Name: Tailz Homepage
*/
get_header();

?>

<!-- Tailz home page content -->
<div class="tailz-homepage-content">




    <h1><?php echo 'Tailz' . Get_the_title(); ?></h1>

    <section>

        <?php if (get_field('welcome_heading')) : ?>
            <h2><?php the_field('welcome_heading'); ?></h2>
        <?php else : ?>
            <h2> Tailz pet resort</h2> <!-- Default fallback heading -->
        <?php endif; ?>

        <?php if (get_field('welcome_content')) : ?>
            <p><?php the_field('welcome_content'); ?></p>
        <?php else : ?>
            <p>Welcome to edmontons first and only pet resort</p> <!-- Default fallback content -->
        <?php endif; ?>

    </section>

    <!-- first section -->
    <section>

        <h2>Grooming to Furfection</h2>
        <p>Come visit our resort! Give your pet the luxury they deserve.</p>

    </section>


    <!-- second section -->
    <section>

        <h2>The New Lo’cat’ion</h2>
        <p>We’ve moved our resort to a brand new location! With more space and more features, your pet will experience the most luxurious resort Edmonton has to offer!</p>

    </section>

    <!-- third section -->
    <section>

        <h2>Products</h2>
        <p>Treat your pet to food that’s best for them.</p>

    </section>

    <!-- fourth section -->
    <section>

        <h2>Doggy Daycare</h2>
        <p>Let your dog socialize with fellow pups in our daycare!</p>

    </section>

    <!-- fifth section -->
    <section>

        <h2>Pet Grooming</h2>
        <p>Pampering pups from head to tail with the aid of professional pet stylists.</p>

    </section>

    <!-- sixth section -->
    <section>

        <h2>Overnight Pet Lodgings</h2>
        <p>Can’t bring your pet on a trip? Treat them to a luxury overnight stay with us!</p>

    </section>

    <!-- seventh section -->
    <section>

        <h2>Newsletter</h2>
        <p>
            What’s the bark around Tailz? Find out for yourself!
            Sign up for our mailing services for updates, alerts, special offers and more!
        </p>
    </section>







</div>

<?=
get_footer();
?>