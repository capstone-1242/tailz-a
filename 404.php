<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @package tailz
 */

get_header();
?>

<section class="hero-banner"
    style="margin: 0; padding: 6rem 2rem; background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('<?php echo get_template_directory_uri(); ?>/images/hero/dogs-on-chair.webp') center/cover no-repeat; color: #fff; text-align: center; display: flex; align-items: center; justify-content: center;">

    <div class="hero-content" style="max-width: 700px;">
        <h2 style="font-size: 2rem; margin-bottom: 1rem;">Uh-oh! That page went walkies. 🐾</h2>
        <p>
            It looks like the page you're sniffing for doesn't exist.<br>
            But don't worry, we’ve got plenty of treats elsewhere!
        </p>

        <a href="<?php echo esc_url(home_url('/')); ?>" class="no-decoration" style="margin: 1.5rem auto">
            <div class="custom-button-bottom yellow-colors">
                <div class="custom-button">Back to Homepage</div>
            </div>
        </a>

        <div>
            <p style="margin-bottom: 0.5rem;">Or try searching:</p>
            <div style="max-width: 400px; margin: 0 auto;">
                <?php get_search_form(); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>