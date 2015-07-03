var $j = jQuery.noConflict();  

$j(function() {
  $j( "#slider-range-min" ).slider({
    range: "min",
    value: 150,
    min: 0,
    step: 50,
    max: 300,
  });
});


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

$j(function() {
    $j("#slider").slider();

    var startPos = '$("#slider").slider("value");', 
        endPos = '';

    $j("#slider").on("slidestop", function(event, ui) {
        endPos = ui.value;

        if (startPos != endPos) {
            odometer.innerHTML = $j('#slider').slider("option", "value");

            switch(endPos) {
                case 50:
                    $j(".slider_copy").hide();
                    $j("#slider_copy_1").fadeIn();                    
                    break;
                case 100:
                    $j(".slider_copy").hide();
                    $j("#slider_copy_2").fadeIn(); 
                    break;
                case 150:
                    $j(".slider_copy").hide();
                    $j("#slider_copy_3").fadeIn(); 
                    break;
                case 200:
                    $j(".slider_copy").hide();
                    $j("#slider_copy_4").fadeIn(); 
                    break;
                case 250:
                    $j(".slider_copy").hide();
                    $j("#slider_copy_5").fadeIn(); 
                    break;
                case 300:
                    $j(".slider_copy").hide();
                    $j("#slider_copy_6").fadeIn(); 
                    break;
            };
        }

        startPos = endpos;
    });
});
