<?php
/*
Template Name: Tailz Dog training
*/
get_header();

?>

<!-- Tailz home page content -->
<div class="tailz-dog-training-content">




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


   
    <section>

        <h2>Puppy Training</h2>

        <p>The early months of a puppy are critical to them, as early socialization and care will heavily reduce fears and anxieties affecting them in the future.</p>

        <p>Early socialization and desensitization leads to decreased fears and anxieties down the road. Whether your puppy visits us once a week, or every day, they will get to experience our structured curriculum that focuses on socialization to sights, sounds, and experiences that they'll need to navigate life as an adult.</p>

        <p>These are programs that go beyond the traditional benefits of Doggy Daycare for our youngest pups. So whether you bring them once a week or every day, they will have the positive experiences that are pivotal in creating that healthy and happy member of your family.</p>

    </section>

    <section>
        <h2>Puppy pre school</h2>

        <p>
            Our Puppy Preschool is our signature 4- or 6-week puppy training program and socialization curriculum designed for young puppies aged 8-20 weeks.
            During their days at Puppy Preschool we focus on:
        </p>

        <ul>

            <li> Improving manners</li>

            <li>
                Sit, Down, Stay, and Wait,
                Watch, Touch, and Place.
            </li>

            <li>Recall ("Come!"), and Jumping ("Off!")</li>

            <li>Crate training, loose leash walking, and greeting other dogs politely.</li>

            <li>Safe play and socialization</li>

            <li>Outdoor walks</li>

            <li>Puppy Playtime</li>

            <li>Grooming etiquette</li>

            <li>Desensitization work</li>

        </ul>

    </section>

    <section>

        <img src="" alt="">

        <div>

            <h3> Our Puppy Preschool Program includes:</h3>

            <p>1 puppy groom</p>
            <p>4 or 6 consecutive weeks of puppy training</p>
            <p>One-on-one training session, 2-3 times per day.</p>
            <p>Choosing to add an additional 2 weeks of Puppy Preschool training for a total of six weeks will allow your pup to become more well rounded and socialized.</p>
            <p>Putting you and your puppy on the same page ensures consistency in training, which is why we review the skills your pup is learning with you on a weekly basis, so that you can also teach and implement the same things at home. Let us do the hard work for you, so you can enjoy your happy puppy at home!</p>

            <button>Book your pup</button>

        </div>

    </section>

    <section>
        <h2>Puppy Daycare</h2>
        <p>
            Helping to shape puppies, our Puppy Daycare program focuses on the socialization of puppies. We'll work on polite playtime, potty training, crate training, and socialization to help your puppy learn skills for everyday life.
            All puppies under 16 weeks must start in one of our Puppy Programs before moving up to our regular Doggy Daycare program.
            Puppies can start as young as 8 weeks old.
            Puppies must attend once a week for 4 weeks.
        </p>


        <div>

            <img src="" alt="">

            <div>

                <p> Our Puppy Daycare program includes:</p>
                <p>Daylong potty training</p>
                <p>Learning to settle in a crate</p>
                <p>Safe play and socialization skills</p>
                <p>Puppy playtime</p>

                <button>Book your pup</button>

            </div>

        </div>

    </section>


    <section>

        <h2>requirements</h2>

        <p>
            Puppies must have their first Distemper Combination and Bordetella vaccination at least 7 days prior to their first day of Puppy Preschool, and must be kept up to date during their time at Tailz.​ 
            While it used to be recommended that puppies not be socialized until after their third set of puppy vaccines at 16 weeks, research now shows us that waiting this long can be at the detriment of their social skills, and the risk of diseases is quite low if they have received their first or second set of vaccinations.
        </p>

    </section>

    <section>
        <h2>FAQ</h2>
        <p>
            🦴 When do the Puppy Programs run?</p>
        <p> Our Puppy Program curriculum runs Monday – Friday and will start at 9:00am. Although our curriculum doesn’t start until mid-morning, you can drop off your puppy as soon as we open at 6:30am, and pick-up at our latest time of 6:30pm.
        </p>

        <p>🦴 Should I bring lunch?</p>
        <p>We recommend that you bring your puppy lunch. Please send a single serving lunch in a clearly labeled bag or container.</p>

        <p>🦴 Will treats be given?</p>
        <p>To aid in training, your puppy may also be given treats throughout the day, which we will provide. Our treats are typically quite tasty for the young pups; however, if you have particular treats that your puppy loves, you can bring those in a clearly labeled bag. We will use those for one-on-one training sessions. Be sure to let us know if your puppy has any food allergies or sensitivities.</p>

        <p>🦴 Does my puppy have access to water?</p>
        <p>Your puppy will have access to fresh, cold water during each structured playtime.</p>

    </section>


    <section>

        <h2>Adult training</h2>

        <p>Dog too rowdy for your household? We can help! We use positive reinforcement to help show your dog how to behave properly and to follow commands.</p>

    </section>

</div>

<?=
get_footer();
?>