<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Symbiotica_Starter_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="icon" type="image/png"  href="<?php echo get_template_directory_uri(); ?>/img/ico/favicon.png">
	<?php the_field('head_snippet', 'options'); ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<?php the_field('body_snippet', 'options'); ?>

	<div id="top"></div>

	<div class="menu-overlay"></div>

	<div class="main-menu-sidebar visible-xs visible-sm visible-md" id="menu">

		<header>
			<a href="javascript:;" class="close-menu-btn"><img src="<?php bloginfo('template_directory'); ?>/img/ico/close-white.svg" alt=""></a>
		</header>
		<!-- // header  -->

		<nav id="sidebar-menu-wrapper">
			<div id="menu">    
				<ul class="nav-links">
					<?php
					wp_nav_menu( array(
						'menu'              => 'primary_menu',
						'theme_location'    => 'primary_menu',
						'depth'             => 2,
						'container'         => false,
						'container_class'   => 'collapse navbar-collapse',
						'container_id'      => false,
						'menu_class'        => 'nav navbar-nav',
						'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						'items_wrap' => '%3$s',
						'walker'            => new wp_bootstrap_navwalkermobile())
					);
					?>  
				</ul>
			</div>
			<!-- // menu  -->
		</nav> 
		<!-- // sidebar menu wrapper  -->
	</div>
	<!-- // main menu sidebar  -->	

	<div id="top-bar">
		<div class="container">

			<div class="top-bar--branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php the_field('website_logo', 'options'); ?>" alt=""></a>
			</div>
			<!-- // branding  -->

			<div class="top-bar--nav">
				<?php wp_nav_menu( array( 'theme_location' => 'primary_menu' ) ); ?>
				<a href="tel:<?php the_field('phone_number_general', 'options'); ?>" class="btn-tel"><?php the_field('phone_number_general', 'options'); ?></a>
			</div>
			<!-- // nav  -->

			<div id="mobile-cta">
				<a href="<?php the_field('link_to_page_mob_cta', 'options'); ?>"><img src="<?php the_field('button_icon_mobile','options'); ?>" alt=""></a>
			</div>
			<!-- // cta  -->

			<div id="mobile-menu--btn" class="d-xl-none">
				<a href="javascript:;">
					<span></span>
					<span></span>
					<span></span>
					<div class="clearfix"></div>
				</a>
			</div>
			<!-- // mobile  -->					

		</div>
		<!-- // container  -->
	</div>
	<!-- // top bar  -->