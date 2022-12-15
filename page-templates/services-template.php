<?php
/**
 * Template Name: Services
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

    <div class="parallax-window header-services" data-parallax="scroll" data-image-src="<?php the_field('background_image_hero_services'); ?>">
        <div class="container">
            <div class="hero-content">
                <h1><?php the_field('hero_title_services'); ?></h1>
                <?php the_field('hero_text_services'); ?>
                <a href="#services-main" class="btn-down"><img src="<?php bloginfo('template_directory'); ?>/img/ico/down-arrow.svg" alt=""></a>
            </div>
            <!-- // content  -->
        </div>
        <!-- // container  -->
    </div>
    <!-- // header  -->

    <section id="services-main">
        <div class="container">
            <?php
            $loop = new WP_Query( array( 'post_type' => 'services', 'posts_per_page' => 15) ); ?> 
            <?php $i=1; ?> 
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                <div class="service-wrapper" id="service-<?php echo $i; ?>">
                    <div class="service-text">
                        <h3><?php the_title(); ?></h3>
                        <?php the_field('short_description_service'); ?>
                    </div>
                    <!-- // text  -->
                    <div class="service-image">
                        <span class="top-shape wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.8s"></span>
                        
                        <?php
                        $imageID = get_field('featured_image_service');
                        $image = wp_get_attachment_image_src( $imageID, 'service-image' );
                        $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                        ?> 

                        <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                        <span class="bottom-shape wow fadeInDown" data-wow-duration="0.8s" data-wow-delay="0.5s"></span>

                    </div>
                    <!-- // image  -->
                </div>
                <!-- // wrapper  -->

            <?php $i++; endwhile; ?>
            <?php wp_reset_postdata(); ?>      
        </div>
        <!-- // container  -->
    </section>
    <!-- // services main  -->

<?php get_footer(); ?>