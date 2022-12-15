<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Symbiotica_Starter_Theme
 */

get_header();
?>

    <header id="inner-header" class="header-blog">
        <img src="<?php bloginfo('template_directory'); ?>/img/bg/login-bg.png" alt="" class="left-shape">
        <img src="<?php bloginfo('template_directory'); ?>/img/misc/shape-white.png" alt="" class="right-shape">        
        <div class="container">
            <div class="header-caption">
                <span class="h1"><?php the_field('hero_title_blog' , get_option('page_for_posts')); ?></span>
            </div>
            <!-- // caption  -->
        </div>
        <!-- // container  -->
    </header>
    <!-- // header  -->

    <section id="blog-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <article id="blog-content">

                        <div class="metas">
                            <span class="date"><?php echo get_the_date( 'F j, Y' ); ?></span>
                        </div>
                        <!-- // metas  -->

                        <header>
                            <h1><?php the_title(); ?></h1>
                        </header>
                        <!-- // header  -->

                        <div class="full-content">
                            <?php the_content(); ?>
                        </div>  
                        <!-- // full  -->

                        <div id="blog-nav">

                            <?php if (strlen(get_previous_post()->post_title) > 0) { ?>
                            <div class="nav-prev"><?php previous_post_link('%link', '%title'); ?></div>
                            <?php } ?>

                            <?php if (strlen(get_next_post()->post_title) > 0) { ?>
                            <div class="nav-next"> <?php next_post_link('%link', '%title'); ?></div>
                            <?php } ?>

                        </div>
                        <!-- // nav  -->

                    </article>
                    <!-- // blog  -->
                </div>
            </div>
            <!-- // col  -->
        </div>
        <!-- // container  -->
    </section>
    <!-- // blog single  -->

    <div id="related-articles">
        <div class="container">
            <header>
                <h3>LATEST ARTICLES</h3>
            </header>
            <!-- // header  -->
            <div class="row">
                
                <?php
                    $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1; // get current page number
                    $args = array(
                        'posts_per_page' => 2, // the value from Settings > Reading by default
                        'paged'          => $current_page // current page
                    );
                    query_posts( $args );
                    
                    $wp_query->is_archive = true;
                    $wp_query->is_home = false;
                    
                    while(have_posts()): the_post(); ?>
                                        
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
                    
                    <?php endwhile; ?>

            </div>
            <!-- // row  -->
        </div>
        <!-- // container  -->
    </div>
    <!-- // related  -->

<?php
get_footer();
