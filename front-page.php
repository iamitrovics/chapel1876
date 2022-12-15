<?php get_header(); ?>

    <header id="hero-banner">
        <div id="hero-slider">
            <?php if( have_rows('hero_slider') ): ?>
            <?php while( have_rows('hero_slider') ): the_row(); ?>

                <div class="hero-slide">
                    <div class="overlay"></div>
                    <?php
                    $imageID = get_sub_field('featured_image');
                    $image = wp_get_attachment_image_src( $imageID, 'hero-image' );
                    $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                    ?> 

                    <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" />                     
                </div>
                <!-- // slide  -->

            <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <!-- // slider  -->
        <div class="hero-caption">
            <img src="<?php the_field('hero_logo'); ?>" alt="" class="wow fadeIn" data-wow-duration="0.7s" data-wow-delay="0.5s">
            <h1 class="wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.7s"><?php the_field('hero_title_home'); ?></h1>
        </div>
        <!-- // caption  -->
    </header>
    <!-- // banner  -->

    <section id="intro">
        <img src="<?php bloginfo('template_directory'); ?>/img/bg/login-bg.png" alt="" class="shape-bottom">
        <div class="container">
            <h2 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s"><?php the_field('section_title_intro_home'); ?></h2>
            <div class="text wow fadeInUp" data-wow-duration="0.7s" data-wow-delay="0.8s">
                <?php the_field('intro_content_home_intro'); ?>
            </div>
            <!-- // text  -->
        </div>
        <!-- // container  -->
    </section>
    <!-- // intro  -->

    <div id="featured">
        <div class="container">
            <img src="<?php bloginfo('template_directory'); ?>/img/bg/top-shape.png" alt="" class="top-shape">
            <div class="content-block wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                <?php the_field('content_block_left'); ?>
            </div>
            <!-- // content block  -->
            <div class="featured-image wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                <?php
                $imageID = get_field('featured_image_middle');
                $image = wp_get_attachment_image_src( $imageID, 'half-image' );
                $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                ?> 

                <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
            </div>
            <!-- // image  -->
            <div class="content-block wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.9s">
                <?php the_field('content_block_right'); ?>
            </div>
            <!-- // block   -->
        </div>
        <!-- // container  -->
    </div>
    <!-- // featured  -->

    <div id="gallery">
        <div class="container">
            <div class="row">
                <?php 
                $images = get_field('photo_gallery');
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
                <a href="<?php the_field('button_link_cta_gal'); ?>" class="btn-cta"><?php the_field('button_label_gallery_cta'); ?></a>
            </footer>
        </div>
        <!-- // container  -->
    </div>
    <!-- // gallery  -->

    <section id="about">
        <div class="container">

            <div class="about-text">
                <h2 class="wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.5s"><?php the_field('block_title_about_home'); ?></h2>
                <div class="wow fadeInUp" data-wow-duration="0.7s" data-wow-delay="0.7s">
                    <?php the_field('content_block_about_home'); ?>
                </div>
                <a href="<?php the_field('button_link_about_home'); ?>" class="btn-cta btn-purple wow fadeInUp" data-wow-duration="0.7s" data-wow-delay="0.9s"><?php the_field('button_label_about_home'); ?></a>
            </div>
            <!-- // about text  -->

            <div class="about-image">
                <span class="top-shape wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.8s"></span>
                <?php
                $imageID = get_field('featured_image_about');
                $image = wp_get_attachment_image_src( $imageID, 'half-image' );
                $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                ?> 

                <img class="img-responsive wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.5s" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                <span class="bottom-shape wow fadeInDown" data-wow-duration="0.8s" data-wow-delay="0.5s"></span>
            </div>
            <!-- // image  -->

        </div>
        <!-- //  container  -->
    </section>
    <!-- // about  -->

    <section id="reviews">
        <div class="container">
            <h3 class="wow fadeInDown" data-wow-duration="0.8s" data-wow-delay="0.5s"><?php the_field('section_title_reviews'); ?></h3>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <img src="<?php bloginfo('template_directory');  ?>/img/ico/left-quotes-sign.svg" alt="" class="icon wow fadeIn">
                    <div id="reviews-slider">
                        <?php
                            $post_objects = get_field('reviews_list_home');

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

    <div id="contact-us">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 offset-lg-3 col-md-9">
                    <div class="contact-image">
                        <img src="<?php bloginfo('template_directory'); ?>/img/misc/left-shape.png" alt="" class="shape-left wow fadeIn" data-wow-duration="0.4s" data-wow-delay="0.5s">
                        <img src="<?php bloginfo('template_directory'); ?>/img/misc/right-shape.png" alt="" class="shape-right wow fadeIn" data-wow-duration="0.7s" data-wow-delay="0.7s">
                        <?php
                        $imageID = get_field('featured_image_contact');
                        $image = wp_get_attachment_image_src( $imageID, 'half-image' );
                        $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                        ?> 

                        <img class="img-responsive wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                    </div>
                </div>
                <!-- // image  -->

                <div class="col-lg-3 col-md-3">
                    <div class="content-block wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.8s">
                        <?php the_field('content_block_contact_home'); ?>
                    </div>
                </div>
                <!-- // block  -->

            </div>
            <!-- // row  -->
            <footer class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
                <a href="<?php the_field('button_link_contact_home'); ?>" class="btn-more"><?php the_field('button_label_contact_home'); ?></a>
            </footer>
        </div>
        <!-- // container  -->
    </div>
    <!-- // contact us  -->

    <div id="bottom-featured">
        <div class="container">
            <div class="row">
            <?php if( have_rows('featured_blocks_home') ): ?>
            <?php $i=3; ?>
            <?php while( have_rows('featured_blocks_home') ): the_row(); ?>

                <div class="col-lg-4 col-md-4">
                    <div class="feature-card wow fadeInUp" data-wow-duration="0.<?php echo $i; ?>s" data-wow-delay="0.<?php echo $i; ?>s">
                    <?php
                    $imageID = get_sub_field('featured_image');
                    $image = wp_get_attachment_image_src( $imageID, 'feat-image' );
                    $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                    ?> 

                    <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" />                         
                        <div class="card-caption">
                            <h3><?php the_sub_field('title'); ?></h3>
                            <a href="<?php the_sub_field('button_link'); ?>" class="btn-more"><?php the_sub_field('button_label'); ?></a>
                        </div>
                        <!-- // caption  -->
                    </div>
                </div>
                <!-- // card  -->

            <?php $i++; $i++; endwhile; ?>
            <?php endif; ?>
            </div>
            <!-- // row  -->
        </div>
        <!-- // container  -->
    </div>
    <!-- // bottom featured  -->

<?php get_footer(''); ?>