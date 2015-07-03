<?php
/**
 * @package WordPress
 * @subpackage Pixeldot
 */
?>
<!-- IMPORTANT: use <?php //include(locate_template('blocks/content-map.php')); ?>  -->
<!-- to get this template so variable can be passed to it -->

<?php if( ! empty($location) ): ?>
<!-- Map area -->
<div id="<?php echo $map_id ?>" class="map <?php echo $width ?>"></div>

	<script type="text/javascript">
	  //<![CDATA[
	  function load() {
	  var lat = <?php echo $location['lat']; ?>;
	  var lng = <?php echo $location['lng']; ?>; 
	// coordinates to latLng
	  var latlng = new google.maps.LatLng(lat, lng);
	// map Options
	  var myOptions = {
		  zoom: <?php echo $zoom ?>,
		  center: latlng,
		  mapTypeId: google.maps.MapTypeId.ROADMAP,

		  <?php if( $disable_all  == "true") : ?>
		  		disableDefaultUI: <?php echo $disable_all ?>,
		  <?php else : ?>
				mapTypeControl: <?php echo $control_type ?>,
				zoomControl: <?php echo $allow_zoom ?>,
				panControl: <?php echo $allow_pan ?>,
				streetViewControl: <?php echo $allow_street ?>,
		  <?php endif ?>
	   };
	//draw a map
	  var map = new google.maps.Map(document.getElementById("<?php echo $map_id ?>"), myOptions);
	  var marker = new google.maps.Marker({
	  position: map.getCenter(),
	  map: map
	   });
	  google.maps.event.trigger(map, 'resize');
	}
	// call the function
	   load();
	//]]>
	</script>

<?php endif; ?> 