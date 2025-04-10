<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package tailz
 */

get_header();
?>

<main id="primary" class="site-main">

    <section class="search-banner short-hero-banner"
        style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('<?php echo get_template_directory_uri(); ?>/images/hero/dogs-on-chair.webp') center/cover no-repeat; padding: 6rem 2rem; text-align: center; color: #fff;">
        <div class="hero-content">
            <h1 style="font-size: 3rem; margin-bottom: 1rem;">Search Results</h1>
            <p style="font-size: 1.25rem;">Here’s what we found for: <strong><?php echo get_search_query(); ?></strong></p>
        </div>
    </section>

    <section class="search-results-wrapper" style="max-width: 1200px; margin: 4rem auto; padding: 0 1.5rem;">
        <?php if ( have_posts() ) : ?>

            <div class="search-results-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 2rem;">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>
                        style="background: #fafafa; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.1); transition: background 0.3s ease; padding: 1rem;">

                        <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php the_permalink(); ?>" style="display: block; margin-bottom: 1rem;">
                                <?php the_post_thumbnail( 'medium', [ 'style' => 'border-radius: 8px; width: 100%; height: auto; object-fit: cover;' ] ); ?>
                            </a>
                        <?php endif; ?>

                        <div class="post-content" style="flex-grow: 1;">
                            <h2 style="font-size: 1.5rem; margin-bottom: 1rem;">
                                <a href="<?php the_permalink(); ?>" style="text-decoration: none; color: #1e2d40;">
                                    <?php the_title(); ?>
                                </a>
                            </h2>

                            <p style="font-size: 1rem; color: #555;">
                                <?php echo wp_trim_words( get_the_excerpt(), 28, '...' ); ?>
                            </p>

                            <a href="<?php the_permalink(); ?>" class="blue-btn paw" style="margin-top: 1.5rem; display: inline-block; background-color: #0073e6; padding: 0.75rem 1.5rem; color: white; text-decoration: none; border-radius: 5px;">
                                Read More
                            </a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <div class="pagination" style="margin-top: 3rem;">
                <?php the_posts_navigation(); ?>
            </div>

        <?php else : ?>
            <div class="no-results" style="text-align: center;">
                <h2 style="font-size: 2rem;">No results found</h2>
                <p style="font-size: 1.1rem; margin: 1rem auto; max-width: 600px;">
                    Hmm... we couldn’t find anything for that. Try another search below?
                </p>
                <div style="margin-top: 2rem;">
                    <?php get_search_form(); ?>
                </div>
            </div>
        <?php endif; ?>
    </section>

</main><!-- #main -->

<?php get_footer(); ?>
