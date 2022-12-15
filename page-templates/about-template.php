<?php
/**
 * Template Name: About Us
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

	<header id="about-header">
		<img src="<?php bloginfo('template_directory'); ?>/img/misc/shape-white.png" alt="" class="right-shape">        
		<img src="<?php bloginfo('template_directory'); ?>/img/misc/white-left.png" alt="" class="header-shape">

		<div class="container">
			<div class="header-text">
				<div class="header-image">
					<?php
					$imageID = get_field('featured_image_about_hero');
					$image = wp_get_attachment_image_src( $imageID, 'half-image' );
					$alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
					?> 

					<img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 					
				</div>
				<!-- // image  -->
				<div class="header-caption">
					<span class="title"><?php the_field('small_title_about_header'); ?></span>
					<h1><?php the_field('hero_title_about_hero'); ?></h1>
					<?php the_field('hero_text_about_header'); ?>
					<a href="<?php the_field('button_link_top_cta_about'); ?>" class="btn-cta"><?php the_field('button_label_top_about_cta'); ?></a>
				</div>
				<!-- // caption  -->
			</div>
			<!-- // text  -->
		</div>
		<!-- // container  -->
	</header>
	<!-- // about header  -->

	<section id="about-intro">
		<div class="container">
			<div class="intro-text">
				<?php the_field('intro_content_about_page'); ?>
			</div>
			<!-- // intro  -->
			<div class="intro-image">
				<?php
				$imageID = get_field('featured_image_about_content');
				$image = wp_get_attachment_image_src( $imageID, 'half-image' );
				$alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
				?> 

				<img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 				
			</div>
			<!-- // image  -->
		</div>
		<!-- // container  -->
	</section>
	<!-- // about intro  -->

    <div id="gallery" class="gallery-inner">
        <div class="container">
            <div class="row">
                <?php 
                $images = get_field('photo_gallery_gen');
                if( $images ): ?>
                    <?php foreach( $images as $image ): ?>
                        <div class="col-lg-4 col-md-4">
                            <div class="image-holder wow fadeIn" data-wow-duration="0.7s" data-wow-delay="0.5s">
                                <img src="<?php echo $image['sizes']['gal-image']; ?>" class="img-responsive" alt="<?php echo $image['alt']; ?>" />     
                                <a href="<?php echo $image['url']; ?>"></a>
                            </div>
                            <!-- // holder  -->
                        </div>
                        <!-- // col  -->
                    <?php endforeach; ?>
                <?php endif; ?>                
            </div>
            <!-- // row  -->
            <footer class="wow fadeInUp" data-wow-duration="0.7s" data-wow-delay="0.5s">
                <a href="<?php the_field('button_link_about_cta'); ?>" class="btn-cta"><?php the_field('button_label_cta_about'); ?></a>
            </footer>			
        </div>
        <!-- // container  -->
    </div>
    <!-- // gallery  -->   	

	<section id="about-main">
		<img src="<?php bloginfo('template_directory'); ?>/img/misc/white-left.png" alt="" class="bottom-shape">
		<div class="container">
			<header>
				<h2><?php the_field('section_title_about_main'); ?></h2>
			</header>
			<!-- // header  -->
			<div class="row">
				<div class="col-lg-6">
					<div class="content-block">
						<?php the_field('left_column_content'); ?>
					</div>
				</div>
				<!-- // col  -->
				<div class="col-lg-6">
					<div class="content-block">
						<?php the_field('right_column_content_about'); ?>
					</div>
				</div>
				<!-- // col  -->
			</div>
		</div>
		<!-- // container  -->
	</section>
	<!-- // main  -->

	<section id="reviews" class="reviews-inner">
        <div class="container">
            <h3 class="wow fadeInDown" data-wow-duration="0.8s" data-wow-delay="0.5s"><?php the_field('section_title_reviews_inner'); ?></h3>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <img src="<?php bloginfo('template_directory');  ?>/img/ico/left-quotes-sign.svg" alt="" class="icon wow fadeIn">
                    <div id="reviews-slider">
                        <?php
                            $post_objects = get_field('reviews_list_inner');

                            if( $post_objects ): ?>
                                <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                                    <?php setup_postdata($post); ?>

                                    <div class="item">
                                        <div class="review-slide">
                                            <?php the_content(); ?>
                                            <span class="author">- <?php the_title(); ?></span>
                                        </div>
                                    </div>
                                    <!-- // slide  -->

                                <?php endforeach; ?>
                            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                        <?php endif; ?>
                    </div>
                    <!-- // slider  -->
                </div>
                <!-- // col  -->
            </div>
            <!-- // row  -->
        </div>
        <!-- // container  -->
    </section>
    <!-- // reviews  -->

<?php get_footer(); ?>