<?php
/**
 * Template Name: Gallery
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

    <section id="intro-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="intro-content">
                        <?php the_field('intro_text_gallery'); ?>
                    </div>
                </div>
                <!-- // col  -->
            </div>
            <!-- // row  -->
        </div>
        <!-- // container  -->
    </section>
    <!-- // intro  -->

    <section id="photo-gallery">
        <div class="container">
            <h2><?php the_field('section_title_gal_page'); ?></h2>
            <?php the_content(); ?>
        </div>
        <!-- // container  -->
    </section>
    <!-- // photo gallery  -->

<?php get_footer(); ?>