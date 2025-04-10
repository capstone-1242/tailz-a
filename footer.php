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

<footer id="colophon">


	<div class="site-footer">

		<div class="footer-container">


			<div class="social">

				<div class="footer-icons">


					<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0,0,256,256">
						<g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
							<g transform="scale(5.12,5.12)">
								<path d="M16,3c-7.16752,0 -13,5.83248 -13,13v18c0,7.16752 5.83248,13 13,13h18c7.16752,0 13,-5.83248 13,-13v-18c0,-7.16752 -5.83248,-13 -13,-13zM16,5h18c6.08648,0 11,4.91352 11,11v18c0,6.08648 -4.91352,11 -11,11h-18c-6.08648,0 -11,-4.91352 -11,-11v-18c0,-6.08648 4.91352,-11 11,-11zM37,11c-1.10457,0 -2,0.89543 -2,2c0,1.10457 0.89543,2 2,2c1.10457,0 2,-0.89543 2,-2c0,-1.10457 -0.89543,-2 -2,-2zM25,14c-6.06329,0 -11,4.93671 -11,11c0,6.06329 4.93671,11 11,11c6.06329,0 11,-4.93671 11,-11c0,-6.06329 -4.93671,-11 -11,-11zM25,16c4.98241,0 9,4.01759 9,9c0,4.98241 -4.01759,9 -9,9c-4.98241,0 -9,-4.01759 -9,-9c0,-4.98241 4.01759,-9 9,-9z"></path>
							</g>
						</g>
					</svg>

					<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0,0,256,256">
						<g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
							<g transform="scale(5.12,5.12)">
								<path d="M11,4c-3.85433,0 -7,3.14567 -7,7v28c0,3.85433 3.14567,7 7,7h28c3.85433,0 7,-3.14567 7,-7v-28c0,-3.85433 -3.14567,-7 -7,-7zM11,6h28c2.77367,0 5,2.22633 5,5v28c0,2.77367 -2.22633,5 -5,5h-28c-2.77367,0 -5,-2.22633 -5,-5v-28c0,-2.77367 2.22633,-5 5,-5zM13.08594,13l9.22266,13.10352l-9.30859,10.89648h2.5l7.9375,-9.29297l6.53906,9.29297h7.9375l-10.125,-14.38672l8.21094,-9.61328h-2.5l-6.83984,8.00977l-5.63672,-8.00977zM16.91406,15h3.06445l14.10742,20h-3.06445z"></path>
							</g>
						</g>
					</svg>

					<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0,0,256,256">
						<g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
							<g transform="scale(5.12,5.12)">
								<path d="M9,4c-2.74952,0 -5,2.25048 -5,5v32c0,2.74952 2.25048,5 5,5h16.83203c0.10799,0.01785 0.21818,0.01785 0.32617,0h5.67383c0.10799,0.01785 0.21818,0.01785 0.32617,0h8.8418c2.74952,0 5,-2.25048 5,-5v-32c0,-2.74952 -2.25048,-5 -5,-5zM9,6h32c1.66848,0 3,1.33152 3,3v32c0,1.66848 -1.33152,3 -3,3h-8v-14h3.82031l1.40039,-7h-5.2207v-2c0,-0.55749 0.05305,-0.60107 0.24023,-0.72266c0.18718,-0.12159 0.76559,-0.27734 1.75977,-0.27734h3v-5.63086l-0.57031,-0.27149c0,0 -2.29704,-1.09766 -5.42969,-1.09766c-2.25,0 -4.09841,0.89645 -5.28125,2.375c-1.18284,1.47855 -1.71875,3.45833 -1.71875,5.625v2h-3v7h3v14h-16c-1.66848,0 -3,-1.33152 -3,-3v-32c0,-1.66848 1.33152,-3 3,-3zM32,15c2.07906,0 3.38736,0.45846 4,0.70117v2.29883h-1c-1.15082,0 -2.07304,0.0952 -2.84961,0.59961c-0.77656,0.50441 -1.15039,1.46188 -1.15039,2.40039v4h4.7793l-0.59961,3h-4.17969v16h-4v-16h-3v-3h3v-4c0,-1.83333 0.46409,-3.35355 1.28125,-4.375c0.81716,-1.02145 1.96875,-1.625 3.71875,-1.625z"></path>
							</g>
						</g>
					</svg>

				</div>

				<a class="footer-phone" href="tel:7809880089">780-988-0089</a>

			</div>

			<!-- Footer Content Section -->
			<section class="footer-content">

				<!-- Our Promise Section -->
				<article class="footer-promise">
					<h2>Our Philosophy</h2>
					<p>
						Passionate about promoting healthy foods and lifestyles for canine companions. 
					</p>

					<p>We treat your pets as though they were our own. Caring for the well-being of their minds, bodies, and emotions we use positive reinforcement. </p>

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


		</div>

	</div>


	<!-- Payment Info & Copyright -->
	<div class="footer-bottom">
		<p>&copy; <?php echo date('Y'); ?> Tailz </p>
		<img src="<?= get_template_directory_uri() ?>/images/payment-options/apple.png" alt="">
		<img src="<?= get_template_directory_uri() ?>/images/payment-options/google.png" alt="">
		<img src="<?= get_template_directory_uri() ?>/images/payment-options/mastercard.png" alt="">
		<img src="<?= get_template_directory_uri() ?>/images/payment-options/shop.png" alt="">
		<img src="<?= get_template_directory_uri() ?>/images/payment-options/visa.png" alt="">
	</div>



</footer><!-- #colophon -->



<?php wp_footer(); ?>

<script>
	document.addEventListener("DOMContentLoaded", function() {
	
		const menuToggle = document.querySelector(".menu-toggle");
		const menu = document.querySelector(".main-menu");

		if (menuToggle && menu) {
			menuToggle.addEventListener("click", function() {
				let isExpanded = menuToggle.getAttribute("aria-expanded") === "true";
				menuToggle.setAttribute("aria-expanded", !isExpanded);
				menu.classList.toggle("active"); 

			
				if (!isExpanded) {
					menu.classList.add("active");
				} else {
					menu.classList.remove("active");
				}
			});
		}

		
		document.addEventListener('click', function(e) {
			if (!menu.contains(e.target) && !menuToggle.contains(e.target)) {
				menu.classList.remove('active'); 
				menuToggle.setAttribute("aria-expanded", "false");
			}
		});
	});
</script>

</body>

</html>