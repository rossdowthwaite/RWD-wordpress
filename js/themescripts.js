// JavaScript Document

// Carousel
// alert('sdfsdfsdf');
// $(document).ready(function(){
//   $('#carousel').bxSlider({
//   	auto:true,
// 	mode:'fade'
//   });
// });

// Mobile navigation

var $j = jQuery.noConflict();

$j(function() {
  $j("span#mobile-nav").click(function () {
      $j("nav .nav").toggleClass("visi-nav");
    });
});

// Clearit

jQuery(document).ready(function() {
	jQuery.fn.cleardefault = function() {
	return this.focus(function() {
		if( this.value == this.defaultValue ) {
			this.value = "";
		}
	}).blur(function() {
		if( !this.value.length ) {
			this.value = this.defaultValue;
		}
	});
};
jQuery(".clearit input, .clearit textarea, input.clearit").cleardefault();

});

// Page scroll

jQuery(function() {
	$j('a.scroll-link').bind('click',function(event){
		var $anchor = $j(this);
		$j('html, body').stop().animate({
			scrollTop: $j($anchor.attr('href')).offset().top
		}, 1000);
		event.preventDefault();
	});
});

$j(document).ready(function() {
    var heightcheck = $j(window).height();
    var heroheight = (heightcheck);
    $j(function(){
        $j('#content .not_found') .css({'height': (heroheight - 200)+'px'});
    });
});

$j(window).resize(function() {
    var heightcheck = $j(window).height();
    var heroheight = (heightcheck);
    $j(function(){
        $j('#content .not_found') .css({'height': (heroheight - 200)+'px'});
    });
});


// odometer.innerHTML = $j('#slider-range-min').slider("option", "value");

