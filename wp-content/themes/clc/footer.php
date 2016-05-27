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

	<footer id="colophon" class="site-footer" role="contentinfo">	<div class="row expanded">	
		<div class="row">
			<div class="column">
					<div class="site-info">
						<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'clc' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'clc' ), 'WordPress' ); ?></a>
						<span class="sep"> | </span>
						<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'clc' ), 'clc', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
					</div><!-- .site-info -->
				</div><!-- column -->
			</div><!-- row -->
		</div>
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
