<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Symbiotica_Starter_Theme
 */

?>

    <div id="newsletter">
        <div class="container">
            <h3 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s"><?php the_field('newsletter_title_nl', 'options'); ?></h3>
            <div class="form-wrapper wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.8s">
                <?php echo do_shortcode('[contact-form-7 id="404" title="Newsletter Form"]'); ?>
            </div>
            <!-- // form wrapper  -->
        </div>
        <!-- // container  -->
    </div>
    <!-- // newsletter  -->
	
    <footer id="page-footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-12">
                    <div class="footer-branding wow fadeIn">
                        <img src="<?php the_field('footer_logo', 'options'); ?>" alt="">
                        <div class="footer-about">
                            <a href="tel:<?php the_field('phone_number_general', 'options'); ?>" class="btn-tel"><img src="<?php bloginfo('template_directory'); ?>/img/ico/phone-call.svg" alt=""> <?php the_field('phone_number_general', 'options'); ?></a>
                        </div>
                    </div>
                </div>
                <!-- // col lg 3  -->

                <div class="col-lg-8 col-md-12">
                    <div class="row">

                        <div class="col-lg-5 col-md-6">
                            <div class="footer-card wow fadeIn" data-wow-duration="0.3s" data-wow-delay="0.3s">
                                <span class="title"><?php the_field('block_1_title', 'options'); ?></span>
                                <?php wp_nav_menu( array( 'theme_location' => 'sitemap_menu' ) ); ?>
                            </div>
                        </div>
                        <!-- // card  -->

                        <div class="col-lg-7 col-md-6">
                            <div class="footer-card wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.7s">
                                <span class="title"><?php the_field('block_2_title', 'options'); ?></span>
                                <?php wp_nav_menu( array( 'theme_location' => 'services_menu' ) ); ?>
                            </div>
                        </div>
                        <!-- // card  -->                

                    </div>
                    <!-- // row  -->
                </div>
                <!-- // col  -->

            </div>
            <!-- // row  -->
            <div id="copy-bar" class="wow fadeInUp">
                <small><?php the_field('copyright_text', 'options'); ?></small>
            </div>
            <!-- // copy bar  -->
        </div>
        <!-- // container  -->
    </footer>
    <!-- // foote  -->

    <div id="float-cta">
        <a href="#top"><img src="<?php bloginfo('template_directory'); ?>/img/ico/up-arrow.svg" alt=""></a>
    </div>
    <!-- // float cta  -->

    <div id="float-phone">
        <a href="tel:<?php the_field('phone_number_general', 'options'); ?>" class="btn-tel"><img src="<?php bloginfo('template_directory'); ?>/img/ico/phone-call.svg" alt=""> </a>
    </div>
    <!-- // phone  -->

<?php wp_footer(); ?>

<?php the_field('footer_snippet', 'options'); ?>

<script>
  wow = new WOW(
    {
    mobile: false,       // default
    }
    )
    wow.init();    
</script>

