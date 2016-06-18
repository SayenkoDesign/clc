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


<div class="row expanded">
    <div id="map"></div>
</div>
<!--<script>
  function initMap() {
    var mapDiv = document.getElementById('map');
    var map = new google.maps.Map(mapDiv, {
      center: {lat: 42.4820137, lng: -76.3719075},
      zoom: 15
    });
    var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
	/*var marker = new google.maps.Marker({
	  position: {lat: 42.4820137, lng: -76.3719075},
	  map: map,
	  icon: '<?php //echo get_template_directory_uri() . '/images/clc-marker.png'; ?>'
	});*/
  }
</script>
<script src="https://maps.googleapis.com/maps/api/js?callback=initMap"
    async defer></script>
 -->

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
