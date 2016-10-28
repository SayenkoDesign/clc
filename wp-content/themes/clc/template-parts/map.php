<div class="row expanded">
    <div id="map"></div>
</div>

<script>
  function initMap() {
    var mapDiv = document.getElementById('map');
    var map = new google.maps.Map(mapDiv, {
      center: {lat: 42.4820137, lng: -76.3719075},
      zoom: 15
    });
    var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
	var marker = new google.maps.Marker({
	  position: {lat: 42.4820137, lng: -76.3719075},
	  map: map
	});
  }
</script>
<script src="https://maps.googleapis.com/maps/api/js?callback=initMap"
    async defer></script>