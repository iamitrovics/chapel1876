<?php
/**
 * Template Name: Book Now
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

    <header id="inner-header">
        <img src="<?php bloginfo('template_directory'); ?>/img/bg/login-bg.png" alt="" class="left-shape">
        <img src="<?php bloginfo('template_directory'); ?>/img/misc/shape-white.png" alt="" class="right-shape">        
        <div class="container">
            <div class="header-caption">
                <h1><?php the_title(); ?></h1>
            </div>
            <!-- // caption  -->
        </div>
        <!-- // container  -->
    </header>
    <!-- // header  -->

    <div id="form-content">
        <div class="container">
            <div class="row">

                <div class="col-lg-5">
                    <div class="form-intro">
                        <h2><?php the_field('block_title_form_book'); ?></h2>
                        <?php the_field('content_block_book_now'); ?>
                    </div>
                </div>
                <!-- // intro  -->

                <div class="col-lg-7">
                    <div class="form-wrapper">
                        <?php the_field('form_code_book'); ?>
                    </div>
                </div>
                <!-- // form  -->

            </div>
            <!-- // row  -->
        </div>
        <!-- // row  -->
    </div>
    <!-- // form  -->

    <div id="gallery" class="gallery-inner">
        <div class="container">
            <div class="row">
                <?php 
                $images = get_field('photo_gallery_book');
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
        </div>
        <!-- // container  -->
    </div>
    <!-- // gallery  -->    

<?php get_footer(); ?>