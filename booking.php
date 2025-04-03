<?php
/*
Template Name: Tailz Booking
*/
get_header();
?>

<!-- Booking Page Layout -->
<div class="booking-container">
    <div class="booking-header">
        <h2>Book Your Appointment</h2>
        <p>Select your service and preferred time.</p>
    </div>

    <div class="booking-form">
        <div class="booking-form-content">
            <!-- <h3>Select a Service</h3> -->
            <!-- Appointment Hour Booking Form Shortcode -->
            <?php echo do_shortcode('[CP_APP_HOUR_BOOKING id="1"]'); ?>
        </div>
    </div>
</div>

<?php
get_footer();
?>
