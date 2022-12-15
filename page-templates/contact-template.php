<?php
/**
 * Template Name: Contact
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
                    <div class="form-intro form-intro--contact">
                        <h2><?php the_field('block_title_form_contact'); ?></h2>
                        <?php the_field('content_block_book_contact'); ?>
                    </div>
                </div>
                <!-- // intro  -->

                <div class="col-lg-7">
                    <div class="form-wrapper">
                        <?php the_field('form_code_contact'); ?>
                    </div>
                </div>
                <!-- // form  -->

            </div>
            <!-- // row  -->
        </div>
        <!-- // row  -->
    </div>
    <!-- // form  -->

    <div id="contact-map">
        <?php the_field('map_code_contact'); ?>
    </div>
    <!-- // map  -->

<?php get_footer(); ?>