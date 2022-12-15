<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Symbiotica_Starter_Theme
 */

get_header();
?>

    <div id="ermac-wrapper">
        <img src="<?php bloginfo('template_directory'); ?>/img/bg/login-bg.png" alt="" class="left-shape">
        <img src="<?php bloginfo('template_directory'); ?>/img/misc/shape-white.png" alt="" class="right-shape">
        <div class="container">
            <div class="ermac-content">
                <span class="title"><?php the_field('small_title_ermac', 'options'); ?></span>
                <h1><?php the_field('main_title_ermac', 'options'); ?></h1>
                <?php the_field('content_block_ermac', 'options'); ?>
                <a href="<?php the_field('button_link_ermac', 'options'); ?>" class="btn-cta"><?php the_field('button_label_ermac', 'options'); ?></a>
            </div>
            <!-- // content  -->
        </div>
        <!-- // container  -->
    </div>
    <!-- // ermac wrapper  -->
   
<?php
get_footer();
?>