<?php
/**
 * Template Name: Pricing
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
                        <?php the_field('intro_content_pricing'); ?>
                    </div>
                </div>
                <!-- // col  -->
            </div>
            <!-- // row  -->
        </div>
        <!-- // container  -->
    </section>
    <!-- // intro  -->

    <section id="pricing-wrapper">
        <div class="container">
            <div class="row">
                <?php if( have_rows('content_blocks_pricing') ): ?>
                    <?php while( have_rows('content_blocks_pricing') ): the_row(); ?>

                        <div class="col-lg-4 col-md-6">
                            <div class="pricing-card">
                                <div class="card-icon">
                                    <img src="<?php the_sub_field('icon'); ?>" alt="">
                                </div>
                                <!-- // icon  -->
                                <div class="pricing-desc">
                                    <h3><?php the_sub_field('title'); ?></h3>
                                    <?php the_sub_field('content_block'); ?>
                                </div>
                                <!-- // desc  -->
                                <div class="card-overlay">
                                    <div class="card-caption">
                                        <h4><?php the_sub_field('title'); ?></h4>
                                        <a href="<?php the_sub_field('button_link'); ?>" class="btn-cta"><?php the_sub_field('button_label'); ?></a>
                                    </div>
                                    <!-- // caption  -->
                                </div>
                                <!-- // overlay  -->
                            </div>
                        </div>
                        <!-- // card  -->

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <!-- // row  -->
        </div>
        <!-- // container  -->
    </section>
    <!-- // pricing wrapper  -->

    <div id="extra-info">
        <div class="container">
            <header>
                <h2><?php the_field('section_title_extra_pricing'); ?></h2>
            </header>
            <!-- // header  -->
            <div class="extra-wrapper">
                <div class="content-block">
                    <?php the_field('left_column_content_extra'); ?>
                </div>
                <!-- // col  -->
                <div class="content-block">
                    <?php the_field('right_column_content_extra'); ?>
                </div>
            </div>
            <!-- // row  -->
        </div>
    </div>
    <!-- // extra  -->

    <div id="partners">
        <div class="container">
            <header>
                <h2><?php the_field('section_title_partners_extra'); ?></h2>
            </header>
            <!-- // heaer  -->
            <div class="partners-list">
                <?php if( have_rows('partners_list_extra') ): ?>
                    <?php while( have_rows('partners_list_extra') ): the_row(); ?>

                        <div class="partner-logo">
                            <div class="item">
                                <img src="<?php the_sub_field('logo'); ?>" alt="">
                            </div>
                        </div>
                        <!-- // logo  -->

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <!-- // list  -->
        </div>
        <!-- // container  -->
    </div>
    <!-- // partners  -->

<?php get_footer(); ?>