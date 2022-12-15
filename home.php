<?php
/**
 * Home Blog template
 *
 * Post Listing
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
                <h1><?php the_field('hero_title_blog' , get_option('page_for_posts')); ?></h1>
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
                        <?php the_field('intro_block_blog' , get_option('page_for_posts')); ?>
                    </div>
                </div>
                <!-- // col  -->
            </div>
            <!-- // row  -->
        </div>
        <!-- // container  -->
    </section>
    <!-- // intro  -->

    <section id="blog-listing">

    <?php if ( !is_paged() ) { ?>

    <?php } ?>
            
        <div class="container blog-container">
                <div class="row">


                <?php

                    $current_page = get_query_var('paged');
                    $current_page = max( 1, $current_page );

                    $per_page = 8;
                    $offset_start = 1;
                    $offset = ( $current_page - 1 ) * $per_page + $offset_start;

                    $post_list = new WP_Query(array(
                        'posts_per_page' => $per_page,
                        'paged'          => $current_page,
                        // 'offset'         => $offset, // Starts with the second most recent post.
                        'orderby'        => 'date',  // Makes sure the posts are sorted by date.
                        'order'          => 'DESC',  // And that the most recent ones come first.
                    ));

                    // Manually count the number of pages, because we used a custom OFFSET (i.e.
                    // other than 0), so we can't simply use $post_list->max_num_pages or even
                    // $post_list->found_posts without extra work/calculation.
                    $total_rows = max( 0, $post_list->found_posts - $offset_start );
                    $total_pages = ceil( $total_rows / $per_page );

                    if ( $post_list->have_posts() ):
                        $counter = 1;
                        while ( $post_list->have_posts() ):
                            $post_list->the_post(); ?>

                    <?php if($counter == 3) { ?>

                    <div class="col-lg-4 col-md-4">
                        <article class="blog-article">

                            <div class="blog-article__image">
                                <img class="img-responsive" src="<?php the_post_thumbnail_url( 'full' ); ?>" />
                                <div class="metas">
                                    <span><?php
                                    global $post;
                                    $categories = get_the_category($post->ID);
                                    $cat_link = get_category_link($categories[0]->cat_ID);
                                    echo '<a href="'.$cat_link.'">'.$categories[0]->cat_name.'</a>' 
                                    ?></span>
                                </div>
                                <!-- // metas  --> 
                            </div>
                            <!-- // image  -->

                            <div class="blog-article__content">     
                                <span class="date"><?php echo get_the_date( 'F j, Y' ); ?></span>                          
                                <h3><a href="<?php echo get_permalink(); ?>"><?php the_title(''); ?></a></h3>
                                <a href="<?php echo get_permalink(); ?>" class="btn-more">LEARN MORE</a>
                            </div>
                            <!-- // content  -->
                        </article>
                        <!-- // article  -->
                    </div>
                    <!-- // col  -->    

                    </div>
                    </div>
    

                    <div class="container">
                        <div class="blog-cta">
                            <h2>Wedding Venue & Special Event Center</h2>
                            <a href="#" class="btn-cta">Book now</a>
                        </div>
                        <!-- // blog cta  -->     
                    </div>
                    <!-- // container  -->

                        
                    <div class="container">
                    <div class="row">


                    <?php } elseif($counter == 4 OR $counter == 5 ) { ?>


                    <div class="col-lg-6 col-md-6">
                        <article class="blog-article">

                            <div class="blog-article__image image__large">
                                <img class="img-responsive" src="<?php the_post_thumbnail_url( 'full' ); ?>" />
                                <div class="metas">
                                    <span><?php
                                    global $post;
                                    $categories = get_the_category($post->ID);
                                    $cat_link = get_category_link($categories[0]->cat_ID);
                                    echo '<a href="'.$cat_link.'">'.$categories[0]->cat_name.'</a>' 
                                    ?></span>
                                </div>
                                <!-- // metas  --> 
                            </div>
                            <!-- // image  -->

                            <div class="blog-article__content">     
                                <span class="date"><?php echo get_the_date( 'F j, Y' ); ?></span>                          
                                <h3><a href="<?php echo get_permalink(); ?>"><?php the_title(''); ?></a></h3>
                                <a href="<?php echo get_permalink(); ?>" class="btn-more">LEARN MORE</a>
                            </div>
                            <!-- // content  -->
                        </article>
                        <!-- // article  -->
                    </div>
                    <!-- // col  -->    

                    <?php } else { ?>

                    <div class="col-lg-4 col-md-4">
                        <article class="blog-article">

                            <div class="blog-article__image">
                                <img class="img-responsive" src="<?php the_post_thumbnail_url( 'medium' ); ?>" />
                                <div class="metas">
                                    <span><?php
                                    global $post;
                                    $categories = get_the_category($post->ID);
                                    $cat_link = get_category_link($categories[0]->cat_ID);
                                    echo '<a href="'.$cat_link.'">'.$categories[0]->cat_name.'</a>' 
                                    ?></span>
                                </div>
                                <!-- // metas  --> 
                            </div>
                            <!-- // image  -->

                            <div class="blog-article__content">     
                                <span class="date"><?php echo get_the_date( 'F j, Y' ); ?></span>                          
                                <h3><a href="<?php echo get_permalink(); ?>"><?php the_title(''); ?></a></h3>
                                <a href="<?php echo get_permalink(); ?>" class="btn-more">LEARN MORE</a>
                            </div>
                            <!-- // content  -->
                        </article>
                        <!-- // article  -->
                    </div>
                    <!-- // col  -->    


                    <?php
                    } ?>

                

            <?php  $counter++; endwhile; ?>
        </div>


            <nav class="pagination-block">
            <?php if( function_exists('wp_pagenavi') ) wp_pagenavi(); // WP-PageNavi function ?>
            </nav>  

        <?php endif;
        wp_reset_postdata();
        ?>

    </section>
    <!-- // blog listing  -->

<?php
get_footer();
