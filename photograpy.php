<?php
/*
Template Name: Tailz Photography
*/
get_header();

?>

<!-- Tailz home page content -->




<h1><?php echo 'Tailz' . Get_the_title(); ?></h1>


<!--  banner image -->

<?php
$hero_image = get_field('photography_hero_image');
?>
<section class="short-hero-banner"
    style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0, 0, 0, 0.15)), 
           url('<?php echo esc_url($hero_image); ?>') center/cover no-repeat;">
    <div class="hero-content">
        <h2>Pet photography</h2>
    </div>
</section>
<!-- banner image end -->

<div class="tailz-photograpy-content">



    <section class="photography-intro">

        <?php if (get_field('photography_heading')) : ?>
            <h2><?php the_field('photography_heading'); ?></h2>
        <?php else : ?>
            <h2>Professional pet photography</h2> <!-- Default fallback heading -->
        <?php endif; ?>

        <?php if (get_field('photography_content')) : ?>
            <p><?php the_field('photography_content'); ?></p>
        <?php else : ?>
            <p>Let our photographers take photos of your pets in-resort!</p>
            <p>On holidays and special events, we transform one of our rooms into a themed photo studio! We offer festive holiday props and accessories for your pet.</p>
        <?php endif; ?>


    </section>


    <!-- photography gallery using masonry ui-->

  <div class="gallery-container">
        <section class="gallery">
    
            <div id="masonry-grid" class="grid">
                <?php
                $images = [
                    get_field('masonry_image_1'),
                    get_field('masonry_image_2'),
                    get_field('masonry_image_3'),
                    get_field('masonry_image_4'),
                    get_field('masonry_image_5'),
                    get_field('masonry_image_7'),
                ];
    
                foreach ($images as $image):
                    if ($image): ?>
                        <div class="grid-item gallery-img">
                            <img src="<?php echo esc_url($image); ?>" alt="Masonry Image">
                        </div>
                <?php endif;
                endforeach;
                ?>
            </div>
    
        </section>
  </div>


</div>

<?=
get_footer();
?>