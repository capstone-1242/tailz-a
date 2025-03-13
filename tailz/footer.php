<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tailz
 */

?>

<footer id="colophon" class="site-footer">


	<div class="footer-logo">
		<a href="<?php echo esc_url(home_url('/')); ?>" rel="home"> <?= the_custom_logo(); ?> <img class="header-logo" src="<?= get_template_directory_uri() ?>/images/logo/tailz-transperant-logo.png"> </a>
	</div>

	<div class="page-footer">

		<!-- Footer Content Section -->
		<section class="footer-content">
			<!-- Logo Section -->

			<!-- Our Promise Section -->
			<article class="footer-promise">
				<h2>Our Promise</h2>
				<p>
					At Tailz, we promise to provide the best care for your pet. We understand that your pet is a part of your family, and we will treat them as such. Our team of professionals will ensure that your pet is safe, happy, and healthy while in our care. We offer a range of services to meet your pet's needs, from grooming to overnight stays. We are committed to providing a clean, safe, and comfortable environment for your pet, so you can have peace of mind knowing that they are in good hands.
				</p>
			</article>

			<!-- Services Section -->
			<div class="footer-services">
				<h2>Services</h2>
				<ul>
					<li>Grooming</li>
					<li>Daycare</li>
					<li>Overnight Lodging</li>
					<li>Products</li>
					<li>Training</li>
				</ul>
			</div>

			<!-- Contact Us Section -->
			<div class="footer-contact">
				<h2>Contact Us</h2>
				<p>1234 Tailz Drive</p>
				<p>Edmonton, AB</p>
				<a href="tel:123-456-7890">123-456-7890</a>
				<a href="mailto:info@tailz.com">info@tailz.com</a>
			</div>

		</section>

		<!-- Newsletter Section -->
		<section class="footer-newsletter">
			<h2>Newsletter</h2>
			<p>
				What’s the bark around Tailz? Find out for yourself! Sign up for our mailing services for updates, alerts, special offers, and more!
			</p>
		</section>

		<!-- Payment Info & Copyright -->
		<div class="footer-bottom">
			<!-- Payment Info logos could go here -->
			<p>&copy; <?php echo date('Y'); ?> Tailz Pet Resort</p>
		</div>

	</div><!-- .site-info -->

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>


</body>

</html>