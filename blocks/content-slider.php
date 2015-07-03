<?php
/**
 * @package WordPress
 * @subpackage Pixeldot
 */
?>

<div class="fixed-width">

	<div id="odometer_container">
		<span class="pound">£</span><div id="odometer" class="odometer">000</div>
	</div>
	 
	<div id="slider-range-min"></div>

	<div id="slider"></div>

	<script>

		window.odometerOptions = {
		  format: '(,ddd).dd', // Change how digit groups are formatted, and how many digits are shown after the decimal point
		  duration: 3000, // Change how long the javascript expects the CSS animation to take
		};

	</script>

<div class="fixed-width slider_copy_cont">
	<div id="slider_copy_1" class="column one slider_copy">
		<p>50 - Lorem ipsum dolor sit amet, ius rebum ullamcorper et, solet dolores ne est, ignota philosophia ne duo. Ius ne iuvaret menandri rationibus. Dicat nulla labitur vim eu, eum ea mutat verear vivendo, his in elaboraret scripserit.</p>
	</div>
	<div id="slider_copy_2" class="column one slider_copy">
	    <p>100 - Lorem ipsum dolor sit amet, ius rebum ullamcorper et, solet dolores ne est, ignota philosophia ne duo. Ius ne iuvaret menandri rationibus. Dicat nulla labitur vim eu, eum ea mutat verear vivendo, his in elaboraret scripserit.</p>	
	</div>
	<div id="slider_copy_3" class="column one slider_copy">
	    <p>150 -Lorem ipsum dolor sit amet, ius rebum ullamcorper et, solet dolores ne est, ignota philosophia ne duo. Ius ne iuvaret menandri rationibus. Dicat nulla labitur vim eu, eum ea mutat verear vivendo, his in elaboraret scripserit.</p>		
	</div>
	<div id="slider_copy_4" class="column one slider_copy">
	    <p>200 -Lorem ipsum dolor sit amet, ius rebum ullamcorper et, solet dolores ne est, ignota philosophia ne duo. Ius ne iuvaret menandri rationibus. Dicat nulla labitur vim eu, eum ea mutat verear vivendo, his in elaboraret scripserit.</p>		
	</div>
	<div id="slider_copy_5" class="column one slider_copy">
	    <p>250 - Lorem ipsum dolor sit amet, ius rebum ullamcorper et, solet dolores ne est, ignota philosophia ne duo. Ius ne iuvaret menandri rationibus. Dicat nulla labitur vim eu, eum ea mutat verear vivendo, his in elaboraret scripserit.</p>		
	</div>
	<div id="slider_copy_6" class="column one slider_copy">
	    <p>300 - Lorem ipsum dolor sit amet, ius rebum ullamcorper et, solet dolores ne est, ignota philosophia ne duo. Ius ne iuvaret menandri rationibus. Dicat nulla labitur vim eu, eum ea mutat verear vivendo, his in elaboraret scripserit.</p>		
	</div>
</div>

<script type="text/javascript">


$j(function() {
    var values = [0, 10, 50, 60, 70, 80, 90, 91, 92, 93, 94, 95, 100];
    var slider = $j("#slider").slider({
    	slide: function(event, ui) {
    		var includeLeft = event.keyCode != $j.ui.keyCode.RIGHT;
    		var includeRight = event.keyCode != $j.ui.keyCode.LEFT;
    		slider.slider('option', 'value', findNearest(includeLeft, includeRight, ui.value));
    		return false;
    	}
    });
    function findNearest(includeLeft, includeRight, value) {
    	var nearest = null;
    	var diff = null;
    	for (var i = 0; i < values.length; i++) {
    		if ((includeLeft && values[i] <= value) || (includeRight && values[i] >= value)) {
    			var newDiff = Math.abs(value - values[i]);
    			if (diff == null || newDiff < diff) {
    				nearest = values[i];
    				diff = newDiff;
    			}
    		}
    	}
    	return nearest;
    }
});

</script>