<?php
/**
 * Template Name: Thank You
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

    <div id="ermac-wrapper">
        <img src="<?php bloginfo('template_directory'); ?>/img/bg/login-bg.png" alt="" class="left-shape">
        <img src="<?php bloginfo('template_directory'); ?>/img/misc/shape-white.png" alt="" class="right-shape">
        <div class="container">
            <div class="ermac-content">
                <span class="title"><?php the_field('small_title_tnx'); ?></span>
                <h1><?php the_field('main_title_tnx'); ?></h1>
                <a href="<?php the_field('button_link_tnx'); ?>" class="btn-cta"><?php the_field('button_label_tnx'); ?></a>
            </div>
            <!-- // content  -->
        </div>
        <!-- // container  -->
    </div>
    <!-- // ermac wrapper  -->

<?php get_footer(); ?>