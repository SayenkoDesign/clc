<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package clc
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'clc' ); ?></a>
		<header id="masthead" class="site-header" role="banner">
			<div class="row expanded">
				<div class="row">
					<div class="column small-10 medium-4 large-3 large-offset-1">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri() . '/images/clc-logo.png'; ?>" alt="Covenant Love Community"></a>

					</div>
					<div class="column show-for-medium medium-8 large-7" style="float:left;">
						<nav>
							<?php wp_nav_menu( array( 
				            'theme_location' => 'primary',
				            'items_wrap' => '<ul class="header-nav menu">%3$s</ul>'
				                ) ); ?>
						</nav><!-- #site-navigation -->
		            </div>
	                <div class="columns small-2 hide-for-medium title-bar" data-responsive-toggle="mobile-menu" data-hide-for="large">
			        	<button class="menu-icon" type="button" data-toggle></button>
			        </div>

			        <nav class="hide-for-medium" id="mobile-menu">
			            <ul class="menu vertical" data-accordion-menu data-disable-hover="true" data-click-open="true" data-force-follow="true">
			                <?php wp_nav_menu( array( 
			                'menu' => 'primary-mobile',
			                'container' => '',
			                'menu_class' => 'vertical menu', 
			                'container_id' => 'primary-mobile-navigation',
			                'items_wrap' => '%3$s',
			                'depth' => 2
			            ) ); ?>
			            </ul>
			        </nav>
					</div><!-- column -->
				</div><!-- row -->
			</div><!-- row expanded -->
		</header><!-- #masthead -->
	<div id="content" class="site-content">
