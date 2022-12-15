<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Symbiotica_Starter_Theme
 */

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
    
    <section id="regular-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="content-block">
                        <?php the_content(); ?>
                    </div>
                </div>
                <!-- // content block  -->
            </div>
            <!-- // row  -->
        </div>
        <!-- // container  -->
    </section>
    <!-- // regular page  -->

<?php
get_footer(); ?>