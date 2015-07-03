// used for Isotope ajax style filtering of posts

var $j = jQuery.noConflict();

$j( function() {
  // init Isotope
  var $container = $j('#portfolio').isotope({
    itemSelector: '.item',
    layoutMode: 'fitRows'
  });
  
  $j('#filters a').click(function(){
    var selector = $j(this).attr('data-filter');
    $container.isotope({ filter: selector, animationEngine : "css" });
    return false;
  });

});