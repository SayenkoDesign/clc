<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package clc
 */

?>

	</div><!-- #content -->


<?php 
if(is_front_page())
	require_once( 'template-parts/map.php' );
?>

	<footer id="colophon" class="site-footer" role="contentinfo">	<div class="row expanded">	
		<div class="row">
			<div class="column medium-5">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri() . '/images/clc-logo.png'; ?>" alt="Covenant Love Community"></a>
			</div>
			<div class="column medium-7">
				<?php wp_nav_menu( array( 
	            'theme_location' => 'primary',
	            'items_wrap' => '<ul class="footer-nav menu">%3$s</ul>'
	                ) ); ?>
			</div><!-- column -->
		</div><!-- row -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
