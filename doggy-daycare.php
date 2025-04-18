<?php
/*
Template Name: Tailz Doggy Daycare
*/
get_header();

?>

<h1><?php echo 'Tailz' . Get_the_title(); ?></h1>

<?php
$hero_image = get_field('doggy_daycare_hero_image');
?>
<section class="short-hero-banner"
    style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0, 0, 0, 0.15)), 
           url('<?php echo esc_url($hero_image); ?>') center/cover no-repeat;">
    <div class="hero-content">
        <h2>Doggy Daycare</h2>
    </div>
</section>



<div class="tailz-doggy-daycare-content">




    <section class="doggy-daycare-hours">
        <p>Monday - Friday: 6:30AM-6:30PM</p>
        <p>Saturdays: 10:00AM-5:00PM</p>
        <p>Closed Sundays and Holiday</p>
    </section>

    <div class="section-secondary">
        <section class="get-started section-container">
            <?php
            $get_started_image = get_field('get_started_image');
            ?>
            <div class="image-wrapper">
                <img src="<?php echo esc_url($get_started_image); ?>" alt="">
            </div>
            <div class="content-wrapper">
                <h2>get started </h2>
                <p>Our daycare offers a rich environment for your dog to exercise, socialize, and rest. With a carefully designed and unique program, your dog will have the best daycare experience the resort has to offer!</p>
                <p>Play-groups are carefully chosen, ensuring the best experience for your dog, keeping them in a safe play environment as well as a paced schedule with regular downtime keeping them from becoming cranky.</p>
                <p>Dogs looking to join us will be assessed through our Meet and Greet in order to ensure they are suitable for the program. To ensure the enjoyment and safety of all pups, some pups may not be accepted into the daycare program.</p>
                <a href="<?php echo get_permalink(get_page_by_title('booking')); ?>" class="no-decoration">
                    <div class="custom-button-bottom blue-colors">
                        <div class="custom-button">BOOK YOUR PUP</div>
                    </div>
                </a>
            </div>
        </section>
    </div>


    <section class="rates">

        <h2>Rates</h2>

        <div class="rates-card-container">

            <div class="rate-card">
                <div class="rate-card-header">

                    <h3>Per Day</h3>

                </div>
                <ul>

                    <li> Full Day - $40</li>
                    <li> Half Day (4 Hours or Less) - $25</li>
                    <li> Saturday - $27</li>

                </ul>

            </div>


            <div class="rate-card">

                <div class="rate-card-header">
                    <h3>Monthly Rates</h3>


                </div>

                <ul>
                    <li>Priority Overnight Booking, ‘Wag’ More Rewards, VIP Bonus!</li>
                    <li> 12 Playdates - $384</li>
                    <li> 16 Playdates - $496</li>
                    <li> 20 Playdates - $600</li>
                    <li>30-Day Advance cancellation notice Email must be sent before cancelling.</li>
                    <li> Monthly packages expire 30 days after purchase.</li>

                </ul>

            </div>

            <div class="rate-card">
                <div class="rate-card-header">

                    <h3>FLEX Passes</h3>


                </div>
                <ul>

                    <p>Advanced booking required.</p>
                    <li> 5 Playdates - $190</li>
                    <li> 10 Playdates - $360</li>
                    <li> 20 Playdates - $660</li>

                </ul>
            </div>
        </div>

        <div class="warning-text">
            <p>
                Monthly Automatic Passes and Flex Passes purchases are non-refundable,</p>
            <p> not transferable and not eligible for in-store credit.</p>

        </div>

    </section>
    <section class="requirements section-secondary">

        <div class="requirements-content">
            <h2>Requirements</h2>

            <p>
                All puppies under 16 weeks must start in one of our Puppy Programs before moving up to our regular Doggy Daycare program.
                Spay and Neuter: Pets over 7 months of age must be spayed and neutered. Our management team may grant exceptions with written medical reasons from your pet’s veterinarian for pets up to 10 months of age.
                Puppies are encouraged to join prior to being altered, as this is their best socialization time.
            </p>

            <h3> Vaccinations</h3>

            <p>
                Required Vaccinations (6+ months): Rabies, Distemper Combo & Bordetella.  A complete set of vaccinations during your pups lifetime is still required prior to any exceptions granted.
                We ask that each pup have the distemper combo as well as the Bordetella vaccination for canine cough prevention to begin doggy daycare.
                Vaccination requirement exceptions require written medical reasons by your pup's Veterinarian and proof of titer tests every 6 months. Any approvals for exceptions are handled on a case-by-case basis and are not guaranteed. Management will review any request for exception before to their Meet & Greet, and will consult with veterinarians prior making any decision
            </p>

            <h3>Pest Management</h3>

            <p>It is strongly recommended for your pet to be on monthly anti-parasite medication such as Revolution or Advantage, as this will greatly reduce the risk of spreading ticks, fleas, and lice to the facility and to your pup. Ask your veterinarian or purchase from over-the-counter</p>

        </div>

    </section>


    <section class="puppy-training-banner">

        <div class="puppy-training-banner-content">

            <h2>Need Puppy Training? </h2>

            <p>Need training for your pup? Check out our Puppy Training and let our experts show your puppy tricks and etiquette!</p>

            <a href="<?php echo get_permalink(get_page_by_title('dog training')); ?>" class="no-decoration">
                <div class="custom-button-bottom yellow-colors">
                    <div class="custom-button">View Training</div>
                </div>
            </a>
        </div>

        <?php $puppy_training_image = get_field('puppy_training_image'); ?>

        <div>
            <img src="<?php echo esc_url($puppy_training_image); ?>" alt="">
        </div>

    </section>

</div>

<?=
get_footer();
?>