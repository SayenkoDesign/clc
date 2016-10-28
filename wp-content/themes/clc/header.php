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
					<div class="column medium-4 large-3 large-offset-1">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri() . '/images/clc-logo.png'; ?>" alt="Covenant Love Community"></a>

					</div>
					<div class="column medium-8 large-7" style="float:left;">
						<nav>
							<?php wp_nav_menu( array( 
				            'theme_location' => 'primary',
				            'items_wrap' => '<ul class="header-nav menu">%3$s</ul>'
				                ) ); ?>
						</nav><!-- #site-navigation -->
					</div><!-- column -->
				</div><!-- row -->
			</div><!-- row expanded -->
		</header><!-- #masthead -->
	<div id="content" class="site-content">
